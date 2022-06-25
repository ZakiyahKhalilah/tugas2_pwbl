<style>
    .my-table thead td{
        vertical-align: middle;
        text-align: center;
    }
</style>
<div class="container">   
  <a href="<?= BASEURL ?>pelanggan/formtambah" class="btn btn-secondary mb-3">Tambah Data</a>     
  <table class="table table-bordered my-table">
    <thead>
      <tr>
        <td rowspan="2" width="5%">No</td>
        <td rowspan="2">Kode</td>
        <td rowspan="2">Nama</td>
        <td rowspan="2">Created At</td>
        <td rowspan="2">Update At</td>
        <td colspan="2" width="10%">Opsi</td>
      </tr>
      <tr>
        <td>ubah</td>
        <td>hapus</td>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 0;
      foreach($data['pelanggan'] as $pelanggan):
        $no++;
      ?>
      <tr>
        <td> <?= $no;?></td>
        <td> <?= $pelanggan['gol_kode']?> </td>
        <td> <?= $pelanggan['gol_nama']?> </td>
        <td> <?= $pelanggan['created_at']?> </td>
        <td> <?= $pelanggan['updated_at']?> </td>
        <td class="text-center"><a href="<?=BASEURL?>pelanggan/formubah/<?= $pelanggan['gol_id']?>">
        <i class="fa fa-edit" style="color: blue;"></i></a></td>
        <td class="text-center"><a href="<?=BASEURL?>pelanggan/hapus/<?= $pelanggan['gol_id']?>" data-toggle="modal" data-target="#myModal" 
        onclick="return confirm('Yakin ingin menghapus data?');"><i class="fa fa-trash" style="color: red;" >
      </i></a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script>
  function hapus(a){
    alert(a);
  }
</script>
