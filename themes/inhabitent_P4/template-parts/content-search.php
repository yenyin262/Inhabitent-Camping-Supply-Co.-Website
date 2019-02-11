<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="search-header">
		<?php the_title( sprintf( '<h2 class="search-results-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="search-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div>
		<?php endif; ?>
	</header>

	<div class="search-summary">
		<?php the_excerpt(); ?>
		<a class="journal-button journal-home" href="<?php echo get_permalink()?>">Read More →</a>
	</div>
</article><!-- #post-## -->
