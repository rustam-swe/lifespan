<?php
    declare(strict_types=1);

    namespace App\Controllers;

    class Work implements \Interfaces\WorkInterface {
        
        public function workHours($age) {
            if (!is_numeric($age)) {
                return [
                    "worked" => "Invalid input",
                    "leftWork" => "Invalid input"
                ];
            }
            
            $age = (int) $age;
            $workingDays = 5 * 50;
            $baseWorkingHoursPerDayDuringCertainAgesPeriod = [
                
                '18-24' => 4,
                '25-54' => 8,
                '55-64' => 7,
                '65+'   => 5
            ];
            
            $totalHours = 0;

            if ($age >= 18) {

                foreach ($baseWorkingHoursPerDayDuringCertainAgesPeriod as $range => $hoursPerDay) {

                    [$minEdgePeriod, $maxEdgePeriod] = explode('-', $range . '-');
                    $minEdgePeriod = (int)$minEdgePeriod;
                    $maxEdgePeriod = $maxEdgePeriod ? (int)$maxEdgePeriod : PHP_INT_MAX;
                    
                    if ($age > $minEdgePeriod) {

                        $years = min($age, $maxEdgePeriod) - $minEdgePeriod;
                        $totalHours += $workingDays * $years*$hoursPerDay;
                    }
                }
            }
            
            $avgWorkSpan = $workingDays * (4 * 6 + 8 * 30 + 7 * 10 + 5 * 11);
            $leftWorkHours = $avgWorkSpan - $totalHours;
            
            return [
                "worked" => $totalHours,
                "leftWork" => $leftWorkHours,
                "avgTotal" => $avgWorkSpan
            ];
        }
    }

?>
    

