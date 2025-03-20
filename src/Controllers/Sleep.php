<?php
declare(strict_types=1);

namespace App\Controllers;

date_default_timezone_set("Asia/Tashkent");

class Sleep{
    public function agecalculator($birthDay){
        $year = date("Y", strtotime($birthDay));
        $month = date("m", strtotime($birthDay));
        $day = date("d", strtotime($birthDay));
        $aldim = AVERAGE_LIFE_DURATION * 12; # o'rtacha kutiladigan hayot davomiyligi yildan oyga o'girildi.(AVERAGE LIFE DURATION IN MONTHS)
        $davrlar = [15.5, 14, 12.5, 11.5, 10.5, 9, 8, 7.5];# Davrlar ketmaketligi oylarda: [0-3, 3-11, 22-24, 24-72, 72-156, 156-216, 216-768, 768-∞]
        $daysInMonth = 365/12;
        $birthDate = new \DateTime("$year-$month-$day");
        $now = new \DateTime();
        $diff = $birthDate->diff($now);
        
        $livedMonths = ($diff->y * 12) + $diff->m + ($diff->d/$daysInMonth);
        $livedMonths = round($livedMonths, 2);
        $sleptHours = 0;
    
        if ($livedMonths <= 3){
            $sleptHours = $davrlar[0] * $livedMonths;
        } 
        elseif ($livedMonths <= 11){
            $sleptHours = ($davrlar[0] * 3) + ($davrlar[1] * ($livedMonths - 3));
        }
        elseif ($diff->y < 2){
            $sleptHours = ($davrlar[0] * 3) + ($davrlar[1] * 8) + ($davrlar[2] * ($livedMonths - 11));
        }
        elseif ($diff->y < 6){
            $sleptHours = ($davrlar[0] * 3) + ($davrlar[1] * 8) + ($davrlar[2] * 13) + ($davrlar[3] * ($livedMonths - 24));
        }
        elseif ($diff->y < 13){
            $sleptHours = ($davrlar[0] * 3) + ($davrlar[1] * 8) + ($davrlar[2] * 13) + ($davrlar[3] * 48) +
            ($davrlar[4] * ($livedMonths - 72));
        }
        elseif ($diff->y < 19){
            $sleptHours = ($davrlar[0] * 3) + ($davrlar[1] * 8) + ($davrlar[2] * 13) + ($davrlar[3] * 48) +
            ($davrlar[4] * 84) + ($davrlar[5] * ($livedMonths - 156));
        }
        elseif ($diff->y < 65){
            $sleptHours = ($davrlar[0] * 3) + ($davrlar[1] * 8) + ($davrlar[2] * 13) + ($davrlar[3] * 48) +
            ($davrlar[4] * 84) + ($davrlar[5] * 72) + ($davrlar[6] * ($livedMonths - 228));
        }
        else {
            $sleptHours = ($davrlar[0] * 3) + ($davrlar[1] * 8) + ($davrlar[2] * 13) + ($davrlar[3] * 48) +
            ($davrlar[4] * 84) + ($davrlar[5] * 72) + ($davrlar[6] * 552) + ($davrlar[7] * ($livedMonths - 780));
        }
    
        $sleptHours *= $daysInMonth;
        $sleptYears = ($sleptHours / 24)/365;

        # Bu yerdan boshlab kelajakda qancha uxlashini hisoblash hisoblanadi.
        ;
    
        if ($livedMonths <= 3){
            $remainingHours = ($davrlar[0] * (3 - $livedMonths)) + ($davrlar[1] * 8) + ($davrlar[2] * 13) + ($davrlar[3] * 48) +
            ($davrlar[4] * 84) + ($davrlar[5] * 72) + ($davrlar[6] * 552) + ($davrlar[7] * ($aldim - 780));
        }
        elseif ($livedMonths <= 11){
            $remainingHours = ($davrlar[1] * (11 - $livedMonths)) + ($davrlar[2] * 13) + ($davrlar[3] * 48) +
            ($davrlar[4] * 84) + ($davrlar[5] * 72) + ($davrlar[6] * 552) + ($davrlar[7] * ($aldim - 780));
        }
        elseif ($diff->y < 2){
            $remainingHours = ($davrlar[2] * (24 - $livedMonths)) + ($davrlar[3] * 48) + ($davrlar[4] * 84) +
             ($davrlar[5] * 72) + ($davrlar[6] * 552) + ($davrlar[7] * ($aldim - 780));
        }
        elseif ($diff->y < 6){
            $remainingHours = ($davrlar[3] * (72 - $livedMonths)) + ($davrlar[4] * 84) + ($davrlar[5] * 72) +
            ($davrlar[6] * 552) + ($davrlar[7] * ($aldim - 780));
        }
        elseif ($diff->y < 13){
            $remainingHours = ($davrlar[4] * (156 - $livedMonths)) + ($davrlar[5] * 72) + ($davrlar[6] * 552) +
            ($davrlar[7] * ($aldim - 780));
        }
        elseif ($diff->y < 19){
            $remainingHours = ($davrlar[5] * (228 - $livedMonths)) + ($davrlar[6] * 552) + ($davrlar[7] * ($aldim - 780));
        }
        elseif ($diff->y < 65){
            $remainingHours = ($davrlar[6] * (780 - $livedMonths)) + ($davrlar[7] * ($aldim - 780));
        }
        else{
            $remainingHours = $davrlar[7] * ($aldim - $livedMonths);
        }
    
        $remainingHours *= $daysInMonth;
        $remainingYears = ($remainingHours / 24)/365;
        return ['hours' => round($sleptHours), 'years' => round($sleptYears, 2), 'remainingHours' => round($remainingHours), 'remainingYears' => round($remainingYears, 2)];
    }
}
?>
