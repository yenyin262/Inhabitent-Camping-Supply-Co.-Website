<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class ="header_container">
		        <div class="hero_logo">
			        <img class ="main_logo" src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg' ?> " alt="main_logo."/>
                </div>
            </div>	  
                
				   
				
		
			
			    
          

            <div class=shop_container>
                <h1>Shop Stuff</h1>
                <div class="shopStuff">
                   
       
                    <?php $terms = get_terms( 'product-type' ); // returns an array of posts
                         ?>
                    <?php foreach ( $terms as $term ) { ?>
                     <div class="grid-item">
                        <img class ="icon" src="<?php echo get_template_directory_uri() . '/images/' . $term->name; ?>.svg" /> 
                             <p><?php echo $term->description; ?></p>

                             <a href="<?php echo get_term_link($term)?>" button class="button_doStuff"><?php echo $term ->name . ' ' . 'Stuff'; ?></a>
                             
                    </div>
                    <?php }?>
            </div>
                    </div>

            <div class="inhabitent">
                <h2>Inhabitent Journal</h2>
                <div class="inhabitent-journal-container">
                
                <?php 
                    $args = array( 'post_type' => 'post', 'order' => 'DSC', 'numberposts' => '3' );
                    $journal_posts = get_posts( $args ); // returns an array of posts
                ?>
                    <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>

                        <?php /* Content from your array of post results goes here */ ?>
                        <div class="journalHomepage"> 
                            <?php  the_post_thumbnail( 'large' );   red_starter_posted_on(); ?> <span class="comments">/</span> <span class="comments"><?php comments_number() ;  ?></span>
                            <h3 class="journal-title"><a href="<?php echo get_permalink()?>"><?php the_title() ?></a></h3>
                            <a class="journal-button" href="<?php echo get_permalink()?>">Read Entry</a>
                        </div> 
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>

            
                        
            <div class="latest-adventures-section">
                <h2>Latest Adventures </h2>
           
        
                <div class="grid-container">
                    <div class="grid-item-canoe"> 
                        <h3>Getting Back to Nature in a Canoe</h3>
                        <a href =""><img class ="" alt=""/></a>
                        <input type="button" class="button_canoe" value="Read More"/>  
                    </div>
                    <div class="grid-item-beach">
                        <h3> A Night with Friends at the Beach</h3>
                        <a href =""><img class ="" alt=""/></a>
                        <input type="button" class="button_beach" value="Read More"/>  
                    </div>
                    <div class="grid-item-mountain">
                        <h3> Taking in the View at Big Mountain</h3>
                        <a href =""><img class ="" alt=""/></a>
                        <input type="button" class="button_mountain" value="Read More"/>  
                    </div>
                    <div class="grid-item-sky">
                        <h3> Star-Gazing at the Night Sky</h3>
                        <a href =""><img class ="" alt=""/></a>
                        <input type="button" class="button_sky" value="Read More"/>  
                    </div>
                </div>
                <div class="button-container">
                    <a href="#" button class="button_latestadventures">More Adventures</a>
                </div>
            </div>


    


	    </main><!-- #main -->
    </div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
