<?php
declare(strict_types=1);

namespace App\Controllers;

class Road {
    public function roadStats($interval) {
        $road = new \Core\Calculation();
        $annualSpent = 365;
        $hoursByPeriods = [
            '18-24' => 2,
            '25-54' => 2.5,
            '55-64' => 1.5,
            '65-75' => 1
        ];

        $calculationData = $road->calculateHours($interval, $hoursByPeriods, $annualSpent);

        $age = $interval->y;
        $yearsTraveling = $age >= 18 ? $age - 18 : 0;
        $avgTravel = $yearsTraveling > 0 ? $calculationData['Done'] / $yearsTraveling : 0;

        return [
            'totalTravelTime' => round($calculationData['Done']),
            'avgTravel' => round($avgTravel, 2),
            'leftTravel' => round($calculationData['Left']),
        ];
    }
}