<?php
declare(strict_types=1);

namespace App\Controllers;

class Road {
  public function travelTime(int $age, array $hoursByPeriods, int $annualSpent): array {
    $totalTravelHours = 0;
    $avgTravelSpan    = 0;

    foreach ($hoursByPeriods as $range => $hoursPerDay) {
      [$periodStart, $periodEnd] = explode('-', $range);

      $periodStart = (int) $periodStart;
      $periodEnd = (int) $periodEnd;

      $avgYears = $periodEnd - $periodStart;
      $avgTravelSpan += $annualSpent * $avgYears * $hoursPerDay;

      if ($age > $periodStart) {
        $years = min($age, $periodEnd) - $periodStart;
        $totalTravelHours += $annualSpent * $years * $hoursPerDay;
      }
    }

    $leftTravelHours = $avgTravelSpan - $totalTravelHours;

    return [
      "totalTravelTime" => $totalTravelHours,
      "avgTravel" => $avgTravelSpan,
      "leftTravel" => $leftTravelHours
    ];
  }
}

