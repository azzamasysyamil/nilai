<?php
if (isset($_POST['simpan'])) {
    include_once('config.php');

    $mapel  = $_POST['mapel'];
    $sks  = $_POST['sks'];

    $sql = "INSERT INTO mapel SET mapel='$mapel', sks='$sks'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=mapel&s=view');
    }else{
        //var_dump($result);
        //echo "tes";
        echo "Subject: $mapel, Hour: $sks";
    }
}