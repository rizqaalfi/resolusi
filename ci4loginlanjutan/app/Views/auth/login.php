<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-md-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">

            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h2 class="h4 text-gray-900 mb-4"><?= lang('Auth.loginTitle') ?></h2>
                </div>
                <p class="small"><?= view('Myth\Auth\Views\_message_block') ?></p>
                <form class="user" action="<?= route_to('login') ?>" method="post">
                  <?= csrf_field() ?>
                  <?php if ($config->validFields === ['email']) : ?>
                    <div class="form-group">

                      <input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                      <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                      </div>
                    </div>
                  <?php else : ?>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                      <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                      </div>
                    </div>
                  <?php endif; ?>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                    <div class="invalid-feedback">
                      <?= session('errors.password') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <?php if ($config->allowRemembering) : ?>
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
                        <label class="custom-control-label" for="customCheck"><?= lang('Auth.rememberMe') ?></label>
                      </div>
                    <?php endif; ?>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block btn-user"><?= lang('Auth.loginAction') ?></button>


                </form>
                <hr>

                <div class="text-center">
                  <?php if ($config->allowRegistration) : ?>
                    <p class="small"><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                  <?php endif; ?>
                </div>
                <div class="text-center">
                  <?php if ($config->activeResetter) : ?>
                    <p class="small"><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
<?= $this->endSection(); ?>