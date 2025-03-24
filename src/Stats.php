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

  public static function handleForm(): void {
    require 'views/form.php'; 
  }

  public static function handleFamily(): void {
    require 'views/family.php'; 
  }
  
  public static function StudyRoad($age): void {
    if($age > 7) {
        require 'views/study.php';
        require 'views/road.php';
     }
  }
}
