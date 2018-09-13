<?php 

/** Template Name: Food and Bev
 * description: Managers page for LLA
 */

get_header(); ?>

<div class="container">

	<div class="row">


		<div class="col-sm-8 services">

			<h1>FOOD & BEVERAGES ESTABLISHMENT OWNERS</h1>


			<h3> We’ve assisted many restaurant and bar owners in buying and selling liquor licenses. We ensure that they’re not only up to state and county board standards but also confirm that they have all of the necessary information to undergo the process. 
			<br><br>

			Additionally, we offer consulting services where we review food and beverage establishment owners’ assets annually and report market value for their licenses, helping them make key business decisions.
 			</h3>
			<a href="<?php echo get_page_link(14); ?>"><button type="button" class="begin-button" style="color:black">DON'T KNOW WHERE TO BEGIN? CLICK HERE</button></a>
		</div>

		<div class="col-sm-4 job">
			<h3>JOB SPECIFIC SERVICES</h3>
			<div class="services-buttons">
				<a href="<?php echo get_page_link(51); ?>" style="color:white"><button type="button" class="specific">GENERAL SERVICES</button></a>

					<a href="<?php echo get_page_link(21); ?>" style="color:white"><button type="button" class="specific">ATTORNEYS</button></a>

					<a href="<?php echo get_page_link(23); ?>" style="color:white"><button type="button" class="specific">LICENSING COORDINATORS & MANAGERS</button></a>


					<a href="<?php echo get_page_link(27); ?>" style="color:white"><button type="button" class="specific">FRANCHISE DEVELOPERS</button></a>

					<a href="<?php echo get_page_link(29); ?>" style="color:white"><button type="button" class="specific">LIQUOR STORE OWNERS</button></a>

					<a href="<?php echo get_page_link(53); ?>" style="color:white"><button type="button" class="specific">FOOD & BEVERAGE ESTABLISHMENT OWNERS</button></a>

					<a href="<?php echo get_page_link(55); ?>" style="color:white"><button type="button" class="specific">LENDERS</button></a>
				
			</div>

		</div>
	</div>

</div>


<?php get_footer(); ?>