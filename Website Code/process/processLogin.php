<?php
    include('../helper/connection.php');
    session_start();
    $error = '';

    if(isset($_POST["submit"])){
        if(!empty($_POST["username"]) || !empty($_POST["password"])) 
        {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if(!$con) 
            {
                die("Connection failed : " .oci_error());
            }

            $query = "SELECT * FROM fit_login WHERE username='$username' AND password='$password'";
            $result = oci_parse($con, $query);
            $r = oci_execute($result);
            
            $row = oci_fetch_array($result);
            

            if(oci_num_rows($result) == 1) 
            {
                $_SESSION["ACCOUNT_ID"] = $row["ID"];
                $_SESSION["NAME"] = $row["NAME"];
                $_SESSION["USERNAME"] = $row["USERNAME"]; 
                $_SESSION["MEMBERSHIP_PLAN"] = $row["MEMBERSHIP_PLAN"]; 
                
                
                header("location:../profile.php"); 
                
            } 
            else 
            {
                ?>
        <script>
            alert("Invalid Credentials!");
            document.location = "../login.php";
        </script>
<?php
        }
    }
}
?>