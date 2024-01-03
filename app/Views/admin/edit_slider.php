<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>
<script src="<?php echo base_url('/public/ckeditor'); ?>/ckeditor.js"></script>
<style>
  .capital {
    text-transform: uppercase;
  }
</style>
<div class="row">

  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Edit Galeri</h4>
        <div class="row">
          <div class="col s12">
            <form class="contact-form" method="post" action="<?= url_to('update-slider'); ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <?= session()->getFlashdata('error') ?>
              <?= service('validation')->listErrors() ?>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Judul</label>
                  <input type="hidden" name="id" class="form-control" value="<?= $image->id; ?>" />
                  <input type="hidden" name="id_kategori" class="form-control" value="<?= $image->id_kategori; ?>" />
                  <input class="capital" required id="form_tahun" type="text" name="title" value="<?= $image->title; ?>" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="row">
                <div class="input-field col m6 s12">
                  <div class="divider mb-1 mt-1"></div>
                  <div class="row section">
                    <div class="col s12 m4 l3">
                      <p>Edit foto</p>
                    </div>
                    <div class="col s12 m8 l9">
                      <input type="file" name="image" id="input-file-max-fs" class="dropify" data-max-file-size="1M" />
                      <p>Maximum file upload size 1MB.</p>
                      <p>Gunakan file type .jpg, .jpeg, .png.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <label for="form_tahun">foto</label>
                <div class="form-floating mb-2">
                  <img style="max-height: 150px;" src="<?= base_url('public/img/' . $image->image); ?>" alt="">
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Deskripsi</label>
                  <textarea class="ckeditor" id="ckedtor" name="deskripsi"><?= $image->deskripsi ?></textarea>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Publish</label>
                  <select name="publish" id="">
                    <option value="<?= $image->publish ?>"><?= $image->publish ?></option>
                    <option value="0">Tidak Publish</option>
                    <option value="1">Publish</option>
                  </select>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Urutan</label>
                  <select name="urutan" id="">
                    <option value="<?= $image->urutan ?>"><?= $image->urutan ?></option>
                    <option value="1">Urutan 1</option>
                    <option value="2">Urutan 2</option>
                    <option value="3">Urutan 3</option>
                  </select>
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