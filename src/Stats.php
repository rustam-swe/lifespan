<?php
declare(strict_types=1);

namespace App;

class Stats {
  public function __construct(public \Core\Person $person){
  }

  public function allStats() {
    $this->getSleep();
    //$this->getFamily();
    $this->getStudy();
    echo '<pre>';
    print_r($this->getAllActivitiesTotalSpentTime());
    echo '</pre>';
    $this->getRoad();
    $this->getWork();
    $this->getEating();
  }
  public function getSleep() {
    $sleepObj = new \App\Controllers\Sleep();   
    $interval = $this->person->period;
    $result   = $sleepObj->sleepstat($interval);

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
  
  public  function getStudy(): void {
    if($this->person->age > 7) {

    $study    = new \App\Controllers\Study();
    $interval = $this->person->period;
    $result   = $study->studyStat($interval);

    require 'views/study.php';

    }
  }

  public function getRoad() {
    if($this->person->age > 7) {
      $road     = new \App\Controllers\Road();
      $interval = $this->person->period;
      $result   = $road->roadStats($interval);
      require 'views/road.php';
     }
  }

  public function getAllActivitiesTotalSpentTime(){
    $sleepObj = new \App\Controllers\Sleep();   
    $interval = $this->person->period;
    $result   = $sleepObj->sleepstat($interval);

      $work     = new \App\Controllers\Work();
    $workTime   = $work->workstat($interval);

 $road     = new \App\Controllers\Road();
      $roadTime   = $road->roadStats($interval);

      $total = $result['hours'] + $workTime['DoneHours'] + $roadTime['Done'];

      $totalYears = $total / 24 / 365;

      $pastRealLifeYears = $this->person->age - $totalYears;


      $remainLivingYears = \Core\Person::AVERAGE_LIFE_DURATION - $this->person->age;
      $remainActivityHours = $result['remainingHours'] + $workTime['LeftHours'] + $roadTime['Left'];
      $remainActivityYears = $remainActivityHours / 24 / 365;

      $remainRealLifeYears = $remainLivingYears - $remainActivityYears;
      
      return [
        'pastActivityHours' => $total,
        'pastActivityYears' => $totalYears,
        'age' => $this->person->age,
        'remainLivingYears' => $remainLivingYears,
        'pastRealLifeYears' => $pastRealLifeYears,
        'remainRealLifeYears' => $remainRealLifeYears,
        'remainActivityYears' => $remainActivityYears
      ];
  }


  public function getEating(){
    $eating        = new \App\Controllers\Eating();
    $interval      = $this->person->period;
    $result_eating = $eating->eatingCalculate($interval);
    require 'views/eating.php';
  }
}
