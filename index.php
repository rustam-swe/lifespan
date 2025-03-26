<?php
  declare(strict_types=1);

  require 'vendor/autoload.php';

  $birthday     = (new \Router\Router())->handleForm()??'01-01-2001';
  $person       = new \Core\Person($birthday);

  (new \App\Stats($person))->allStats();
  