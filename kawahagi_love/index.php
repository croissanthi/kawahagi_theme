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
get_header(); ?>

<div id="main_contents">
    <div class="banner_box">
        <img src="<?php echo $theme_url; ?>/images/banner01.png" alt="">
    </div>
    <!-- banner_box -->

    <h3 id="info_title"><img src="<?php echo $theme_url; ?>/images/title_info.png" alt="インフォメーション"></h3>
    <div class="info_box">
        <ul class="info_list">
            <?php
            $blog_posts = get_posts();
            foreach($blog_posts as $post):
            setup_postdata($post);
            ?>
            <li>
                <p class="new visible"><img src="<?php echo $theme_url; ?>/images/info_new.png" alt="NEW"></p>
                <p class="info_date"><?php the_date('Y.m.d'); ?></p>
                <p class="info_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
            <?php
            endforeach;
            ?>
        </ul>
        <!-- /info_list -->
    </div>
    <!-- /info_box -->

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
