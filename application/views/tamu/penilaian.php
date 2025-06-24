
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
      <div class="d-flex justify-content-between mb-4">
        <button class="btn btn-warning" onclick="refresh()"><i class="fa fa-rotate"></i> Refresh</button>
      </div>
      </div>
      <div class="card-body table-responsive no-padding">
        <table id="tabelTamu" class="table table-hover">
          <thead>
          <tr>
            <th style="width:10px">No</th>
            <th >Nama Tamu</th>
            <th style="width:10px">Alamat Tamu</th>
            <th>Identitas yang ditinggal</th>
            <th>Asal Instansi</th>
            <th>Divisi</th>
            <th>pelayanan</th>
            <th>kerapian</th>
            <th>etika</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $no = 1;
          if(!empty($list_data))
          {
            foreach($list_data as $data):
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data->nama_tamu ?></td>
            <td><?php echo $data->alamat_tamu ?></td>
            <td class="text-center"><?php echo $data->identitas_tamu ?></td>
            <td><?php echo $data->asal_instansi ?></td>
            <td><?php echo $data->nama_divisi ?></td>
            <td><span><i class="fa fa-star star"></i></span><span class="badge text-bg-warning"><?= $data->pelayanan?></span></td>
            <td><i class="fa fa-star star"></i><span class="badge text-bg-warning"><?= $data->kerapian?></span></td>
            <td><i class="fa fa-star star"></i><span class="badge text-bg-warning"><?= $data->etika?></span></td>
          </tr>
          <?php
            endforeach;
          }
          ?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?=base_url('Qrcodegenerate/saveBarang/'.$userId)?>" role="form" id="addPurchaseRequest" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="exampleModalLabel">Formulir Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label for="nama_barang" class="form-label">Nama barang</label>
              <input type="text" name="nama_barang" placeholder="Nama barang" class="form-control tabel-PR" required />
            </div>
            <div class="col-md-12">
              <label for="tgl_pembelian" class="form-label">tanggal pembelian</label>
              <input type="date" name="tgl_pembelian" class="form-control tabel-PR" />
            </div> 
            <div class="col-md-12">
              <label for="lokasi_barang" class="form-label">Lokasi barang</label>
              <select name="lokasi_barang" placeholder="lokasi barang" class="form-select tabel-PR">
                <option>pilih divisi</option>
                <?php foreach($divisi as $d){?>
                <option value=<?= $d->id_divisi ?>><?= $d->nama_divisi ?></option>
                <?php } ?>
              </select>
            </div> 
            <div class="col-md-12">
              <label for="stok_barang" class="form-label">Stok barang</label>
              <input type="text" name="stok_barang" placeholder="isikan stok barang disini" class="form-control tabel-PR" required />
            </div>  
            <div class="col-md-12">
              <label for="keterangan_barang" class="form-label">Keterangan</label>
              <select name="keterangan_barang" class="form-select tabel-PR" required>
                <option>pilih keterangan</option>
                <option value="1">asset</option>
                <option value="2">dipinjamkan</option>
              </select>
            </div>
            <div class="col-md-12">
              <label for="spesifikasi_barang" class="form-label">Spesifikasi Barang</label>
              <textarea  class="form-control tabel-PR" name="spesifikasi_barang" cols="30" rows="5"></textarea>
            </div>         
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>

  function refresh(){
    window.location.reload()
  }
</script>