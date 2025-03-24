<?php

namespace App\Controllers;

use DateTime;

class Eating{
    public function eatingCalculate($birthday, $age){ 

      $eatingTime = null;

      if($age <= 3){
        $eatingTime = 90;
      }elseif($age > 3 && $age < 7){
        $eatingTime = 120;
      }else{
        $eatingTime = 150;
      }

      $dayHour = 24;
      $birthDate   = new DateTime($birthday);
      $currentDate = new DateTime();
      $daysLived = $birthDate->diff($currentDate)->days;

      $eatingHour = $eatingTime/60; 
      $totalEatingHours = $daysLived*$eatingHour;
      return $totalEatingDays  = round($totalEatingHours / $dayHour);
    }
}

?>
