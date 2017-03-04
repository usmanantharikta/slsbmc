<div class="page-title">
  <div class="title_left">
    <h3>MEMBER MANAGER</h3>
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
      <h2>TABLE OF ALL MEMBER</h2>
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
  This is table of all member, please dont change anythink without aggrement with the member !!!!
  </p>
<a href="javascript:void(0)" onclick="reload_table()"class="btn btn-raised btn-primary">Reload Table</a>
<a href="javascript:void(0)" onclick="open_modal_add()"class="btn btn-raised btn-primary">Add New Member</a>
  <table id="member" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>User ID</th>
        <th>RFID</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Password (SH256)</th>
        <th>Full Name </th>
        <th>Phone</th>
        <th>Address</th>
        <th>Group</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Register Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
</div>
</div>

<!-- modal for add new member -->
<div class="modal" id="add-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="close_modal()" aria-hidden="true">×</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form id="add-form" class="form-horizontal form-label-left" novalidate>

          <!-- <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
          </p> -->
          <span class="section">Data of Member</span>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_id">User ID <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="user_id" name="user_id" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
        <div class="item form-group">
          <label class="col-md-3 col-sm-3 col-xs-12" for="first_name">
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="togglebutton">
              <label>
                <input type="checkbox" id="checkbox_rfid" > Using RFID
              </label>
            </div>
          </div>
        </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_rfid">RFID <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="id_rfid" name="id_rfid" required="required"  class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
            <!-- <div>
              <a href="javascript:void(0)" onclick="get_rfid()"class="btn btn-raised btn-primary">Reload</a>
            </div> -->
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">User Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first_name" name="username" required="required" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <!-- <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">User Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  name="username"  required="required" type="text">
            </div>
          </div> -->
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">First Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first_name" name="first_name" required="required" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Last Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="last_name" name="last_name"  required="required" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Phone <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="phone" name="phone" required="required" data-validate-minmax="10,10000" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="address" name="address" required="required"  class="form-control col-md-7 col-xs-12"></textarea><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group_"> Group<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="group_" type="text" name="group_" class="optional form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">Gender <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="gender" class="form-control">
                <option>Choose option</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="birthday">Birthday <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="birthday" name="birthday" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"><span class="help-block"></span>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="register_date">Register Date<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="register_date" required="required" name="register_date" class="form-control col-md-7 col-xs-12"></input><span class="help-block"></span>
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
<!-- /modal for add new member -->

<script>
var method;
var url="<?php echo site_url("admin/get_data_member_all/")?>";  //url to get data new book from databases on table master book where status is 0 (new input)
var table_member;
var user_id_global=0;
var stat=true;
//plot data to table using ajax
$(document).ready(function() {
table_member=$('#member').DataTable( {
    "ajax":
    {
        "url": url,
        "type": "POST",
        "retrieve": true,
    },
  });
});

function open_modal_add()
{
  method="add";
  $('#add-modal').modal('show');
  $('#add-form')[0].reset(); // reset form on modals
  $('.modal-title').text('Add New Member'); // Set title to Bootstrap modal title
}

//function open modal edit
function edit_member(user_id)
{
  method='edit';
  $('#add-form')[0].reset(); // reset form on modals
  $('.form-group').removeClass('bad'); // clear error class
  $('.alert').empty();
  $('.alert').removeClass('alert'); // clear error string
  //Ajax Load data from ajax
  $.ajax({
      url : "<?php echo site_url('admin/edit_member')?>/" + user_id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
          $('[name="user_id"]').val(data.user_id);
          $('[name="id_rfid"]').val(data.id_rfid);
          $('[name="username"]').val(data.username);
          $('[name="email"]').val(data.email);
          $('[name="first_name"]').val(data.first_name);
          $('[name="last_name"]').val(data.last_name);
          $('[name="phone"]').val(data.phone);
          $('[name="register_date"]').val(data.register_date);
          $('[name="address"]').val(data.address);
          $('[name="group_"]').val(data.group_);
          $('[name="gender"]').val(data.gender);
          $('[name="birthday"]').val(data.birthday);
          $('#add-modal').modal('show');
          $('.modal-title').text('Edit Book with ID: '+ data.username); // Set title to Bootstrap modal title

      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Error get data from ajax');
      }
  });
}//eof

function reload_table()
{
    table_member.ajax.reload(null,false); //reload datatable ajax
}

//function add new MEMBER
function save()
{
  var url;
  if(method=='add')
  {
    url="<?php echo site_url('admin/add_new_member')?>"
  }
  else
  {
    url="<?php echo site_url('admin/update_member')?>";
  }
  $('.form-group').removeClass('has-error'); // clear error class
  $('.help-block').empty();
  $('.help-block').removeClass('has-error'); // clear error string
  $.ajax({
      url : url,
      type: "POST",
      data: $('#add-form').serialize(),
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
}//eof

function delete_member(id)
{
  $("#delete-modal").modal('show');
  user_id_global=id;
  console.log(id);
}
function ajax_delete_member()
{
    // ajax delete data to database
    $.ajax({
        url : "<?php echo site_url('admin/delete_member')?>/"+user_id_global,
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


$("#checkbox_rfid").change(function(){
  get_rfid();
});
//get rfid value
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
        if($("#checkbox_rfid").prop("checked") == true){
        setTimeout(get_rfid, 1000);
        }
      }
    });
}//eof
</script>
