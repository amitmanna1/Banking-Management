<?php
include './header.php';
include './sidebar.php';

?>
    <div class="outer-wrapper overflow-scroll">
        <table class="table table-light">
        <thead>
            <tr  class="table-info">
                <th>Id</th>
                <th>Name</th>
                <th>Father's name</th>
                <th>Email id</th>
                <th>Mobile no.</th>
                <th>Aadhre number</th>
                <th>DOB</th>
                <th>Account number</th>
                <th>Account Balance</th>
                <th>Address</th>
                <th>pin code</th>
                <th>gender</th>

            </tr>
    
        </thead>
        <tbody>
            <?php
                include 'connection.php';
                $select="SELECT * FROM CUSTOMERS";
                // $sql = mysqli_query($con,$select);
                $res = mysqli_query($con,$select);
                // $num = mysqli_num_rows($sql);
                // $a=0;

                while($view = mysqli_fetch_array($res)){
               ?>
                       <tr>
                         <td data-label="Id"> <?php echo $view['id'] ;  ?></td>
                         <td data-label="Name"> <?php echo $view['name'] ;  ?></td>
                         <td data-label="Father's name"> <?php echo $view['fathername'] ;  ?></td>
                         <td data-label="Email id"> <?php echo $view['email'] ;  ?></td>
                         <td data-label="Mobile no."> <?php echo $view['mobile'] ;  ?></td>
                         <td data-label="Aadhre number"> <?php echo $view['aadhre'] ;  ?></td>
                         <td data-label="DOB"> <?php echo $view['dob'] ;  ?></td>
                         <td data-label="Account number"> <?php echo $view['accNo'] ;  ?></td>
                         <td data-label="Account Balance"> <?php echo $view['accBal'] ;  ?></td>
                         <td data-label="Address"> <?php echo $view['address'] ;  ?></td>
                         <td data-label="pin code"> <?php echo $view['pin'] ;  ?></td>
                         <td data-label="Gender"> <?php echo $view['gender'] ;  ?></td>
                       </tr>
                   
                       <?php
             
             }
             
             ?>
        </tbody>
        </table>
    </div>

<?php
include './footer.php';
?>
