<?php  
 /**
  * Template Name: Homepage
  *
  * @package WordPress
  * @subpackage SAR-1 
  * @since SAR-1  0.1
  */
  get_header(); ?>
    <?php if ( have_posts() ) :
         while ( have_posts() ) :
             the_post();
 		    the_content();
         endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
<?php get_footer(); ?>