<div class="page-title">
  <div class="title_left">
    <h3>BOOK MANAGER</h3>
  </div>

  <!-- <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Go!</button>
        </span>
      </div>
    </div>
  </div> -->
</div>

<div class="clearfix"></div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>NEW BOOK TABLE</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <!-- <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul> -->
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
<div class="x_content">
  <p class="text-muted font-13 m-b-30">
  This is table of new book being insert , please complete the data of book !!!!
  </p>
<a href="javascript:void(0)" onclick="reload_table()"class="btn btn-raised btn-primary">Reload Table</a>
<a href="javascript:void(0)" onclick="add_book()"class="btn btn-raised btn-primary">Add New Book</a>
  <table id="new_book" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Book ID</th>
        <th>RFID</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Editor</th>
        <th>Years</th>
        <th>Descripton</th>
        <th>Date Input</th>
        <th>Price</th>
        <th>Supplier Detail </th>
        <th>Rack Default</th>
        <th>Book Location </th>
        <th>Book Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
</div>
</div>

<!-- modal for edit some data -->
<div class="modal" id="delete-modal">
  <div class="modal-dialog">
        <div class="modal-content">
        <!-- form -->
        <div class="alert alert-dismissible alert-warning">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4>Warning!</h4>
        <p>Are You sure want to delete this data ? </p>
        <a type="button" href="javascript:void(0)"  class="btn btn-default btn-raised " data-dismiss="modal">No</a>
        <a id="send" href="javascript:void(0)" type="submit" onclick="ajax_delete_book()" class="btn btn-danger btn-raised  ">Yes</a>
      </div>
        <!-- end form -->
      </div>
  </div>
</div>
<!-- /modal for edit some data -->

<!-- modal for add new book -->
<div class="modal" id="add-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="close_modal()"  aria-hidden="true">×</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form id="add-book" class="form-horizontal form-label-left" novalidate>
          <span class="section">Data of New Book</span>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_book">Book ID <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="id_book" name="id_book" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-md-3 col-sm-3 col-xs-12" for="first_name">
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="togglebutton">
                <label>
                  <input type="checkbox" id="status_rfid" > Using RFID
                </label>
              </div>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_rfid">RFID <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="id_rfid" name="id_rfid"  class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
            <!-- <div>
              <a href="javascript:void(0)" onclick="get_rfid()"class="btn btn-raised btn-primary">Reload Value</a>
            </div> -->
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="book_title">Book Title <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="book_title" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="book_title" placeholder="both name(s) e.g Jon Doe" required="required" type="text"> <span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="author">Author<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="author" name="author" required="required" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="publisher">Publisher <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="publisher" name="publisher" required="required" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="editor">Editor <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="editor" name="editor"  required="required" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="year">Year <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="year" name="year" required="required" data-validate-minmax="10,10000" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="input_date">Input Date<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="input_date" name="input_date" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price"> Price<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="price" type="number" name="price" class="optional form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_supplier">Supplier <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="id_supplier" name="id_supplier" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rack">Rack Default <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="rack" name="rack" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="description" required="required" name="description" class="form-control col-md-7 col-xs-12"></textarea><span class="help-block"></span>
            </div>
          </div>
        </form>
        <!-- end form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="close_modal()">Close</button>
        <button id="send" type="submit" onclick="save()" class="btn btn-success">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- /modal for add new book -->

<script>
var url="<?php echo site_url("admin/get_new_book_data/")?>";  //url to get data new book from databases on table master book where status is 0 (new input)
var table;
var id_book_glob=0;
var stat=true;
var book_method;
//plot data to table using ajax
$(document).ready(function() {
  $("#status_rfid").change(function(){
    get_rfid();
  });


table=$('#new_book').DataTable( {
    "ajax":
    {
        "url": url,
        "type": "POST",
        "retrieve": true,
        keys: true,
    },
  });
});

//function open modal edit
function edit_book(id_book)
{
  book_method="edit";
  $('#add-book')[0].reset(); // reset form on modals
  $('.form-group').removeClass('bad'); // clear error class
  $('.alert').empty();
  $('.alert').removeClass('alert'); // clear error string
  //Ajax Load data from ajax
  $.ajax({
      url : "<?php echo site_url('admin/edit_new_book')?>/" + id_book,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
          $('[name="id_book"]').val(data.book_id);
          $('[name="id_rfid"]').val(data.id_rfid);
          $('[name="book_title"]').val(data.book_title);
          $('[name="author"]').val(data.author);
          $('[name="publisher"]').val(data.publisher);
          $('[name="editor"]').val(data.editor);
          $('[name="year"]').val(data.year);
          $('[name="description"]').val(data.description);
          $('[name="input_date"]').val(data.input_date);
          $('[name="price"]').val(data.price);
          $('[name="id_supplier"]').val(data.id_supplier);
          $('[name="rack"]').val(data.rack);
          $('#add-modal').modal('show');
          $('.modal-title').text('Edit Book with ID: '+ data.book_title); // Set title to Bootstrap modal title

      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Error get data from ajax');
      }
  });
}//eof

//function add book_title
function add_book()
{
  $('#add-book')[0].reset();
  stat=true;
  $('#add-modal').modal('show');
  //$(".modal-title").text(rfid_tag);
  book_method="add";
}

function close_modal()
{
  stat=false;
  $("#add-modal").modal('hide');
  $.ajax({
      url : "<?php echo site_url('admin/reset_json')?>",
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        $("#add-modal").modal('hide');
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        console.log("error cuy");
      }
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
        //$(".modal-title").text(rfid_tag);
        $('[name="id_rfid"]').val(rfid_tag);
        $(".help-block").text(data.helpya);
        if(data.rfid==0){
        $('[name="id_rfid"]').parent().parent().addClass('has-error');
        }
        else{
        $('[name="id_rfid"]').parent().parent().removeClass('has-error');
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

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax
}

//add new book
function save()
{
  if(book_method=='add')
  {
    url="<?php echo site_url('admin/add_book')?>";
  }
  else {
    url="<?php echo site_url('admin/update_book')?>";
  }
  $('.form-group').removeClass('has-error'); // clear error class
  $('.help-block').empty();
  $('.help-block').removeClass('has-error'); // clear error string

  $.ajax({
      url : url,
      type: "POST",
      data: $('#add-book').serialize(),
      dataType: "JSON",
      success: function(data)
      {

          if(data.status) //if success close modal and reload ajax table
          {
              $('#add-modal').modal('hide');
              reload_table();
          }
          else
          {
              for (var i = 0; i < data.input_error.length; i++)
              {
                  $('[name="'+data.input_error[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                  $('[name="'+data.input_error[i]+'"]').next().text(data.warning_error[i]); //select span help-block class set text error string
              }
          }
          $('#btnSave').text('save'); //change button text
          $('#btnSave').attr('disabled',false); //set button enable


      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Error adding / update data');
          $('#btnSave').text('save'); //change button text
          $('#btnSave').attr('disabled',false); //set button enable

      }
  });
}//eof add book

function delete_book(id_book)
{
  $("#delete-modal").modal('show');
  id_book_glob=id_book;
}
function ajax_delete_book()
{
    // ajax delete data to database
    $.ajax({
        url : "<?php echo site_url('admin/delete_book')?>/"+id_book_glob,
        type: "POST",
        dataType: "JSON",
        success: function(data)
        {
            //if success reload ajax table
            $('#delete-modal').modal('hide');
            reload_table();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error deleting data');
        }
    });

}
</script>
