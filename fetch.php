<?php
include_once ('CORS.php');
$con = mysqli_connect('localhost', 'root', '', 'muzic');
$query = mysqli_query($con, "select * from song");
$json_arry = array();
while($r = mysqli_fetch_assoc($query)){
    $json_arry[] = $r;
}
echo json_encode($json_arry);







?>