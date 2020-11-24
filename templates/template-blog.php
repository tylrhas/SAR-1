<?php  
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage SAR-1 
 * @since SAR-1  0.1
 */
 get_header();
 ?>
  <div class="row page_title_row" <?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?> style="background-image:url(<?php echo $image[0]; ?>);<?php endif; ?> background-position:50% 50%; background-size:cover;">
     <div class="container">
        <h1 class="page_title"><?php echo get_the_title(); ?></h1>
     </div>
     </div>
     <div class="container">
 <?php
  // set up or arguments for our custom query
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => $paged
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
  <article>
    <a href="<?php echo get_permalink(); ?>"><h1><?php echo the_title(); ?></h1></a>
    <div class="excerpt">
      <?php the_excerpt(); ?>
    </div>
  </article>
<?php endwhile; ?>

<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
  <nav class="prev-next-posts">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Older Posts', $the_query->max_num_pages ); // display older posts link ?>
    </div>
    <div class="next-posts-link">
      <?php echo get_previous_posts_link( 'Newer Posts' ); // display newer posts link ?>
    </div>
  </nav>
<?php } ?>

<?php else: ?>
  <article>
    <h1>Sorry...</h1>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </article>
<?php endif; ?>
     </div>
 <?php get_footer(); ?>