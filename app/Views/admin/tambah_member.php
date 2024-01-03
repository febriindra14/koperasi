<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>
<style>
  .capital {
    text-transform: uppercase;
  }
</style>
<div class="row">

  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Tambah Member</h4>
        <div class="row">
          <div class="col s12">
            <form class="contact-form" method="post" action="<?= url_to('simpan-member'); ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <?= session()->getFlashdata('error') ?>
              <?= service('validation')->listErrors() ?>
              <div class="col-md-8">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Nama pengurus</label>
                  <input class="capital" required id="form_tahun" type="text" name="nama_pengurus" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="row">
                <div class="input-field col m6 s12">
                  <div class="divider mb-1 mt-1"></div>
                  <div class="row section">
                    <div class="col s12 m4 l3">
                      <p>Upload Foto</p>
                    </div>
                    <div class="col s12 m8 l9">
                      <input type="file" name="foto" id="input-file-max-fs" class="dropify" data-max-file-size="1M" />
                      <p>Maximum file upload size 1MB.</p>
                      <p>Gunakan file type .jpg, .jpeg, .png.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Jabatan</label>
                  <select name="jabatan" id="">
                    <option value="">-Pilih Jenis-</option>
                    <option value="kepala kantor">Kepala kantor</option>
                    <option value="sekretaris">Sekretaris</option>
                    <option value="bendahara">Bendahara</option>
                    <option value="member">Member</option>
                  </select>
                </div>
              </div>

              <div class="col-12 text-center">
                <input type="submit" name="simpan" class="btn btn-success btn-send" style=" background : linear-gradient(45deg, indigo, blue)" value="Tambah">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>