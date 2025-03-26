<?php
declare(strict_types=1);

namespace App\Controllers;

class Family {
    public function calculateFamilyTime(string $birthday): array {
        $interval = (new \DateTime())->diff(new \DateTime($birthday));
        $calculator = new \Core\Calculation();
        $annualSpent = 365;
        $hoursByPeriods = [
            '0-18' => 4,
            '18-30' => 2,
            '30-75' => 3,
        ];
        $result = $calculator->calculateHours($interval, $hoursByPeriods, $annualSpent);

        $totalDays = $result['avgTotal'] / 24;
        $familyDays = $result['Done'] / 24;
        $remainingDays = $result['Left'] / 24;

        return [
            'totalFamilyTime' => round($result['Done']),
            'avgFamilyTime' => round($result['Done'] / ($interval->y > 0 ? $interval->y : 1), 2),
            'remainingFamilyTime' => round($result['Left']),
            'total_days' => round($totalDays),
            'family_days' => round($familyDays),
            'remaining_days_with_family' => round($remainingDays),
        ];
    }
}