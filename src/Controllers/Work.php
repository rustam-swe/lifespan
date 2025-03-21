<?php
    declare(strict_types=1);

    namespace App\Controllers;

    class Work implements \Interfaces\WorkInterface {
        
        public function workHours(int $age, $hoursByPeriods) {
            
            $workingDays = 5 * 50;
            $totalHours  = 0;

            if ($age >= 18) {

                foreach ($hoursByPeriods as $range => $hoursPerDay) {

                    [$periodStart, $periodEnd] = explode('-', $range . '-');
                    
                    if ($age > $periodStart) {
                        $years      = min($age, $periodEnd) - $periodStart;
                        $totalHours += $workingDays * $years * $hoursPerDay;
                    }
                }
            }
            
            $avgWorkSpan   = $workingDays * (4 * 6 + 8 * 29 + 7 * 9 + 5 * 10);
            $leftWorkHours = $avgWorkSpan - $totalHours;
            
            return [
                "worked"   => $totalHours,
                "leftWork" => $leftWorkHours,
                "avgTotal" => $avgWorkSpan
            ];
        }
    }

?>
    

