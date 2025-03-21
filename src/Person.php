<?php
declare(strict_types=1);

namespace App;

use \DateTime;
use \DateInterval;

class Person {
  const int AVERAGE_LIFE_DURATION = 75;

  public readonly DateTime     $dob;
  public readonly int          $age;
  public readonly DateInterval $period;
  
  public function __construct(string $birthday) {
    $this->dob    = new DateTime($birthday);
    $this->period = $this->dob->diff(new DateTime());
    $this->age    = $this->period->y;
  }
}
