<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE from kelas WHERE id='$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    header('location: index.php?m=kelas&s=view');
}else{
    var_dump($result);
}