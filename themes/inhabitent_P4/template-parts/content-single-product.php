<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="single-product-photo">
        <?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
        
        <div class="single-product-info">
	    	<div class="product-post-title">	
           		<?php the_title(); ?>
        	</div>

        	<span class="single-product-price"><?php 
		    	echo CFS()->get( 'price' );
	        ?></span>

	    	<div class="single-product-content">
		 	   <?php the_content(); ?>
		   		<?php 
			    wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			    ) );
		    	?>
    		</div>
    		<div class=social>
    			<a class="social-button" href=""><i class="fab fa-facebook-f"></i> Like</a>
    			<a class="social-button" href=""><i class="fab fa-twitter"></i> Tweet</a>
    			<a class="social-button" href=""><i class="fab fa-pinterest"></i> Pin</a>
   		 	</div>
        </div>
    </div>
	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
