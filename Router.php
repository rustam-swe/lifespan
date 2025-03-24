<?php
declare(strict_types=1);

namespace Router;

class Router {

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