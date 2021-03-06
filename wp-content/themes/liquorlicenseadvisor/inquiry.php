<?php 

/** Template Name: Inquiry Form
 * description: Inquiry form for "Sell a License" page
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div class="wrap">

			<div class="contact-header">
				<h1>INQUIRY FORM</h1>
				<br>
				<h3 style="font-size: 18px;">Some sort of paragraph that welcomes the visitor to the website and makes them feel comfortable then explains the options available on this page (inquiry form and ready to sell form).</h3><br><br>



				<div class="contact-overall">
					<div class="col-sm-12 message-box">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div> 
		</div>

		<div>
		<h3 style="font-size: 18px;">For questions or concerns please call us at 781.319.9800 or use our <a style="font-weight:bold; color: black;" href="<?php echo get_page_link(14); ?>">online contact form</a>.</h3><br><br><br>
		</div>

	</div>
</div>
</div>


<?php get_footer(); ?>