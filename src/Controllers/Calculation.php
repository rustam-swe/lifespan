<?php
    declare(strict_types=1);

    namespace App\Controllers;

    class Calculation implements \Interfaces\Interfaces {
        
        public function calculateHours($interval, $hoursByPeriods, $annualSpent) {
            
            $age                = $interval->y;
            $additionalDays     = $age>=75 ? 0 : $interval->m * $annualSpent/12 + $interval->d;             // work days in a month (12 months in a year)
            $totalHours         = 0;
            $avgWorkSpan        = 0;
            $additionalDayHours = 0;

            foreach($hoursByPeriods as $range => $hoursPerDay) {

                [$periodStart, $periodEnd] = explode('-', $range . '-');
                $avgYears = $periodEnd - $periodStart;
                    
                $avgWorkSpan += $annualSpent * $avgYears * $hoursPerDay;
                    
                if ($age > $periodStart) {
                    $years = min($age, $periodEnd) - $periodStart;
                    $totalHours += $annualSpent * $years*$hoursPerDay;
                    $additionalDayHours = $hoursPerDay;
                }
            } 
            $totalHours += $additionalDayHours * $additionalDays;         
            $leftWorkHours = $avgWorkSpan - $totalHours;
            
            return [
                "Done"     => round($totalHours, 2),
                "Left"     => round($leftWorkHours, 2),
                "avgTotal" => $avgWorkSpan,
            ];
        }
    }
    // 122 years  164 days