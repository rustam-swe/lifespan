<?php
  declare(strict_types=1);

  session_start(); 

  require 'vendor/autoload.php';


  new \Router\Router()->handleForm();   

  if (!isset($_POST["dob"])){
    return;
  }

  $birthday = $_POST["dob"];

  $person = new \App\Person($birthday);
  $generalInfo =  "Current date:". date('Y-m-d');
  $generalInfo .= "<br> Age: $person->age";

  echo $generalInfo;

  $stats = new \App\Stats($person);
  $stats->getSleep();

  new \Router\Router()->handleFamily();

  $_SESSION['birthday'] = $birthday;

  new \Router\Router()->StudyRoad($person->age);

  $stats->getWork();
