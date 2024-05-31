<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE from siswa WHERE id='$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    header('location: index.php?m=siswa&s=view');
}else{
    var_dump($result);
}