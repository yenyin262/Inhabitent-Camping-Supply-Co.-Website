<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
?>
<div class="green-header">
	<?php get_header(); ?>
 	<div class="max-width-container site-widget">
		<div id="primary" class="content-area content-widget">
			<main id="main" class="site-main " role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="title"> <?php get_template_part( 'template-parts/content-findus' ); ?> </div>

				<?php endwhile; // End of the loop. ?>	

			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="widget-wrapper">
			<?php dynamic_sidebar(); ?>
		</div> 
	</div>
	<?php get_footer(); ?>
</div>



