<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kawahagi_Wo_Mederukai
 */
$theme_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>同人サークルカワハギを愛出る会オフィシャルサイト</title>
        <meta charset="UTF-8">
        <meta name="description" content="同人サークルカワハギを愛出る会オフィシャルサイトです。コミケなどのイベントを中心に、イラスト制作やマンガ制作などの同人活動を行っております。ジャンルは基本オリジナルです。" />
        <meta name="keywords" content="同人,同人サークル,カワハギを愛出る会" />
        <link rel="stylesheet" type="text/css" href="<?php echo $theme_url; ?>/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $theme_url; ?>/css/kawahagi.min.css">
    </head>
    <body>
        <div id="wrapper">
            <header>
                <div id="header_wrap">
                    <h1>同人サークル カワハギを愛出る会 オフィシャルサイト</h1>
                    <p id="copy"><small>Copyright &copy; カワハギを愛出る会 All Rights Reserved.</small></p>
                </div><!-- /header_wrap -->
            </header>

            <div id="top_main">
                <div id="top_main_wrap">
                    <div id="top_main_box">
                        <div id="top_main_title_box">
                            <p id="top_main_logo"><a href="/"><img src="<?php echo $theme_url; ?>/images/main_logo.png" alt="カワハギを愛出る会"></a></p>
                            <h2 id="top_main_title">カワハギを愛出る会 OfficialSite<br>kawahagi wo mederukai</h2>
                            <div class="marquee">カワハギを愛出る会へようこそ！</div>
                        </div><!-- /top_main_title_box -->
                        <div class="main_img1"><img src="<?php echo $theme_url; ?>/images/main_img1.png" alt="イラスト1"></div>
                        <div class="main_img2"><img src="<?php echo $theme_url; ?>/images/main_img2.png" alt="イラスト2"></div>
                        <div class="main_img3"><img src="<?php echo $theme_url; ?>/images/main_img3.png" alt="イラスト3"></div>
                    </div><!-- /top_main_box -->
                </div><!-- /top_main_wrap -->
            </div><!-- /top_main -->

            <div id="top_nav">
                <div id="top_nav_wrap">
                    <div class="top_nav_box">
                        <ul>
                            <li><a href=""><img src="<?php echo $theme_url; ?>/images/nav_home.png" alt="home"></a></li>
                            <li><a href=""><img src="<?php echo $theme_url; ?>/images/nav_circle.png" alt="circle"></a></li>
                            <li><a href=""><img src="<?php echo $theme_url; ?>/images/nav_gallery.png" alt="gallery"></a></li>
                            <li><a href=""><img src="<?php echo $theme_url; ?>/images/nav_blog.png" alt="blog"></a></li>
                        </ul>
                    </div><!-- /top_nav_box -->
                    <div class="tv">
                        <img src="<?php echo $theme_url; ?>/images/nav_tv.png" alt="テレビ">
                    </div><!-- /tv -->
                </div><!-- /top_nav_wrap -->
            </div><!-- /top_nav -->

            <div id="contents">
                <div id="contents_wrap" class="clear">
                    <div id="main_contents">
                        <div class="banner_box">
                            <img src="<?php echo $theme_url; ?>/images/banner01.png" alt="">
                        </div><!-- banner_box -->

                        <h3 id="info_title"><img src="<?php echo $theme_url; ?>/images/title_info.png" alt="インフォメーション"></h3>
                        <div class="info_box">
                        <ul class="info_list">
                            <li>
                                <p class="info_date">2016.05.01</p>
                                <p class="info_title">WEBサイトリニューアル！！</p>
                            </li>
                        </ul>
                        </div><!-- /info_box -->

                    </div><!-- /main_contents -->
                    <div id="side_contents">
                        <div class="sns_box">

                        </div><!-- /sns_box -->
                    </div><!-- /side_contents -->
                </div><!-- /contents_wrap -->
            </div><!-- /contents -->

            <div id="foot_nav">
                <div id="foot_nav_wrap">
                    <nav>
                        <ul>
                            <li><a href=""><img src="<?php echo $theme_url; ?>/images/nav_home.png" alt="home"></a></li>
                            <li><a href=""><img src="<?php echo $theme_url; ?>/images/nav_circle.png" alt="circle"></a></li>
                            <li><a href=""><img src="<?php echo $theme_url; ?>/images/nav_gallery.png" alt="gallery"></a></li>
                            <li><a href=""><img src="<?php echo $theme_url; ?>/images/nav_blog.png" alt="blog"></a></li>
                        </ul>
                    </nav>
                    <div class="tv">
                        <img src="<?php echo $theme_url; ?>/images/nav_tv.png" alt="テレビ">
                    </div><!-- /tv -->
                    <div class="page_top">
                        <a href=""><img src="<?php echo $theme_url; ?>/images/page_top.png" alt="ページTOPへ"></a>
                    </div><!-- /page_top -->
                </div><!-- /foot_nav_wrap -->
            </div><!-- /foot_nav -->
        </div><!-- /wrapper -->
    </body>
</html>
