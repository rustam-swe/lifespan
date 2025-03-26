<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sleep Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="/styles/styles.css" rel="stylesheet">
</head>
<body>
    <div class="form-container m-5">
        <h2>Sleep Calculator</h2>
        <form action="/form" method="POST">
            <div class="mb-3">
                <label for="dob">Enter your year, month, and day of birth</label>
                <input type="date" name="dob" id="dob" class="form-control" required>
            </div>
            <button type="submit">Submit</button>
        </form>
        <?php if (isset($error)): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>