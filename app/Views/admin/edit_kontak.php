<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">

  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Kontak</h4>
        <div class="row">
          <div class="col s12">
            <form class="contact-form" method="post" action="<?= url_to('update-kontak'); ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <?= session()->getFlashdata('error') ?>
              <?= service('validation')->listErrors() ?>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Facebook</label>
                  <input type="hidden" name="id" class="form-control" value="<?= $kontak->id; ?>" />
                  <input required id="form_tahun" type="text" name="fb" value="<?= $kontak->fb; ?>" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Twitter</label>
                  <input required id="form_tahun" type="text" name="twitter" value="<?= $kontak->twitter; ?>" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Instagram</label>
                  <input required id="form_tahun" type="text" name="ig" value="<?= $kontak->ig; ?>" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Telepon</label>
                  <input required id="form_tahun" type="text" name="telpon" value="<?= $kontak->telpon; ?>" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">WhatsApp</label>
                  <input required id="form_tahun" type="text" name="wa" value="<?= $kontak->wa; ?>" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Email</label>
                  <input required id="form_tahun" type="email" name="email" value="<?= $kontak->email; ?>" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="row">
                <div class="input-field col m6 s12">
                  <div class="divider mb-1 mt-1"></div>
                  <div class="row section">
                    <div class="col s12 m4 l3">
                      <p>Edit logo</p>
                    </div>
                    <div class="col s12 m8 l9">
                      <input type="file" name="logo" id="input-file-max-fs" class="dropify" data-max-file-size="1M" />
                      <p>Maximum file upload size 1MB.</p>
                      <p>Gunakan file type .jpg, .jpeg, .png.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <label for="form_tahun">Logo</label>
                <div class="form-floating mb-2">
                  <img style="max-height: 150px;" src="" alt="">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Nama web</label>
                  <input required id="form_tahun" type="text" name="nama_web" value="" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="col-12 text-center">
                <input type="submit" name="simpan" class="btn btn-success btn-send" style=" background : linear-gradient(45deg, indigo, blue)" value="Update">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>