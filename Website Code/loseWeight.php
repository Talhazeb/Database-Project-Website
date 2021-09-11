<?php
session_start();
$username = $_SESSION["USERNAME"];
$plan = $_SESSION["PLAN"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lose Weight</title>
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
    <div class="loseWeight-form">
      <div class="main-div">
        <h2 style="margin-top:30px; margin-bottom:30px; font-style:italic; color: black; text-align: center">LOSE WEIGHT PROGRAM</h2>
        <img src="img/lose-weight.jpg" style="width: 100%; height: 600px; margin-bottom:50px">
        <b style="text-align: justify; font-style:italic; font-size:large">This is a 30-day no-equipment high 
        burn and weight lose oriented program. Each day is designed as a full circuit routine that is completed 
        without rest or water breaks. There are no levels in this program - everything is time-based and you 
        control the difficulty by increasing or decreasing your pace as you go from exercise to exercise. The 
        format is simple: for two consecutive days you will have 21 minutes to complete the workout and for the 
        two following days you will have just 9 minutes per workout. With the Full Circuit program you will get 
        slimmer and stronger and level up your functional fitness as well as define your abs and core. For maximum 
        results, pay attention to plank transitions and keep your body up. Dont drop it down as you change the 
        plank variations as you go through the sequence.
        </b>
        <br><br><br><br><br><br>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br>

  <div class="row">
    <div class="col-sm-5 my-1 float-right">
      <div class="card">
        <img class="card-img-top float-right" src="img/mwe.jpg">
        <div class="card-body">
          <h4 class="card-title" style="text-align: center;">LOSE WEIGHT EXERCISE</h4>
        </div>
        <div class="card-footer text-center">
          <a href="loseWeightExercise.php" class="btn btn-primary">Check Now</a>
        </div>
      </div>
    </div>

    <div class="col-sm-5 my-1 float-center">
      <div class="card">
      <img class="card-img-top float-right" src="img/mwd.jpg">
        <div class="card-body">
          <h4 class="card-title" style="text-align: center;">LOSE WEIGHT DIET</h4>
        </div>
        <div class="card-footer text-center">
          <a href="WeightLossDiet.php" class="btn btn-primary">Check Now</a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
</body>

</html>