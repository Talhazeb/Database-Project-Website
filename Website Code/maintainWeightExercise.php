<?php
session_start();
$username = $_SESSION["USERNAME"];
$plan = $_SESSION["PLAN"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maintain Weight Exercise</title>
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
                <h2 style="margin-top:100px; color: black; text-align: center; font-style:italic">MAINTAIN WEIGHT PROGRAM</h2>
                <br>
            </div>
        </div>
    </div>

    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day1" value="1" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 1 | CARDIO</h5>
                    <br>
                    <p>

                        <b>3 min</b> march steps<br>
                        <b>3 min</b> high knees<br>

                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day2" value="2" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 2 | UPPERBODY STRENGTH</h5>
                    <br>
                    <p>

                        <b>3 min</b> push ups<br>
                        <b>3 min</b> bicep extensions<br>


                    </p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day3" value="3" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 3 | LOWERBODY STRENGTH</h5>
                    <br>
                    <p>

                        <b>1 min</b> lunges<br>
                        <b>1 min</b> side leg raises<br>
                        <b>1 min</b> reverse lunges<br>
                        <b>1 min</b> calf raises<br>
                        <b>1 min</b> deep side lunges<br>

                    </p>
                </div>
            </div>
        </div>


        <hr>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day4" value="4" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 4 | ABS & CORE</h5>
                    <br>
                    <p>

                        <b>1 min</b> crunches<br>
                        <b>1 min</b> flutter kicks<br>
                        <b>1 min</b> sitting twists<br>
                        <b>1 min</b> raised leg circles<br>
                        <b>1 min</b> side leg raises<br>

                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day5" value="5" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 5 | CHALLENGE</h5>
                    <br>
                    <p>

                        <b>5 min</b> raised arms hold<br>

                    </p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day6" value="6" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 6 | CARDIO & ABS</h5>
                    <br>
                    <p>

                        <b>3 min</b> high knees<br>
                        <b>3 min</b> plank hold<br>

                    </p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day7" value="7" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 7 | UPPERBODY STRENGTH</h5>
                    <br>
                    <p>

                        <b>1 min</b> push ups<br>
                        <b>1 min</b> shoulder taps<br>
                        <b>1 min</b> reverse angels<br>
                        <b>1 min</b> w-extensions<br>
                        <b>1 min</b> prone reverse fly<br>

                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day8" value="8" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 8 | LOWERBODY STRENGTH</h5>
                    <br>
                    <p>

                        <b>1 min</b> bridges<br>
                        <b>1 min</b> reverse plank leg raise<br>
                        <b>1 min</b> knee hug hold (30 sec pers side)<br>
                        <b>1 min</b> quad stretch hold (30 sec pers side)<br>
                        <b>1 min</b> calf raise hold<br>

                    </p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day9" value="9" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 9 | ABS & CORE</h5>
                    <br>
                    <p>

                        <b>1 min</b> elbow plank hold<br>
                        <b>1 min</b> uneven plank hold<br>
                        <b>1 min</b> side plank hold<br>
                        <b>1 min</b> raise plank rotations<br>
                        <b>1 min</b> side bridges<br>

                    </p>
                </div>
            </div>
        </div>


        <hr>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day10" value="10" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 10 | CHALLENGE</h5>
                    <br>
                    <p>

                        <b>5 min</b> side leg raises<br>

                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day11" value="11" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 11 | CARDIO</h5>
                    <br>
                    <p>

                        <b>5 min</b> high knees<br>

                    </p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day12" value="12" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 12 | UPPPERBODY & CORE</h5>
                    <br>
                    <p>

                        <b>3 min</b> push ups<br>
                        <b>3 min</b> shoulder taps<br>

                    </p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day13" value="13" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 13 | LOWERBODY STRENGTH</h5>
                    <br>
                    <p>

                        <b>3 min</b> squats<br>
                        <b>3 min</b> calf raises<br>

                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day14" value="14" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 14 | ABS</h5>
                    <br>
                    <p>

                        <b>3 min</b> crunches<br>
                        <b>3 min</b> hollow hold<br>


                    </p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day15" value="15" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 15 | CHALLENGE</h5>
                    <br>
                    <p>

                        <b>5 min</b> jumping jacks<br>

                    </p>
                </div>
            </div>
        </div>


        <hr>


        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day16" value="16" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 16 | CARDIO & CORE</h5>
                    <br>
                    <p>

                        <b>1 min</b> high knees<br>
                        <b>1 min</b> basic burpees<br>
                        <b>1 min</b> climbers<br>
                        <b>1 min</b> plank hold<br>
                        <b>1 min</b> climber taps<br>

                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day17" value="17" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 17 | UPPERBODY STRENGTH</h5>
                    <br>
                    <p>

                        <b>3 min</b> push ups<br>
                        <b>3 min</b> standing shoulder taps<br>


                    </p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day18" value="18" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 18 | LOWERBODY STRENGTH</h5>
                    <br>
                    <p>

                        <b>5 min</b> reverse lunges<br>

                    </p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day19" value="19" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 19 | ABS</h5>
                    <br>
                    <p>

                        <b>3 min</b> crunches<br>
                        <b>3 min</b> flutter kicks<br>

                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day20" value="20" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 20 | CHALLENGE</h5>
                    <br>
                    <p>

                        <b>5 min</b> bicep extensions<br>

                    </p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day21" value="21" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 21 | CARDIO & ABS</h5>
                    <br>
                    <p>

                        <b>3 min</b> basic burpees<br>
                        <b>3 min</b> plank hold<br>

                    </p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day22" value="22" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 22 | ABS</h5>
                    <br>
                    <p>

                        <b>1 min</b> push ups<br>
                        <b>1 min</b> bicep extensions<br>
                        <b>3 min</b> reverse angels<br>

                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day23" value="23" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 23 | LOWERBODY STRENGTH</h5>
                    <br>
                    <p>

                        <b>1 min</b> knee-ins<br>
                        <b>1 min</b> raised leg swings<br>
                        <b>1 min</b> leg extensions<br>
                        <b>1 min</b> side leg extensions<br>
                        <b>1 min</b> side leg raises<br>

                    </p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day24" value="24" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 24 | ABS & CORE</h5>
                    <br>
                    <p>

                        <b>1 min</b> leg raise<br>
                        <b>1 min</b> raised legs hold<br>
                        <b>1 min</b> scissors<br>
                        <b>1 min</b> windshield wipers<br>
                        <b>1 min</b> high crunches<br>


                    </p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day25" value="25" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 25 | CHALLENGE</h5>
                    <br>
                    <p>

                        <b>5 min</b> calf raise hold<br>

                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day26" value="26" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 26 | CARDIO</h5>
                    <br>
                    <p>

                        <b>5 min</b> high knees<br>

                    </p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day27" value="27" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 27 | UPPERBODY STRENGTH</h5>
                    <br>
                    <p>

                        <b>1 min</b> push ups shoulder taps<br>
                        <b>1 min</b> chest extensions<br>
                        <b>1 min</b> scissor chops<br>
                        <b>1 min</b> arm scissiors<br>
                        <b>1 min</b> raised arms hold<br>


                    </p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day28" value="28" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 28 | LOWERBODY STRENGTH</h5>
                    <br>
                    <p>

                        <b>1 min</b> squats<br>
                        <b>1 min</b> squat hold<br>
                        <b>1 min</b> calf raises<br>
                        <b>1 min</b> side-to-side lunges<br>
                        <b>1 min</b> lunges<br>

                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day29" value="29" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 29 | ABS & CORE</h5>
                    <br>
                    <p>

                        <b>3 min</b> sit-ups<br>
                        <b>3 min</b> sitting twists<br>

                    </p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="day30" value="30" id="flexCheckDefault1">
                    <h5 class="mt-4">Day 30 | CHALLENGE</h5>
                    <br>
                    <p>

                        <b>5 min</b> wall-sit hold<br>


                    </p>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>
</body>

</html>