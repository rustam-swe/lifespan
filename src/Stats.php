<?php
declare(strict_types=1);

namespace App;

class Stats {
  public function __construct(public \Core\Person $person){
  }

  public function allStats() {
    //$this->getSleep();
    //$this->getFamily();
    //$this->getStudy($this->person->age);
    //$this->getRoad($this->person->age);
    $this->getWork();
  }
  public function getSleep() {
    $birthday = $this->person->dob->format('y-m-d');
    require 'views/sleep.php';
  }

  public function getWork(){
    if($this->person->age >= 18){
      $work     = new \App\Controllers\Work();
      $interval = $this->person->period;
      $result   = $work->workstat($interval);
      require 'views/work.php';
    }
  }

  public static function getFamily(): void {
    require 'views/family.php'; 
  }
  
  public static function getStudy($age): void {
    if($age > 7) {

    $study    = new \App\Controllers\Study();
    $interval = $person->period;
    $result   = $study->studyStat($interval);

    require 'views/study.php';

    }
  }

  public static function getRoad($age): void {
    if($age > 7) {
        require 'views/road.php';
     }
  }
}
