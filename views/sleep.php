<?php
use \App\Controllers\Sleep;
$sleepObj = (new Sleep())->agecalculator($birthday);
?>
<h2>Slept</h2>
<label>Total Slept: <input type="text" value=" <?= $sleepObj['hours'] ?> hours or <?= $sleepObj['years'] ?> years." readonly></label><br><br>
<label>Remaining Sleep: <input type="text" value=" <?= $sleepObj['remainingHours'] ?> hours or <?= $sleepObj['remainingYears'] ?> years." readonly></label><br><br>
<label>Common Sleeping Bear: <input type="text" value=" <?= $sleepObj['totalSleepHours'] ?> hours or <?= $sleepObj['totalSleepYears'] ?> years." readonly></label><br><br>
