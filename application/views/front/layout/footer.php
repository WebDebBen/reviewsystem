</div>
      </div>
    </div>
  </div>
  </div>

  <footer class="footer has-cards">
    <div class="container">
      <div class="row row-grid align-items-center my-md">
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
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">Freelancer</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/front/js/core/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/core/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/core/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/bootstrap-switch.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/nouislider.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/moment.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/datetimepicker.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/bootstrap-datepicker.min.js')?>"></script>
  <script src="<?php echo base_url('assets/front/js/plugins/jsRapStar.js')?>"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="<?php echo base_url('assets/front/js/argon-design-system.min.js?v=1.2.2')?>"></script>
  <?php
    foreach($scripts as $item ){
        echo "<script src='" . base_url('assets/front/js/' . $item ) . "'></script>";
    }
  ?>  
  <script>

  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>