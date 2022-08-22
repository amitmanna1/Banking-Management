<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $send_acc =  $_POST['send_acc'];
        $recv_acc = $_POST['recv_acc'];
        $amount = $_POST['amount'];

        $select = "SELECT * FROM CUSTOMERS WHERE accNo='$send_acc' ";

        $sql1 = mysqli_query($con,$select);

        $select2 = "SELECT * FROM CUSTOMERS WHERE accNo='$recv_acc' ";

        $sql2 = mysqli_query($con,$select2);

        $num1 = mysqli_num_rows($sql1);
        
        $num2 = mysqli_num_rows($sql2);

        

        if($num1>0 && $num2>0){
            $res1 = mysqli_fetch_assoc($sql1);
            $res2 = mysqli_fetch_assoc($sql2);
            $total = $res1['accBal'];
            if($total>$amount){

            $fund1 =  $res1['accBal'] - $amount;

            $update1 = " UPDATE CUSTOMERS SET accBal = '$fund1' WHERE accNo = '$send_acc' ";

            $sql3 = mysqli_query($con,$update1);

            $fund2 = $amount + $res2['accBal'];

            $update = " UPDATE CUSTOMERS SET accBal = '$fund2' WHERE accNo = '$recv_acc' ";

            $sql4 = mysqli_query($con,$update);

            if($sql4){
                echo " <script> alert('Successfully transfer');
                window.location.href='./transfer_cus.php';
                </script> ";
                }

            }
            else{
                echo " <script> alert('Don't have sufficient money.');
                window.location.href='./transfer_cus.php';
                </script> ";
            }
        }
        else{
            echo " <script> alert('User not found');
            window.location.href='./transfer_cus.php';
            </script> ";
        }
    }
?>