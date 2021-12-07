<!--
=========================================================
* Argon Design System - v1.2.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Argon Design System by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url('assets/front/css/nucleo-icons.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/front/css/nucleo-svg.css')?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url('assets/front/css/font-awesome.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/front/css/nucleo-svg.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/js/plugins/toastr.css')?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/front/css/argon-design-system.css?v=1.2.2')?>" rel="stylesheet" />
</head>

<body class="login-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="../index.html">
        Review Logo
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../../../index.html">
                Review Logo
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
              <i class="fa fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com" target="_blank" data-toggle="tooltip" title="Star us on Github">
              <i class="fa fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container pt-lg-7">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form">
                <div class="form-group"><h3>Login</h3></div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="useremail" id="useremail">
                  </div>
                </div>
                <div class="form-group focused">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password" id="password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4" id="signin_btn">Sign in</button>  
                  <a href="/user/register" class="btn btn-success my-4" id="signin_btn">Sign up</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="row row-grid align-items-center mb-5">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <button target="_blank" href="https://twitter.com/" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
          </button>
          <button target="_blank" href="https://www.facebook.com/" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
          </button>
          <button target="_blank" href="https://dribbble.com" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
          </button>
          <button target="_blank" href="https://github.com" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
            <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
          </button>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2021 <a href="" target="_blank">Review</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="/review" class="nav-link">Review</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/front/js/core/jquery.min.js')?>" type="text/javascript"></script> 
  <script src="<?php echo base_url('assets/front/js/core/popper.min.js')?>" type="text/javascript"></script> 
  <script src="<?php echo base_url('assets/front/js/core/bootstrap.min.js')?>" type="text/javascript"></script> 
  <script src="<?php echo base_url('assets/front/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/nouislider.min.js')?>" type="text/javascript"></script> 
  <script src="<?php echo base_url('assets/front/js/plugins/datetimepicker.js')?>" type="text/javascript"></script> 
  <script src="<?php echo base_url('assets/front/js/plugins/bootstrap-datepicker.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/toastr.js')?>"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
    <script>
        $(document).ready(function(e){
            $("#signin_btn").on("click", function(){
                var useremail = $("#useremail").val();
                var password = $("#password").val();

                if (useremail == "" ){
                    toastr.error('input useremail!');
                    return;
                }

                if (password == "" ){
                    toastr.error('input password');
                    return;
                }

                $.ajax({
                    url: "/user/login_request",
                    data: {
                        useremail: useremail,
                        password: password
                    },
                    dataType: "json",
                    type: "post",
                    success: function(data ){
                        if (data["result"] == "success"){
                            location.href = "/admin/trade";
                        }else{
                            toastr.success('login info wrong');
                        }
                    }
                })
            });
        })
    </script>
</body>

</html>