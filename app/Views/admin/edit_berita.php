<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">

  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Edit List Berita</h4>
        <div class="row">
          <div class="col s12">
            <form class="contact-form" method="post" action="<?= url_to('update-berita'); ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <?= session()->getFlashdata('error') ?>
              <?= service('validation')->listErrors() ?>
             
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input required id="form_tahun" type="text" name="title" class="form-control" placeholder="Judul" value="<?= $post->title ; ?>" />
                  <input type="hidden" name="id_posts" class="form-control" value="<?= $post->id_posts; ?>" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                <label for="form_tahun">Kategori</label>
                  <select name="id_category" id="">
                    <option value="">-Pilih Kategori-</option>
                    <?php foreach($categories as $row) : ?>
                      <option value="<?= $row->id_category; ?>"<?= ($row->id_category == $post->id_category) ? 'selected' : ''; ?>><?= $row->category_name; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                  <label for="alamat">Ringkasan</label>
                  <textarea required id="alamat" name="excerpt" class="materialize-textarea" ><?= $post->excerpt ; ?></textarea>
              </div>
              <div class="row">
                <div class="input-field col m6 s12">
                  <div class="divider mb-1 mt-1"></div>
                  <div class="row section">
                    <div class="col s12 m4 l3">
                      <p>Upload Foto</p>
                    </div>
                    <div class="col s12 m8 l9">
                      <img height="150px" src="<?php echo base_url('public/img/' . $post->featured_image); ?>" alt="materialize logos" />
                      <input type="file" name="featured_image" id="input-file-max-fs" class="dropify" data-max-file-size="1M" />   
                      <p>Maximum file upload size 1MB.</p>
                      <p>Foto dengan background merah.</p>
                      <p>Foto rasio 3x4.</p>
                      <p>Gunakan file type .jpg, .jpeg, .png.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <label for="alamat">Artikel</label>
                  <textarea name="article" required id="ckeditor" class="ckeditor"><?= $post->article ;?></textarea>
                </div>
              </div>
              <div class="col-md-12">
              <div class="form-floating mb-4">
                <label for="publish">Status Publish</label>
                <select name="publish" id="publish" class="form-select">
                  <option value="">- Pilih Status Publish -</option>
                  <option value="draft" <?= ($post->publish == 'draft') ? 'selected' : '' ?>>Draft</option>
                  <option value="published" <?= ($post->publish == 'published') ? 'selected' : '' ?>>Published</option>
                  <option value="archived" <?= ($post->publish == 'archived') ? 'selected' : '' ?>>Archived</option>
                  <option value="unpublished" <?= ($post->publish == 'unpublished') ? 'selected' : '' ?>>Unpublished</option>
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