<?php
  declare(strict_types=1);

  session_start(); 

require 'vendor/autoload.php';


require 'views/form.php';   

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

  require 'views/family.php';

  $_SESSION['birthday'] = $birthday;

if($person->age > 7) {
   require 'views/study.php';
   require 'views/road.php';
}

$stats->getWork();
