<?php 

/** Template Name: Resources Page
 * description: Resources page for LLA
 */

get_header(); ?>

<div class="container">
	<div class="row">
	<div class="wrap">

		<!-- SEARCH SECTION -->
		<div class="col-sm-2 search">
			<form role="search">
				<div class="search-control">
					<?php get_search_form(); ?>
				</div>
			</form>
			<h1> CATEGORIES </h1>
			<a href=#><h2> KEYWORD </h2></a>
			<a href=#><h2> KEYWORD </h2></a>
			<a href=#><h2> KEYWORD </h2></a>
			<a href=#><h2> KEYWORD </h2></a>
			<a href=#><h2> KEYWORD </h2></a>
		</div>


		<!-- ARTICLES SECTION -->
		

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


	
</div>
</div>
</div>

<?php get_footer(); ?>
