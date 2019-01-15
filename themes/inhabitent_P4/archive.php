<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
?>
 <div class="green-header">
<?php get_header(); ?>
<div class="max-width-container site-widget">

	<div id="primary" class="content-area content-widget">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="archivepage-header">
				<?php
					the_archive_title( '<h1 class="archive-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-archive' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content-archive' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<div class="widget-wrapper">
<?php dynamic_sidebar(); ?>
</div> 
</div>
<?php get_footer(); ?>
</div>