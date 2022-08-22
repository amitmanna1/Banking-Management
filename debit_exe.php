<?php
include 'connection.php';

if(isset($_POST['submit'])){ 
    $debit_acc = $_POST['debit_acc'];
    $money = $_POST['money'];

    $total="select * from customers where accNo='$debit_acc' ";

    $sql = mysqli_query($con,$total);

    if($res = mysqli_fetch_assoc($sql)){

        if($res['accBal'] > $money){

            $rupee =   $res['accBal'] - $money  ;
            $update = "update customers set accBal='$rupee' where accNo='$debit_acc' ";
            $sql2 = mysqli_query($con,$update);
    
            if($sql2){
                echo " <script> alert('Money debit successfully.');
                window.location.href='./debit_cus.php';
                </script> ";
            }
        }
        else{
            echo " <script> alert('Don't have sufficient balance.');
            window.location.href='./debit_cus.php';
            </script> ";
        }
    }
    else{
        echo " <script> alert('Customer not exiting.');
            window.location.href='./debit_cus.php';
            </script> ";
    }
}
?>