<?php
declare(strict_types=1);

namespace App\Controllers;

date_default_timezone_set("Asia/Tashkent");

class Sleep{
  public function agecalculator($day,$month,$year){
    $guide = [[14, 17], [12, 16], [11, 14], [10, 13], [9, 12], [8, 10], [7, 9], [7, 8]];
        $birth = new \DateTime("$year-$month-$day");
        $now = new \DateTime();
        $diff = $birth->diff($now);
        
        $monthAge = ($diff->y * 12) + $diff->m + ($diff->d/30.4);
        $monthAge = round($monthAge, 2);
        // print($diff->d);
        // print($monthAge);# 3.63
        $avgHours = 0;
    
        if ($monthAge <= 3){# 3
            $avgHours = ($guide[0][0] + $guide[0][1]) / 2;
        } 
        elseif ($monthAge <= 11){# 8
            $avgHours = 
            (
                ((($guide[0][0] + $guide[0][1]) / 2) * 3) + 
                (($guide[1][0] + $guide[1][1]) / 2) * ($monthAge - 3)
            ) / (3 + ($monthAge - 3));
            // print("Keldi");# ((15.5 * 3) + (14 * 0.63))/3.63 = (46.5 + 8.4)/3.63 = 54.9/3.63 = 15.23     1692
        }
        elseif ($diff->y < 2){# 13
            $avgHours = (
                ((($guide[0][0] + $guide[0][1]) / 2) * 3) + 
                ((($guide[1][0] + $guide[1][1]) / 2) * 8) + 
                ((($guide[2][0] + $guide[2][1]) / 2) * ($monthAge - 11))
            ) / (3 + 8 + ($monthAge - 11));
        }
        elseif ($diff->y < 6){# 48
            $avgHours = (
                ((($guide[0][0] + $guide[0][1]) / 2) * 3) + 
                ((($guide[1][0] + $guide[1][1]) / 2) * 8) + 
                ((($guide[2][0] + $guide[2][1]) / 2) * 13) +
                ((($guide[3][0] + $guide[3][1]) / 2) * ($monthAge - 24))
            ) / (3 + 8 + 13 + ($monthAge - 48));
        }
        elseif ($diff->y < 13){# 72
            $avgHours = (
                ((($guide[0][0] + $guide[0][1]) / 2) * 3) + 
                ((($guide[1][0] + $guide[1][1]) / 2) * 8) + 
                ((($guide[2][0] + $guide[2][1]) / 2) * 13) +
                ((($guide[3][0] + $guide[3][1]) / 2) * 48) +
                ((($guide[4][0] + $guide[4][1]) / 2) * ($monthAge - 72))
            ) / (3 + 8 + 13 + 48 + ($monthAge - 72));
        }
        elseif ($diff->y < 19){# 72
            $avgHours = (
                ((($guide[0][0] + $guide[0][1]) / 2) * 3) + 
                ((($guide[1][0] + $guide[1][1]) / 2) * 8) + 
                ((($guide[2][0] + $guide[2][1]) / 2) * 13) +
                ((($guide[3][0] + $guide[3][1]) / 2) * 48) +
                ((($guide[4][0] + $guide[4][1]) / 2) * 84) +
                ((($guide[5][0] + $guide[5][1]) / 2) * ($monthAge - 156))
            ) / (3 + 8 + 13 + 48 + 84 + ($monthAge - 156));
        }
        elseif ($diff->y < 65){# 552
            $avgHours = (
                ((($guide[0][0] + $guide[0][1]) / 2) * 3) + 
                ((($guide[1][0] + $guide[1][1]) / 2) * 8) + 
                ((($guide[2][0] + $guide[2][1]) / 2) * 13) +
                ((($guide[3][0] + $guide[3][1]) / 2) * 48) +
                ((($guide[4][0] + $guide[4][1]) / 2) * 84) +
                ((($guide[5][0] + $guide[5][1]) / 2) * 72) +
                ((($guide[6][0] + $guide[6][1]) / 2) * ($monthAge - 228))
            ) / (3 + 8 + 13 + 48 + 84 + 72 + ($monthAge - 228));
        }
        else {
            $avgHours = (
                ((($guide[0][0] + $guide[0][1]) / 2) * 3) + 
                ((($guide[1][0] + $guide[1][1]) / 2) * 8) + 
                ((($guide[2][0] + $guide[2][1]) / 2) * 13) +
                ((($guide[3][0] + $guide[3][1]) / 2) * 48) +
                ((($guide[4][0] + $guide[4][1]) / 2) * 84) +
                ((($guide[5][0] + $guide[5][1]) / 2) * 72) +
                ((($guide[6][0] + $guide[6][1]) / 2) * 552) +
                ((($guide[7][0] + $guide[7][1]) / 2) * ($monthAge - 780))
            ) / (3 + 8 + 11 + 48 + 84 + 72 + 552 + ($monthAge - 780));
        }
    
        // print($diff->days);# 111 * 15.23 = 1690.53
        $totalHours = $diff->days * $avgHours;
        $totalYears = ($totalHours / 24)/365;
        // print($totalYears);
        ;
        $lifespanYears = AVERAGE_LIFE_DURATION;
    
        $deathYear = $year + $lifespanYears;
        $death = new \DateTime("$deathYear-$month-$day");
        $remainingDiff = $now->diff($death);
        $remainingMonthAge = ($remainingDiff->y * 12) + $remainingDiff->m;
        $remainingAvgHours = 0;
    
        if ($monthAge <= 3){# 3
            $remainingAvgHours = (
                ((($guide[0][0] + $guide[0][1]) / 2) * (3-$monthAge)) +
                ((($guide[1][0] + $guide[1][1]) / 2) * 8) + 
                ((($guide[2][0] + $guide[2][1]) / 2) * 13) +
                ((($guide[3][0] + $guide[3][1]) / 2) * 48) +
                ((($guide[4][0] + $guide[4][1]) / 2) * 84) +
                ((($guide[5][0] + $guide[5][1]) / 2) * 72) +
                ((($guide[6][0] + $guide[6][1]) / 2) * 552) +
                ((($guide[7][0] + $guide[7][1]) / 2) * ((AVERAGE_LIFE_DURATION * 12)-780))
            ) / ((3-$monthAge) + 8 + 11 + 48 + 84 + 72 + 552 + ((AVERAGE_LIFE_DURATION * 12)-780));
        }
        elseif ($monthAge <= 11){
            $remainingAvgHours = (
                ((($guide[1][0] + $guide[1][1]) / 2) * (11-$monthAge)) + 
                ((($guide[2][0] + $guide[2][1]) / 2) * 13) +
                ((($guide[3][0] + $guide[3][1]) / 2) * 48) +
                ((($guide[4][0] + $guide[4][1]) / 2) * 84) +
                ((($guide[5][0] + $guide[5][1]) / 2) * 72) +
                ((($guide[6][0] + $guide[6][1]) / 2) * 552) +
                ((($guide[7][0] + $guide[7][1]) / 2) * ((AVERAGE_LIFE_DURATION * 12)-780))
            ) / ((11-$monthAge) + 11 + 48 + 84 + 72 + 552 + ((AVERAGE_LIFE_DURATION * 12)-780));
        }
        elseif ($diff->y < 2){
            $remainingAvgHours = (
                ((($guide[2][0] + $guide[2][1]) / 2) * (24-$monthAge)) +
                ((($guide[3][0] + $guide[3][1]) / 2) * 48) +
                ((($guide[4][0] + $guide[4][1]) / 2) * 84) +
                ((($guide[5][0] + $guide[5][1]) / 2) * 72) +
                ((($guide[6][0] + $guide[6][1]) / 2) * 552) +
                ((($guide[7][0] + $guide[7][1]) / 2) * ((AVERAGE_LIFE_DURATION * 12)-780))
            ) / ((24-$monthAge) + 48 + 84 + 72 + 552 + ((AVERAGE_LIFE_DURATION * 12)-780));
        }
        elseif ($diff->y < 6){
            $remainingAvgHours = (
                ((($guide[3][0] + $guide[3][1]) / 2) * (72-$monthAge)) +
                ((($guide[4][0] + $guide[4][1]) / 2) * 84) +
                ((($guide[5][0] + $guide[5][1]) / 2) * 72) +
                ((($guide[6][0] + $guide[6][1]) / 2) * 552) +
                ((($guide[7][0] + $guide[7][1]) / 2) * ((AVERAGE_LIFE_DURATION * 12)-780))
            ) / ((72-$monthAge)+ 84 + 72 + 552 + ((AVERAGE_LIFE_DURATION * 12)-780));
        }
        elseif ($remainingDiff->y < 13){
            $remainingAvgHours = (
                ((($guide[4][0] + $guide[4][1]) / 2) * (156-$monthAge)) +
                ((($guide[5][0] + $guide[5][1]) / 2) * 72) +
                ((($guide[6][0] + $guide[6][1]) / 2) * 552) +
                ((($guide[7][0] + $guide[7][1]) / 2) * ((AVERAGE_LIFE_DURATION * 12)-780))
            ) / ((156-$monthAge) + 72 + 552 + ((AVERAGE_LIFE_DURATION * 12)-780));
        }
        elseif ($remainingDiff->y < 19){
            $remainingAvgHours = (
                ((($guide[5][0] + $guide[5][1]) / 2) * (228-$monthAge)) +
                ((($guide[6][0] + $guide[6][1]) / 2) * 552) +
                ((($guide[7][0] + $guide[7][1]) / 2) * ((AVERAGE_LIFE_DURATION * 12)-780))
            ) / ((228-$monthAge) + 552 + ((AVERAGE_LIFE_DURATION * 12)-780));
        }
        elseif ($remainingDiff->y < 65){
            $remainingAvgHours = (
                ((($guide[6][0] + $guide[6][1]) / 2) * (780-$monthAge)) +
                ((($guide[7][0] + $guide[7][1]) / 2) * ((AVERAGE_LIFE_DURATION * 12)-780))
            ) / ((780-$monthAge) + ((AVERAGE_LIFE_DURATION * 12)-780));
        }
        else{(($guide[7][0] + $guide[7][1]) / 2) * (((AVERAGE_LIFE_DURATION * 12)-$monthAge));}

    
    
    
        $remainingTotalHours = $remainingDiff->days * $remainingAvgHours;
        $remainingTotalYears = ($remainingTotalHours / 24)/365;
        return ['hours' => round($totalHours), 'years' => round($totalYears, 2), 'remainingHours' => round($remainingTotalHours), 'remainingYears' => round($remainingTotalYears, 2), 'data' => $guide];
    }
}

?>




 
