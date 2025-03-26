<?php
?>

<hr>
<h2>Road Time</h2>
<?php if (!$person || !isset($person->age) || $person->age <= 7): ?>
    <p class="error-message">You must be at least 7 years old to see road statistics.</p>
<?php else: ?>
    <div class="stat-card">
        <i class="fas fa-car"></i>
        <p>Total travel time: <?php echo isset($roadData['totalTravelTime']) ? $roadData['totalTravelTime'] . ' hours' : 'N/A'; ?></p>
    </div>
    <div class="stat-card">
        <i class="fas fa-clock"></i>
        <p>Average travel span: <?php echo isset($roadData['avgTravel']) ? $roadData['avgTravel'] . ' hours' : 'N/A'; ?></p>
    </div>
    <div class="stat-card">
        <i class="fas fa-hourglass-end"></i>
        <p>Remaining travel time: <?php echo isset($roadData['leftTravel']) ? $roadData['leftTravel'] . ' hours' : 'N/A'; ?></p>
    </div>
<?php endif; ?>