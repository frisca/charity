<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IA DEL CHARITY</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="<?php echo base_url();?>assets/vendor/styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <style>
      .auth-form .card-body {
          overflow: hidden;
          box-shadow: inset 0 4px 0 0 #007bff;
          border-radius: .625rem;
      }
    </style>
  </head>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <main class="main-content col">
          <div class="main-content-container container-fluid px-4 my-auto h-100">
            <div class="row no-gutters h-100">
              <div class="col-lg-3 col-md-5 auth-form mx-auto my-auto">
                <div class="card">
                  <div class="card-body">
                    <img class="auth-form__logo d-table mx-auto mb-3" src="<?php echo base_url();?>assets/vendor/images/logo.png" alt="IA DEL CHARITY" style="width: 70px;height: 30px;">
                    <h5 class="auth-form__title text-center mb-4">Silahkan Login</h5>
                    <form action="<?php echo base_url('login/processLogin');?>" method="post">
                        <?php if($this->session->flashdata('success') != ""){ ?>
                        <div>
                            <div style="float: left;margin-bottom: 20px;color: green;font-size: 15px;"><?php echo $this->session->flashdata('success');?></div>
                        </div>  
                        <?php }else if($this->session->flashdata('error') != ""){ ?>
                        <div>
                            <div style="float: left;margin-bottom: 20px;color: red;font-size: 15px;"><?php echo $this->session->flashdata('error');?></div>
                        </div>  
                        <?php } ?>
                        <div class="clearfix"></div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username"
                        name="username" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                        name="password" required>
                      </div>
                      <!-- <div class="form-group mb-3 d-table mx-auto">
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label" for="customCheck2">Remember me for 30 days.</label>
                        </div>
                      </div> -->
                      <div class="auth-form__meta mt-4" style="float:right;">
                        <button type="submit" class="btn btn-success">Masuk</button>
                        <a href="<?php echo base_url();?>">
                        <button type="button" class="btn btn-default">Kembali</button>
                        </a>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- <div class="auth-form__meta d-flex mt-4">
                  <a href="forgot-password.html">Forgot your password?</a>
                  <a class="ml-auto" href="register.html">Create new account?</a>
                </div> -->
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <!-- <div class="promo-popup animated">
      <a href="http://bit.ly/shards-dashboard-pro" class="pp-cta extra-action">
        <img src="https://dgc2qnsehk7ta.cloudfront.net/uploads/sd-blog-promo-2.jpg"> </a>
      <div class="pp-intro-bar"> Need More Templates?
        <span class="close">
          <i class="material-icons">close</i>
        </span>
        <span class="up">
          <i class="material-icons">keyboard_arrow_up</i>
        </span>
      </div>
      <div class="pp-inner-content">
        <h2>Shards Dashboard Pro</h2>
        <p>A premium & modern Bootstrap 4 admin dashboard template pack.</p>
        <a class="pp-cta extra-action" href="http://bit.ly/shards-dashboard-pro">Download</a>
      </div>
    </div> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/scripts/extras.1.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/scripts/app/app-blog-overview.1.1.0.js"></script>
  </body>
</html>