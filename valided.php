<?php
session_start();
include 'connection.php';



if(isset($_POST['submit'])){
    $manager_email = $_POST['manager_email'];
    $manager_id = $_POST['manager_id'];

    $select =  "SELECT `id`, `name`, `email`, `manager_id` FROM `manager_login` WHERE email='$manager_email' AND manager_id='$manager_id' ";

    $sql = mysqli_query($con,$select);

    if(mysqli_num_rows($sql)>0){
        echo "<script>
            alert('Login successfully');
            window.location.href='./all_cus.php';
        </script>";
    }
    else{
        echo " <script> alert('User Not Found');
        window.location.href='./index.php';
        </script> ";
    }


}

?>