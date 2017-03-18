<?php include (APPPATH.'views/global/global-css.php'); ?>
<title> Smart Library Portal</title>

<style type="text/css">
  
.bootstrap-dialog .bootstrap-dialog-message {
    font-size: 14px;
    padding: 20px 0px;
}
.return-submit{
      background-image: linear-gradient(20deg, #00cdac 0%, #8ddad5 100%);
}
.ss-return-header{
      background-image: linear-gradient(20deg, #00cdac 0%, #8ddad5 100%);
}
.ss-borrow-header .topic {
    position: relative;
    padding: 20px 0;
}
</style>
</head>

<body class="ss-home">
<div class="ss-return-page">
  <div class="ss-return-header">
    <div class="topic ">
      <div class="container">
        <div class="col-md-12 center">
          <h3>SELF SERVICE PORTAL</h3>
          <h4>Return Form</h4>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <form id="return-form" action="<?php echo base_url().'index.php/self_service/insert_return';?>" method="post">
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <div class="user-info-wrapper">
          <table class="scan-rfid table" style="min-height: 111px;">
          <tr>
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
          <div class="user-info-wrapper">
            <h4>Borrowed Book</h4>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Book Title</th>
                  <th>Author</th>
                  <th>ISBN</th>
                  <th>Return Deadline</th>
                </tr>
              </thead>
              <tbody class="book-borrow-list">
              </tbody>
            </table>
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
            <button  type="button" class="btn btn-primary btn-small return-submit">Return</button>
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
    var user_id_new;

      $(document).ready(function(){

       get_rfid();
       get_rfid_book();
        $(".user-info").hide();

        $('body').on('click', ".return-submit", function(){
          var form  = $(this).parents('.book-list-form');
          var id = $('[name="user_id"]').val();
          var books = $('[name="books[]"]').val();
          var data = $( "#return-form" ).serialize();
          alert(data);
          alert(books.length);
            $.ajax({
            type: "post",
            url: "<?php echo base_url().'index.php/self_service/insert_return' ;?>",
            data: data,
            success : function(e){
               BootstrapDialog.show({
                    title: 'success',
                    type: BootstrapDialog.TYPE_SUCCESS,
                    message: 'Return Books success',
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
  function get_book_borrow(user_id){
    $.ajax({
            url: "<?php echo base_url().'index.php/self_service/get_borrow/' ;?>"+user_id,
            type: "GET",
            dataType: "html",
            success: function(e){
              $(".book-borrow-list").append(e);
            },
          error: function (jqXHR, textStatus, errorThrown){
            alert("error getting book");
            },
          });
  }

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
             user_id_new = data.user_id;
              $("#user_name").text(data.username);
              $('[name="user_id"]').val(data.user_id);
              console.log(data);
      get_book_borrow(user_id_new);
              
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