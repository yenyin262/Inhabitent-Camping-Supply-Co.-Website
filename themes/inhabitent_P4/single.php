<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */?>
 <div class="green-header">

<?php

get_header(); ?>
<div class="max-width-container site-widget">
	<div id="primary" class="content-area  content-widget">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content-single-blog-view' ); ?>
		

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="widget-wrapper">
<?php dynamic_sidebar(); ?>
</div>
			</div>

<?php get_footer(); ?>
			</div>