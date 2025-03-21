<?php
  declare(strict_types=1);
  
  require 'vendor/autoload.php';
  
  define('AVERAGE_LIFE_DURATION', 75);
  $currentDate = new DateTime(date('Y-m-d')); 
  
  require 'views/form.php';
  
  // if (!isset($_POST["dob"])) {
  //     return;
  // }
  
  $birthday = new DateTime($_POST["dob"] ?? '1950-03-21');    
  $interval = $birthday->diff($currentDate); 
  
  $age = $interval->y;
  
  if ($age > 7) {
      require 'views/study.php';
      require 'views/road.php';
  }
  
  if ($age >= 18) {
      require 'views/work.php';
  }
