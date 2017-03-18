<?php include (APPPATH.'views/global/global-css.php'); ?>
<title> Smart Library Portal</title>
</head>

<body>
  	<div class="docs-header">
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
      <!--header-->
      <div class="topic ">
        <div class="container">
			<div class="col-md-12 center">
			  <h3>WELCOME</h3>
			  <h4>Smart Library System</h4>
			</div>
         </div>
        <div class="topic__infos center">
          <div class="container">
            <p> You can find, access, and lend books here.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Search -->
    <div class="container">
	    <div class="row">
	    	<div class="col-md-3"></div>
		    <div class=" col-md-6 search-wrapper">
			    <div class="input-group form-search home-search">
			      <input type="text" placeholder="Search for your book here" class="form-control search-query">
			      <span class="input-group-btn">
			        <button type="submit" class="btn btn-primary" data-type="last">Search</button>
			      </span>
			    </div>
			</div>
		</div>
	</div>

	<div class="container latest-book">
        <h2 class="catalog-title">New Catalog</h2>
        <div class="row">
        <?php

        function custom_echo($x, $length){
	  if(strlen($x)<=$length)
	  {
	    echo $x;
	  }
	  else
	  {
	    $y=substr($x,0,$length) . '...';
	    echo $y;
	  }
	}
         foreach($book_data as $row) {
         ?>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
              <div class="category">
                
            </div>
                <img class="img-rounded" src="<?php echo base_url('/images/').$row['image'];?>">
                <div class="caption">
                  <h3 class="book-title text-left"><?php echo $row['book_title']; ?></h3>
                  <p class="author"><?php echo $row['author']; ?></p>
                  <p class="description"><small><i><?php custom_echo($row['description'],100); ?></i></small></p>
                  <!-- <div class="action text-center"><a href="#" class="btn btn-info" role="button">View Detail</a></div> -->
                </div>
                <div class="category-text">
                  <span class="label category-<?php echo $row['category']; ?>-label"><?php echo $row['cat_name'];?></span>
              </div>
            </div>
            </div>
            <?php } ?>
          </div>
      </div>

      <div class="category-list">
        <div class="container">
          <h2 class="catalog-title">Category List</h2>

          <div class="row">
          <?php foreach ($category as $row) { ?>
          <div class="catalog-list-item">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="title-container">
                <div class="catalog-item-title category-<?php echo $row['category_id'];?>-label">
                  <div class="catalog-item-title-text"><?php echo $row['cat_name']; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         <?php } ?>  
          </div>
        </div>
      </div>

      <div class="lib-count">
      <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="lib-number text-center"><?php echo $book_count; ?></div>
          <div class="lib-content text-center"><span><i class="material-icons">book</i></span>Books</div>
        </div>
        
      </div>
      </div>
      </div>

      <div class="footer">
              <div class="container">
                <div class="footer-copyright text-center">Copyright © 2017 WUM Project</div>
              </div>
            </div>
      <!-- Global JS Start -->
    <?php include (APPPATH.'views/global/global-js.php'); ?>
    <!-- Global JS End -->
  </body>
</html>