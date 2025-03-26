<?php
declare(strict_types=1);

namespace App\Controllers;

class Family {
    
    public function calculateFamilyTime($birthdate) {
        $now = new \DateTime();
        $birth = new \DateTime($birthdate);

        if ($birth > $now) {
            return "Error: Birthdate cannot be in the future!";
        }

        $age = $birth->diff($now)->y;
        $totalDaysLived = $birth->diff($now)->days;
        $familyDays = 0;
        $averageLifeDuration = \Core\Person::AVERAGE_LIFE_DURATION;

        for ($i = 0; $i < $age; $i++) {
            if ($i < 4) {
                $familyDays += 0.9 * 365;
            } elseif ($i < 7) {
                $familyDays += 0.6 * 365;
            } elseif ($i < 18) {
                $familyDays += 0.4 * 365;
            } elseif ($i < 23) {
                $familyDays += 0.25 * 365;
            } elseif ($i < 65) {
                $familyDays += 0.3 * 365;
            } else {
                $familyDays += 0.5 * 365;
            }
        }

        $daysThisYear = $totalDaysLived - ($age * 365);
        if ($daysThisYear > 0) {
            if ($age < 4) {
                $familyDays += 0.9 * $daysThisYear;
            } elseif ($age < 7) {
                $familyDays += 0.6 * $daysThisYear;
            } elseif ($age < 18) {
                $familyDays += 0.4 * $daysThisYear;
            } elseif ($age < 23) {
                $familyDays += 0.25 * $daysThisYear;
            } elseif ($age < 65) {
                $familyDays += 0.3 * $daysThisYear;
            } else {
                $familyDays += 0.5 * $daysThisYear;
            }
        }

        $familyHours = $familyDays * 24;
        $remainingYears = $averageLifeDuration - $age;
        $remainingDaysWithFamily = $remainingYears * 0.3 * 365;
        $remainingHoursWithFamily = $remainingDaysWithFamily * 24;

        return [
            'total_days' => $totalDaysLived,
            'family_days' => round($familyDays),
            'family_hours' => round($familyHours),
            'remaining_days_with_family' => round($remainingDaysWithFamily),
            'remaining_hours_with_family' => round($remainingHoursWithFamily)
        ];
    }
}

