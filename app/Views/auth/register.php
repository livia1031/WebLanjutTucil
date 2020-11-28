<?= $this->extend('templates/content'); ?>

<?= $this->section('content'); ?>

    <title>Sign Up!</title>
  </head>
  <body>
    

    <div class="container h-100 pt-5">
         <div class="row align-itemes-center h-100 align-middle">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                <center>
                 <h3>Sign Up</h3>
                </center>
                <?php $validation = session()->getFlashData('validation'); ?>

                <form action="<?= current_url() ?> " method='POST' class="form-signin">
                    <input value="<?= old('first_name') ?>" type="text" name="first_name" id="first_name" class="form-control <?= $validation && $validation->hasError('first_name') ? ' is-invalid' : '' ?>" placeholder="First Name">
                    <?php if ($validation && $validation->hasError('first_name')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('first_name'); ?>
                        </div>
                    <?php endif; ?>
                    <input value="<?= old('last_name') ?>" type="text" name="last_name" id="last_name" class="form-control <?= $validation && $validation->hasError('last_name') ? ' is-invalid' : '' ?>" placeholder="Last Name">
                    <?php if ($validation && $validation->hasError('last_name')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('last_name'); ?>
                        </div>
                    <?php endif; ?>
                    <input value="<?= old('email') ?>" type="email" name="email" id="email" class="form-control <?= $validation && $validation->hasError('email') ? ' is-invalid' : '' ?>" placeholder="E-Mail">
                    <?php if ($validation && $validation->hasError('email')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    <?php endif; ?>
                    <input value="<?= old('username') ?>" type="text" name="username" id="username" class="form-control <?= $validation && $validation->hasError('username') ? ' is-invalid' : '' ?>" placeholder="Username">
                    <?php if ($validation && $validation->hasError('username')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    <?php endif; ?>
                    <input value="<?= old('password') ?>" type="password" name="password" id="password" class="form-control <?= $validation && $validation->hasError('password') ? ' is-invalid' : '' ?>" placeholder="Password">
                    <?php if ($validation && $validation->hasError('password')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    <?php endif; ?>
                    <input value="<?= old('cpassword') ?>" type="password" name="cpassword" id="cpassword" class="form-control <?= $validation && $validation->hasError('cpassword') ? ' is-invalid' : '' ?>" placeholder="Confirm Password">
                    <?php if ($validation && $validation->hasError('cpassword')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('cpassword'); ?>
                        </div>
                    <?php endif; ?>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">SIGN UP</button>
                </form><!-- /form -->
    </div>
    </div>
    </div>
    </div>

  <?= $this->endSection(); ?>