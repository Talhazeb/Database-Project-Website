<?php
session_start();
$username = $_SESSION["USERNAME"];
?>

<?php
include '../helper/connection.php';

$day = $_POST["day"];
$intday = (int)$day;


if (isset($_POST["submit"])) {
    if (!empty($day)) {

        $query = "SELECT * FROM buildMuscle WHERE day = $intday";
        echo $query;
        $result = oci_parse($con, $query);
        $r = oci_execute($result);
        //echo $r;
        $num = 1;

        
        $array1[oci_num_rows($result)];

        echo oci_num_rows($result);
        //echo $r;
        while($row = oci_fetch_array($result)) 
        {   

            //$array[$num] = $row["BUILD_ID"];

            //$query = "INSERT INTO buildMuscleData VALUES(buildMuscleData_seq.NEXTVAL, '$array[$num]', '$username')";
            

            //$result = oci_parse($con, $query);
            //$r = oci_execute($result);

            $num++;
        }


        //header("location:../buildMuscleExerciseSum.php");
    } else {
?>
        <script>
            alert("No day Selected!");
            //document.location = "../buildMuscleExercise.php";
        </script>
<?php
    }
}
?>