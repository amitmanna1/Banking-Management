

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="signup.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head> 
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Employee login</span>

                <form action="valided_emp.php" method="post" >
                    <div class="input-field">
                        <input type="email" name="emp_email" placeholder="Enter your email" required>
                        <i class='bx bx-envelope icons '></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="emp_id" placeholder="Enter your id">
                        <i class='bx bx-lock-alt icons icon-2' ></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                    </div>
                        <button class=" button fs-3" type="submit" name="submit" value="Sign in ">signup</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>