<?php
declare(strict_types=1);

namespace App;

class Stats {
  public function __construct(public Person $person){
  }
  public function getSleep() {
    $birthday = $this->person->dob->format('y-m-d');
    require 'views/sleep.php';
  }

  public function getWork(){
    if($this->person->age >= 18){
      require 'views/work.php';
    }
  }
}
