<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE from mapel WHERE id='$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    header('location: index.php?m=mapel&s=view');
}else{
    var_dump($result);
}