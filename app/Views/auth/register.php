<?= $this->extend('auth/layout/index') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col s12">
    <div class="container">
      <div id="register-page" class="row">

        <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
          <?= view('Myth\Auth\Views\_message_block') ?>
          <form class="login-form mb-8" action="<?= url_to('register') ?>" method="post">
            <?= csrf_field() ?>
            <div style="text-align:center">
              <img src="<?= base_url('/public/ForntEnd/images/logo'); ?>.png" alt="" style=" height:80px; align:center" />
            </div>

            <div class="row">
              <div class="input-field col s12">
                <h5 class="ml-4">Registrasi</h5>
                <p class="ml-4">Silahkan membuat akun terlebih dahulu</p>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <!--<i class="material-icons prefix pt-2">person_outline</i>-->
                <select name="jenjang_id" id="" required class="select2">
                  <option value="" selected>Pilih Jenjang</option>
                  <option value="1">MTs/SMP Putra</option>
                  <option value="2">MTs/SMP Putri</option>
                  <option value="3">MA/SMA Putra</option>
                  <option value="4">MA/SMA Putri</option>
                </select>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="material-icons prefix pt-2">person_outline</i>
                <input id="username" required type="number" name="username" value="<?= old('username') ?>" />
                <label for="username" class="center-align">NIK Pendaftar<span id="warning-message"></span></label>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="material-icons prefix pt-2">mail_outline</i>
                <input id="email" required type="email" name="email" value="<?= old('email') ?>" />
                <label for="email"><?= lang('Auth.email') ?></label>
              </div>

            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="material-icons prefix pt-2">lock_outline</i>
                <input id="password" required type="password" name="password" autocomplete="off" />
                <label for="password"><?= lang('Auth.password') ?></label>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="material-icons prefix pt-2">lock_outline</i>
                <input id="password-again" required name="pass_confirm" type="password" autocomplete="off" />
                <label for="password-again">Ulangi Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <button type="submit" id="registrasi" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Buat Akun</button>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <p class="margin medium-small">
                  Sudah punya akun? <a class="btn waves-effect waves-light border-round purple" href="<?= url_to('login') ?>">Login</a>
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="content-overlay"></div>
  </div>
</div>
<?= $this->endSection() ?>