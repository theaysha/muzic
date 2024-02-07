<?php
$con = mysqli_connect("localhost", "root", "", "muzic");
if(isset($_POST['del'])){
    $dele = $_POST['del'];

    $del_que = mysqli_query($con, "delete from user where id='$dele'");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/admin.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <a href="admin.php">Home</a>
                <a href="homeadmin.php">User</a>
                <a href="musicadmin.php">Music </a>
                <a href="feedback.php">Feedback</a>
            </nav>
        </header>
        <table width="100%" border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Pass</th>
                <th>UserName</th>
                <th>Phone</th>
                <th>Confirm PassWord</th>
                <th>Access</th>
            </tr>
        <?php
            $query = mysqli_query($con,"select * from user");
        
        while($var = mysqli_fetch_array($query)){
        
        
        ?>
        <tr>
            <td><?php echo $var["id"];?></td>
            <td><?php echo $var["Name"];?></td>
            <td><?php echo $var["Email"];?></td>
            <td><?php echo $var["Pass"];?></td>
            <td><?php echo $var["username"];?></td>
            <td><?php echo $var["Phonenumber"];?></td>
            <td><?php echo $var["Confirmpassword"];?></td>
            <td>
                <form action="" method="POST">
                    <button value="<?php echo $var["id"];?>" name="del" style="color: #000;">Delete</button>
                </form>
            </td>
        </tr>
        <?php
         }
        ?>
    </table>
</body>
</html>