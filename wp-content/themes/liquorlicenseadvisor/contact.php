<?php 

/** Template Name: Contact Page
 * description: Contact page for LLA
 */


get_header(); ?>

<div class="container">
	<div class="row">

		<div class="wrap">
			
			<div class="col-sm-12 contact-header">
				<h1>CONTACT US</h1>
			</div>

			<div class="col-sm-12 contact-info">
				<div class="message-box-header">
					<h2>SEND US A MESSAGE</h2>
				</div>
				<h3> If you’re ready to take the next steps in securing or selling your liquor license, or just want more information on our resources and services, we’ve got you covered. Our mission is to deliver the resources you need and results you want in a manner that’s quick and easy--and that starts here.<br><br><b>Email:</b> TK <br><b>Phone Number:</b> (781) 319-9800 <br><b>Address:</b> 1 Snow Road, Suite 3 <br>Marshfield, MA 02050 <br>
				</h3>
			</div>

			<div class="col-sm-12 message-box">
				<div role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-sm-8 message-box-header">
							
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>  



	</div>
</div>


<?php get_footer(); ?>
