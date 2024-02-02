<?php
$con = mysqli_connect("localhost","root","", "muzic");
  if(isset($_POST['sub'])) {
     $email = $_POST['email'];
    $pass = $_POST['pass'];
    $querry = mysqli_query($con, "select * from user where Email = '$email' and Pass = '$pass' ");
    if($querry){
      if($kuch_bhi = mysqli_fetch_array($querry)){
        session_start();
        $_SESSION['name'] = $kuch_bhi['Name'];
        $_SESSION['pass'] = $kuch_bhi['Pass'];
        header('location: index.php');
        echo "<script>alert('submit')</script>";
      }else{
        echo "<script>alert('error')</script>";
      }
    }
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container">
      <h1>Login Form</h1>
      <form action="" method="POST">
        <input name="email" type="text" placeholder="Email Address" required>
        <input name="pass" type="password" placeholder="Password" required>
        <p>Remember me? <a href="#">Forgot Password</a> </p>
        <input type="submit" value="Login" class="ab" name="sub" />
      </form>      
      <p>Not a memeber? <a href="">Signup now</a></p>
    </div>
    <nav>
    
    </nav>
  
</body>
</html>
