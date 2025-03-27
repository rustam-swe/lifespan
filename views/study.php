

<hr>
<h2>Study Time</h2>
<div class="stat-card">
    <i class="fas fa-graduation-cap"></i>
    <p>Average total study hours : <?php echo isset($studyData['avgTotal']) ? $studyData['avgTotal'] . ' hours' : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-clock"></i>
    <p>You studied :  <?php echo isset($studyData['Studies']) ? $studyData['Studiet'] . ' hours' : 'N/A'; ?></p>
</div>
<div class="stat-card">
    <i class="fas fa-hourglass-end"></i>
    <p>You can study another : <?php echo isset($studyData['RemainingStudy']) ? $studyData['RemainingStudy'] . ' hours' : 'N/A'; ?></p>
</div>