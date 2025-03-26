<h2>Sleep Time</h2>
<div class="stat-card">
    <i class="fas fa-bed"></i>
    <p>Total sleep time: <?php echo isset($sleepData['totalSleepYears']) ? $sleepData['totalSleepYears'] . ' years (' . $sleepData['totalSleepDays'] . ' days, ' . $sleepData['totalSleepHours'] . ' hours)' : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-moon"></i>
    <p>Time slept: <?php echo isset($sleepData['years']) ? $sleepData['years'] . ' years (' . $sleepData['days'] . ' days, ' . $sleepData['hours'] . ' hours)' : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-hourglass-end"></i>
    <p>Remaining sleep time: <?php echo isset($sleepData['remainingYears']) ? $sleepData['remainingYears'] . ' years (' . $sleepData['remainingDays'] . ' days, ' . $sleepData['remainingHours'] . ' hours)' : 'N/A'; ?></p>
</div>