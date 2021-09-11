<?php
session_start();
$username = $_SESSION["USERNAME"];
$plan = $_SESSION["PLAN"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Maintain Weight</title>
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
        <h2 style="margin-top:30px; margin-bottom:30px; font-style:italic; color: black; text-align: center">MAINTAIN WEIGHT PROGRAM</h2>
        <img src="img/maintain-weight.jpg" style="width: 100%; height: 600px; margin-bottom:50px">
        <b style="text-align: justify; font-style:italic; font-size:large">This is a five minute program with no-equipment required.
          It can be used in combination with other programs.It includes cardio, strength
          (upper body and lower body), abs and core, and challenge days. Each workout is only five
          minutes long but each one is intense. You can make it easier by splitting the total routine
          into manageable sets and rest for as long as you need or you can make it EPIC and do everything
          in one go.
          The program is 30 days long plus one extra challenge day for when you recycle the program over
          a period of several months.
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
          <h4 class="card-title" style="text-align: center;">MAINTAIN WEIGHT EXERCISE</h4>
        </div>
        <div class="card-footer text-center">
          <a href="maintainWeightExercise.php" class="btn btn-primary">Check Now</a>
        </div>
      </div>
    </div>

    <div class="col-sm-5 my-1 float-center">
      <div class="card">
      <img class="card-img-top float-right" src="img/mwd.jpg">
        <div class="card-body">
          <h4 class="card-title" style="text-align: center;">MAINTAIN WEIGHT DIET</h4>
        </div>
        <div class="card-footer text-center">
          <a href="maintainWeightDiet.php" class="btn btn-primary">Check Now</a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
</body>

</html>