<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

   

	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="blog-title">', '</h1>' ); ?>

		<div class="blog-date-comment">
     <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?> 
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="blog-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <?php red_starter_entry_footer(); ?>
        <section class="social">
        <ul>

        
            <li><button class="socialname"><i class="fab fa-facebook-f"></i>    Like</button></li>
            <li><button class="socialname"><i class="fab fa-twitter"></i>       Tweet</button></li>
            <li><button class="socialname"><i class="fab fa-pinterest"></i>      Pin</button></li>
        </ul>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<style> 
.blog-title { 
    position: absolute;
    background-color: #248a83; 
    color: #ffff;
    /* max-width: 75%; */
    top: 0;
    margin-top: 92px;
    height: 90px;
    width: 40%;
    text-transform: uppercase;

}

.blog-date-comment { 
    background-color: #248a83;
    color: #ffff;
    position: absolute;
    /* bottom: -126px; */
    top: 132%;
    font-size: 16px;
    height: 24px;
    width: 30.1%;
    left: 27%;
}

.blog-date-comment a {
    text-decoration:none;
    color: #ffff;
} 

.blog-date { 
    font-size: 16px;
}
.blog-content { 
    text-align:left;
}

.social ul {
    list-style:none;
    display:flex;
}

.socialname { 
    background-color: #248a83;
    /* color: black; */
    box-shadow: none;
    /* padding-right: 20px; */
    margin-right: 20px;
    height: 36px;
    cursor: pointer;
    line-height: 1;
    width: 100%;
    text-transform: uppercase;
    color: white;
}background-color: #248a83;
    color:black;
    box-shadow:none;
    padding-right:20px;
}
</style>