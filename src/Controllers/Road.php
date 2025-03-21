<?php
declare(strict_types=1);

namespace App\Controllers;

class Road {
  public function travelTime($age) {
    if (!is_numeric($age)) {
      return "Invalid input";
    }
    $age = (int) $age;
    
    $travelHours = [
      '18-24' => 2,
      '25-54' => 2.5,
      '55-64' => 1.5,
      '65+'   => 1
    ];

    $totalTravelHours = 0;
    foreach ($travelHours as $range => $hoursPerDay) {
        if ($range === '65+') {
            $min = 65;
            $max = PHP_INT_MAX;
        } else {
            [$min, $max] = explode('-', $range);
            $min = (int) $min;
            $max = (int) $max;
        }

        if ($age >= $min) {
            $years = min($age, $max) - $min + 1;
            $totalTravelHours += 365 * $hoursPerDay * $years;
        }
    }

    $avgDrivingSpan = 365 * (2 * 6 + 2.5 * 30 + 1.5 * 10 + 1 * 11);
    $leftTravelHours = max(0, $avgDrivingSpan - $totalTravelHours);

    return [
      "totalTravelTime" => $totalTravelHours,
      "avgTravel" => $avgDrivingSpan,
      "leftTravel" => $leftTravelHours
    ];
  }
}
