<?php 

/** Template Name: Franchise Developers 
 * description: Franchise Developers page for LLA
 */

get_header(); ?>

<div class="container">

	<div class="row">


		<div class="col-sm-8 services">

			<h1>FRANCHISE DEVELOPERS</h1>


			<h3> When a franchise developer has to secure a liquor license for a franchisee, they can turn to us to help them identify which license type they need. Many developers are in the tricky situation of needing both a lease and a liquor license, and the question is, which comes first? We can help them coordinate that process and budget correctly for their license. We also work with franchise developers to create a realistic timeline so both landlords and license sellers are satisfied. </h3>
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