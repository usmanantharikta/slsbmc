<?php include (APPPATH.'views/global/global-css.php'); ?>
<title> Smart Library Portal</title>

<style type="text/css">
  
.bootstrap-dialog .bootstrap-dialog-message {
    font-size: 14px;
    padding: 20px 0px;
}
.borrow-submit{
  background-image: linear-gradient(20deg, #4481eb 0%, #04befe 100%);
}
.ss-borrow-header{
  background-image: linear-gradient(20deg, #4481eb 0%, #04befe 100%);
}
.ss-borrow-header .topic {
    position: relative;
    padding: 20px 0;
}
</style>
</head>

<body class="ss-home">
<div class="ss-borrow-page">
  	<div class="ss-borrow-header">
      <!--nav-->
 <!--      <nav class="navbar navbar-default navbar-custom" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SLS<img src="img/logo.png" height="40"></a>
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
      </nav> -->

      <div class="topic ">
        <div class="container">
          <div class="col-md-12 center">
            <h3>SELF SERVICE PORTAL</h3>
            <h4>Borrow Form</h4>
          </div>
        </div>
      </div>
    </div>

      <div class="container">
      <form id="borrow-form" action="<?php echo base_url().'index.php/self_service/insert_borrow';?>" method="post">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="user-info-wrapper">
            <table class="scan-rfid table" style="min-height: 111px;">
            <tr >
            <td style="vertical-align: middle;"><h5 class="text-center">Scan Your Card</h5></td>
            </tr>
            </table>
              <table class="table user-info table-striped">
                <tr>
                  <td>
                    User ID
                  </td>
                  <td>
                  :
                  </td>
                  <td id="user_id">
                  </td>
                </tr>
                <tr>
                  <td >
                    User Name
                  </td>
                  <td>
                  :
                  </td>
                  <td id="user_name">
                    <input type="hidden" name="user_name">
                  </td>
                </tr>

                <tr>
                  <td>
                    Status
                  </td>
                  <td>
                  :
                  </td>
                  <td>
                    Active
                    <input type="hidden" name="user_status">
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="user-info-wrapper">
              <table class="table table-striped">
                <tr>
                  <td>
                    Date
                  </td>
                  <td>
                  :
                  </td>
                  <td>
                    <?php echo date("j F Y"); ?>
                    <input type="hidden" name="date_issue" value="<?php echo date('Y-m-d'); ?>">
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <h4>List of books</h4>
            <div class="book-list">
              <table class="table table-striped">
                <thead>
                    <tr>
                      <th>No.</th>
                      <th>Book Title</th>
                      <th>Author</th>
                      <th>Edition</th>
                      <th>ISBN</th>
                    </tr>
                </thead>
                <tbody class="book-list-form">
                </tbody>
              </table>
              <button  type="button" class="btn btn-primary btn-small borrow-submit">Borrow</button>
              <input type="hidden" name="user_id" value="">
              <input type="hidden" name="username" value="">
            </div>
          </div>
        </div>
      </form>
      </div>
  </div>

<!-- Global JS Start -->
    <?php include (APPPATH.'views/global/global-js.php'); ?>
    <!-- Global JS End -->

    <script>
      $(document).ready(function(){

       get_rfid();
       get_rfid_book();
        $(".user-info").hide();

        $('body').on('click', ".borrow-submit", function(){
          var form  = $(this).parents('.book-list-form');
          var id = $('[name="user_id"]').val();
          var books = $('[name="books[]"]').val();
          var data = $( "#borrow-form" ).serialize();
          alert(data);
          alert(books.length);
            $.ajax({
            type: "post",
            url: "<?php echo base_url().'index.php/self_service/insert_borrow' ;?>",
            data: data,
            success : function(e){
               BootstrapDialog.show({
                    title: 'success',
                    type: BootstrapDialog.TYPE_SUCCESS,
                    message: 'Your books has already borrowed by you. You can take out the book from the library',
                    onhidden: function(dialogRef){
                     location.href = "<?php echo base_url().'index.php/self_service/' ;?>"                  
                    }
                });
            },
            error : function(){
              alert("err");
            }
           });
        }); 

        $('body').on('click', ".add-book", function(){
          //var data = $( "#add-book-form" ).serialize();
          var form=$(this).parents('form');
          var book_id = '29';
            $.ajax({
            type: "post",
            url: "<?php echo base_url().'index.php/self_service/add_book/' ;?>"+book_id,
            data: "",
            success : function(e){
               
                $(".book-list-form").append(e);
            }
           });
        }); 
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
          
          $.ajax({
            url : "<?php echo base_url('index.php/self_service/get_user_data_by_rfid/')?>"+rfid_tag,
            type: "GET",
            dataType: "JSON",
            success: function(data){
              if(rfid_tag!=0){
              $(".scan-rfid").hide();
              $(".user-info").show();
             $("#user_id").text(data.user_id);
              $("#user_name").text(data.username);
              $('[name="user_id"]').val(data.user_id);
              console.log(data);
            }else{
              alert("err");
            }
          }
          });
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        },
        complete: function() {
          // schedule the next request *only* when the current one is complete:
        //  if($("#status_rfid").prop("checked") == true){
         // setTimeout(get_rfid, 1000);
        //  }
        }
      });
  }

        function get_rfid_book()
  {
    $.ajax({
        url : "<?php echo base_url('rfidbook.json')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          console.log("rfid :"+data.rfid+" help: "+data.helpya);
          var book_rfid=data.rfid;
          
          $.ajax({
            url: "<?php echo base_url().'index.php/self_service/add_book/' ;?>"+book_rfid,
            type: "GET",
            dataType: "html",
            success: function(e){
              if(book_rfid!=0){
              $(".book-list-form").append(e);

            }else{
            }
          },
          error: function (jqXHR, textStatus, errorThrown)
        {
            alert("error getting book");

        }
          });
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        },
        complete: function() {
          $.ajax({
            url: "<?php echo base_url().'index.php/self_service/reset_json_book/' ;?>",
          });
          // schedule the next request *only* when the current one is complete:
        //  if($("#status_rfid").prop("checked") == true){
          //  setTimeout(get_rfid_book, 1000);
        //  }
        }
      });
  }
    </script>
    </body>
    </html>
      <!--header-->
