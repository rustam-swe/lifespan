<?php
declare(strict_types=1);

namespace App\Controllers;

date_default_timezone_set("Asia/Tashkent");

class Sleep{
  public function agecalculator($birthday){
    // var_dump($birthday);
    $birthdayy = new \DateTime($birthday);
    $today = new \DateTime();
    $age = $today->diff($birthdayy)->y;
    // var_dump($age);
    $year_sleep = $this->time_of_age($age);
    return $year_sleep;

}

  public function time_of_age($age){
    $sleep = 0;//380+4745+13140+
    if ($age >= 0) {
      $sleep += 365 * 15; 
    }
    if ($age >= 1) {
        $sleep += 365 * 13; 
    }
    if ($age >= 3) {
        $sleep += 3 * 365 * 12; 
    }
    if ($age >= 6) {
        $sleep += 8 * 365 * 10;
    }
    if ($age >= 14) {
        $sleep += 4 * 365 * 9;
    }
    if ($age >= 18) {
        $sleep += 47 * 365 * 8;
    }
    if ($age >= 65) {
        $sleep += 10 * 365 * 7.5; 
    }

    // var_dump($sleep);

     $day_sleep = (int)($sleep / 24);
     $year_sleep = (int)($day_sleep / 365);
    //  var_dump($year_sleep);
    // return $day_sleep;
    return $year_sleep;
    } 
}