<?php include "header.php"; ?>
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <span>Input</span>
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
              <div class="row">
                <div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">
                      Utama
                    </h6>
                    <div class="element-content">
                      <style type="text/css">
                        .row.kib{
                          justify-content: center;
                        }
                      </style>
                      <div class="row kib">
                        <div class="col-sm-6 col-md-2 col-xxxl-2">
                          <a class="element-box el-tablo" href="input.php?p=1">
                            <div class="value">
                              KIB A
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-6 col-md-2 col-xxxl-2">
                          <a class="element-box el-tablo" href="input.php?p=2">
                            <div class="value">
                              KIB B
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-6 col-md-2 col-xxxl-2">
                          <a class="element-box el-tablo" href="input.php?p=3">
                            <div class="value">
                              KIB C
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-6 col-md-2 col-xxxl-2">
                          <a class="element-box el-tablo" href="input.php?p=4">
                            <div class="value">
                              KIB D
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-6 col-md-2 col-xxxl-2">
                          <a class="element-box el-tablo" href="input.php?p=5">
                            <div class="value">
                              KIB E
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              if (@$_GET['p']==1) {
                include"input_a.php";
              }
              if (@$_GET['p']==2) {
                include"input_b.php";
              }
              if (@$_GET['p']==3) {
                include"input_c.php";
              }
              if (@$_GET['p']==4) {
                include"input_d.php";
              }
              if (@$_GET['p']==5) {
                include"input_e.php";
              }
              ?>
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
