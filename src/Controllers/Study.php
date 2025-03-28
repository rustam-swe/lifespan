<?php
    declare(strict_types=1);

    namespace App\Controllers;

    class Study {
        
        public function studyStat($interval) {
            $study = new \Core\Calculation();
            $annualSpent = 230; // Yillik sarflangan kunlar
            $hoursByPeriods = [          
                '7-11' => 4,
                '12-14' => 6,
                '15-18' => 7,
                '19-25' => 4
            ];
            
            $result = $study->calculateHours($interval, $hoursByPeriods, $annualSpent);
            
            return [
                "avgStudyHours" => $result["avgTotal"] ?? 0,
                "studyHours" => $result["Done"] ?? 0,
                "remainingStudyHours" => $result["Left"] ?? 0
            ];
        }
        
    }

?>
