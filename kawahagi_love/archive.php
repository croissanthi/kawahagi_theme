<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kawahagi_Wo_Mederukai
 */
$theme_url = get_template_directory_uri();
get_header(); ?>

<div id="main_contents">
        <?php
        if ( have_posts() ) : ?>

    <div class="info_box">
        <h3 id="archive_title"><?php the_archive_title(); ?></h3>
        <ul class="info_list">
            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();
            ?>
            <li>
                <p class="new visible"><img src="<?php echo $theme_url; ?>/images/info_new.png" alt="NEW"></p>
                <p class="info_date"><?php the_date('Y.m.d'); ?></p>
                <p class="info_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
            <?php
            endwhile;
            ?>
        </ul>
        <!-- /info_list -->
    </div>
    <!-- /info_box -->
            <?php

            the_posts_navigation();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>

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
