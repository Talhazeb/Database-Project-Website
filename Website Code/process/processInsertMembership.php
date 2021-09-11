<?php
session_start();
$username = $_SESSION["USERNAME"];
?>

<?php
include '../helper/connection.php';

$age = $_POST["age"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$plan = $_POST["plan"];


$query1 = "SELECT * from fit_member WHERE username = '$username'";

$sql1 = oci_parse($con, $query1);
$r1 = oci_execute($sql1, OCI_COMMIT_ON_SUCCESS);
$row = oci_fetch_array($sql1);

$id_member = $row["ID_MEMBER"];

$query2 = "INSERT INTO fit_membership VALUES (fit_membership_seq.NEXTVAL, '$id_member', '$username', '$age', '$height', '$weight', '$plan')";
$sql2 = oci_parse($con, $query2);
$r2 = oci_execute($sql2, OCI_COMMIT_ON_SUCCESS);

$query3 = "UPDATE fit_login SET membership_plan = 1 WHERE username = '$username'";
$sql3 = oci_parse($con, $query3);
$r3 = oci_execute($sql3, OCI_COMMIT_ON_SUCCESS);

$_SESSION["PLAN"] = $plan;


if ($r1 == 1 && $r2 == 1) {
    echo $plan;
    if($plan == "Maintain Weight")
    {
        echo $plan;
?>
    <script>
        alert("Press Ok to Show Recommendations according your plan!");
        document.location = "../maintainWeight.php";
    </script>
<?php
} elseif($plan == "Gain Weight"){
    ?>
    <script>
        alert("Press Ok to Show Recommendations according your plan!");
        document.location = "../gainWeight.php";
    </script>
<?php

} elseif($plan == "Lose Weight"){
    ?>
    <script>
        alert("Press Ok to Show Recommendations according your plan!");
        document.location = "../loseWeight.php";
    </script>
<?php
}
elseif($plan == "Build Muscle"){
    ?>
    <script>
        alert("Press Ok to Show Recommendations according your plan!");
        document.location = "../buildMuscle.php";
    </script>
<?php
}
}
?>