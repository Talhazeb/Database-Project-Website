<?php
session_start();
$username = $_SESSION["USERNAME"];
?>

<?php
include '../helper/connection.php';

$query1 = "SELECT bm.day, bm.time, en.exerciseName
            from buildMuscle bm join exerciseName en
            on bm.build_Id = en.build_ID
            where username = '$username'";

$sql1 = oci_parse($con, $query1);
$r1 = oci_execute($sql1, OCI_COMMIT_ON_SUCCESS);

while ($row = oci_fetch_array($sql1)) {

    echo $row["day"];
    echo $row["time"];
    echo $row["exerciseName"];
}
?>