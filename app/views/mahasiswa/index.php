<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-06">
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
        Tambah data mahasiswa
        </button>
    <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach($data['mhs'] as $mhs) : ?>
            <li class="list-group-item ">
                <?= $mhs['nama'];?>
                <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id']?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
                <a href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id']?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" daya-id="<?= $mhs['id'];?>">ubah</a>
                <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']?>" class="badge badge-primary float-right ml-5">detail</a>
            </li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" >
            </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" >
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" name="email" >
        </div>
        <div class="form-group">
    <label for="jurusan">jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="ilmu komputer">Ilmu Komputer</option>
      <option value="ilmu kedokteran">Ilmu Kedokteran</option>
      <option value="tehnik sipil">Tehnik Sipil</option>
      <option value="tehnik mesin">Tehnik Mesin</option>
      <option value="sastra rusia">Sastra Rusia</option>

    </select>
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>  
    </div>
    </div>
  </div>
</div>

