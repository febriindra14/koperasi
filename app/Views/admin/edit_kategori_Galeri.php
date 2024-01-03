<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>

<div class="row">

    <div class="col s12 m12 l12">
        <div id="button-trigger" class="card card card-default scrollspy">
            <div class="card-content">
                <h4 class="card-title">Edit kategori</h4>
                <div class="row">
                    <div class="col s12">
                        <form class="contact-form" method="post" action="<?= url_to('update-kategori'); ?>" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <?= session()->getFlashdata('error') ?>
                            <?= service('validation')->listErrors() ?>
                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input type="hidden" name="id" class="form-control" value="<?= $ref_slider->id; ?>" />
                                    <input type="hidden" name="menu" class="form-control" value="<?= $ref_slider->menu; ?>" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <label for="form_tahun">Kategori</label>
                                    <input required id="form_tahun" type="text" name="kategori" value="<?= $ref_slider->kategori; ?>" class="form-control" placeholder="" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <label for="form_tahun">Publish</label>
                                    <select name="publish" id="">
                                        <option value="<?= $ref_slider->publish ?>"><?= $ref_slider->publish ?></option>
                                        <option value="0">Tidak Publish</option>
                                        <option value="1">Publish</option>
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