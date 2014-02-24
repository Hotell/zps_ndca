<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div class="Page-header Page-header--primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2">

                <h2><?php _e( 'Nothing Found', 'twentyfourteen' ); ?></h2>

                <p></p>

            </div>

        </div>
    </div>
</div>

<section id="content" class="Page-content container">
    <div class="col-lg-8 col-lg-offset-2">
        <article>
            <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyfourteen' ), admin_url( 'post-new.php' ) ); ?></p>

            <?php elseif ( is_search() ) : ?>

                <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyfourteen' ); ?></p>
                <?php get_search_form(); ?>

            <?php else : ?>

                <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfourteen' ); ?></p>
                <?php get_search_form(); ?>

            <?php endif; ?>
        </article>

    </div>
</section><!-- /#content -->
