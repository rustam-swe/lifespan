<?php
declare(strict_types=1);

namespace App\Controllers;

class Work {
    public function workstat(\DateInterval $interval): array {
        $calculator = new \Core\Calculation();
        $annualSpent = 365;
        $hoursByPeriods = [
            '18-30' => 8,
            '30-50' => 7,
            '50-65' => 5,
        ];
        $result = $calculator->calculateHours($interval, $hoursByPeriods, $annualSpent);

        return [
            'totalWorkTime' => round($result['Done']),
            'avgWorkTime' => round($result['Done'] / ($interval->y > 0 ? $interval->y : 1), 2),
            'remainingWorkTime' => round($result['Left']),
        ];
    }
}