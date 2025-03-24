<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Calculation;

date_default_timezone_set("Asia/Tashkent");

class Sleep{
    public function agecalculator($birthDay){

        $hoursByPeriod = [
            '0-1' => 14,
            '1-2' => 12,
            '2-6' => 11,
            '6-13' => 10,
            '13-19' => 9,
            '19-65' => 8,
            '65-75' => 7
        ];

        $annualSpent = 365;
        
        $year = date("Y", strtotime($birthDay));
        $month = date("m", strtotime($birthDay));
        $day = date("d", strtotime($birthDay));

        $daysInMonth = 365/12;
        $birthDate = new \DateTime("$year-$month-$day");
        $now = new \DateTime();
        $diff = $birthDate->diff($now);
        $work = new Work();
        $result = $work->calculateHours($diff->y, $hoursByPeriod, $annualSpent);

        $sleptYears = ($result["Done"] / 24)/365;
        $remainingYears = ($result["Left"] / 24)/365;
        $totalSleepYears = ($result["avgTotal"] / 24)/365;

        return ['hours' => round($result["Done"]), 'years' => round($sleptYears, 2), 'remainingHours' => round($result["Left"]), 'remainingYears' => round($remainingYears, 2),'totalSleepHours' => round($result["avgTotal"]), 'totalSleepYears' => round($totalSleepYears)];
    }
}
?>
