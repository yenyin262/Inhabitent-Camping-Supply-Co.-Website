<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class ="header_container">
			<div class ="inhabitent_header"> 
				<div class="inhabitent_logo_container">
				<a href ="<?php echo site_url() ?>"><img class ="logo" src="http://localhost:8888/Project_4/wp-content/themes/inhabitent_P4/images/inhabitent-logo-tent-white.svg" alt="logo."/></a>
				</div>
				<section class="hero_logo">
				<img class ="main_logo" src="http://localhost:8888/Project_4/wp-content/themes/inhabitent_P4/images/inhabitent-logo-full.svg" alt="main_logo."/>
				</section>
				<div class="header_menu">
					<nav class="main_navigation">
						<?php wp_nav_menu(array(
							'location' => 'menuLocation'

						));
						?>


						<!-- <ul>
							<li><a href="#">Shop</a></li>
							<li><a href="">Journal</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Find Us</a></li>
							<li><i class="fas fa-search"></i></li>
						</ul> -->
					</nav>
		
				</div>
			</div>
		</header>	
	</div> 

	

		<?php// if ( have_posts() ) : ?>

			<?php //if ( is_home() && ! is_front_page() ) : ?>
				<!-- <header> -->
					<!-- <h1 class="page-title screen-reader-text"><?php// single_post_title(); ?></h1> -->
				<!-- </header> -->
			<?php //endif; ?>

			<?php /* Start the Loop */ ?>
			<?php //while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'template-parts/content' ); ?>

			<?php// endwhile; ?>

			<?php //the_posts_navigation(); ?>

		<?php// else : ?>

			<?php //get_template_part( 'template-parts/content', 'none' ); ?>

		<?php //endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
