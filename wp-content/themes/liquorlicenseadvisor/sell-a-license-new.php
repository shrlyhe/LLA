<?php 

/** Template Name: Sell License Page (New)
 * description: Inquire about and upload licenses
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div class="wrap">

			<div class="contact-header">
				<h1>SELL A LICENSE</h1>
				<h3>Some sort of paragraph that welcomes the visitor to the website and makes them feel comfortable then explains the options available on this page (inquiry form and ready to sell form).</h3>

				<div class="descriptor">
				<a href="<?php echo get_page_link(46); ?>" style="color:white;text-decoration: none;"><button type="button" class="license-inquire">INQUIRE</button></a>

					<a href="<?php echo get_page_link(14); ?>" style="color:white;text-decoration: none;"><button type="button" class="license-upload">UPLOAD LICENSE</button></a>

				</div>



				<br><br><h3>For questions or concerns please call us at 781.319.9800 or use our <a style="font-weight:bold; color: black;" href="<?php echo get_page_link(14); ?>">online contact form</a>.</h3>
				<br><br>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>