<?php 

get_header(); 

?>
<div class="container">
	<div class="row">

		<!-- SEARCH SECTION -->
		<div class="col-sm-2 search">
			<form role="search">
				<div class="search-control">
					<div class="search-control">
						<?php get_search_form(); ?>
					</div>
				</div>
			</form>
		</div>


		<!-- ARTICLES SECTION -->
		
		<!-- 	<h2>Beginner SEO Content</h2> -->

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-sm-10 articles">
				<div class="col-sm-10">
					<?php the_content(); ?>
				</div><!-- entry -->
				</div>
			<?php endwhile; ?>
		<?php else : ?> 

			<p> NOTHING FOUND! </p> 
		<?php endif; ?>

	</div>

</div>





<?php
get_footer(); 

?>