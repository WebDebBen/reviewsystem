<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Register
  </title>
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url('assets/front/css/nucleo-icons.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/front/css/nucleo-svg.css')?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url('assets/front/css/font-awesome.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/front/css/nucleo-svg.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/partials/dashboard/core/bootstrap/scss/bootstrap.css')?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/js/plugins/toastr.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/front/css/argon-design-system.css?v=1.2.2')?>" rel="stylesheet" />
  <style>
      .custom-file-label::after{
          height: 40px;
      }

      input.error{
        border: solid 1px red !important;
      }

      label.form-control{
        border: none;
        background: #f4f5f7;
      }
  </style>
</head>

<body class="register-page">
  <!-- End Navbar -->
  <div class="wrapper">
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
          <div class="col-lg-6">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <h4>Register</h4>
                <form role="form" id="register_form" method="post" action="/user/register_request" enctype="multipart/form-data">
              
                  <div class="form-group">
                    <div class="row mb-3">
                      <label class="col-md-3 form-control" for="name">Name</label>
                      <input class="col-md-9 form-control" name="name" id="name" placeholder="Name" type="text">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row mb-3">
                      <label class="col-md-3 form-control" for="email">Email</label>
                      <input class="col-md-9 form-control" name="email" id="email" placeholder="Email" type="email">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row ">
                      <label class="col-md-3 form-control" for="password">Password</label>
                      <input class="col-md-9 form-control" name="password" id="password" placeholder="Password" type="password">
                    </div>
                  </div>

                  <div class="row" style="height: 42px">
                    <div class="col-md-12 input-group">
                      <div class="input-group-prepend" style="height: 43px;" >
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="photo" name="photo"
                          aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="photo">Choose file</label>
                      </div>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Create account</button>
                    <a href="/user/login" class="btn btn-success mt-4">Sign in</a>
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
            <button target="_blank" href="https://twitter.com" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
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
              &copy; 2021 <a href="" target="_blank">Freelancer</a>.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/front/js/core/jquery.min.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/front/js/core/popper.min.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/front/js/core/bootstrap.min.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/bootstrap-switch.js')?>"></script>

  <script src="<?php echo base_url('assets/front/js/plugins/nouislider.min.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/moment.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/datetimepicker.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/bootstrap-datepicker.min.js')?>"></script>

  <script src="<?php echo base_url('assets/front/js/argon-design-system.min.js?v=1.2.2')?>" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
  <script src="<?php echo base_url('assets/js/plugins/toastr.js')?>"></script>
  <input type="hidden" id="status" value="<?php echo $this->session->flashdata('status');?>"/>
  <script>
      $(document).ready(function(){
          $("#photo").on("change", function(){
            $(".custom-file-label").text(document.getElementById("photo").files[0].name );
          });

          if ($("#status").val() == "file"){
            toastr.error('failed to upload the file!');
          }

          validate_form();
      });


      function validate_form(){
        $("#register_form").validate({
            rules: {
                name: "required",
                password: "required",
                photo: "required",
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
              name: "Please select category name",
              password: "Please input trade name",
              photo: "Please input company",
              email: "Please input a valid email address",
            },
            submitHandler: function(form) {
              form.submit();
            }
        });
      }
  </script>
</body>

</html>