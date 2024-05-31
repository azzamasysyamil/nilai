<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Mata Pelajaran</div>
                <div class="col-4">
                    <a href="?m=mapel&s=view" class="btn btn-large btn-primary float-end"><b><</b></a>
                </div>
            </div>

            <div class="card-body">
               <form action="?m=mapel&s=save" method="POST">
                    <div class="mb-3">
                        <input type="text" name="mapel" class="form-control" placeholder="Mata Pelajaran" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="int" name="sks" class="form-control" placeholder="Jam" required>
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>