<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">

  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Tambah Kategori Berita</h4>
        <div class="row">
          <div class="col s12">
            <form class="contact-form" method="post" action="<?= url_to('simpan-kategori-berita'); ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <?= session()->getFlashdata('error') ?>
              <?= service('validation')->listErrors() ?>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input required id="form_tahun" type="text" name="category_name" class="form-control" placeholder="Nama Kategori" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input required id="form_tahun" type="text" name="slug" class="form-control" placeholder="Slug" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input required id="form_tahun" type="number" name="flag" class="form-control" placeholder="Flag" />
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