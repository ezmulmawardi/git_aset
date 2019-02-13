<?php include "header.php"; ?>
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <span>Pengaturan</span>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>
          <div class="content-i">
            <div class="content-box">
              <div class="row justify-content-sm-center">
                <div class="col-sm-7">
                  <div class="element-wrapper">
                    <div class="element-box">
                      <form id="formValidate">
                        <div class="element-info">
                          <div class="element-info-with-icon">
                            <div class="element-info-icon">
                              <div class="os-icon os-icon-emoticon-smile"></div>
                            </div>
                            <div class="element-info-text">
                              <h5 class="element-inner-header" style="margin-bottom: 0;">
                                Ubah Profil
                              </h5>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for=""> Nama</label><input class="form-control" data-error="Nama wajib diisi" placeholder="nama" required="required" type="text">
                          <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                        <div class="form-group">
                          <label for=""> Username</label><input class="form-control" data-error="Username wajib diisi" placeholder="username" required="required" type="text">
                          <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                        <div class="form-buttons-w">
                          <button class="btn btn-primary" type="submit"> Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-7">
                  <div class="element-wrapper">
                    <div class="element-box">
                      <form id="formValidate">
                        <div class="element-info">
                          <div class="element-info-with-icon">
                            <div class="element-info-icon">
                              <div class="os-icon os-icon-robot-2"></div>
                            </div>
                            <div class="element-info-text">
                              <h5 class="element-inner-header" style="margin-bottom: 0;">
                                Ubah Password
                              </h5>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for=""> Password</label><input class="form-control" data-minlength="6" placeholder="Password" required="required" type="password">
                              <div class="help-block form-text text-muted form-control-feedback">
                                Minimum of 6 characters
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Confirm Password</label><input class="form-control" data-match-error="Passwords don&#39;t match" placeholder="Confirm Password" required="required" type="password">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-buttons-w">
                          <button class="btn btn-primary" type="submit"> Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="bower_components/bootstrap/js/dist/util.js"></script>
    <script src="bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="bower_components/bootstrap/js/dist/button.js"></script>
    <script src="bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="js/demo_customizer.js?version=4.4.0"></script>
    <script src="js/main.js?version=4.4.0"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-XXXXXXX-9', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
