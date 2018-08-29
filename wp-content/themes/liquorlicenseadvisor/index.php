<?php get_header(); ?>
<div class="container">
  <div class="row">

      <div class="col-sm-12" style="float:center; padding: 2%;">
      <!--  <h2>Beginner SEO Content</h2> -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          </div><!-- entry -->
        <?php endwhile; ?>
      <?php endif; ?>

    </div>


</div> 

<?php get_footer(); ?> 


