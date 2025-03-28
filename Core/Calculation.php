<?php
declare(strict_types=1);

namespace Core;

class Calculation implements \Interfaces\Interfaces {
    public function calculateHours(\DateInterval $interval, array $hoursByPeriods, int $annualSpent): array {
        $endperiod = (int)explode('-', array_key_last($hoursByPeriods))[1];
        $age = $interval->y;
        $additionalDays = $age >= $endperiod ? 0 : $interval->m * $annualSpent/12 + $interval->d;
        $totalHours = 0;
        $avgWorkSpan = 0;
        $additionalDayHours = 0;

        foreach($hoursByPeriods as $range => $hoursPerDay) {
            [$periodStart, $periodEnd] = array_map('floatval', explode('-', $range));
            $avgYears = $periodEnd - $periodStart;
            $avgWorkSpan += $annualSpent * $avgYears * $hoursPerDay;

            if ($age >= $periodStart) { 
                $years = min($age, $periodEnd) - $periodStart;
                $totalHours += $annualSpent * $years * $hoursPerDay;
                $additionalDayHours = $hoursPerDay;
            }
        }
        $totalHours += $additionalDayHours * $additionalDays;
        $leftWorkHours = $avgWorkSpan - $totalHours;

        return [
            "Done" => round($totalHours, 2),
            "Left" => round($leftWorkHours, 2),
            "avgTotal" => $avgWorkSpan,
        ];
    }
}
