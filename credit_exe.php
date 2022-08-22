<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $credit_acc = $_POST['credit_acc'];
    $money = $_POST['money'];

    $total="select * from customers where accNo='$credit_acc' ";

    $sql = mysqli_query($con,$total);
    // $total=mysqli_num_rows($sql);

    if($res = mysqli_fetch_assoc($sql)){
        $rupee = $res['accBal'] + $money;
        $update = "update customers set accBal='$rupee' where accNo='$credit_acc' ";
        $sql2 = mysqli_query($con,$update);

        if($sql2){
            echo " <script> alert('Money added successfully.');
            window.location.href='./remove_cus.php';
            </script> ";
        }
    }
    else{
        echo " <script> alert('Customer not exiting.');
            window.location.href='./remove_cus.php';
            </script> ";
    }
}
?>