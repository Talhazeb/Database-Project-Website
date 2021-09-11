<?php
include('helper/connection.php');
session_start();
$username = $_SESSION["USERNAME"];

$query = "SELECT * FROM fit_login WHERE username = '$username'";
$result = oci_parse($con, $query);
$r = oci_execute($result);
$row = oci_fetch_array($result);
$membership = $row["MEMBERSHIP_PLAN"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile - FitMe</title>
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
        <?php if (isset($_SESSION["USERNAME"]) && $membership == 1):?>
          <li class="nav-item">
            <a class="nav-link" href="../process/processSelectPlan.php" style="padding-right: 35px">See Plan</a>
          </li>
        <?php elseif (isset($_SESSION["USERNAME"]) && $membership == 0) : ?>
          <li class="nav-item">
            <a class="nav-link" href="formInsertMembership.php" style="padding-right: 35px">Membership Plan</a>
          </li>
        <?php endif ?>
        <li class="nav-item">
          <a class="nav-link" style="padding-right: 35px; color: green"><?php echo $username; ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>

  </nav>

  <header class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        </div>
      </div>
    </div>
  </header>
  <br>

  <div class="container">

    <div class="row">
      <div class="col-sm-8" style="margin-right: 50px">
        <h2 class="mt-4">About Us</h2>
        <p style="text-align: justify">Our knowledgeable, professional counselors take an
          active role in each members individual success, creating an atmosphere of assistance
          and reliability. Drop by anytime and let us show you how consistent weight training
          with state-of-the-art equipment, Precor and Life fitness cardiovascular program and
          common-sense nutrition can assure your success. Whether youre interested in weight
          loss, toning, competitive bodybuilding or just starting out, Life Style Gym is the
          right place for you.</p>
      </div>

      <div class="col-sm-3">
        <h2 class="mt-4">Contact Us</h2>
        <address>
          <strong>Fit Me</strong>
          <br>talhazeb@gmail.com
          <br>ali@gmail.com
          <br>saroosh@gmail.com
        </address>
      </div>

    </div>

    <br><br>

</body>

</html>