<div class="container">
<form action="<?= BASEURL ?>Golongan/tambah" method="post">
    <div class="row">
        <div class="col-6">
        <div class="form-group">
            <label>Kode:</label>
            <input type="text" class="form-control" placeholder="Kode" name="gol_kode">
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" class="form-control" placeholder="Nama" name="gol_nama">
        </div>
        <div class="form-group">
            <label>Created At:</label>
            <input type="text" class="form-control" placeholder="Created At" name="created_at">
        </div>
        <div class="form-group">
            <label>Update At:</label>
            <input type="text" class="form-control" placeholder="Updated At" name="updated_at">
        </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
</form>
</div>