<?php
declare(strict_types=1);

namespace App\Controllers;

date_default_timezone_set("Asia/Tashkent");

class Sleep{
    
    public function sleepstat($interval) {
        $calculator = new \Core\Calculation();
        $annualSpent = 365;
        $hoursByPeriod = [
            '0-1' => 14,
            '1-2' => 12,
            '2-6' => 11,
            '6-13' => 10,
            '13-19' => 9,
            '19-65' => 8,
            '65-75' => 7
        ];
        $result = $calculator->calculateHours($interval, $hoursByPeriod, $annualSpent);

        $sleptDays = $result["Done"] / 24;
        $remainingDays = $result["Left"] / 24;
        $totalSleepDays = $result["avgTotal"] / 24;

        $sleptYears = $sleptDays/365;
        $remainingYears = $remainingDays/365;
        $totalSleepYears = $totalSleepDays/365;
    
        return [
            'hours' => round($result["Done"]), 
            'days' => round($sleptDays), 
            'years' => round($sleptYears, 2), 
            'remainingHours' => round($result["Left"]), 
            'remainingDays' => round($remainingDays), 
            'remainingYears' => round($remainingYears, 2),
            'totalSleepHours' => round($result["avgTotal"]), 
            'totalSleepDays' => round($totalSleepDays), 
            'totalSleepYears' => round($totalSleepYears,2)];

    }    
}