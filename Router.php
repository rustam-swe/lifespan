<?php
declare(strict_types=1);

namespace Router;

class Router {

  public function handleForm() {

    require 'views/form.php'; 

    if (!isset($_POST["dob"])){
      return;
    }
    
    return $_POST['dob'];
  }

}