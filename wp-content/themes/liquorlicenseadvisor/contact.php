<?php 

/** Template Name: Contact Page
 * description: Contact page for LLA
 */


get_header(); ?>

<div class="container">
	<div class="row">

		<div class="wrap">
			<div class="col-sm-12 marketplace-button">
				<h1><a href="<?php echo get_page_link(46); ?>">CLICK HERE TO SEE OUR CURRENT LISTINGS</a></h1>

			</div>

			<div class="col-sm-12 contact-info">
				<h3> If you’re ready to take the next steps in securing or selling your liquor license, or just want more information on our resources and services, we’ve got you covered. Our mission is to deliver the resources you need and results you want in a manner that’s quick and easy--and that starts here.<br><br><b>
				</h3>
			</div>

			<div class="contact-box-mobile">
			<h3>1 Snow Rd #3 <br>
					Marshfield MA 02050<br>
					781.319.9800<br>
					<a style="color:black;" href="mailto:team@llausa.com">team@llausa.com</a><br><br><br>
				</h3>
			</div>

			<div class="contact-overall">
				<div class="col-sm-12 message-box">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>  

			<div class="contact-box-info">
				<h3>2036 Ocean St., Suite 1 <br>
					Marshfield MA 02050<br>
					781.319.9800<br>
					<a style="color:black;" href="mailto:team@llausa.com">team@llausa.com</a><br>
				</h3>
			</div>

			</div>


		</div>
	</div>



	<?php get_footer(); ?>
