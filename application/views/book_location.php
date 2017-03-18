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
      <h2>BOOK LOCATION</h2>
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
  This is table of book location table
  </p>
<a href="javascript:void(0)" onclick="reload_table()"class="btn btn-raised btn-primary">Reload Table</a>
<!-- <a href="javascript:void(0)" onclick="add_book()"class="btn btn-raised btn-primary">Add New Book</a> -->
  <table id="book-location" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Book ID</th>
        <th>RFID</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Rack Default</th>
        <th>Book Location </th>
        <th>Book Status</th>
        <th>Time Update</th>
        <!-- <th>Action</th> -->
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
</div>
</div>

<script>
var url="<?php echo site_url("admin/get_book_location/")?>";  //url to get data new book from databases on table master book where status is 0 (new input)
var table;
var id_book_glob=0;
var stat=true;
//plot data to table using ajax
$(document).ready(function() {
table=$('#book-location').DataTable( {
    "ajax":
    {
        "url": url,
        "type": "POST",
        "retrieve": true,
        keys: true,
    },
  });
});

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax
}

</script>
