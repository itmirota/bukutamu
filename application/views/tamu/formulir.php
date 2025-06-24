<div class="d-flex justify-content-center">
<div class="col-md-6">
  <form action="<?= base_url('tamu/save')?>" role="form" method="post" enctype="multipart/form-data">
  <div class="card p-2">
    <div class="card-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label for="nama_tamu" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama_tamu" placeholder="isi nama anda disini" class="form-control tabel-PR" required />
            </div>
            <div class="col-md-12">
              <label for="alamat_tamu" class="form-label">Alamat Lengkap</label>
              <textarea type="text" name="alamat_tamu" class="form-control tabel-PR" placeholder="isi alamat anda disini" required></textarea>
            </div>
            <div class="col-md-12">
              <label for="kontak_tamu" class="form-label">Nomor HP</label>
              <input type="text" name="kontak_tamu" placeholder="isi kontak anda disini" class="form-control tabel-PR" required />
            </div>
            <div class="col-md-12">
              <label for="identitas" class="form-label">Identitas yang diberikan ke team Security PT. Mirota KSM</label>
              <div class="row">
                <div class="col-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="identitas_tamu" value="KTP">
                    <span class="form-check-label" for="identitas_tamu">
                      KTP
                    </span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="identitas_tamu" value="SIM">
                    <span class="form-check-label" for="identitas_tamu">
                      SIM
                    </span>
                  </div>
                </div>
              </div>
                <input class="form-check-input" type="radio" name="identitas_tamu" id="identitas_tamu">
                <span class="form-check-label" for="identitas_tamu">
                  Lainnya:
                </span>
                <input class="form-control tabel-PR" type="text" placeholder="isi disini jika memilih lainnya" id="identitas_tamu_lainnya" onchange="formidentitastamu()">
            </div>
            <div class="col-md-12">
              <label for="asal_instansi" class="form-label">Asal Instansi</label>
              <input type="text" name="asal_instansi" placeholder="isi instansi anda disini jika anda dari instansi/perusahaan" class="form-control tabel-PR"/>
            </div> 
            <div class="col-md-12">
              <label for="janji" class="form-label">Sudah ada janji?</label>
              <div class="row">
                <div class="col-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="janji" value="sudah">
                    <span class="form-check-label" for="janji">
                      sudah
                    </span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="janji" value="belum">
                    <span class="form-check-label" for="janji">
                      belum
                    </span>
                  </div>
                </div>
              </div>


            </div>
            <div class="col-md-12">
              <label for="divisi_id" class="form-label">Divisi yang ingin ditemui</label>
              <select name="divisi_id" class="form-select tabel-PR" required>
                <option>pilih divisi</option>
                <?php foreach($divisi as $d){?>
                <option value=<?= $d->id_divisi ?>><?= $d->nama_divisi ?></option>
                <?php } ?>
              </select>
            </div>
            
            <div class="col-md-12">
              <label for="keperluan" class="form-label">Keperluan</label>
              <textarea class="form-control tabel-PR" name="keperluan" cols="30" rows="5" placeholder="isi keperluan disini" required></textarea>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="card p-2">
    <div class="card-body">
      <div class="form-group">
        <div class="row">
          <div class="col-md-12">
            <label for="pelayanan" class="form-label">Pelayanan petugas kami</label>
            <div id="pelayanan"></div>
            <input type="hidden" name="ratingpelayanan" id="ratingpelayanan">
          </div>

          <div class="col-md-12">
            <label for="kerapian" class="form-label">Kerapian petugas kami</label>
            <div id="kerapian"></div>
            <input type="hidden" name="ratingkerapian" id="ratingkerapian">
          </div>

          <div class="col-md-12">
            <label for="etika" class="form-label">Etika berbicara & komunikasi petugas kami</label>
            <div id="etika"></div>
            <input type="hidden" name="ratingetika" id="ratingetika">
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <div class="col-12 d-flex justify-content-end">
      <button class="btn btn-primary"> Simpan</button>
      </div>
    </div>
  </div>
  </form>
</div>
</div>