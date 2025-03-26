<?php
?>

<hr>
<h2>Eating Time</h2>
<div class="stat-card">
    <i class="fas fa-utensils"></i>
    <p>Total eating time: <?php echo isset($eatingData['Done']) ? $eatingData['Done'] . ' hours' : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-clock"></i>
    <?php
        $age = $person->age;
        $yearsEating = $age >= 0 ? $age : 0;
        $avgEating = $yearsEating > 0 ? $eatingData['Done'] / $yearsEating : 0;
    ?>
    <p>Average eating span: <?php echo round($avgEating, 2) . ' hours'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-hourglass-end"></i>
    <p>Remaining eating time: <?php echo isset($eatingData['Left']) ? $eatingData['Left'] . ' hours' : 'N/A'; ?></p>
</div>