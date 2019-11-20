<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Get jQuery -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <?php include 'inc/functions.php'; ?>
</head>

  <script>
    //Refresh page after 30000ms
    $(document).ready(function(){
        setInterval(function() {
            window.location = location.href;
        }, 30000);
    });
  </script>

<?php   
  //Get random color for body background
  $color = getRandomColor($colors);
?>

<body style="background-color:<?php echo $color; ?>;">
  <div class="container">
    <?php printQuote($quotes); ?>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
