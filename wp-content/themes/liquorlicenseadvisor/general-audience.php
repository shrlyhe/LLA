<?php 

/** Template Name: General Audience Services Page
 * description: Service page for LLA
 */

get_header(); ?>

<div class="container">

	<div class="row">
		<div class="col-sm-8 services">
		<h1>GENERAL AUDIENCE</h1>
			<h3> When you need to buy or sell a liquor license, we’re here to troubleshoot and solve the problems that others don’t necessarily have the time or the expertise to work through. Not only are we fluent in the ins and outs of licensing lingo, transaction processes, fees, and more, but we can also offer additional help understanding complex licensing areas like quotas and zoning.
			<br><br>

			Often, we collaborate with a number of stakeholders including attorneys, licensing coordinators and managers, franchise developers, food and beverage establishment owners, liquor store owners, lenders, and others to streamline and simplify the process. Whether they want to buy or sell a license, our clients come back to us time and again for our creative problem-solving, ever-expanding expertise, and reliability, all within the context of a particular state and municipality’s licensing laws.
			<br><br>

			Building on years of experience in the world of liquor licensing, we pride ourselves on being knowledgeable and resourceful. We will leave no stone unturned when it comes to securing you the licensing deal you want and need.
			<br><br>
			</h3>
			<button type="button" class="begin-button">DON'T KNOW WHERE TO BEGIN? CLICK HERE</button>
		</div>

		<div class="col-sm-4 job">
			<h3>JOB SPECIFIC SERVICES</h3>
			<div class="services-buttons">

				<a href="<?php echo get_page_link(51); ?>" style="color:white"><button type="button" class="specific">General Audience</button></a>

				<a href="<?php echo get_page_link(21); ?>" style="color:white"><button type="button" class="specific">Attorneys</button></a>

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