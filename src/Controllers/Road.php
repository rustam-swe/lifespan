<?php
declare(strict_types=1);

namespace App\Controllers;

class Road {
  public function roadStats($interval) {

    $road           = new \Core\Calculation();
    $annualSpent    = 365;
    $hoursByPeriods = [
      '18-24' => 2,
      '25-54' => 2.5,
      '55-64' => 1.5,
      '65-75' => 1
    ];

    return $road->calculateHours($interval, $hoursByPeriods, $annualSpent);
  }
}