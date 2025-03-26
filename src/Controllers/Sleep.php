<?php
declare(strict_types=1);

namespace App\Controllers;

date_default_timezone_set("Asia/Tashkent");

class Sleep{
    
    public function sleepstat($interval) {
        $calculator = new \Core\Calculation();
        $annualSpent = 365;
        $hoursByPeriod = [
            '0-0.33' => 16.5,
            '0.33-1' => 14,
            '1-2' => 12.5,
            '2-5' => 11.5,
            '5-12' => 10.5,
            '12-17' => 9,
            '17-60' => 7,
            '60-64' => 8,
            '64-75' => 7.5
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