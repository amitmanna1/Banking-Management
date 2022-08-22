<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $cus_remove=$_POST['cus_remove'];

    $select="select * from customers where accNo='$cus_remove' ";

    $sql = mysqli_query($con,$select);
    $total=mysqli_num_rows($sql);

    if($total!=0){
        $delete = "delete from customers where accNo='$cus_remove' ";
        $sql2 = mysqli_query($con,$delete);

        if($sql2){
            echo " <script> alert('Customer Remove successfully.');
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