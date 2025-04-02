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
            <div class="row gx-5 gy-5"> 
                <div class="col-md-4 mb-5">
                    <?php if (isset($familyTime)): ?>
                        <?php require 'family.php'; ?>
                    <?php else: ?>
                        <p class="error-message">Family data not available.</p>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 mb-5">
                    <?php if (isset($workData)): ?>
                        <?php require 'work.php'; ?>
                    <?php else: ?>
                        <p class="error-message">Work data not available.</p>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 mb-5">
                    <?php if (isset($sleepData)): ?>
                        <?php require 'sleep.php'; ?>
                    <?php else: ?>
                        <p class="error-message">Sleep data not available.</p>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 mb-5">
                    <?php if (isset($roadData)): ?>
                        <?php require 'road.php'; ?>
                    <?php else: ?>
                        <p class="error-message">Road data not available.</p>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 mb-5">
                    <?php if (isset($eatingData)): ?>
                        <?php require 'eating.php'; ?>
                    <?php else: ?>
                        <p class="error-message">Eating data not available.</p>
                    <?php endif; ?>
                </div>

                <div class="col-md-4 mb-5">
                    <?php if (isset($studyData)): ?>
                        <?php require 'study.php'; ?>
                    <?php else: ?>
                        <p class="error-message">Study data not available.</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="text-center">
                <a href="/form" class="back-button">Back to Form</a>
            </div>
        </div>
    </div>
</body>
</html>