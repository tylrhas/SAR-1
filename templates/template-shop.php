<?php  
/**
 * Template Name: Shop
 *
 * @package WordPress
 * @subpackage SAR-1 
 * @since SAR-1  0.1
 */
 get_header();
 ?>
  <div class="row page_title_row" <?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?> style="background-image:url(<?php echo $image[0]; ?>);<?php endif; ?> background-position:50% 50%; background-size:cover;">
     <div class="container">
        <h1 class="page_title">Shop</h1>
     </div>
     </div>
     <div class="container">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
     </div>
 <?php get_footer(); ?>