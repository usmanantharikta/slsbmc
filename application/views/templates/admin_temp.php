<?php
if(!empty($this->session->userdata("user"))){
  $user=$this->session->userdata("user");
  $level=$this->session->userdata("level");
  $login=TRUE;
} else {
  $login=FALSE;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin SLSBMC</title>



    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/bootstrap/dist/css/bootstrap.min.css")?> " rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("assets/font-awesome-new/css/font-awesome.min.css")?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url("assets/nprogress/nprogress.css")?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url("assets/iCheck/skins/flat/green.css")?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url("assets/datatables.net-bs/css/dataTables.bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css")?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("assets/build/css/custom.min.css")?>" rel="stylesheet">

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap Material Design -->
    <link href="<?php echo base_url("assets/bootstrap-material/css/bootstrap-material-design.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/bootstrap-material/css/ripples.min.css")?>" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url("assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css")?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url("assets/jqvmap/dist/jqvmap.min.css")?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url("assets/bootstrap-daterangepicker/daterangepicker.css")?>" rel="stylesheet">

    <!-- costom by developed -->
    <link href="<?php echo base_url("assets/custom-css/custom-dev.css")?>" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url("assets/jquery/dist/jquery.min.js")?>"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <?php
      if($login)
      {
      ?>
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-book"></i> <span>SLSBMC</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url("images/img.jpg")?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Super Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('admin/home')?>">Dashboard</a></li>
                      <!-- <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Book <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('admin/book_new')?>">New Book</a></li>
                      <li><a href="<?php echo site_url('admin/book_location')?>">Book Location</a></li>
                      <!-- <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-address-card-o"></i>Member<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('admin/member')?>">All Member</a></li>
                      <!-- <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-id-card"></i> Card <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('admin/register_tag')?>">Registered Card</a></li>
                      <!-- <li><a href="tables_dynamic.html">Table Dynamic</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clock-o"></i> Daftar Pengunjung <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('admin/table_visitor')?>">Daftar Pengunjung </a></li>
                      <!-- <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li> -->
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li> -->
                </ul>
              </div>
              <!-- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div> -->

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url('access/logout')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url("images/img.jpg")?>" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo site_url('access/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url("images/img.jpg")?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url("images/img.jpg")?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url("images/img.jpg")?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url("images/img.jpg")?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <?php echo $body ?>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <?php }
      if(!$login){
      ?>
      <div class="login_wrapper" style="max-width:800px">

      <div class="alert alert-dismissible alert-warning">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <h4>Warning!</h4>

      <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna,
        <a href="javascript:void(0)" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
        <meta http-equiv="refresh" content="3;url=http://localhost/sls/admin"/>
    </div>
  </div>

    <?php
      }
      ?>

    </div>



    <!-- Bootstrap -->
    <script src="<?php echo base_url("assets/bootstrap/dist/js/bootstrap.min.js")?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url("assets/fastclick/lib/fastclick.js")?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url("assets/nprogress/nprogress.js")?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url("assets/iCheck/icheck.min.js")?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url("assets/datatables.net/js/jquery.dataTables.min.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-bs/js/dataTables.bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-buttons/js/dataTables.buttons.min.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-buttons/js/buttons.flash.min.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-buttons/js/buttons.html5.min.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-buttons/js/buttons.print.min.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-keytable/js/dataTables.keyTable.min.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-responsive/js/dataTables.responsive.min.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-responsive-bs/js/responsive.bootstrap.js")?>"></script>
    <script src="<?php echo base_url("assets/datatables.net-scroller/js/dataTables.scroller.min.js")?>"></script>
    <script src="<?php echo base_url("assets/jszip/dist/jszip.min.js")?>"></script>
    <script src="<?php echo base_url("assets/pdfmake/build/pdfmake.min.js")?>"></script>
    <script src="<?php echo base_url("assets/pdfmake/build/vfs_fonts.js")?>"></script>
    <!-- <script src="<?php echo base_url("assets/validator/validator.js")?>"></script> -->
    <!-- material -->
    <script src="<?php echo base_url("assets/bootstrap-material/js/material.js")?>"></script>
    <script src="<?php echo base_url("assets/bootstrap-material/js/ripples.min.js")?>"></script>

    <script src="<?php echo base_url("assets/Chart.js/dist/Chart.min.js")?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url("assets/gauge.js/dist/gauge.min.js")?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url("assets/bootstrap-progressbar/bootstrap-progressbar.min.js")?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url("assets/iCheck/icheck.min.js")?>"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url("assets/skycons/skycons.js")?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url("assets/Flot/jquery.flot.js")?>"></script>
    <script src="<?php echo base_url("assets/Flot/jquery.flot.pie.js")?>"></script>
    <script src="<?php echo base_url("assets/Flot/jquery.flot.time.js")?>"></script>
    <script src="<?php echo base_url("assets/Flot/jquery.flot.stack.js")?>"></script>
    <script src="<?php echo base_url("assets/Flot/jquery.flot.resize.js")?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url("assets/flot.orderbars/js/jquery.flot.orderBars.js")?>"></script>
    <script src="<?php echo base_url("assets/flot-spline/js/jquery.flot.spline.min.js")?>"></script>
    <script src="<?php echo base_url("assets/flot.curvedlines/curvedLines.js")?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url("assets/DateJS/build/date.js")?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url("assets/jqvmap/dist/jquery.vmap.js")?>"></script>
    <script src="<?php echo base_url("assets/jqvmap/dist/maps/jquery.vmap.world.js")?>"></script>
    <script src="<?php echo base_url("assets/jqvmap/examples/js/jquery.vmap.sampledata.js")?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url("assets/moment/min/moment.min.js")?>"></script>
    <script src="<?php echo base_url("assets/bootstrap-daterangepicker/daterangepicker.js")?>"></script>

    <script>
      $.material.init();
    </script>
    <script>
    var login = '<?php echo $login ?>';
    var user= '<?php echo $user ?>';
    var level= '<?php echo $level ?>';
    console.log(login);
    console.log("user : "+user+" - level: "+level);
    </script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url("assets/build/js/custom.min.js")?>"></script>


  </body>
</html>
