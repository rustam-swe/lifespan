<?php
    declare(strict_types=1);

    namespace Controllers;

    class Work implements \Interfaces\WorkInterface {
        
        public function workHours($age) {

            if (is_numeric($age)) {
                $age = (int)$age;
            } else {
                $result = [
                    "worked" => "Invalid input",
                    "leftWork" => "Invalid input"
                ];
                return $result;
            }
    
            $workingDays = 5 * 50;
            $avgWorkSpan=$workingDays*(4*6 + 8*30 + 7*10 + 5*11);
            
            if($age>=18 && $age<=24) {

                $totalHours = $workingDays*4*($age-18);
            } 
            elseif($age>24 && $age<=54) {

                $totalHours = $workingDays*(6*4 + 8*($age-24));
            } 
            elseif($age>54 && $age<=64) {

                $totalHours = $workingDays*(6*4 + 8*29 + 7*($age-54));
            } 
            elseif($age>65) {

                $totalHours = $workingDays*(6*4 + 8*29 + 7*9 + 5*($age-64));
            } 
            else {

                $totalHours = 0;
            }

            $leftWorkHours=$avgWorkSpan-$totalHours;
            $result=[
                "worked"=>$totalHours,
                "leftWork"=>$leftWorkHours,
                "avgTotal"=>$avgWorkSpan
            ];

            return $result;
        }
    }

?>
    

