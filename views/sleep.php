<?php
$sleepObj = new \App\Controllers\Sleep();   
$person   = new \App\Person($birthday);
$interval = $person->period;
$result   = $sleepObj->sleepstat($interval);
?>
<h2>Sleep</h2>
<label>Total Slept: <input type="text" value=" <?= $result['hours'] ?> hours or <?= $result['years'] ?> years." readonly></label><br><br>
<label>Remaining Sleep: <input type="text" value=" <?= $result['remainingHours'] ?> hours or <?= $result['remainingYears'] ?> years." readonly></label><br><br>
<label>Common Sleeping: <input type="text" value=" <?= $result['totalSleepHours'] ?> hours or <?= $result['totalSleepYears'] ?> years." readonly></label><br><br>
