<?php 

/** Template Name: Resources Page
 * description: Resources page for LLA
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="wrap">

			<div class="col-sm-12 marketplace-button">
				<h1><a href="<?php echo get_page_link(46); ?>">CLICK HERE TO SEE OUR LATEST LISTINGS</a></h1>
			</div>

			<div class="col-sm-12 about-resources">
				<h3> Want to learn more about the liquor licensing process? We've been in this business for years and are happy to share our expertise. If you have questions, feel free to <a style="color:black; font-weight: bold;" href="<?php echo get_page_link(14); ?>">contact us.</a></h3>
			</div>

			<!-- SEARCH SECTION -->
			<div class="col-sm-2 search">
				<form role="search">
					<div class="search-control">
						<?php get_search_form(); ?>
					</div>
				</form>
				<h1> CATEGORIES </h1>
				<a href=#><h2> Liquor License Basics </h2></a>
				<a href=#><h2> Buying a License </h2></a>
				<a href=#><h2> Selling a License </h2></a>
				<a href=#><h2> Liquor License Specifics</h2></a>
			</div>


			<!-- ARTICLES SECTION -->	
<!-- 			<div class="resources-articles">
				<?php global $more;
				$more = 0;
				query_posts('cat=2');
				if(have_posts()) : while(have_posts()) : the_post(); ?>

				<div class="col-sm-10 articles">
					<div class="col-sm-10">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; endif;
			wp_reset_query();
			?>
		</div> -->

		<div class="resources-articles">

			<div class="col-sm-10 articles">
				<p class="imgp"><a href="https://liquorlicenseadvisor.dream.press/2018/08/30/what-is-a-liquor-license-and-what-does-it-do/"><img class="articles-pics" src="<?php echo get_stylesheet_directory_uri(); ?>/images/stock-pics/adult-bar-blur-696218.jpg" data-src="https://cdn10.bostonmagazine.com/wp-content/uploads/2016/12/liquor-licenses-boston-sm.jpg" /></a></p>

				<h2 style="text-align:left; font-size:19px;">What’s a Liquor License? Everything You Need to Know</h2>
			</div>


			<div class="col-sm-10 articles">
				<p class="imgp"><a href="https://liquorlicenseadvisor.dream.press/2018/08/30/the-process-of-buying-a-liquor-license-in-the-united-states/"><img class="articles-pics" src="<?php echo get_stylesheet_directory_uri(); ?>/images/stock-pics/alcohol-alcohol-bottles-bar-372959.jpg"  data-src="https://cdn10.bostonmagazine.com/wp-content/uploads/2016/12/liquor-licenses-boston-sm.jpg" /></a></p>

				<h2 style="text-align: left; font-size: 19px;">The Process of Buying a Liquor License in the United States</h2>
			</div>

			<div class="col-sm-10 articles">
				<p class="imgp"><a href="https://liquorlicenseadvisor.dream.press/2018/08/30/sell-a-liquor-license-price-and-value-of-liquor-licenses/"><img class="articles-pics" src="<?php echo get_stylesheet_directory_uri(); ?>/images/stock-pics/alcohol-alcoholic-bar-545058.jpg" data-src="https://cdn10.bostonmagazine.com/wp-content/uploads/2016/12/liquor-licenses-boston-sm.jpg" /></a></p>

				<h2 style="text-align:left; font-size:19px;">Sell a Liquor License: Price and Value of Liquor Licenses</h2>
			</div>


			<div class="col-sm-10 articles">

				<p class="imgp"><a href="https://liquorlicenseadvisor.dream.press/2018/08/30/how-to-acquire-a-liquor-license-liquor-license-closing/"><img class="articles-pics" src="<?php echo get_stylesheet_directory_uri(); ?>/images/stock-pics/alcohol-ale-bar-159291.jpg" data-src="https://cdn10.bostonmagazine.com/wp-content/uploads/2016/12/liquor-licenses-boston-sm.jpg" /></a></p>

				<h2 style="text-align:left; font-size:19px;">How To Acquire A Liquor License &amp; Liquor License Closing</h2>
			</div>

			<div class="col-sm-10 articles">
				<p class="imgp"><a href="https://liquorlicenseadvisor.dream.press/2018/08/30/how-much-does-a-liquor-license-cost-to-buy-or-renew-in-the-united-states/"><img class="articles-pics" src="<?php echo get_stylesheet_directory_uri(); ?>/images/stock-pics/alcohol-bar-bar-cafe-1324896.jpg"  data-src="https://cdn10.bostonmagazine.com/wp-content/uploads/2016/12/liquor-licenses-boston-sm.jpg" /></a></p>

				<h2 style="text-align:left; font-size:19px;">How Much Does a Liquor License Cost to Buy or Renew in the United States?</h2>
			</div>



			<div class="col-sm-10 articles">
				<p class="imgp"><a href="https://liquorlicenseadvisor.dream.press/2018/08/30/what-type-of-liquor-license-do-i-need-for-my-business-or-venue/"><img class="articles-pics" src="<?php echo get_stylesheet_directory_uri(); ?>/images/stock-pics/alcohol-bar-beer-1005642.jpg"  data-src="https://cdn10.bostonmagazine.com/wp-content/uploads/2016/12/liquor-licenses-boston-sm.jpg" /></a></p>

				<h2 style="text-align:left; font-size:19px;">What Type of Liquor License Do I Need for My Business or Venue?</h2>
			</div>

			

			<div class="col-sm-10 articles">
				<p class="imgp"><a href="https://liquorlicenseadvisor.dream.press/2018/08/30/liquor-license-applications-in-florida-massachusetts-new-jersey-and-pennsylvania/"><img class="articles-pics" src="<?php echo get_stylesheet_directory_uri(); ?>/images/stock-pics/alcohol-bar-beer-1089932.jpg" data-src="https://cdn10.bostonmagazine.com/wp-content/uploads/2016/12/liquor-licenses-boston-sm.jpg" /></a></p>

				<h2 style="text-align:left; font-size:19px;">Liquor License Applications in Florida, Massachusetts, New Jersey, and Pennsylvania</h2>

			</div>

		</div>
	</div>
</div>


</div>
</div>
</div>

<?php get_footer(); ?>
