<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();


if (have_posts()) :
    // Start the Loop.
    while (have_posts()) : the_post();

        $cf_subtitle = get_post_meta($post->ID, 'data-subtitle', true);
        $cf_icon = get_post_meta($post->ID, 'data-icon', true);

        ?>
        <div class="Page-header Page-header--primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2">

                        <h2><?php the_title(); ?> <span class="fa fa-lg <?php echo $cf_icon; ?>"></span></h2>

                        <p><?php if ($cf_subtitle) {
                                echo $cf_subtitle;
                            } ?></p>

                    </div>

                </div>
            </div>
        </div>

        <section id="content" class="Page-content container" role="main">
            <div class="col-lg-8 col-lg-offset-2">
                <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                    <?php the_content(); ?>
                </article>

            </div>
        </section><!-- /#content -->

    <?php

    endwhile;
else :
    // If no content, include the "No posts found" template.
    get_template_part('content', 'none');

endif;


get_footer();