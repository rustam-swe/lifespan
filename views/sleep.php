<?php
use \App\Controllers\Sleep;
$sleepObj = (new Sleep())->agecalculator($birthday);
echo "Born $birthday, slept ~ {$sleepObj['hours']} hours or {$sleepObj['years']} years.<br> <br>";
echo "Remaining sleep ~ {$sleepObj['remainingHours']} hours or {$sleepObj['remainingYears']} years.\n"
?>

