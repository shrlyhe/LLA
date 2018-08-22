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
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/site.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head();?>
    </head>

    <body>
    <div class="container">

     <div class="blog-masthead">

      <nav class="blog-nav">

       <div class="container-header">
        <img id="lla-logo" style="float: left;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/LLA-logo.png"/> 
         <a class="blog-nav-item active" href="<?php echo get_bloginfo( 'wpurl' );?>">HOME</a>
         <?php wp_list_pages( '&title_li=&exclude=21,23,25,27,29&sort_column=menu_order' ); ?>
      
       </nav>
    </div> <!-- end container-header -->
   </div> <!-- end container-masthead -->

</div>
</nav>


