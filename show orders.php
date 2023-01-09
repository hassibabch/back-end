

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <!--  Render All Elements Normally  -->
    <link rel="stylesheet" href="css/normalize.css">
    <!--  Font Awesome Library  -->
    <link rel="stylesheet" href="css/all.min.css">

    <!--  Main Template Css File  -->
    <link rel="stylesheet" href="css/show-orders.css">

    <!--  Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" 
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" 
    rel="stylesheet">
    <title>Order now </title>
</head>

<?php 

require('conponent/header.php');

$query = "SELECT * FROM  orders ";
$orders =  mysqli_query($conn, $query);


?>
<!-- start landing -->
<div class="landing">
  <div class="container">
    <?php while($order = mysqli_fetch_assoc($orders)) : ?>
    <h3 style = "color:black"> <?= $order['name'] ?><span>###</span> <?= $order['phone'] ?> <span>###</span> $order['address'] <span>###</span> $order['food'] <span>###</span> $order['drinks'] </h3>
    <?php endwhile ?>

  </div>
<footer>
    <div class="container">
      <p class="copyright"> &copy; 2023  Resaurant  all rights reserved</p>
   </div>
</footer> 
</div>
<script src="main.js"></script>
</body>
</html>