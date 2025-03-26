<?php
?>

<hr>
<h2>Family Time</h2>
<div class="stat-card">
    <i class="fas fa-users"></i>
    <p>Total family time: <?php echo isset($familyTime['totalFamilyTime']) ? $familyTime['totalFamilyTime'] . ' hours' : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-clock"></i>
    <p>Average family time: <?php echo isset($familyTime['avgFamilyTime']) ? $familyTime['avgFamilyTime'] . ' hours' : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-hourglass-end"></i>
    <p>Remaining family time: <?php echo isset($familyTime['remainingFamilyTime']) ? $familyTime['remainingFamilyTime'] . ' hours' : 'N/A'; ?></p>
</div>