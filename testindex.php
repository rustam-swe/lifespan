<?php
  declare(strict_types=1);

  session_start(); 

  require 'vendor/autoload.php';


  new \Router\Router()->handleForm();   

  // if (!isset($_POST["dob"])){
  //   return;
  // }

  $birthday = $_POST["dob"] ?? '2000-01-01';

  $person       = new \App\Person($birthday);
  $generalInfo  =  "Current date:". date('Y-m-d');
  $generalInfo .= "<br> Age: $person->age";

  echo $generalInfo;

  $stats = new \App\Stats($person);
  // $stats->getSleep();

  // $stats->handleFamily();

  $_SESSION['birthday'] = $birthday;

  //$stats->StudyRoad($person->age);

  $stats->getWork();
