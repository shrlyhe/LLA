<?php 

/** Template Name: Lenders Services Page
 * description: Managers page for LLA
 */

get_header(); ?>

<div class="container">

	<div class="row">


		<div class="col-sm-8 services">

			<h1>Lenders</h1>


			<h3> Lenders come to us for our consulting services, where we help them understand the market value of their licenses on an annual basis. We work closely with them to assess license values and identify various valuations. <br><br> Our connections with lenders are mutually beneficial for both the lenders themselves and the clients we help who are securing liquor licenses. </h3>
			<button type="button" class="begin-button">DON'T KNOW WHERE TO BEGIN? CLICK HERE</button>
		</div>

		<div class="col-sm-4 job">
			<h3>JOB SPECIFIC SERVICES</h3>
			<div class="services-buttons">
				<a href="<?php echo get_page_link(51); ?>" style="color:white"><button type="button" class="specific">General Audience</button></a>

				<a href="<?php echo get_page_link(21); ?>" style="color:white"><button type="button" class="specific">Lawyers</button></a>

				<a href="<?php echo get_page_link(23); ?>" style="color:white"><button type="button" class="specific">Licensing Coordinators & Managers</button></a>


				<a href="<?php echo get_page_link(27); ?>" style="color:white"><button type="button" class="specific">Franchise Developers</button></a>

				<a href="<?php echo get_page_link(29); ?>" style="color:white"><button type="button" class="specific">Liquor Store Owners</button></a>

				<a href="<?php echo get_page_link(53); ?>" style="color:white"><button type="button" class="specific">Food & Beverage Establishment Owners</button></a>

				<a href="<?php echo get_page_link(55); ?>" style="color:white"><button type="button" class="specific">Lenders</button></a>
				
			</div>

		</div>
	</div>

</div>


<?php get_footer(); ?>