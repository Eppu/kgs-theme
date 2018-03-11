
<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo( ‘name’ ); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Company Website Template">
  <meta name="author" content="Eetu Eskelinen">

  <link href="<?php bloginfo("stylesheet_url");?>" rel="stylesheet">
  <?php wp_head();?>
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
        <a class="navbar-brand" href="#"><?php bloginfo( ‘name’ ); ?></a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a onclick="$('header').animatescroll({padding:50});">Home</a></li>
          <li><a onclick="$('.detail').animatescroll({padding:50});">Details</a></li>
          <li><a onclick="$('.features').animatescroll({padding:50});">Features</a></li>
          <li><a onclick="$('.contact').animatescroll({padding:50});">Get in Touch</a></li>
        </ul>
      </div>
    </div>
  </nav>

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

  <section class="company">