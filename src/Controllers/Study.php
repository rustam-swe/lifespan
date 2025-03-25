<?php
    declare(strict_types=1);

    namespace App\Controllers;

    class Study {
        
        public function studyStat($interval) {
            $study = new \App\Controllers\Calculation();
            $annualSpent = 230;             // 5 hours per day for 43 weeks, rest of the days are holidays and etc day-offs
            $hoursByPeriods = [          
                // '18' => 4,       
                // '25' => 8,       
                // '55' => 7,       
                // '65' => 5       

                '7-11' => 4,
                '12-14' => 6,
                '15-18' => 7,
                '19-25' => 4
            ];
            $result=$study->calculateHours($interval, $hoursByPeriods, $annualSpent);
            return [
                "avgTotal" => $result["avgTotal"],
                "Studied" => $result["Done"],
                "RemainingStudy" => $result["Left"]
            ];
            
        }
    }

?>
    

