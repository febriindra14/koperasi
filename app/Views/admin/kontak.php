<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col s12 m12 l12">
        <div id="button-trigger" class="card card-default scrollspy">
            <div class="card-content">
                <div class="row">
                    <div class="col l10 m10">
                        <h4 class="card-title">Kontak</h4>
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
                                                <th>Facebook</th>
                                                <th>Twitter</th>
                                                <th>Instagram</th>
                                                <th>Telepon</th>
                                                <th>WhatsApp</th>
                                                <th>Email</th>
                                                <th>Logo</th>
                                                <th>Nama web</th>
                                                <th width="10%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($kontak as $row) : ?>
                                                <tr>
                                                    <td><?= $row->fb; ?></td>
                                                    <td><?= $row->twitter; ?></td>
                                                    <td><?= $row->ig; ?></td>
                                                    <td><?= $row->telpon; ?></td>
                                                    <td><?= $row->wa; ?></td>
                                                    <td><?= $row->email; ?></td>
                                                    <td><span class="avatar-contact avatar-online"><img style="max-height: 100px;" src="" alt="avatar"></span></td>
                                                    <td></td>
                                                    <td>
                                                        <a data-position="top" data-tooltip="Edit Data" class="tooltipped btn-floating mb-1 btn-flat waves-effect amber darken-2 white-text" href="<?= base_url(); ?>/admin/edit-kontak/<?= $row->id; ?>" data-target="dropdown2">
                                                            <i class="material-icons">create</i>
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