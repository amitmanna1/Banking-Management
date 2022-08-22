<?php
session_start();
include 'connection.php';


if(isset($_POST["submit"])){
    $cus_name=$_POST["cus_name"];
    $cus_father=$_POST["cus_father"];
    $cus_email=$_POST["cus_email"];
    $cus_mobile=$_POST["cus_mobile"];
    $cus_addhre=$_POST["cus_addhre"];
    $cus_dob=$_POST["cus_dob"];
    $cus_acc_no=$_POST["cus_acc_no"];
    $cus_acc_bal=$_POST["cus_acc_bal"];
    $cus_address=$_POST["cus_address"];
    $cus_pin=$_POST["cus_pin"];
    $gender=$_POST["gender"];

    $select ="SELECT `id`, `name`, `fathername`, `email`, `mobile`,
     `aadhre`, `dob`, `accNo`, `accBal`, `address`, `pin`, `gender` FROM `customers` WHERE  aadhre='$cus_addhre'
     AND accNo='$cus_acc_no' ";

    $res = mysqli_query($con,$select);


    if(mysqli_num_rows($res)>0){
        echo " <script> alert('User Already present.');
        window.location.href='./add_cus.php';
        </script> ";
    }
    else{

        $insert="INSERT INTO `customers` ( `name`, `fathername`, `email`, `mobile`, `aadhre`, `dob`,
         `accNo`, `accBal`, `address`, `pin`, `gender`) VALUES ( '$cus_name', '$cus_father',
         '$cus_email', '$cus_mobile', '$cus_addhre', '$cus_dob', '$cus_acc_no', '$cus_acc_bal', '$cus_address',
          '$cus_pin', '$gender');";
    
        $sql  = mysqli_query($con,$insert);
    
        if($sql){
            echo " <script> alert('Customer inserted successfully.');
            window.location.href='./add_cus.php';
            </script> ";
        }
    }


    mysqli_close($con);

}


?>