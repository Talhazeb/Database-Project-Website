<?php
session_start();
$username = $_SESSION["USERNAME"];
$plan = $_SESSION["PLAN"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Build Muscle</title>
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
        <h2 style="margin-top:30px; margin-bottom:30px; font-style:italic; color: black; text-align: center">BUILD MUSCLE PROGRAM</h2>
        <img src="img/build-muscle.jpeg" style="width: 100%; height: 600px; margin-bottom:50px">
        <b style="text-align: justify; font-style:italic; font-size:large">This is a strength-oriented dumbbell-based 
        30-day program designed for muscle definition. Each day focuses on a specific area: shoulders, 
        chest & triceps, back & biceps, legs & abs. It can be scaled up or down depending on the dumbbells’ 
        weight you choose. To get the most out of this program pick a pair of dumbbell you can just do 20 
        alternating bicep curls with (20 in total, 10 each arm). Recommended starting weight per dumbbell 
        is 7 ½ kg (16lb) for men; 5kg (11lb) for women. This is a classic strength training program with each 
        exercise being performed individually until muscle fatigue is achieved. Each session will take up to 
        20 minutes making it easy to fit into your day.
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
          <h4 class="card-title" style="text-align: center;">BUILD MUSCLE EXERCISE</h4>
        </div>
        <div class="card-footer text-center">
          <a href="buildMuscleExcercise.php" class="btn btn-primary">Check Now</a>
        </div>
      </div>
    </div>

    <div class="col-sm-5 my-1 float-center">
      <div class="card">
      <img class="card-img-top float-right" src="img/mwd.jpg">
        <div class="card-body">
          <h4 class="card-title" style="text-align: center;">BUILD MUSCLE DIET</h4>
        </div>
        <div class="card-footer text-center">
          <a href="buildMuscleDiet.php" class="btn btn-primary">Check Now</a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
</body>

</html>