
<!DOCTYPE html>
<html>
<head>
  <title>Kajaani Game Studios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Company Website Template">
  <meta name="author" content="Eetu Eskelinen">
  <!-- CSS -->

  <link href="<?php bloginfo("stylesheet_url");?>" rel="stylesheet">
  <?php wp_head();?>
</head>

<body>

  <!-- NAVBAR
	      ================================================== -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>

        <!--Replace text with your app name or logo image-->
        <a class="navbar-brand" href="#"><?php bloginfo( ‘name’ ); ?></a>

      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a onclick="$('header').animatescroll({padding:71});">Home</a></li>
          <li><a onclick="$('.detail').animatescroll({padding:71});">Screens</a></li>
          <li><a onclick="$('.features').animatescroll({padding:71});">Features</a></li>
          <li><a onclick="$('.social').animatescroll({padding:71});">Social	</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- HEADER
	   ================================================== -->
  <header>
    <div class="container" id="header">
      <div class="row">
        <div class="col-md-12">
          <h1><?php bloginfo('name'); ?></h1>
          <p class="lead"><?php bloginfo('description'); ?></p>
          <img class="header-img" src="<?php echo( get_header_image() ); ?>" />
        </div>
      </div>
    </div>
  </header>


  <!-- PURCHASE
	      ================================================== -->
  <section class="purchase">