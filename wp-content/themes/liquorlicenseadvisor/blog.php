<?php 

/** Template Name: Blog Page
 * description: Blog page for LLA
 */

get_header(); ?>

<div class="container">
	<div class="row">
<!-- 	<div class="wrap"> -->

		<!-- SEARCH SECTION -->
<!-- 		<div class="col-sm-2 blog-search">
			<form role="search">
				<div class="search-control">
					<?php get_search_form(); ?>
				</div>
			</form>
		</div> -->

<!-- 		<div class="blog-main">
		</div> -->
		<div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>


		<!-- ARTICLES SECTION -->
<!-- 		<div class="col-sm-10 blog-articles">
			<div class="col-sm-10 articles">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div> -->

	</div>
</div>
<!-- </div> -->

<?php get_footer(); ?>