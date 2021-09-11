<?php
session_start();
$username = $_SESSION["USERNAME"];
?>


<!DOCTYPE html>
<html>

<head>
    <title>Insert Member</title>
    <link href="img/logo.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


</head>

<body style="background-color: grey">
    <nav class="navbar navbar-expand-sm bg-light navbar-light content-center fixed-top" style="height : 70px">
        <div class="container">
            <a class="navbar-brand" href="profile.php"><img src="img/logo.png" style="width: 8%"></a>
            <ul class="navbar-nav" style="font-size: 20px">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php" style="padding-right: 35px">Home</a>
                </li>
                <?php if (isset($_SESSION["NAME"])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" style="padding-right: 35px; color: green"><?php echo $username; ?></a>
                    </li>
                <?php else : ?>
                <?php endif ?>
            </ul>
        </div>

    </nav>

    <div class="container">
        <div class="insertMember-form">
            <div class="main-div">
                <h4 style="margin-top:135px; color: white; text-align: center">W E L C O M E !</h4>
                <h3 style="color: white; text-align: center">Fill in your data</h3><br>
                <form action="process/processInsertMembership.php" method="POST">
                    <div class="container" style="color: white">
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" placeholder="Age">
                        </div>
                        <div class="form-group">
                            <label>Height (cm)</label>
                            <input type="number" name="height" class="form-control" placeholder="Height">
                        </div>
                        <div class="form-group">
                            <label>Weight (kg)</label>
                            <input type="number" name="weight" class="form-control" placeholder="Weight">
                        </div>
                        <div class="form-group">
                            <label>Select Plan</label><br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="plan" value="Maintain Weight">Maintain Weight
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="plan" value="Gain Weight">Gain Weight
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="plan" value="Lose Weight">Lose Weight
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="plan" value="Build Muscle">Build Muscle
                                </label>
                            </div>
                        </div>

                        <div>
                            <input class="btn btn-success" type="submit" name="submit" value="Submit">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <br><br>
</body>

</html>