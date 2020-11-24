<?php  
/**
 * Template Name: Training - Display
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
 <div class="row extra_padding">
 	<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
    </div>
 </div>
 <div class="row extra_padding topobackground">
 	<div class="container">
    <div class="align-middle">
      <h2 class="section_title text-center">Maintenance Training Packages</h2>
      </div>
      <div class="products">
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'training', 'orderby' => 'date' ,'order' => 'asc'  );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <div class="product col-md-3">    

                        <h3 class="prod_title"><?php the_title(); ?></h3>
                        
                        <?php the_excerpt(); ?>

                        <span class="prod_cta"><a href="<?php echo get_home_url(); ?>/contact-us/">Contact Us</a></span>                    

                    </a>

                    <?php //woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                </div>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div><!--/.products-->
    </div>
 </div>
<?php get_footer(); ?>