<hr>
<h2>Work Time</h2>
<div class="stat-card">
    <i class="fas fa-briefcase"></i>
    <p>Total work time: <?php echo isset($workData['DoneHours']) ? $workData['DoneHours'] . ' hours, ' . 
        $workData["DoneDays"] . ($workData["DoneDays"] > 1 ? ' days, ' : ' day, ') . 
        $workData["DoneYears"] . ($workData["DoneYears"] > 1 ? ' years' : ' year') : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-clock"></i>
    <p>Average work time: <?php echo isset($workData['avgTotalHours']) ? $workData['avgTotalHours'] . ' hours, ' . 
        $workData["avgTotalDays"] . ($workData["avgTotalDays"] > 1 ? ' days, ' : ' day, ') . 
        $workData["avgTotalYears"] . ($workData["avgTotalYears"] > 1 ? ' years' : ' year') : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-hourglass-end"></i>
    <p>Remaining work time: <?php echo isset($workData['LeftHours']) ? (($workData["LeftHours"] <= 0) ? 'Thanks for your service 🫡' : 
      $workData['LeftHours'] . ' hours, ' . 
      $workData["LeftDays"] . ($workData["LeftDays"] > 1 ? ' days, ' : ' day, ') . 
      $workData["LeftYears"] . ($workData["LeftYears"] > 1 ? ' years' : ' year')) : 'N/A'; ?></p>
</div>