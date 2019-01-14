<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
?>
 <div class="green-header">

	 <?php

get_header(); ?>

	<div id="primary" class="content-area max-width-container">
		<main id="main" class="site-main" role="main">




		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				//	the_archive_title( '<h1 class="page-title">', '</h1>' );
				//	the_archive_description( '<div class="taxonomy-description">', '</div>' );
					$taxonomy = get_queried_object();
					
                ?>
                
				<h1 class="page-title"><?php echo $taxonomy->name; ?></h1>
				<p><?php echo $taxonomy->description; ?></p>
                <div class="page-categories"> 
 
			
                    </div>
					<div class="dash-border">
                    </div>
			
			</header><!-- .page-header -->



		<?php /* Start the Loop */ ?>
            
            <ul class="product-list">
			<?php while ( have_posts() ) : the_post(); ?>
            
				<?php
					get_template_part( 'template-parts/content-product-item' );
				?>

			<?php endwhile; ?>
            </ul>
			<?php // the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->




<?php //get_sidebar(); ?>
<?php get_footer(); ?>
</div>

