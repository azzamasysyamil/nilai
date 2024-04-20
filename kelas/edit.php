<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Kelas</div>
                <div class="col-4">
                    <a href="?m=kelas&s=view" class="btn btn-large btn-primary float-end"><b><</b></a>
                </div>
            </div>
<?php
include_once('config.php');
$id=$_GET['id'];
$sql = "SELECT * FROM kelas WHERE id='$id'";
$result = mysqli_query($con, $sql);
$r=mysqli_fetch_assoc($result);
?>
            <div class="card-body">
               <form action="?m=kelas&s=update" method="POST">
                    <div class="mb-3">
                        <input type="text" name="kelas" value="<?= $r['kelas'] ?>" class="form-control" placeholder="Nama Kelas" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="kapasitas" value="<?= $r['kapasitas'] ?>" class="form-control" placeholder="Kapasitas" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="terisi" value="<?= $r['terisi'] ?>" class="form-control" placeholder="Terisi" required>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="update" class="btn btn-primary">
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>