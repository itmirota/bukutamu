

 <div class="col-lg-12">
    <div class="card card-primary">
      <div class="card-header">
      <div class="d-flex justify-content-between mb-4">
        <button class="btn btn-warning" onclick="refresh()"><i class="fa fa-rotate"></i> Refresh</button>
        <a href="<?= base_url()?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
      </div>
      </div>
      <div class="card-body">
          <div class="table table-responsive">
            <table class="table table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
                <th>Nama Tamu</th>
                <th width="100px">Identitas</th>
                <th>Asal Instansi</th>
                <th>Divisi</th>
                <th>Keperluan</th>
              </tr>
              </thead>
              <tbody id="listTamu">
              </tbody>
            </table>
         </div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>

<script>

  function refresh(){
    window.location.reload()
  }



</script>