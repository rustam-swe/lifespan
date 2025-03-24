<?php
declare(strict_types=1);

    namespace App\Controllers;

    class Calculation implements \Interfaces\Interfaces {
        
        public function calculateHours($interval, $hoursByPeriods, $annualSpent) {
            
            $age = $interval->y;
            $additionalDays = $interval->m * 21 + $interval->d;             // 21 work days in a month
            $totalHours = 0;
            $avgWorkSpan = 0;
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
                "Done" => $totalHours,
                "Left" => $leftWorkHours,
                "avgTotal" => $avgWorkSpan,
            ];
        }
    }
