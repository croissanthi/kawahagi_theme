<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kawahagi_Wo_Mederukai
 */
$theme_url = get_template_directory_uri();
?>

</div>
<!-- /contents_wrap -->

<div id="end_msg">
    <p>この下はないよ！</p>
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kawahagi_love' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'kawahagi_love' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'kawahagi_love' ), 'kawahagi_love', '<a href="http://kawahagi-love.xyz" rel="designer">croissant.hi.</a>' ); ?>
    </div><!-- .site-info -->
</div>
<!-- /end_msg -->
</div>
<!-- /wakame -->
</div>
<!-- /contents -->

<div id="foot_nav">
    <div id="foot_nav_wrap">
        <nav>
            <ul>
                <li><a href="/"><img src="<?php echo $theme_url; ?>/images/nav_home.png" alt="home"></a></li>
                <li><a href="/circle"><img src="<?php echo $theme_url; ?>/images/nav_circle.png" alt="circle"></a></li>
                <li><a href="/gallery"><img src="<?php echo $theme_url; ?>/images/nav_gallery.png" alt="gallery"></a></li>
                <li><a href="/blog"><img src="<?php echo $theme_url; ?>/images/nav_blog.png" alt="blog"></a></li>
            </ul>
        </nav>
        <div class="tv">
            <div class="tv_wrap">
                <img src="<?php echo $theme_url; ?>/images/nav_tv.png" alt="テレビ">
                <div class="tv_screen">
                    <div><img src="<?php echo $theme_url; ?>/images/screen01.png"></div>
                    <div><img src="<?php echo $theme_url; ?>/images/screen02.png"></div>
                    <div><img src="<?php echo $theme_url; ?>/images/screen03.png"></div>
                </div>
                <!-- /tv_screen -->
            </div>
            <!-- /tv_wrap -->
        </div>
        <!-- /tv -->
        <div class="page_top">
            <a href="#"><img src="<?php echo $theme_url; ?>/images/page_top.png" alt="ページTOPへ"></a>
        </div>
        <!-- /page_top -->
    </div>
    <!-- /foot_nav_wrap -->
</div>
<!-- /foot_nav -->
</div>
<!-- /wrapper -->

<?php wp_footer(); ?>

</body>
</html>
