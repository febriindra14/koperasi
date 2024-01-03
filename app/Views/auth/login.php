<?= $this->extend('auth/layout/index') ?>
<?= $this->section('content') ?>

<div class="row">
  <div class="col s12">
    <div class="container">
      <div id="login-page" class="row">
        <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
          <?= view('Myth\Auth\Views\_message_block') ?>
          <form class="login-form mb-8" action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>
            <div style="text-align:center">
              <img src="<?= base_url('/public/FrontEnd/images/logo'); ?>.png" alt="" style=" height:80px; align:center" />
            </div>
            <div class="row">
              <div class="input-field col s12">
                <h5 class="ml-4">Login</h5>
              </div>

            </div>
            <?php if ($config->validFields === ['email']) : ?>
              <div class="row margin">
                <div class="input-field col s12">
                  <i class="material-icons prefix pt-2">person_outline</i>
                  <input id="email" type="text" name="login" />
                  <label for="email" class="center-align">Email</label>
                  <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                  </div>
                </div>
              </div>

            <?php else : ?>
              <div class="row margin">
                <div class="input-field col s12 ">
                  <i class="material-icons prefix pt-2">person_outline</i>
                  <input id="username" type="text" name="login" />
                  <label for="username" class="center-align">Username</label>

                </div>
              </div>

            <?php endif; ?>

            <div class="row margin">
              <div class="input-field col s12 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>">
                <i class="material-icons prefix pt-2">lock_outline</i>
                <input id="password" type="password" name="password" />
                <label for="password"><?= lang('Auth.password') ?></label>
                <div class="invalid-feedback">
                  <?= session('errors.password') ?>
                </div>
              </div>
            </div>

            <?php if ($config->allowRemembering) : ?>
              <div class="row">
                <div class="col s12 m12 l12 ml-2 mt-1">
                  <p>
                    <label>
                      <input type="checkbox" <?php if (old('remember')) : ?> checked <?php endif ?> />
                      <span><?= lang('Auth.rememberMe') ?></span>
                    </label>
                  </p>
                </div>
              </div>
            <?php endif; ?>

            <div class="row ">
              <div class="input-field col s12">
                <button type="submit" style="background: linear-gradient( 171.8deg, rgba(5,111,146,1) 13.5%, rgba(6,57,84,1) 78.6% )!important;" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12 ">login</button>
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