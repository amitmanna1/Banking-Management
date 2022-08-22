<?php
include './header.php';
include './sidebar.php';

?>

    <div class=" container px-5 position-relative">
        <div class="box shadow p-3 mb-5 bg-body rounded w-75 h-25 m-auto">
            <h1 class="position-absolute top-0 start-50 translate-middle-x">Credit Money</h1>
            <form  action="credit_exe.php" method="post" class="p-5 ">
            <div class="input-group input-group-lg mb-4 ">
                <span class="input-group-text"   id="inputGroup-sizing-lg">Account Number</span>
                <input type="number" name="credit_acc" class="form-control shadow-none  bg-light rounded" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
            </div>

                <div class="input-group mb-4">
                    <span class="input-group-text" id="inputGroup-sizing-default">Amount (Rs.)</span>
                    <input type="number" name="money" class="form-control shadow-none  bg-light rounded" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
            <button type="submit" name="submit" class="btn btn-primary w-15 d-flex">Send</button>
            </form>

        </div>

    </div>

<?php
include './footer.php';
?>

