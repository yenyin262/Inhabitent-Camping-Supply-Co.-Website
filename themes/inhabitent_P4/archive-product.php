<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

 // from https://objectiv.co/how-to-change-custom-post-type-archive-order/
/*add_filter( 'posts_orderby' , 'custom_cpt_order' );

function custom_cpt_order( $orderby ) {
	global $wpdb;
	
	// Check if the query is for an archive
	if ( is_archive() && get_query_var("post_type") == "product" ) {
		// Query was for archive, then set order
		return "$wpdb->posts.post_title ASC";
	}
	
	return $orderby;
}
*/

get_header(); ?>

<!-- <style>
.product-list {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
    list-style:none;

}

.product-info {
    max-width: 40em;
    padding: 0;
    overflow-x: hidden;
    list-style: none
}
.product img {
    height: 300px;
    object-fit: cover;
}
.product-title  { 
    display: inline;
}

.product-title,
.product-price {
    background: white;
}

.product-info:before {
    float: left;
    width: 0;
    white-space: nowrap;
    content:
 ". . . . . . . . . . . . . . . . . . . . "
 ". . . . . . . . . . . . . . . . . . . . "
 ". . . . . . . . . . . . . . . . . . . . "
 ". . . . . . . . . . . . . . . . . . . . "
} 

.product-title {
    padding-right: 0.33em;
}
.product-price {
    float: right;
    padding-left: 0.33em;
}

.product-container { 
    border: 1px solid #e1e1e1;
}

</style> -->



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


        



		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				//	the_archive_title( '<h1 class="page-title">', '</h1>' );
				//	the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                
                <h1 class="page-title">Shop Stuff</h1>
                <div class="page-categories"> 
 
                <?php   $terms = get_terms( 'product-type' ); // returns an array of posts
                ?>
                    <?php foreach ( $terms as $term ) { ?>
                   
                     <a href="<?php echo get_term_link($term)?>" class="taxonomy-title"><?php echo $term ->name; ?></a>
                
               
                    <?php }?>
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
