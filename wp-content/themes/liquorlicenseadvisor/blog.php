<?php 

/** Template Name: Blog Page
 * description: Blog page for LLA
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div class="col-sm-5 search">
			<form role="search">
				<div class="search-control">
					<input type="search" id="site-search" name="q"
					placeholder="Search Bar"
					aria-label="Search through site content">
					<!-- <button>Search</button> -->
				</div>
			</form>
		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="entry">
				<?php the_content(); ?>
			</div><!-- entry -->
		<?php endwhile; ?>
	<?php endif; ?>


</div>
</div>