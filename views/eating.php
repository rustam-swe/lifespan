<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eating Calvulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .custom-heading {
            font-size: 40px;
            font-weight: bold;
            color: #007bff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            padding: 10px;
            border-radius: 10px;
            
        }
    </style>  

</head>
<body>
      
      <div class="alert alert-success mt-4" style="margin: 500px; border-radius: 15px;" rule="alert">
          <h1 class="text-center custom-heading">Eating Time</h1>
            <hr style="color: red; height: 5px;">

            <p style="color: black; font-size: 25px; font-weight: bold;">
              <?php echo "The time you spend eating in your life time: " . round($result_eating['Done']) . " Hours"; ?>
            </p>
      </div>

</body>
</html>
