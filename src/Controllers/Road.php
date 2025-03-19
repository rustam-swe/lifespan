<?php
declare(strict_types=1);

namespace App\Controllers;

class Road {

  public function roadHours(string $age) {
    
  }

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
        [$min, $max] = explode('-', $range . '-');
        $min = (int)$min;
        $max = $max ? (int)$max : PHP_INT_MAX;

        if ($age > $min) {
          $years = min($age, $max) - $min;
          $totalTravelHours += 365 * $hoursPerDay * $years;
        }
      }
      return [
        "totalTravelTime" => $totalTravelHours
      ];
  }
}
