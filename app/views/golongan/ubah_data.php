<div class="container">
<form action="<?= BASEURL ?>Golongan/prosesubah" method="post">
    <?php foreach($data['ubahdata'] as $ubah): ?>
        <input type="hidden" value="<?= $ubah['gol_id']?>" name="gol_id">
    <div class="row">
        <div class="col-6">
        <div class="form-group">
            <label>Kode:</label>
            <input type="text" class="form-control" value="<?= $ubah['gol_kode']?>" name="gol_kode">
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" class="form-control" value="<?= $ubah['gol_nama']?>" name="gol_nama">
        </div>
        <div class="form-group">
            <label>Created At:</label>
            <input type="text" class="form-control" value="<?= $ubah['created_at']?>" name="created_at">
        </div>
        <div class="form-group">
            <label>Update At:</label>
            <input type="text" class="form-control" value="<?= $ubah['updated_at']?>" name="updated_at">
        </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </div>
    <?php endforeach; ?>
</form>
</div>