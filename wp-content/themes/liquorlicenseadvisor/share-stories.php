<?php 

/** Template Name: Share Your Stories Page
 * description: Collect more client testimonials 
 */


get_header(); ?>

<div class="container">
	<div class="row">

		<div class="wrap">
			
			<div class="col-sm-12 client-testimonial-title">
				<h2>CLIENT TESTIMONIALS</h2>
			</div>


			<div class="col-sm-12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>

	</div>
</div>
</div>




<?php get_footer(); ?>
