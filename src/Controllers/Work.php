<?php
declare(strict_types=1);

namespace App\Controllers;

class Work {
    public function workstat(\DateInterval $interval): array {
        $work = new \Core\Calculation();
        $annualSpent = 250;
        $hoursByPeriods = [
            '18-24' => 4,
            '25-54' => 8,
            '55-64' => 7,
            '65-75' => 5
        ];
      
        $result = $work->calculateHours($interval, $hoursByPeriods, $annualSpent);
      
        return [
            'DoneHours' => $result['Done'],
            'DoneDays' => round($result['Done'] / 24, 2),
            'DoneYears' =>round($result['Done'] / 24 / 365, 2),
            'LeftHours' => $result['Left'],
            'LeftDays' => round($result['Left'] / 24, 2),
            'LeftYears' => round($result['Left'] / 24 / 365, 2),
            'avgTotalHours' => $result['avgTotal'],
            'avgTotalDays' => round($result['avgTotal'] / 24, 2),
            'avgTotalYears' => round($result['avgTotal'] / 24 / 365, 2)
        ];
    }
}