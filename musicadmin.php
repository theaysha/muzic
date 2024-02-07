<?php
$con = mysqli_connect("localhost", "root", "", "muzic");
if(isset($_POST['del'])){
    $dele = $_POST['del'];

    $del_que = mysqli_query($con, "delete from user where id='$dele'");
}
if(isset($_POST['sub'])) {
    $musicname= $_POST['musicname'];
   $lyrics = $_POST['lyrics'];
   $singername= $_POST['singername'];
   $file = $_POST['file'];
   $file = $_POST['folder'];

   if(isset($_FILES['file'])){
        $imgname = $_FILES['file'];
        echo '<pre>';
        var_dump($imgname);
        echo '</pre>';
   }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">

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
        <form action="" method="post">
        <input name="musicname" type="text" placeholder="music_name" required>
        <input name="lyrics" type="password" placeholder="lyrics" required>
        <input name="singername" type="password" placeholder="singer_name" required>
        <input type="file" name="file" required>
        <input type="file" name="folder" required>


        <input type="submit" value="Login" class="ab" name="sub" />

        </form>


        <table width="100%" border="1">
            <tr>
                <th>id</th>
                <th>musicname</th>
                <th>lyrics</th>
                <th>singername</th>
                <th>imagefilename</th>
                <th>imagefiletype</th>
                <th>audiofilename</th>
                <th>audiofiletype</th>
            </tr>
            <?php
            $query = mysqli_query($con, "select  * from song");

            while($var = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $var["id"];?></td>
                    <td><?php echo $var["musicname"];?></td>
                    <td><?php echo $var["lyrics"];?></td>
                    <td><?php echo $var["singername"];?></td>
                    <td><?php echo $var["imagefilename"];?></td>
                    <td><?php echo $var["imagefiletype"];?></td>
                    <td><?php echo $var["audiofilename"];?></td>
                    <td><?php echo $var["audiofiletype"];?></td>
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