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
        <h4 class="card-title">Edit Galeri</h4>
        <div class="row">
          <div class="col s12">
            <form class="contact-form" method="post" action="<?= url_to('update-galeri'); ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <?= session()->getFlashdata('error') ?>
              <?= service('validation')->listErrors() ?>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Judul</label>
                  <input type="hidden" name="id" class="form-control" value="<?= $data->id; ?>" />
                  <input type="hidden" name="id_kategori" class="form-control" value="<?= $data->id_kategori; ?>" />
                  <input class="capital" required id="form_tahun" type="text" name="title" value="<?= $data->title; ?>" class="form-control" placeholder="" />
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
                      <input type="file" name="image" id="input-file-max-fs" class="dropify" data-max-file-size="3M" />
                      <p>Maximum file upload size 3MB.</p>
                      <p>Gunakan file type .jpg, .jpeg, .png.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <label for="form_tahun">foto</label>
                <div class="form-floating mb-2">
                  <img style="max-height: 150px;" src="<?= base_url('public/img/' . $data->image); ?>" alt="">
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Deskripsi</label>
                  <input required id="form_tahun" type="text" name="deskripsi" value="<?= $data->deskripsi ?>" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Publish</label>
                  <select name="publish" id="">
                    <option value="<?= $data->publish ?>"><?= $data->publish ?></option>
                    <option value="0">Tidak Publish</option>
                    <option value="1">Publish</option>
                  </select>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="form_tahun">Urutan</label>
                  <select name="urutan" id="">
                    <option value="<?= $data->urutan ?>"><?= $data->urutan ?></option>
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