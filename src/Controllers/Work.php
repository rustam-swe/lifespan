<?php
    declare(strict_types=1);

    namespace App\Controllers;

    class Work implements \Interfaces\Interfaces {

        /*
        $hoursByPeriods = [          
            '18-24' => 4,
            '25-54' => 8,
            '55-64' => 7,
            '65-75' => 5
        ];*/
        
        public function calculateHours($age, $hoursByPeriods, $annualSpent) {
            
            $totalHours = 0;

            if ($age >= 18) {
                foreach ($hoursByPeriods as $range => $hoursPerDay) {

                    [$periodStart, $periodEnd] = explode('-', $range . '-');
                    $avgYears = $periodEnd - $periodStart;
                    
                    $avgWorkSpan += $annualSpent * $avgYears * $hoursPerDay;
                    
                    if ($age > $periodStart) {
                        $years = min($age, $periodEnd) - $periodStart;
                        $totalHours += $annualSpent * $years*$hoursPerDay;
                    }
                }
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
