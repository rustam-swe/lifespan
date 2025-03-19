<?php

//new \App\Controllers\Road())->roadHours($age = 20);
$ok = new \App\Controllers\Road();

var_dump($ok->travelTime(26)['totalTravelTime']);
