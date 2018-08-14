<?php 

/** Template Name: Contact Page
 * description: Contact page for LLA
 */


get_header(); ?>

<div class="row">
	<div class="col-sm-12 office-info">
		<h3 class="blog-post-title">Office Info</h3>
		<h2> 111111 Sample St. </h2>
		<h2> Sample Sample 011111 </h2>
		<h2> (123) 456 - 789 </h2>
	</div>


	<div id="primary" class="site-content">
		<div id="content" role="main">

			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="col-sm-6 entry">
					<?php the_content(); ?>
				</div><!-- entry -->
			<?php endwhile; ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

</div>
