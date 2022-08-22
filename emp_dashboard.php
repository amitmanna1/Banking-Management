<?php
session_start();
include './header.php';
include './sidebar.php';
include 'connection.php';

$select = " SELECT * FROM CUSTOMERS ";
 
$sql = mysqli_query($con,$select);

$num = mysqli_num_rows($sql);

$query = " SELECT SUM(accBal) AS sum FROM CUSTOMERS ";

$query_res = mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($query_res)){
  $output = $row['sum'];
}

?>
<div class="card shadow p-3 mb-5 bg-body rounded">
  <div class="card-body ">
    <div class="logout position-absolute  top-50 end-0  translate-middle"  ><a href="emp_signin.php">Logout</a></div>
    <h2>ABCD Banking</h2>
    <p>Welcome come <span class="fs-4 mx-2"><?php
    if(isset($_SESSION["emp"])){
       echo $_SESSION["emp"]; 
    }
     
      ?>
      </span></p>
  </div>
</div>

<div class="card text-bg-light m-3 shadow-sm p-3  bg-body rounded" style="width: 18rem; display: inline-block">
  <div class="card-body d-flex align-items-center  justify-content-center flex-column">
      <h5 class="card-title ">Total customers</h5>
      <i class="bx bx-group  text-primary  fs-1" ></i>
    <p class="card-text " style="margin: 10px"> <?php  echo "$num"; ?></p>
  </div>
</div>
<div class="card text-bg-light my-3 ml-5 shadow-sm p-3  bg-body rounded" style="width: 18rem; display: inline-block">
  <div class="card-body d-flex align-items-center  justify-content-center flex-column">
      <h5 class="card-title ">Total amount</h5>
      <i class="bx bx-money  text-primary  fs-1" ></i>
    <p class="card-text " style="margin: 10px"> <?php  echo "$output"; ?></p>
  </div>
</div>
<div class="card text-bg-light my-3 ml-5 shadow-sm p-3  bg-body rounded" style="width: 18rem; display: inline-block">
  <div class="card-body d-flex align-items-center  justify-content-center flex-column">
      <h5 class="card-title ">Notification</h5>
      <i class="bx bxs-bell text-primary  fs-1" ></i>
    <p class="card-text " style="margin: 10px"> 5</p>
  </div>
</div>
<div class="card text-bg-light my-3 ml-5 shadow-sm p-3  bg-body rounded" style="width: 18rem; display: inline-block">
  <div class="card-body d-flex align-items-center  justify-content-center flex-column">
      <h5 class="card-title ">Task</h5>
      <i class="bx bx-task  text-primary  fs-1" ></i>
    <p class="card-text " style="margin: 10px"> 6</p>
  </div>
</div>


<?php
include './footer.php';
?>

