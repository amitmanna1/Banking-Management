<?php
session_start();
include 'connection.php';



if(isset($_POST['submit'])){
    $emp_email = $_POST['emp_email'];
    $emp_id = $_POST['emp_id'];


    $select =  "SELECT  `name`, `email`, `empId` FROM `employees` WHERE email='$emp_email' AND empId='$emp_id' ";

    $sql = mysqli_query($con,$select);

    $res = mysqli_fetch_assoc($sql);

    $_SESSION["emp"]=$res['name'];

    if(mysqli_num_rows($sql)>0){
        echo "<script>
            alert('Login successfully');
            window.location.href='./emp_dashboard.php';
        </script>";
    }
    else{
        echo " <script> alert('User Not Found');
        window.location.href='./index.php';
        </script> ";
    }


}

?>