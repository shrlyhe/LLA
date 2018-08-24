<?php 

/** Template Name: Contact Page
 * description: Contact page for LLA
 */


get_header(); ?>

<div class="container">
	<div class="row">
		<div class="contact-header">
			<h1>CONTACT US</h1>
		</div>
	</div>


<div class="col-sm-8 message-box">
			<div role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-sm-8 message-box-header">
						<h2>SEND US A MESSAGE</h2>
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>  

	<div class="divider"></div>

	<div class="col-sm-4 office-info">
		<h2>DETAILS</h2>
		<h3> If you’re ready to take the next steps in securing or selling your liquor license, or just want more information on our resources and services, we’ve got you covered. Our mission is to deliver the resources you need and results you want in a manner that’s quick and easy--and that starts here.
		<br><br> Below, find our office information to explore our website or give us a call, or reach out via the contact box. We’ll be back to you as soon as possible, and look forward to hearing from you! <br><br>[address, web address, phone number here] </h3>
	</div>


	</div>
</div> 
<?php get_footer(); ?>
