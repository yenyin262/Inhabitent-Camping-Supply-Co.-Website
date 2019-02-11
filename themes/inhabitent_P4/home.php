<div class="green-header">

    <?php get_header(); ?>

    <div class="max-width-container site-widget">
        <div id="primary" class="content-area content-widget">
            <main id="main" class="site-main " role="main">
                <?php if ( have_posts() ) : ?>

                <?php if ( is_home() && ! is_front_page() ) : ?>

                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                 </header>

                <?php endif; ?>


                <?php /* Start the Loop */ ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content-homepage' ); ?>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

                <?php else : ?>

                <?php get_template_part( 'template-parts/content-homepage' ); ?>

                <?php endif; ?>
		    </main><!-- #main -->
        </div><!-- #primary -->
        <div class="widget-wrapper">
            <?php dynamic_sidebar(); ?>
        </div>
    </div>
    <?php get_footer(); ?>  
</div>
