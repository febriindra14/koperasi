<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">

  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Tambah Kategori Berita</h4>
        <div class="row">
          <div class="col s12">
            <form class="contact-form" method="post" action="<?= url_to('update-kategori-berita'); ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <?= session()->getFlashdata('error') ?>
              <?= service('validation')->listErrors() ?>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input required id="form_tahun" type="text" name="category_name" class="form-control" value="<?=$categories->category_name; ?>" placeholder="Nama Kategori" />
                  <input type="hidden" name="id_category" class="form-control" value="<?= $categories->id_category; ?>" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input required id="form_tahun" type="text" name="slug" class="form-control" value="<?= $categories->slug; ?>" placeholder="Slug" />
                </div>
              </div>
               <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input required id="form_tahun" type="number" name="flag" class="form-control" value="<?= $categories->flag; ?>" placeholder="Flag"  />
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