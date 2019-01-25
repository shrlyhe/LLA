<?php 

/** Template Name: Client portal home page
 * description: Client portal home page for registered members
 */

get_header(); ?>


<div class="container">
	<div class="row">

		<div class="wrap">

			<div class="contact-header">
				<h1>CLIENT PORTAL</h1>
				<br>
				<h3 style="font-size: 18px;">Choose a specific license below to receive step by step instructions on how to buy or sell a liquor license. </h3><br><br>
			</div> 

			<div>
				<div class="client-portal-specific">
					<h3>Restaurant All Alcoholic Beverages</h3>
					<a href="<?php echo get_page_link(46); ?>"><button type="button" class="client-portal-button">BUY</button></a>

					<a href="<?php echo get_page_link(14); ?>"><button type="button" class="client-portal-button">SELL</button></a>
				</div>
				<div class="client-portal-specific">
					<h3>Restaurant Wine and Malt Beverages</h3>
					<a href="<?php echo get_page_link(46); ?>"><button type="button" class="client-portal-button">BUY</button></a>

					<a href="<?php echo get_page_link(14); ?>"><button type="button" class="client-portal-button">SELL</button></a>
				</div>
				<div class="client-portal-specific">
					<h3>Liquor Store with All Alcoholic Beverages</h3>
					<a href="<?php echo get_page_link(46); ?>"><button type="button" class="client-portal-button">BUY</button></a>

					<a href="<?php echo get_page_link(14); ?>"><button type="button" class="client-portal-button">SELL</button></a>
				</div>


				<div class="client-portal-specific">
					<h3>Convenience Store with Wine & Malt Beverages</h3>
					<a href="<?php echo get_page_link(46); ?>"><button type="button" class="client-portal-button">BUY</button></a>

					<a href="<?php echo get_page_link(14); ?>"><button type="button" class="client-portal-button">SELL</button></a>
				</div>
				<div class="client-portal-specific">
					<h3>Retail All Alcoholic Beverages</h3>
					<a href="<?php echo get_page_link(46); ?>"><button type="button" class="client-portal-button">BUY</button></a>

					<a href="<?php echo get_page_link(14); ?>"><button type="button" class="client-portal-button">SELL</button></a>
				</div>
				<div class="client-portal-specific">
					<h3>Retail Wine and Malt Beverages</h3>
					<a href="<?php echo get_page_link(46); ?>"><button type="button" class="client-portal-button">BUY</button></a>

					<a href="<?php echo get_page_link(14); ?>"><button type="button" class="client-portal-button">SELL</button></a>
				</div>

			</div>
		</div>


	</div>
</div>
</div>


<?php get_footer(); ?>