<?php
session_start();
$username = $_SESSION["USERNAME"];
$plan = $_SESSION["PLAN"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gain Weight</title>
  <link href="img/logo.png" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link href="main_page.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-light navbar-light content-center fixed-top" style="height : 70px">
    <div class="container">
      <a class="navbar-brand" href="profile.php"><img src="img/logo.png" style="width: 8%"></a>
      <ul class="navbar-nav" style="font-size: 20px">
        <li class="nav-item">
          <a class="nav-link" href="profile.php" style="padding-right: 35px">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="padding-right: 35px; color: green"><?php echo $username; ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>

  </nav>

  <div class="container">
    <div class="maintainWeight-form">
      <div class="main-div">
        <h2 style="margin-top:30px; margin-bottom:30px; font-style:italic; color: black; text-align: center">GAIN WEIGHT PROGRAM</h2>
        <img src="img/maintain-weight.jpg" style="width: 100%; height: 600px; margin-bottom:50px">
        <b style="text-align: justify; font-style:italic; font-size:large">
        For some people, gaining weight or adding muscle can be just as difficult as losing weight 
        is for others. However, simply adding certain foods to your diet can make your weight gain 
        efforts both healthy and more effective. Weight gain occurs when you consistently consume 
        more calories than you burn each day. Depending on your activity level and body size, 3,000 
        calories may be greater than your current calorie needs, causing you to gain weight. it 
        would be relatively easy to consume 3,000 calories from highly processed refined foods, such as 
        bacon, potato chips, candies, cookies, sweetened cereals, and sugary drinks, as they’re highly 
        palatable and packed with calories. Here’s what 7 days on a 3,000-calorie diet may look like.
        </b>
        <br><br><br><br><br><br>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br>

  <div class="row">

    <div class="col-sm-5 my-1 float-center" style="margin-left: 300px;">
      <div class="card">
      <img class="card-img-top float-right" src="img/mwd.jpg">
        <div class="card-body">
          <h4 class="card-title" style="text-align: center;">GAIN WEIGHT DIET</h4>
        </div>
        <div class="card-footer text-center">
          <a href="WeightGainDiet.php" class="btn btn-primary">Check Now</a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
</body>

</html>