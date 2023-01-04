<?php
/*
* This is our first theme.
*/
get_header();
?>
        
       <div class="home-main">
           <div class="row mr-0 ml-0">
            <div class="home-posts col-lg-8 col-xs-12">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <h1><?php the_title() ?></h1>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="home-sidebar col-lg-4 col-xs-12 pl-0 pr-0">
                <?php get_sidebar(); ?>
            </div>
           </div>
           
       </div>
        

<?php 
get_footer();
?>
    
