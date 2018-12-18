<?php 

/** Template Name: Share Your Stories Page
 * description: Collect more client testimonials 
 */


get_header(); ?>

<div class="container">
	<div class="row">

		<div class="wrap">
			<div class="contact-header">

				<h1>SHARE YOUR SUCCESS STORIES</h1>
				<br>
				<h3>Our results speak for themselves. Click through our client testimonials and <a style="font-weight:bold; color: black;" href="<?php echo get_page_link(14); ?>">contact us</a> if you're interested in working together on your liquor licensing needs.</h3>
			</div>
			
			<div class="col-sm-12 client-testimonial-title">
				<br><br><br><br>
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
