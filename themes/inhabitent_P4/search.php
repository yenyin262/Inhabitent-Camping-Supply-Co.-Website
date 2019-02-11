<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */
?>
<div class="green-header">
	<?php get_header(); ?>
	<div class="max-width-container site-widget">
		<section id="primary" class="content-area content-widget">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<header class="search-page-header">
						<h1 class="search-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content-search' ); ?>

					<?php endwhile; ?>

					<?php red_starter_numbered_pagination(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</section><!-- #primary -->
		<div class="widget-wrapper">
			<?php dynamic_sidebar(); ?>
		</div> 
	</div>
	<?php get_footer(); ?>
</div>