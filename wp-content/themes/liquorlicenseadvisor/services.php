<?php 

/** Template Name: Services Page
 * description: Service page for LLA
 */

get_header(); ?>

<div class="container">

	<div class="row">
		<div class="col-sm-8 services">
			<h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec pellentesque ante. In rhoncus, dui consectetur fermentum maximus, neque odio elementum tortor, ut tristique tortor nisl at dui. Aliquam vel ipsum quis sem fermentum tristique. Nam eget molestie risus. Curabitur volutpat ante non auctor efficitur. Pellentesque nisl massa, tempus a egestas et, sagittis vulputate odio. Aenean commodo auctor tempus. In rhoncus, dui consectetur fermentum maximus, neque odio elementum tortor, ut tristique tortor nisl at dui. Aliquam vel ipsum quis sem fermentum tristique. Nam eget molestie risus. Curabitur volutpat ante non auctor efficitur.</h3>
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