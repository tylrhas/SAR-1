<?php
/**
 * Template Name:FAQ
 *
 * @package WordPress
 * @subpackage Ascent
 * @since Ascent 0.1
 */
 ?>
<?php get_header(); ?>
<div class="row page_title_row" <?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?> style="background-image:url(<?php echo $image[0]; ?>);<?php endif; ?> background-position:50% 50%; background-size:cover;">
     <div class="container">
        <h1 class="page_title">FAQs</h1>
     </div>
 </div><!-- end header row -->
 <div class="main_page content ">
    <div class="container">
    <div id="accordion">
    <?php 
    $i = 1;
    if (have_posts()) : while (have_posts()) : the_post();?>
  <div class="card">
    <div class="card-header" id="headingThree">
    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-<?= $i ?>" aria-expanded="false" aria-controls="collapseThree">
      <h5 class="mb-0">
        <?php echo the_title(); ?>
      </h5>
      </button>
    </div>
    <div id="collapse-<?= $i ?>" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php $i++; endwhile; endif; ?>
</div>
</div>
</div>

<?php get_footer(); ?>