<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kawahagi_Wo_Mederukai
 */

$theme_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
$description = get_bloginfo( 'description', 'display' );
if ( $description || is_customize_preview() ) : ?>
<meta name="description" content="<?php echo $description;?>" />
<?php endif; ?>
<meta name="keywords" content="同人,同人サークル,カワハギを愛出る会" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">
        <header>
            <div id="header_wrap">
                <h1 class="site_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <p id="copy"><small>Copyright &copy; カワハギを愛出る会 All Rights Reserved.</small></p>
            </div>
            <!-- /header_wrap -->
        </header>
        <?php
        if ( is_front_page() && is_home() ) : ?>

        <div id="top_main">
            <div id="top_main_wrap">
                <div id="top_main_box">
                    <div id="top_main_title_box">
                        <p id="top_main_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $theme_url; ?>/images/main_logo.png" alt="カワハギを愛出る会"></a></p>
                        <h2 id="top_main_title">カワハギを愛出る会 OfficialSite<br>
                            <span>kawahagi wo mederukai</span></h2>
                        <div class="ticker">
                            <ul>
                                <li>カワハギを愛出る会へようこそ！</li>
                                <li>ゆっくりしていってね！</li>
                                <li>5時間くらい…</li>
                                <li>それは長すぎかっ！(汗)</li>
                                <li>そんなお時間ないですよね。</li>
                                <li>失礼しました。(陳謝)</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /top_main_title_box -->
                    <div class="main_img1"><img src="<?php echo $theme_url; ?>/images/main_img1.png" alt="イラスト1"></div>
                    <div class="main_img2"><img src="<?php echo $theme_url; ?>/images/main_img2.png" alt="イラスト2"></div>
                    <div class="main_img3"><img src="<?php echo $theme_url; ?>/images/main_img3.png" alt="イラスト3"></div>
                </div>
                <!-- /top_main_box -->
            </div>
            <!-- /top_main_wrap -->
        </div>
        <!-- /top_main -->

        <div id="top_nav">
            <div id="top_nav_wrap">
                <div class="top_nav_box">
                    <ul>
                        <li><a href="/"><img src="<?php echo $theme_url; ?>/images/nav_home.png" alt="home"></a></li>
                        <li><a href="/circle"><img src="<?php echo $theme_url; ?>/images/nav_circle.png" alt="circle"></a></li>
                        <li><a href="/gallery"><img src="<?php echo $theme_url; ?>/images/nav_gallery.png" alt="gallery"></a></li>
                        <li><a href="/blog"><img src="<?php echo $theme_url; ?>/images/nav_blog.png" alt="blog"></a></li>
                    </ul>
                </div>
                <!-- /top_nav_box -->
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
            </div>
            <!-- /top_nav_wrap -->
        </div>
        <!-- /top_nav -->
        <?php else : ?>
        <div id="page_header">
            <div id="page_header_wrap">
                <p id="page_header_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $theme_url; ?>/images/header_logo.png" alt="カワハギを愛出る会"></a></p>
                <div id="page_header_box">
                </div>
                <!-- /page_header_box -->
            </div>
            <!-- /page_header_wrap -->
        </div>
        <!-- /page_header -->
        <div class="bar_green"></div>
        <?php endif; ?>

        <div id="contents">
            <div class="wakame">
                <div id="contents_wrap" class="clear">
