</div><!--end container-->
<footer>
<div class="row light_gray">
	<div class="container">
        <div class="col-md-6 padding-norm">
            <?php if ( is_active_sidebar( 'footer_right_1' ) ) : ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'footer_right_1' ); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="row dark_gray">
    <div class="col-md-4 padding-norm">
    <p>copyright 2020 | SAR-1</p>
    </div>
    <div class="col-md-4 padding-norm">
    <?php //wp_nav_menu( array('theme_location' => 'footer', 'container' => '', 'items_wrap' => '<ul class="footermenu">%3$s</ul>' )); ?>
    </div>
    <div class="col-md-4 padding-norm">
    </div>
</div><!--end row -->
</footer>
<?php wp_footer(); ?> 
</body>
</html>
