<?php
include '../helper/connection.php';

$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$contact_no = $_POST["contact_no"];
$email = $_POST["email"];


$query3 = "SELECT * FROM fit_login where username = '$username'";

$sql_query = 'SELECT COUNT(*) AS NUMBER_OF_ROWS FROM (' . $query3 . ')';
$r3 = oci_parse($con, $sql_query);
oci_define_by_name($r3, 'NUMBER_OF_ROWS', $number_of_rows);

oci_execute($r3);

oci_fetch($r3);

if ($number_of_rows == 1) {
?>
    <script>
        alert("Username already Taken!");
        document.location = "../formInsertMember.php";
    </script>
    <?php
} else {

    $query1 = "INSERT INTO fit_member VALUES (fit_member_seq.NEXTVAL, '$name', '$username', '$password', '$gender', '$address', '$contact_no', '$email')";
    $query2 = "INSERT INTO fit_login VALUES (fit_login_seq.NEXTVAL, '$name', '$username', '$password', 0)";
    echo $query2;

    $sql1 = oci_parse($con, $query1);
    $r1 = oci_execute($sql1, OCI_COMMIT_ON_SUCCESS);

    $sql2 = oci_parse($con, $query2);
    $r2 = oci_execute($sql2, OCI_COMMIT_ON_SUCCESS);

    if ($r1 == 1 && $r2 == 1) {
    ?>
        <script>
            alert("Data entered successfully");
            document.location = "../login.php";
        </script>
<?php
    } else {
        header("location:../login.php");
    }
}
?>