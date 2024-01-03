<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">
  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card-default scrollspy">
      <div class="card-content">
        <div class="row">
          <div class="col l10 m10">
            <h4 class="card-title">Kategori Berita</h4>
          </div>
          <div class="col l2 m2">
            <a href="<?= url_to('tambah-kategori-berita'); ?>" class="btn" style=" background : linear-gradient(45deg, indigo, blue)">Tambah Kategori</a>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <div class="app-wrapper">
              <div id="button-trigger" class="card-default scrollspy border-radius-6 fixed-width" style="max-height: 500px !important;">
                <div class="card-content p-2">
                  <table id="data-table-simple" class="display dataTable dtr-inline" role="grid" style="width:100%">
                    <thead>
                      <tr>
                        <th>Nama Kategori</th>
                        <th>Slug</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($categories as $isi) : ?>
                        <tr>
                          <td><?php echo $isi->category_name?></td>
                          <td><?php echo $isi->slug?></td>
                          <td>
                            <a data-position="top" data-tooltip="Edit Data" class="tooltipped btn-floating mb-1 btn-flat waves-effect amber darken-2 white-text"
                             href="<?= base_url('/'); ?>/admin/edit-kategori-berita/<?=$isi->id_category?>" data-target="dropdown2">
                              <i class="material-icons">create</i>
                            </a>
                            <a data-position="top" onclick="return confirm('Yakin menghapus Kategori <?php echo $isi->category_name; ?>?')" data-tooltip="Hapus Data" class="tooltipped btn-floating mb-1 btn-flat waves-effect red darken-2 darken-2 white-text" 
                            href="<?= base_url('/')?>/admin/hapus-kategori-berita/<?=$isi->id_category;?>" data-target="dropdown2">
                              <i class="material-icons">delete</i>
                            </a>
                          </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>