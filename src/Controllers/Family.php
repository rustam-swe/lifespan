<?php
declare(strict_types=1);

namespace App\Controllers;

class Family {
    public function calculateFamilyTime(string $birthdate): array {
        $now = new \DateTime();
        $birth = new \DateTime($birthdate);

        if ($birth > $now) {
            throw new \Exception("Error: Birthdate cannot be in the future!");
        }

        $person = new \Core\Person($birthdate);
        $interval = $person->period;
        $age = $person->age;

        $familyCoefficients = [
            '0-3'   => 0.9,
            '4-6'   => 0.6,
            '7-17'  => 0.4,
            '18-22' => 0.25,
            '23-64' => 0.3,
            '65-75' => 0.5
        ];

        $annualSpent = 365;

        $calculation = new \Core\Calculation();
        $result = $calculation->calculateHours($interval, $familyCoefficients, $annualSpent);

        $familyDays = $result['Done'];
        $familyHours = $familyDays * 24;

        $averageLifeDuration = \Core\Person::AVERAGE_LIFE_DURATION;
        $remainingYears = $averageLifeDuration - $age;
        $remainingDaysWithFamily = $remainingYears * 0.3 * 365;
        $remainingHoursWithFamily = $remainingDaysWithFamily * 24;

        $totalDaysLived = $birth->diff($now)->days;

        return [
            'hours' => round($familyHours),
            'remainingHours' => round($remainingHoursWithFamily),
            'total_days' => $totalDaysLived,
            'family_days' => round($familyDays),
            'remaining_days_with_family' => round($remainingDaysWithFamily),
        ];
    }
}