<?php
    declare(strict_types=1);

    namespace App\Controllers;

    class Study implements \Interfaces\StudyInterface {
        
        public function studyHours($age, $hoursByPeriods) {
            
            $studyDays = 5 * 37;//**** */
            $totalHours  = 0;

        
            foreach ($hoursByPeriods as $range => $hoursPerDay) {
                [$periodStart, $periodEnd] = explode('-', $range . '-');
                
                if ($age > $periodStart) {
                    $years      = min($age, $periodEnd) - $periodStart;
                    $totalHours += $studyingDays * $years * $hoursPerDay;
                }
            }
            
            
            $avgStudySpan   = $studyDays * (4 * 6 + 8 * 29 + 7 * 9 + 5 * 10);
            $leftStudyHours = $avgStudySpan - $totalHours;
            
            return [
                "study"   => $totalHours,
                "leftStudy" => $leftStudyHours,
                "avgTotal" => $avgStudySpan
            ];
        }
    }

?>
    

