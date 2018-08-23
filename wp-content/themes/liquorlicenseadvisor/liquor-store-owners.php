<?php 

/** Template Name: Liquor Store Owners 
 * description: Liquor Store Owners page for LLA
 */

get_header(); ?>

<div class="container">

	<div class="row">


		<div class="col-sm-8 services">

			<h1>LIQUOR STORE OWNERS</h1>


			<h3> Most liquor store owners come to us when they’re looking to expand their ventures because we have an intimate knowledge of the current market and the plethora of unique challenges that arise from owning a liquor store in particular states or municipalities.</h3>
			<button type="button" class="begin-button">DON'T KNOW WHERE TO BEGIN? CLICK HERE</button>
		</div>

		<div class="col-sm-4 job">
			<h3>JOB SPECIFIC SERVICES</h3>
			<div class="services-buttons">
				<a href="<?php echo get_page_link(21); ?>" style="color:white"><button type="button" class="specific">Lawyers</button></a>

				<a href="<?php echo get_page_link(23); ?>" style="color:white"><button type="button" class="specific">Licensing Coordinators</button></a>

				<a href="<?php echo get_page_link(25); ?>" style="color:white"><button type="button" class="specific">Managers</button></a>

				<a href="<?php echo get_page_link(27); ?>" style="color:white"><button type="button" class="specific">Franchise Developers</button></a>

				<a href="<?php echo get_page_link(29); ?>" style="color:white"><button type="button" class="specific">Liquor Store Owners</button></a>

			</div>

		</div>
	</div>

</div>


<?php get_footer(); ?>