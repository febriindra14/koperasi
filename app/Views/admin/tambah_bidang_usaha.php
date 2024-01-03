<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">

  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Tambah Bidang Usaha</h4>
        <div class="row">
          <div class="col s12">
            <form class="contact-form" method="post" action="<?= url_to('simpan-bidang-usaha'); ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <?= session()->getFlashdata('error') ?>
              <?= service('validation')->listErrors() ?>
             
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input required id="form_tahun" type="text" name="title" class="form-control" placeholder="Judul" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                 <input type="hidden" name="id_category" class="form-control" value="<?= $categories->id_category; ?>" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="alamat" style="font-size : 16px">Ringkasan</label>
                  <textarea name="excerpt" required id="ckeditor" class="ckeditor"></textarea>
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