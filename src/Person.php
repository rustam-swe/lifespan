<?php
declare(strict_types=1);

namespace App;

use \DateTime;

class Person {
  const int AVERAGE_LIFE_DURATION = 75;

  public readonly DateTime $dob;
  public readonly int      $age;
  
  public function __construct(string $birthday) {
    $this->dob = new DateTime($birthday);
    $this->age = $this->dob->diff(new DateTime())->y;

  }
}
