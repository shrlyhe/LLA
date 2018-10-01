<?php get_header(); ?>
<div class="container">
  <div class="row">

    <div class="col-sm-12 main">
      <div class="descriptor">
        <a href="<?php echo get_page_link(46); ?>" style="color:white;text-decoration: none;"><button type="button" class="license-buy">BUY A LICENSE</button></a>

        <a href="<?php echo get_page_link(14); ?>" style="color:white;text-decoration: none;"><button type="button" class="license-sell">SELL A LICENSE</button></a>
       
      </div>
      <div class="wrap">
        <img id="pic-dan" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic-dan.jpg"/> 
        <div class="column-quote">
         <h3> "Over the last two decades we have been providing our clients and their attorneys with answers regarding market values, availability and the marketability of their liquor licenses. The licensing system is confusing, and different in every municipality, county, and state. Liquor License Advisor knows where to look for answers, who to connect with and how to creatively work within the existing system to get our clients the intended result that they desire." </h3>
         <h2>- Dan Newcomb, Founder, CEO</h2>
       </div>
     </div>

   </div>

   <div class="wrap container-outer">
    <div class="col-sm-12 client-review-title">
      <h2>CLIENT SUCCESS STORIES</h2>
    </div>


      <div class="col-sm-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>

  <div>
    <img id="company-logos" /> 
  </div>

  <div class="get-started">
    <h2>GET STARTED</h2>
    <h3>Make a selection based on your professional needs</h3>
  </div>

  <div class="top-row">
   <a href="<?php echo get_page_link(51); ?>" ><button type="button" class="get-started-button">LICENSING BASICS</button></a>
    <a href="<?php echo get_page_link(21); ?>"><button type="button" class="get-started-button">ATTORNEYS</button></a>
    <a href="<?php echo get_page_link(23); ?>" ><button type="button" class="get-started-button">LICENSING PROFESSIONALS</button></a>
   

  </div>

  <div class="bottom-row">
   <a href="<?php echo get_page_link(27); ?>"><button type="button" class="get-started-button">FRANCHISE DEVELOPERS</button></a>
    <a href="<?php echo get_page_link(29); ?>"><button type="button" class="get-started-button">LIQUOR STORE OWNERS</button></a>
    <a href="<?php echo get_page_link(53); ?>"><button type="button" class="get-started-button">FOOD & BEVERAGE OWNERS</button></a>
    <a href="<?php echo get_page_link(55); ?>" ><button type="button" class="get-started-button">LENDERS</button></a>
  </div>
</div>

</div>

</div>



<?php get_footer(); ?> 


