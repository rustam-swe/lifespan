<?php
    declare(strict_types=1);

    namespace Controllers;

    class Study implements \Interfaces\Interfaces {

        public function calculateHours($age, $hoursByPeriods, $annualSpent) {
            
            $totalHours = 0;

            if ($age >= 18) {
                foreach ($hoursByPeriods as $range => $hoursPerDay) {

                    [$periodStart, $periodEnd] = explode('-', $range . '-');
                    
                    if ($age > $periodStart) {
                        $years = min($age, $periodEnd) - $periodStart;
                        $totalHours += $annualSpent * $years*$hoursPerDay;
                    }
                }
            }
            
            $avgWorkSpan = $annualSpent * (4 * 6 + 8 * 29 + 7 * 9 + 5 * 10);
            $leftWorkHours = $avgWorkSpan - $totalHours;
            
            return [
                "worked" => $totalHours,
                "leftWork" => $leftWorkHours,
                "avgTotal" => $avgWorkSpan
            ];
        }
    }
?>
