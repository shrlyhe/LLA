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
        <div class="row">
         <div class="blog-masthead">
          <div class="contact-home-header">
          <h3><i class="fa fa-envelope"></i><a style="color: white;"href="mailto:team@LLAUSA.com">team@LLAUSA.com</a> | <i class="fa fa-phone"></i>781.319.9800</h3>
           </div> 

           
           </div>

           <div class="logo-div">
             <!--  <nav class="blog-nav"> -->
             <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="lla-logo"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/LLA-logo.png"/></a>
           </div>
           <div class="header">
            <ul class="nav navbar-nav">
              <li><?php wp_list_pages( '&title_li=&exclude=61,63,65,67,69,51,53,55&sort_column=menu_order' ); ?></li>
            </ul>
          </div>
        </div>


      </div>
      

    </nav>

  </body>
  </html>


