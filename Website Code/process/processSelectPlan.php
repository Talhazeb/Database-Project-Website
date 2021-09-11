<?php
session_start();
$username = $_SESSION["USERNAME"];


include '../helper/connection.php';

$query = "SELECT * FROM fit_membership WHERE username = '$username'";
$result = oci_parse($con, $query);
$r = oci_execute($result);

$row = oci_fetch_array($result);

if($row["PLAN"] == "Maintain Weight")
{
    header("location:../maintainWeight.php"); 
}
elseif($row["PLAN"] == "Gain Weight")
{
    header("location:../gainWeightphp"); 
}
elseif($row["PLAN"] == "Lose Weight")
{
    header("location:../loseWeight.php"); 
}
elseif($row["PLAN"] == "Build Muscle")
{
    header("location:../buildMuscle.php"); 
}

?>
