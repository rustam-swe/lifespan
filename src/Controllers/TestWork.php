<?php
    declare(strict_types=1);
    namespace App\Controllers;

    class TestWork implements \Interfaces\Interfaces {

        /*
        $hoursByPeriods = [          
            '18' => 4,
            '25' => 8,
            '55' => 7,
            '65' => 5
         ];*/
        
        public function calculateHours($age, $hoursByPeriods, $annualSpent) {
            
            $periods=array_keys($hoursByPeriods);
            $totalHours = 0;
            $avgWorkSpan = 0;

            foreach ($hoursByPeriods as $range => $hoursPerDay) {

                $next_range = $periods[array_search($range, $periods)+1];
                $end_range = $next_range==0 ? 75 : $next_range-1;

                if ($age > $range) {
                    $years = min($age, $end_range) - $range;
                    $totalHours += $annualSpent * $years*$hoursPerDay;
                }
                $avgWorkSpan +=$annualSpent * $hoursPerDay * ($end_range - $range);
            }
            $leftWorkHours = $avgWorkSpan - $totalHours;
            
            return [
                "Done" => $totalHours,
                "Left" => $leftWorkHours,
                "avgTotal" => $avgWorkSpan
            ];
        }
    }
?>   

