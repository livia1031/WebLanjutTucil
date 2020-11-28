<?= $this->extend('templates/content'); ?>

<?= $this->section('content'); ?>

<title>Login Page</title>
</head>

<body>
<div class="container h-100 pt-5">
    <div class="row align-itemes-center h-100 align-middle">
      <div class="col-6 mx-auto">
        <div class="jumbotron">
          <center>
            <h3>Login Form</h3>
          </center>
          <?php $validation  = session()->getFlashdata('validation'); ?>
                <form action="<?= current_url() ?> " method='POST' class="form-signin">

                    <input type="text" name="username" id="inputusername" class="form-control <?= $validation && $validation->hasError('username') ? ' is-invalid' : '' ?>" placeholder="Username">
                    <?php if ($validation && $validation->hasError('username')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    <?php endif; ?>
                    <input type="password" name="password" id="inputPassword" class="form-control <?= $validation && $validation->hasError('password') ? ' is-invalid' : '' ?>" placeholder="Password">
                    <?php if ($validation && $validation->hasError('password')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    <?php endif; ?>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">SIGN IN</button>
                </form><!-- /form -->
        </div>
      </div>
    </div>
  </div>
                
        
    
    <?= $this->endSection(); ?>