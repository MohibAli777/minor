<?php
include 'config.php';
$A_name = $_POST['username'];
$A_password = $_POST['userpassword'];
$result = mysqli_query($con,"SELECT * FROM `admin` WHERE username = '$A_name' AND userpassword = '$A_password'" );

session_start(); 

if(mysqli_num_rows($result)){
    $_SESSION['admin'] = $A_name;
    echo "
        <script>
            alert('Login succesfully');
            window.location.href='admin_add_product.php';
        </script>
    ";
}
else{
    echo "
        <script>
            alert('Invalid Login');
            window.location.href='login.php';
        </script>
    ";
}
?>