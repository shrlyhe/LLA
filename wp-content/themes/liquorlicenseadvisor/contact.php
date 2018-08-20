<?php 

/** Template Name: Contact Page
 * description: Contact page for LLA
 */


get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 contact-header">
			<h1>CONTACT US</h1>
		</div>


		<div class="col-sm-8 message-box">
			<div role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-sm-8 message-box-header">
						<h2>SEND US A MESSAGE</h2>
						<?php the_content(); ?>
					</div><!-- entry -->
				<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<div class="divider"></div>

	<div class="col-sm-4 office-info">
		<h2>DETAILS</h2>
		<h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec pellentesque ante. In rhoncus, dui consectetur fermentum maximus, neque odio elementum tortor, ut tristique tortor nisl at dui. Aliquam vel ipsum quis sem fermentum tristique. Nam eget molestie risus. Curabitur volutpat ante non auctor efficitur. Pellentesque nisl massa, tempus a egestas et, sagittis vulputate odio. Aenean commodo auctor tempus. </h3>
	</div>




	</div>
</div>

<?php get_footer(); ?>
