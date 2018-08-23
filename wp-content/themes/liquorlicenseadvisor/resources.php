<?php 

/** Template Name: Resources Page
 * description: Resources page for LLA
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<!-- SEARCH SECTION -->
		<div class="col-sm-4 search">
			<form role="search">
				<div class="search-control">
					<input type="search" id="site-search" name="q"
					placeholder="Search Bar"
					aria-label="Search through site content">
					<!-- <button>Search</button> -->
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
		<div class="col-sm-8 articles">
			<div class="col-sm-8">
			<!-- 	<h2>Beginner SEO Content</h2> -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					</div><!-- entry -->
				<?php endwhile; ?>
			<?php endif; ?>

		</div>

	</div>
</div>


<?php get_footer(); ?>
