<?php

namespace App\Controllers;

use DateTime;

class Eating{
    public function eatingCalculate($interval){ 

      $eating = new \Core\Calculation();
      $anualSpend = 365;
      $hoursByPeriods = [
        '0-3'  => 1.5,
        '3-12' => 2,
        '12-25'=> 2.5,
        '25-75'=> 2
      ];
      return $eating->calculateHours($interval, $hoursByPeriods, $anualSpend);

    }
}

?>
