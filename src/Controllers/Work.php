<?php
    declare(strict_types=1);
    namespace App\Controllers;

    class Work{
        public function workstat($interval) {
            $work = new \App\Controllers\Calculation();
            $annualSpent = 250;             // 5 hours per day for 50 weeks, rest of the days are holidays and etc day-offs
            $hoursByPeriods = [          
                // '18' => 4,       
                // '25' => 8,       
                // '55' => 7,       
                // '65' => 5       

                '18-24' => 4,
                '25-54' => 8,
                '55-64' => 7,
                '65-75' => 5
            ];
            $result=$work->calculateHours($interval, $hoursByPeriods, $annualSpent);
            return [
                "avgTotal" => $result["avgTotal"],
                "Done" => $result["Done"],
                "Left" => $result["Left"]
            ];
        }
    }
?>