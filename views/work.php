<hr>
<h2>Work Time</h2>
<div class="stat-card">
    <i class="fas fa-briefcase"></i>
    <p>Total work time: <?php echo isset($workData['totalWorkTime']) ? $workData['totalWorkTime'] . ' hours' : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-clock"></i>
    <p>Average work time: <?php echo isset($workData['avgWorkTime']) ? $workData['avgWorkTime'] . ' hours' : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-hourglass-end"></i>
    <p>Remaining work time: <?php echo isset($workData['remainingWorkTime']) ? $workData['remainingWorkTime'] . ' hours' : 'N/A'; ?></p>
</div>