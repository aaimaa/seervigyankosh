<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Seervigyankosh | Log in</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" sizes="16x16" href="">

  <!-- Font Awesome -->  

  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https:/code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- icheck bootstrap -->  

  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">

  <!-- Theme style -->  

  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css') ?>">

  <!-- Google Font: Source Sans Pro -->

  <link href="https:/fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script type="text/javascript"> var SITEURL = "<?= base_url()?>"; </script>

  <style type="text/css">

  	.login-page{

  		background: url("<?= base_url('assets/images/b1.jpg')?>") no-repeat right center;

  	}

  </style>

</head>

<body class="hold-transition login-page">

<div class="login-box">

  <div class="login-logo">

    <a href="#"><img src="<?php echo base_url('assets/images/logo.png') ?>" width="150"></a>

  </div>

  <!-- /.login-logo -->

  <?php  $message = $this->session->flashdata('msg');

                if (isset($message)) {

                   echo '<div class="alert alert-danger">' . $message . '</div>';

               }?>

  <div class="card">

    <div class="card-body login-card-body">

      <p class="login-box-msg">Sign in to start your session</p>



      <form action="<?php echo base_url('admin/post-login')?>" name="login-form" id="login-form" method="post">

      

        <div class="input-group">

          <input type="email" name="email" id="email" class="form-control" placeholder="Email">

          <div class="input-group-append">

            <div class="input-group-text">

              <span class="fas fa-envelope"></span>

            </div>

          </div>

        </div>

        <p class="error text-danger"></p>



        <div class="input-group mt-3">

          <input type="password" name="password" id="password" class="form-control" placeholder="Password">

          <div class="input-group-append">

            <div class="input-group-text">

              <span class="fas fa-lock"></span>

            </div>

          </div>

        </div>

        <p class="error text-danger"></p>

        <div class="row mt-3">

          <div class="col-8">

            <div class="icheck-primary">

              <input type="checkbox" id="remember">

              <label for="remember">

                Remember Me

              </label>

            </div>

          </div>

          <!-- /.col -->

          <div class="col-4">

            <button type="submit" class="btn btn-primary btn-block">Sign In</button>

          </div>

          <!-- /.col -->

        </div>

      </form>



      <p class="mb-1">

        <!-- <a href="#">I forgot my password</a> -->

      </p>

    </div>

    <!-- /.login-card-body -->

  </div>

</div>

<!-- /.login-box -->



<!-- jQuery -->



<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>

<!-- Bootstrap 4 -->

<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?php echo base_url('assets/dist/js/bootstrap-notify.min.js') ?>"></script>

<!-- AdminLTE App -->

<script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>

<script src="<?php echo base_url('assets/custom-scripts/jquery.validate.min.js') ?>"></script>

<script src="<?php echo base_url('assets/custom-scripts/form-validation.js') ?>"></script>



</body>

</html>

