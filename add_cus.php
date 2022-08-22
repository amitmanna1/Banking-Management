<?php
session_start();
include './header.php';
include './sidebar.php';
// include 'connection.php';

// if(isset($_POST['submit'])){
//     $cus_name = $_POST['cus_name'];
//     $cus_father=$_POST['cus_father'];
//     $cus_email = $_POST['cus_email'];
//     $cus_mobile=$_POST['cus_mobile'];
//     $cus_addhre=$_POST['cus_addhre'];
//     $cus_dob=$_POST['cus_dob'];
//     $cus_acc_no=$_POST['cus_acc_no'];
//     $cus_acc_bal=$_POST['cus_acc_bal'];
//     $cus_address=$_POST['cus_address'];
//     $cus_pin=$_POST['cus_pin'];
//     $gender = $_POST['gender'];

//     $insert = "INSERT INTO `customers`( `name`, `fathername`, `email`, `mobile`, `addhre`,
//      `dob`, `acc_no`, `acc_bal`, `address`, `pin`, `gender`) VALUES ('$cus_name',
//      '$cus_father','$cus_email','$cus_mobile',
//     'cus_addhre','$cus_dob','$cus_acc_no','$cus_acc_bal','$cus_address','$cus_pin','$gender')";

//     $sql = mysqli_query($con,$insert);

//     if($sql){
//         echo " <script> alert('User Not Found');
//         window.location.href='./all_cus.php';
//         </script> ";
//     }
//     else{
//         echo " <script> alert('User Already present');
//         window.location.href='./index.php';
//         </script> ";
//     }

// }

?>

<div class="container shadow p-3 mb-5 bg-body rounded">
    <form action="insert.php" method="post" class=" py-5 px-5">
        <h2 class="title mb-5">Add Customer</h2>
        <div class="row">
            <div class="mb-3 col-4">
                <label for="" class="form-label">Customer Name</label>
                <input type="text" name="cus_name" class="form-control" id="" required>
            
            </div>
            <div class="mb-3  col-4">
                <label for="" class="form-label">Father Name</label>
                <input type="text" name="cus_father" class="form-control" id="" required>
            
            </div>

            <div class="mb-3 col-4">
                <label for="" class="form-label">Email address</label>
                <input type="email"name="cus_email" class="form-control" id="" required>
            
            </div>
            <div class="mb-3 col-4">
                <label for="" class="form-label">Mobile Number</label>
                <input type="number" name="cus_mobile" class="form-control" id="" required>
            
            </div>
            <div class="mb-3 col-4">
                <label for="" class="form-label">Aadhre Number</label>
                <input type="number"name="cus_addhre" class="form-control" id="" required>
            
            </div>

            <div class="mb-3 col-4">
                <label for="" class="form-label">Date of birth</label>
                <input type="date" name="cus_dob" class="form-control" id="" required>
            
            </div>
            <div class="mb-3 col-4">
                <label for="" class="form-label">Account Number</label>
                <input type="number"name="cus_acc_no" class="form-control" id="" required>
            
            </div>
            <div class="mb-3 col-4">
                <label for="" class="form-label">Account Balance</label>
                <input type="number"name="cus_acc_bal" class="form-control" id="" required>
            
            </div>
            <div class="mb-3 col-4">
                <label for="" class="form-label">Address</label>
                <input type="text"name="cus_address" class="form-control" id="" required>
            
            </div>


            <div class="mb-3 col-4">
                <!-- <label for="" class="form-label">Pincode</label>
                <input type="number" name="cus_pin" class="form-control" id="" required> -->
                <label for="" class="form-label">Pincode</label>
                <input type="number"name="cus_pin" class="form-control" id="" required>
            
            </div>

            <div class="mb-3 col-4">
                <span>Gender</span>
                <div class="gender d-flex">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Male" id="flexRadioDefault1" checked>
                <label class="form-min-height: 100vh;check-label" for="flexRadioDefault1">
                    Male
                </label>
                </div>
                <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
                </div>
                </div>
                
            </div>            
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-15 ">Send</button>
    </form>

</div>

<?php
include './footer.php';
?>

