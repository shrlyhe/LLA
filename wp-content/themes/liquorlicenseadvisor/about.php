<?php 

/** Template Name: About Page
 * description: About page for LLA
 */

get_header(); ?>

<div class="container">
	<div class="row">


		<div class="col-sm-12 about-header">
			<h1>WHAT WE DO</h1>
		</div>

		<div class="col-sm-8 about-overview">
			<h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec pellentesque ante. In rhoncus, dui consectetur fermentum maximus, neque odio elementum tortor, ut tristique tortor nisl at dui. Aliquam vel ipsum quis sem fermentum tristique. Nam eget molestie risus. Curabitur volutpat ante non auctor efficitur. Pellentesque nisl massa, tempus a egestas et, sagittis vulputate odio. Aenean commodo auctor tempus. In rhoncus, dui consectetur fermentum maximus, neque odio elementum tortor, ut tristique tortor nisl at dui. Aliquam vel ipsum quis sem fermentum tristique. </h3>
		</div>

		<div class="col-sm-4 about-service">
			<ul data-columns="2">
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>

				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
				<h3><li>Service 1</li></h3>
			</ul>

		</div>

		<!-- CLIENTS SECTION -->
		<div class="col-sm-12">
			<h1 class="about-header">CLIENTS</h1>
		</div>
		<div class="about-category col-sm-4">
			<h3>Grocery</h3>
			<ul>
				<li>BJ's</li>
				<li>Sam's Club</li>
				<li>Trader Joes</li>
				<li>Whole Foods</li>
				<li>Safeway</li>
			</ul>
		</div>


		<div class="about-category col-sm-4">
			<h3>Hospitality</h3>
			<ul>
				<li>Marriot Hotels</li>
				<li>W Hotels</li>
				<li>Gaylord Resorts & Hotels</li>
			</ul>
		</div>

		<div class="about-category col-sm-4">
			<h3>Small Business</h3>
			<ul>
				<li>Jerry's Wine and Spirits</li>
				<li>Westside Liquor</li>
				<li>Washington's Wines</li>
				<li>Silesia Liquors</li>
			</ul>
		</div>
	</div>

	<!-- AWARDS SECTION -->
	<div class="about-awards col-sm-12">
		<h1 class="about-header">AWARDS</h1>
	</div>
	<div class="about-category col-sm-4">
		<h3>2018</h3>
		<ul>
			<li>BJ's</li>
			<li>Sam's Club</li>
			<li>Trader Joes</li>
			<li>Whole Foods</li>
			<li>Safeway</li>
		</ul>
	</div>


	<div class="about-category col-sm-4">
		<h3>2017</h3>
		<ul>
			<li>Marriot Hotels</li>
			<li>W Hotels</li>
			<li>Gaylord Resorts & Hotels</li>
		</ul>
	</div>

	<div class="about-category col-sm-4">
		<h3>2016</h3>
		<ul>
			<li>Jerry's Wine and Spirits</li>
			<li>Westside Liquor</li>
			<li>Washington's Wines</li>
			<li>Silesia Liquors</li>
		</ul>
	</div>

	<!-- PEOPLE SECTION -->
	<div class="about-awards col-sm-12">
		<h1 class="about-header">PEOPLE</h1>
	</div>
	<div class="about-category col-sm-4">
		<img id="good-smiley" src="<?php echo get_stylesheet_directory_uri(); ?>/images/good-smiley.png"/>
		<h3>Dan Newcomb</h3>
		<h2>CEO | President</h2>	
	</div>


	<div class="about-category col-sm-4">
		<img id="good-smiley" src="<?php echo get_stylesheet_directory_uri(); ?>/images/good-smiley.png"/>
		<h3>Mary Jane</h3>
		<h2>Vice President</h2>
	</div>

	<div class="about-category col-sm-4">
		<img id="good-smiley" src="<?php echo get_stylesheet_directory_uri(); ?>/images/good-smiley.png"/>
		<h3>John Smith</h3>
		<h2>Chief Strategy Officer</h2>
	</div>
</div>



</div> <!-- /.row -->

<?php get_footer(); ?>