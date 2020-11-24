<?php  
/**
 * Template Name: Courses
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
 </div><!-- end header row -->
 <div class="row">
 	<div class="container">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
 </div>
 </div>
 <div class="row extra_padding">
 	<div class="container">
    
    <?php 
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
			
			<?php if ( $wpb_all_query->have_posts() ) : ?>
			
			
				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="row">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
				<?php endwhile; ?>
				<!-- end of the loop -->
			
			
				<?php wp_reset_postdata(); ?>
			
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
    </div>
 </div>
    </div>
 </div>
<?php get_footer(); ?>