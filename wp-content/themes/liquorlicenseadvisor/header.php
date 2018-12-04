<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Liquor License Advisor</title>
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
     <div class="container">
      <div class="row">




        <nav class="navbar navbar-default">
          <!-- Navbar Header [contains both toggle button and navbar brand] -->
             <div class="row">
             <div class="blog-masthead">
              <div class="contact-home-header">
                <h3><i class="fa fa-envelope"></i><a style="color: white;"href="mailto:team@llausa.com">team@llausa.com</a> |<i class="fa fa-phone"></i>781.319.9800</h3>
              </div> 

            </div>
            </div>
          <div class="navbar-header">
            <!-- Toggle Button [handles opening navbar components on mobile screens]-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#exampleNavComponents" aria-expanded="false">
              <i class="glyphicon glyphicon-align-justify"></i>
            </button>

            <!-- Navbar Image -->
            <div class="logo-div">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="lla-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/LLA-logo.png"/></a>
            </div>
          </div>


          <div class="collapse navbar-collapse" id="exampleNavComponents">

            <!-- Navbar Menu -->
            <ul class="nav navbar-nav navbar-right header">
              <li>
                <?php wp_list_pages( '&title_li=&exclude=21,23,25,27,29,51,53,55,247,254,261,263,266&sort_column=menu_order' ); ?>
              </li>
            </ul>


        </div>
        </nav>
        </div>
        </div>

  </body>
  </html>


