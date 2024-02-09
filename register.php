<?php
$con = mysqli_connect("localhost","root","", "muzic");

if (isset($_POST['sub'])) {
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $uname = $_POST['uname'];
    $phone = $_POST['phone'];
    $Confirm = $_POST['cpass'];
    
    mysqli_query($con, "insert into user (Name, Email, Pass, username, Phonenumber, Confirmpassword) values ('$name', '$email', '$pass', '$uname', '$phone', '$Confirm')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sign.css">

</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <p>Register</p>
            <div class="form">
                <div class="left">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter your name" name="fname"  required/>
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email" name="email" required />
                    <label>  Password</label> 
                    <input type="password" placeholder="Enter your password" name="pass" required />
                 </div>
                 <div class="right">
                    <label>Username</label>
                    <input type="text" placeholder="Enter your username" name="uname"  required/>
                    <label>Phone Number</label>
                    <input type="number" placeholder="Enter your number" name="phone" required/>
                    <label>Confirm Password</label>
                    <input type="password" placeholder="Confirm your password" name="cpass" required/>
                 </div>
            </div>
             <input type="Submit" value="Register" name="sub" class="for" />
        </form>
        <p class="last">Already member? <a href="login.php">Login now</a></p>

    </div>
    
</body>
</html>