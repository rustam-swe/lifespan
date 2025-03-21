<h2>Sleep</h2>

<?php
use \App\Controllers\Sleep;
$sleepObj = (new Sleep())->agecalculator($birthday);
echo "Born $birthday, slept ~ {$sleepObj['hours']} hours or {$sleepObj['years']} years.<br> <br>";
echo "Remaining sleep ~ {$sleepObj['remainingHours']} hours or {$sleepObj['remainingYears']} years.<br><br>";
echo "Common sleeping bear ~ {$sleepObj['totalSleepHours']} hours or {$sleepObj['totalSleepYears']} years.<br><br>"
?>




