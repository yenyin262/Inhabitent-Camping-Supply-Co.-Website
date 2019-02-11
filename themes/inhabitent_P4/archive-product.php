<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

?>
<div class="green-header">
	<?php get_header(); ?>
	<div id="primary" class="content-area max-width-container">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title">Shop Stuff</h1>
                	<div class="page-categories"> 
                		<?php   $terms = get_terms( 'product-type' ); // returns an array of posts
                		?>
                    	<?php foreach ( $terms as $term ) { ?>
                    	<a href="<?php echo get_term_link($term)?>" class="taxonomy-title"><?php echo $term ->name; ?></a>
                  		<?php }?>
                	</div>
					<div class="dash-border"></div>
				</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
            
                <ul class="product-list">
			        <?php while ( have_posts() ) : the_post(); ?>
                    	<?php
				    	get_template_part( 'template-parts/content-product-item' );
				    	?>
			        <?php endwhile; ?>
                </ul>
                
            <?php else : ?>
			    <?php get_template_part( 'template-parts/content', 'none' ); ?>
		    <?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_footer(); ?>
</div>
                    
