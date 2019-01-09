<?php 

/** Template Name: Login page
 * description: Login page for registered members
 */

get_header(); ?>


<div class="container">
	<div class="row">

		<div class="wrap">

			<div class="contact-header">
				<h1>CLIENT PORTAL</h1>
				<br>
				<h3 style="font-size: 18px;">Some sort of paragraph that welcomes the visitor to the website and explains client portal. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3><br><br>



				<div class="contact-overall">
					<div class="col-sm-12 login-page-box">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div> 
		</div>


	</div>
</div>
</div>


<?php get_footer(); ?>