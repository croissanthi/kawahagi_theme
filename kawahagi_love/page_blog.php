<?php
/**
 * Template Name: ブログページ
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kawahagi_Wo_Mederukai
 */
$theme_url = get_template_directory_uri();
get_header(); ?>

<div id="main_contents">
    <?php //query_posts( ‘post’ ); ?>
    <?php

//    if ( have_posts() ) :
//
//    /* Start the Loop */
//    while ( have_posts() ) : the_post();
    $blog_posts = get_posts();
    foreach($blog_posts as $post):
    setup_postdata($post);
    ?>

    <div class="blog_box">
        <div class="blog_title_box">
            <h4 class="blog_title"><?php the_title(); ?></h4>
            <p class="blog_date"><?php the_date('Y.m.d H:i'); ?></p>
        </div>
        <!-- /blog_title_box -->
        <div class="blog_text_box">
            <p><?php the_content(); ?></p>
        </div>
        <!-- /blog_text_box -->
    </div>
    <!-- /blog_box -->

    <?php

    /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
//    get_template_part( 'template-parts/content', get_post_format() );
//
//    endwhile;
//
//    the_posts_navigation();
//
//    else :
//
//    get_template_part( 'template-parts/content', 'none' );

    //endif;
    endforeach;
    ?>
</div>
<!-- /main_contents -->

<div id="side_contents">
    <!-- Twitter -->
    <div class="twitter">
        <a class="twitter-timeline" href="https://twitter.com/KawahagiMederu" data-widget-id="497769869169790976">@KawahagiMederuさんのツイート</a>
        <script>
            ! function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0],
                    p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");
        </script>
    </div>
    <!-- /twitter -->

    <?php get_sidebar(); ?>
</div>
<!-- /side_contents -->
    <?php
    get_footer();
    ?>
