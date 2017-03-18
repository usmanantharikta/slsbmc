<?php include (APPPATH.'views/global/global-css.php'); ?>
<title> Smart Library Portal</title>
</head>

<body class="ss-home">
<div class="ss-home-page">
  	<div class="ss-home-header">
      <!--nav-->
      <nav class="navbar navbar-default navbar-custom" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SLS<!-- <img src="img/logo.png" height="40"> --></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a class="nav-link" href="getting-started.html">Getting Started</a></li>
              <li><a class="nav-link current" href="documentation.html">Documentation</a></li>
              <li><a class="nav-link" href="free-psd.html">Free PSD</a></li>
              <li><a class="nav-link" href="color-picker.html">Color Picker</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="topic ">
        <div class="container">
      <div class="col-md-12 center">
        <h3>SELF SERVICE PORTAL</h3>
        <h4>Smart Library System</h4>
      </div>
         </div>
        <div class="topic__infos center">
          <div class="container">
            <p>Lend or Return the book here</p>
          </div>
        </div>
      </div>
      </div>

      <div class="menu-wrapper">
        <div class="container">
         <div class="col-sm-6 col-md-6">
            <div class="button-ss pull-right text-center">
            <a href="<?php echo base_url().'index.php/self_service/borrow'; ?>">
            <div class="button-block button-block-borrow">
            BORROW
              </div>
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div type="button" class="button-ss left text-center">
            <a href="<?php echo base_url().'index.php/self_service/return_book'; ?>">
            <div class="button-block button-block-return">
            RETURN
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>

   </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">BORROW FORM</h4>
      </div>
      <div class="modal-body">
        <div class="user-profile">
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Global JS Start -->
    <?php include (APPPATH.'views/global/global-js.php'); ?>
    <!-- Global JS End -->
    </body>
    </html>
      <!--header-->
