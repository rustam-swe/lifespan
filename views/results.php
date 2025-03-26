<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/styles/styles.css" rel="stylesheet">
</head>
<body>
    <div class="result-container m-5">
        <h1 class="text-center mb-4">Your Lifespan Statistics</h1>
        <hr>

        <div class="px-3">
            <?php if (isset($familyTime) && $familyTime): ?>
                <div class="mb-4">
                    <?php require 'family.php'; ?>
                </div>
            <?php else: ?>
                <p class="error-message mb-4">Family data not available.</p>
            <?php endif; ?>

            <?php if (isset($workData) && $workData): ?>
                <div class="mb-4">
                    <?php require 'work.php'; ?>
                </div>
            <?php else: ?>
                <p class="error-message mb-4">Work data not available.</p>
            <?php endif; ?>

            <?php if (isset($sleepData) && $sleepData): ?>
                <div class="mb-4">
                    <?php require 'sleep.php'; ?>
                </div>
            <?php else: ?>
                <p class="error-message mb-4">Sleep data not available.</p>
            <?php endif; ?>

            <?php if (isset($roadData) && $roadData): ?>
                <div class="mb-4">
                    <?php require 'road.php'; ?>
                </div>
            <?php else: ?>
                <p class="error-message mb-4">Road data not available.</p>
            <?php endif; ?>

            <?php if (isset($eatingData) && $eatingData): ?>
                <div class="mb-4">
                    <?php require 'eating.php'; ?>
                </div>
            <?php else: ?>
                <p class="error-message mb-4">Eating data not available.</p>
            <?php endif; ?>

            <?php if (isset($studyData) && $studyData): ?>
                <div class="mb-4">
                    <?php require 'study.php'; ?>
                </div>
            <?php else: ?>
                <p class="error-message mb-4">Study data not available.</p>
            <?php endif; ?>

            <a href="/form" class="back-button">Back to Form</a>
        </div>
    </div>
</body>
</html>