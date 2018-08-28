<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>LLA</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/site.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    @import url('https://fonts.googleapis.com/css?family=Lato');
  </style>



  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head();?>
    </head>

    <body>
    <nav class="navbar navbar-custom">
      <div class="container">
       <div class="blog-masthead">
       <!--  <nav class="blog-nav"> -->
          <img id="lla-logo" style="float: left;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/LLA-logo.png"/>
          <div class="header">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo get_bloginfo( 'wpurl' );?>">HOME</a></li>
              <li><?php wp_list_pages( '&title_li=&exclude=21,23,25,27,29&sort_column=menu_order' ); ?></li>
            </ul>
          </div>
      </div>

  </div>
  </nav>


</body>
</html>


