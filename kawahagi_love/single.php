<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kawahagi_Wo_Mederukai
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


        </main><!-- #main -->
    </div><!-- #primary -->

<div id="main_contents">
    <?php
    while ( have_posts() ) : the_post();
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

    // If comments are open or we have at least one comment, load up the comment template.
//    if ( comments_open() || get_comments_number() ) :
//    comments_template();
//    endif;

    endwhile; // End of the loop.
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
