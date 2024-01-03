<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">
  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card-default scrollspy">
      <div class="card-content">
        <div class="row">
          <div class="col l10 m10">
            <h4 class="card-title">Galeri</h4>
          </div>
          <div class="col l2 m2">
            <a href="<?= url_to('tambah-galeri'); ?>" class="btn" style=" background : linear-gradient(45deg, indigo, blue)">Tambah Galeri</a>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <div class="app-wrapper">
              <div id="button-trigger" class="card-default scrollspy border-radius-6 fixed-width" style="max-height: 500px !important;">
                <div class="card-content p-2">
                  <table id="data-table-tanggal" class="display dataTable dtr-inline" role="grid" style="width:100%">
                    <thead>
                      <tr>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Publish</th>
                        <th>Urutan</th>
                        <th width="15%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $row) : ?>
                        <tr>
                          <td><span class="avatar-contact avatar-online"><img style="max-height: 100px;" src="<?= base_url('public/img/' . $row->image); ?>" alt="avatar"></span></td>
                          <td><?= $row->title; ?></td>
                          <td><?= $row->deskripsi; ?></td>
                          <td><?= $row->publish; ?></td>
                          <td><?= $row->urutan; ?></td>
                          <td>
                            <a data-position="top" data-tooltip="Edit Data" class="tooltipped btn-floating mb-1 btn-flat waves-effect amber darken-2 white-text" href="<?= base_url('/'); ?>/admin/edit-member/<?= $row->id; ?>" data-target="dropdown2">
                              <i class="material-icons">create</i>
                            </a>
                            <a data-position="top" onclick="return confirm('Yakin menghapus data, <?= $row->nama_pengurus; ?>?')" data-tooltip="Hapus Data" class="tooltipped btn-floating mb-1 btn-flat waves-effect red darken-2 darken-2 white-text" href="<?= base_url('/'); ?>/admin/hapus-member/<?= $row->id; ?>" data-target="dropdown2">
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