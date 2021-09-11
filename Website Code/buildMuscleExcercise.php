<?php
session_start();
$username = $_SESSION["USERNAME"];
$plan = $_SESSION["PLAN"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Build Muscle Exercise</title>
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

  <form action="process/processbuildMuscleExercise.php" method="POST">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="1" id="flexCheckDefault1">
            <h5 class="mt-4">Day 1 | SHOULDERS, CHEST & TRICEPS</h5>
            <br>
            <p style="text-align: justify">

              <b>4 sets</b> shoulder press <br>reps: 12,10,10,8<br><br>
              <b>4 sets</b> chest press <br>reps: 12,10,10,8<br><br>
              <b>4 sets</b> lateral raises <br>reps: 6,6,4,3<br><br>
              <b>4 sets</b> tricep extensions <br>reps: 5,4,4,3<br><br>

            </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="2" id="flexCheckDefault1">
            <h5 class="mt-4">Day 2 | BACK & BICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> alt bicep curls <br>reps: 6,5,5,4<br><br>
              <b>4 sets</b> upright rows <br>reps: 8,8,6,5<br><br>
              <b>4 sets</b> deadlifts <br>reps: 8,8,6,5<br><br>
              <b>4 sets</b> shrugs <br>reps: 10,10,8,6<br><br>
              <b>4 sets</b> bent over rows <br>reps: 8,8,6,5<br><br>
              <b>4 sets</b> bent over flys <br>reps: 6,5,5,4<br><br>

            </p>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="3" id="flexCheckDefault1">
            <h5 class="mt-4">Day 3 | LEG DAY</h5>
            <br>
            <p>

              <b>4 sets</b> goblet squats <br>reps: 12,10,10,8<br><br>
              <b>4 sets</b> forward lunges <br>reps: 5,4,4,3<br><br>
              <b>4 sets</b> side lunges <br>reps: 5,4,4,3<br><br>
              <b>4 sets</b> calf raise <br>reps: 14,12,12,10<br><br>

            </p>
          </div>
        </div>
      </div>


      <hr>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="4" id="flexCheckDefault1">
            <h5 class="mt-4">Day 4 | ABS</h5>
            <br>
            <p style="text-align: justify">

              <b>4 sets</b> sit ups <br>reps: 16,14,14,10<br><br>
              <b>4 sets</b> sitting twists <br>reps: 8,7,7,5<br><br>
              <b>4 sets</b> leg raises <br>reps: 16,14,14,12<br><br>
              <b>4 sets</b> flutter kicks <br>reps: 10,8,8,6<br><br>

            </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="5" id="flexCheckDefault1">
            <h5 class="mt-4">Day 5 | SHOULDER, CHEST & TRICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> arnold press <br>reps: 10,10,8,6<br><br>
              <b>4 sets</b> push ups <br>reps: 12,10,10,8<br><br>
              <b>4 sets</b> lateral raises <br>reps: 6,6,5,4<br><br>
              <b>4 sets</b> tricep extensions <br>reps: 6,5,5,4<br><br>


            </p>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="6" id="flexCheckDefault1">
            <h5 class="mt-4">Day 6 | BACK & BICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> bicep curls <br>reps: 10,8,8,6<br><br>
              <b>4 sets</b> bent over rows <br>reps: 8,8,6,6<br><br>
              <b>4 sets</b> farmer's walk <br>reps: 14,12,10,10<br><br>

            </p>
          </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="7" id="flexCheckDefault1">
            <h5 class="mt-4">Day 7 | LEG</h5>
            <br>
            <p style="text-align: justify">

              <b>4 sets</b> squats <br>reps: 8,8,6,4<br><br>
              <b>4 sets</b> forward lunges <br>reps: 6,4,4,3<br><br>
              <b>4 sets</b> reverse lunge step-ups <br>reps: 5,4,4,3<br><br>
              <b>4 sets</b> calf raises <br>reps: 14,14,12,10<br><br>

            </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="8" id="flexCheckDefault1">
            <h5 class="mt-4">Day 8 | ABS</h5>
            <br>
            <p>

              <b>4 sets</b> elbow plank leg raises <br>reps: 10,8,8,6<br><br>
              <b>4 sets</b> up & down planks <br>reps: 10,8,8,6<br><br>
              <b>4 sets</b> elbow plank <br>reps: 12,10,10,8<br><br>
              <b>4 sets</b> side elbow plank <br>reps: 12,10,10,8<br><br>

            </p>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="9" id="flexCheckDefault1">
            <h5 class="mt-4">Day 9 | SHOULDER, CHEST & TRICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> shoulder press <br>reps: 12,12,10,8<br><br>
              <b>4 sets</b> chest press <br>reps: 12,12,10,8<br><br>
              <b>4 sets</b> lateral raises <br>reps: 7,6,5,4<br><br>
              <b>4 sets</b> forward raises <br>reps: 5,4,4,3<br><br>

            </p>
          </div>
        </div>
      </div>


      <hr>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="10" id="flexCheckDefault1">
            <h5 class="mt-4">Day 10 | BACK & TRICEPS</h5>
            <br>
            <p style="text-align: justify">

              <b>4 sets</b> alt bicep curls <br>reps: 6,6,5,4<br><br>
              <b>4 sets</b> upright rows <br>reps: 10,8,6,5<br><br>
              <b>4 sets</b> deadlifts <br>reps: 10,8,6,5<br><br>
              <b>4 sets</b> shrugs <br>reps: 12,10,8,6<br><br>
              <b>4 sets</b> renegade rows <br>reps: 7,6,6,5<br><br>

            </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="11" id="flexCheckDefault1">
            <h5 class="mt-4">Day 11 | LEG</h5>
            <br>
            <p>

              <b>4 sets</b> goblet squats <br>reps: 12,12,10,8<br><br>
              <b>4 sets</b> forward lunges <br>reps: 6,5,4,3<br><br>
              <b>4 sets</b> single leg deadlifts <br>reps: 5,5,4,3<br><br>
              <b>4 sets</b> calf raises <br>reps: 14,14,12,12<br><br>

            </p>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="12" id="flexCheckDefault1">
            <h5 class="mt-4">Day 12 | ABS</h5>
            <br>
            <p>

              <b>4 sets</b> sit ups <br>reps: 16,16,14,10<br><br>
              <b>4 sets</b> sitting twists <br>reps: 8,7,7,6<br><br>
              <b>4 sets</b> leg raises <br>reps: 16,16,14,12<br><br>
              <b>4 sets</b> side jackknives <br>reps: 10,8,8,6<br><br>

            </p>
          </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="13" id="flexCheckDefault1">
            <h5 class="mt-4">Day 13 | SHOULDER, CHEST & TRICEPS</h5>
            <br>
            <p style="text-align: justify">

              <b>4 sets</b> arnold press <br>reps: 10,10,8,6<br><br>
              <b>4 sets</b> push ups <br>reps: 12,12,10,8<br><br>
              <b>4 sets</b> lateral raises <br>reps: 7,6,6,4<br><br>
              <b>4 sets</b> tricep extensions <br>reps: 6,5,5,4<br><br>

            </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="14" id="flexCheckDefault1">
            <h5 class="mt-4">Day 14 | BACK & BICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> alt bicep curls <br>reps: 7,6,5,4<br><br>
              <b>4 sets</b> upright rows <br>reps: 10,8,6,6<br><br>
              <b>4 sets</b> deadlifts <br>reps: 10,8,8,5<br><br>
              <b>4 sets</b> shrugs <br>reps: 12,10,10,6<br><br>
              <b>4 sets</b> bent over rows <br>reps: 10,8,6,6<br><br>
              <b>4 sets</b> bent over flys <br>reps: 6,6,5,4<br><br>

            </p>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="15" id="flexCheckDefault1">
            <h5 class="mt-4">Day 15 | LEG</h5>
            <br>
            <p>

              <b>4 sets</b> squats <br>reps: 10,8,6,4<br><br>
              <b>4 sets</b> forward lunges <br>reps: 6,5,4,4<br><br>
              <b>4 sets</b> side lunges <br>reps: 5,5,4,3<br><br>
              <b>4 sets</b> calf raises <br>reps: 16,14,12,12<br><br>

            </p>
          </div>
        </div>
      </div>


      <hr>


      <div class="row">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="16" id="flexCheckDefault1">
            <h5 class="mt-4">Day 16 | ABS</h5>
            <br>
            <p style="text-align: justify">

              <b>4 sets</b> elbow plank leg raises <br>reps: 10,10,8,6<br><br>
              <b>4 sets</b> elbow plank side raises <br>reps: 10,8,8,6<br><br>
              <b>4 sets</b> elbow plank <br>reps: 12,10,10,8<br><br>
              <b>4 sets</b> side elbow plank <br>reps: 12,10,10,8<br><br>

            </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="17" id="flexCheckDefault1">
            <h5 class="mt-4">Day 17 | SHOULDER, CHEST & TRICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> shoulder press <br>reps: 12,12,10,10<br><br>
              <b>4 sets</b> chest press <br>reps: 12,12,10,10<br><br>
              <b>4 sets</b> lateral raises <br>reps: 7,7,6,4<br><br>
              <b>4 sets</b> tricep extensions <br>reps: 6,5,4,3<br><br>

            </p>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="18" id="flexCheckDefault1">
            <h5 class="mt-4">Day 18 | BACK & BICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> bicep curls <br>reps: 12,10,8,6<br><br>
              <b>4 sets</b> bent over rows <br>reps: 10,8,8,6<br><br>
              <b>4 sets</b> farmer's walk <br>reps: 14,14,12,10<br><br>

            </p>
          </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="19" id="flexCheckDefault1">
            <h5 class="mt-4">Day 19 | LEGS</h5>
            <br>
            <p style="text-align: justify">

              <b>4 sets</b> goblet squats <br>reps: 12,12,10,10<br><br>
              <b>4 sets</b> forward lunges <br>reps: 6,5,5,4<br><br>
              <b>4 sets</b> single leg deadlifts <br>reps: 6,5,4,3<br><br>
              <b>4 sets</b> calf raises <br>reps: 16,14,14,12<br><br>

            </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="20" id="flexCheckDefault1">
            <h5 class="mt-4">Day 20 | ABS</h5>
            <br>
            <p>

              <b>4 sets</b> V-ups <br>reps: 10,10,8,6<br><br>
              <b>4 sets</b> sitting twists <br>reps: 10,7,7,6<br><br>
              <b>4 sets</b> leg raises <br>reps: 18,16,14,12<br><br>
              <b>4 sets</b> knee-ins & twist <br>reps: 10,8,8,6<br><br>

            </p>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="21" id="flexCheckDefault1">
            <h5 class="mt-4">Day 21 | SHOULDER, CHEST & TRICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> arnold press <br>reps: 12,10,8,8<br><br>
              <b>4 sets</b> push ups <br>reps: 12,12,10,10<br><br>
              <b>4 sets</b> lateral raises <br>reps: 7,7,6,5<br><br>
              <b>4 sets</b> tricep extensions <br>reps: 6,5,5,4<br><br>

            </p>
          </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="22" id="flexCheckDefault1">
            <h5 class="mt-4">Day 22 | BACK & BICEPS</h5>
            <br>
            <p style="text-align: justify">

              <b>4 sets</b> alt bicep curls <br>reps: 7,6,5,5<br><br>
              <b>4 sets</b> upright rows <br>reps: 12,8,6,6<br><br>
              <b>4 sets</b> deadlifts <br>reps: 10,8,8,6<br><br>
              <b>4 sets</b> shrugs <br>reps: 12,10,10,8<br><br>
              <b>4 sets</b> renegade rows <br>reps: 8,6,6,5<br><br>

            </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="23" id="flexCheckDefault1">
            <h5 class="mt-4">Day 23 | LEG</h5>
            <br>
            <p>

              <b>4 sets</b> squats <br>reps: 10,8,6,6<br><br>
              <b>4 sets</b> forward lunges <br>reps: 6,6,5,4<br><br>
              <b>4 sets</b> side lunges <br>reps: 5,5,4,3<br><br>
              <b>4 sets</b> calf raises <br>reps: 16,16,14,12<br><br>

            </p>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="24" id="flexCheckDefault1">
            <h5 class="mt-4">Day 24 | ABS</h5>
            <br>
            <p>

              <b>4 sets</b> elbow plank leg raises <br>reps: 10,10,8,8<br><br>
              <b>4 sets</b> elbow plank side raises <br>reps: 12,10,8,6<br><br>
              <b>4 sets</b> elbow plank <br>reps: 12,10,10,8<br><br>
              <b>4 sets</b> side elbow plank <br>reps: 12,10,10,8<br><br>


            </p>
          </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="25" id="flexCheckDefault1">
            <h5 class="mt-4">Day 25 | SHOULDER, CHEST & TRICEPS</h5>
            <br>
            <p style="text-align: justify">

              <b>4 sets</b> shoulder press <br>reps: 14,12,10,10<br><br>
              <b>4 sets</b> chest press <br>reps: 14,12,10,10<br><br>
              <b>4 sets</b> lateral raises <br>reps: 8,7,6,5<br><br>
              <b>4 sets</b> tricep extensions <br>reps: 5,4,4,3<br><br>

            </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="26" id="flexCheckDefault1">
            <h5 class="mt-4">Day 26 | BACK & BICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> alt bicep curls <br>reps: 8,6,6,5<br><br>
              <b>4 sets</b> upright rows <br>reps: 12,8,8,6<br><br>
              <b>4 sets</b> deadlifts <br>reps: 12,8,8,6<br><br>
              <b>4 sets</b> shrugs <br>reps: 12,12,10,8<br><br>
              <b>4 sets</b> bent over rows <br>reps: 12,8,8,6<br><br>
              <b>4 sets</b> bent over flys <br>reps: 8,6,5,4<br><br>

            </p>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="27" id="flexCheckDefault1">
            <h5 class="mt-4">Day 27 | LEG</h5>
            <br>
            <p>

              <b>4 sets</b> squats <br>reps: 14,12,10,10<br><br>
              <b>4 sets</b> forward lunges <br>reps: 6,6,5,5<br><br>
              <b>4 sets</b> side lunges <br>reps: 6,5,4,4<br><br>
              <b>4 sets</b> calf raises <br>reps: 16,16,14,14<br><br>


            </p>
          </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="28" id="flexCheckDefault1">
            <h5 class="mt-4">Day 28 | ABS</h5>
            <br>
            <p style="text-align: justify">

              <b>4 sets</b> sit ups <br>reps: 16,16,14,14<br><br>
              <b>4 sets</b> sitting twists <br>reps: 10,8,7,7<br><br>
              <b>4 sets</b> leg raises <br>reps: 18,18,14,12<br><br>
              <b>4 sets</b> side jackknives <br>reps: 12,10,8,6<br><br>

            </p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="29" id="flexCheckDefault1">
            <h5 class="mt-4">Day 29 | SHOULDER, CHEST & TRICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> arnold press <br>reps: 12,12,10,8<br><br>
              <b>4 sets</b> push ups <br>reps: 14,12,10,10<br><br>
              <b>4 sets</b> lateral raises <br>reps: 8,8,7,5<br><br>
              <b>4 sets</b> tricep extensions <br>reps: 6,6,4,4<br><br>

            </p>
          </div>
        </div>


        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="day" value="30" id="flexCheckDefault1">
            <h5 class="mt-4">Day 30 | BACK & BICEPS</h5>
            <br>
            <p>

              <b>4 sets</b> bicep curls <br>reps: 12,10,10,8<br><br>
              <b>4 sets</b> bent over rows <br>reps: 12,10,8,6<br><br>
              <b>4 sets</b> farmer's walk <br>reps: 14,14,12,12<br><br>

            </p>
          </div>
        </div>
      </div>
      <hr>
      <div>
        <input class="btn btn-success" type="submit" name="submit" value="Submit">
      </div>
    </div>
  </form>
  <br>
  <br>
  <br>
  <br>
  <br>

  </div>