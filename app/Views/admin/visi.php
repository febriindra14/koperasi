<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">
  <div class="col s12 m12 l12">
    <div id="button-trigger" class="card card-default scrollspy">
      <div class="card-content">
        <div class="row">
          <div class="col l10 m10">
            <h4 class="card-title">Visi Misi</h4>
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
                        <th>Judul</th>
                        <th>Ringkasan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($usaha as $isi) : ?>
                        <tr>
                          <td><?php echo $isi->title?></td>
                          <td><?php echo $isi->excerpt?></td>
                          <td>
                            <a data-position="top" data-tooltip="Edit Data" class="tooltipped btn-floating mb-1 btn-flat waves-effect amber darken-2 white-text"
                             href="<?=base_url('/'); ?>/admin/edit-visi/<?= $isi->id_posts?>" data-target="dropdown2">
                              <i class="material-icons">create</i>
                          </td>
                        </tr>
                      <?php endforeach ; ?> 
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