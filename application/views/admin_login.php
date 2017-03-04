
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

    <!-- costom by developed -->
    <link href="<?php echo base_url("assets/custom-css/custom-dev.css")?>" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url("assets/jquery/dist/jquery.min.js")?>"></script>
  </head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="well">
          <form id="formloginadmin">
            <h1 style="text-align:center">Login Form</h1>
            <!-- <div>
              <input name='email' type="text" class="form-control" placeholder="Username" required="" /><span class="help-block">dsdwewer</span>
            </div> -->
            <div class="item form-group">
            <div class="control-label col-md-12 col-sm-12 col-xs-12">
              <div class="togglebutton">
                <label>
                  <input type="checkbox" id="status_rfid" > Using RFID
                </label>
              </div>
            </div>
          </div>
            <div class="item form-group">
              <label class="control-label col-md-12 col-sm-12 col-xs-12" for="email">Username / RFID <span class="required">*</span>
              </label>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <input type="text" id="email" name="email" required="required"  class="form-control"><span class="help-block"></span>
              </div>
            </div>
            <!-- <div>
              <input name='password' type="password" class="form-control" placeholder="Password" required="" /><span class="help-block">ewrwrw</span>
            </div> -->
            <div class="item form-group">
              <label class="control-label col-md-12 col-sm-12 col-xs-12" for="password">Password <span class="required">*</span>
              </label>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <input type="password" id="d" name="password" required="required"  class="form-control"><span class="help-block"></span>
              </div>
            </div>

            <div>
              <a class="btn btn-default submit" onclick="login()">Log in</a>
              <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">New to site?
                <a href="#signup" class="to_register"> Create Account </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-book fa-lg"></i>   SLSBMCW</h1>
                <p>©2017 All Rights Reserved. SLSBMCW is Smart Library System Base on Microcontroller and Web</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
  <!-- Bootstrap -->
  <script src="<?php echo base_url("assets/bootstrap/dist/js/bootstrap.min.js")?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url("assets/fastclick/lib/fastclick.js")?>"></script>
  <!-- NProgress -->
  <script src="<?php echo base_url("assets/nprogress/nprogress.js")?>"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url("assets/iCheck/icheck.min.js")?>"></script>
  <script src="<?php echo base_url("assets/jszip/dist/jszip.min.js")?>"></script>
  <script src="<?php echo base_url("assets/pdfmake/build/pdfmake.min.js")?>"></script>
  <script src="<?php echo base_url("assets/pdfmake/build/vfs_fonts.js")?>"></script>
  <!-- <script src="<?php echo base_url("assets/validator/validator.js")?>"></script> -->
  <!-- material -->
  <script src="<?php echo base_url("assets/bootstrap-material/js/material.js")?>"></script>
  <script src="<?php echo base_url("assets/bootstrap-material/js/ripples.min.js")?>"></script>
  <script>
    $.material.init();
  </script>
  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url("assets/build/js/custom.min.js")?>"></script>
  <script>
  $(document).ready(function(){
        //$("#formloginadmin")[0].reset();

  });

  function login()
  {
    $.ajax({
        url : "<?php echo site_url('access/login')?>",
        type: "POST",
        data: $("#formloginadmin").serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                //location.reload();
                window.location = "<?php echo site_url('admin/home')?>";
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++)
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
        }
    });
  }

  $("#status_rfid").change(function(){
    get_rfid();
});

  function get_rfid()
  {
    $.ajax({
        url : "<?php echo base_url('rfid.json')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          console.log("rfid :"+data.rfid+" help: "+data.helpya);
          var rfid_tag=data.rfid;
          //$(".modal-title").text(rfid_tag);
          $('[name="email"]').val(rfid_tag);
          $(".help-block").text(data.helpya);
          if(data.rfid==0){
          $('[name="email"]').parent().parent().addClass('has-error');
          }
          else{
          $('[name="email"]').parent().parent().removeClass('has-error');
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        },
        complete: function() {
          // schedule the next request *only* when the current one is complete:
          if($("#status_rfid").prop("checked") == true){
          setTimeout(get_rfid, 1000);
          }
        }
      });
  }
  </script>




</body>
</html>
