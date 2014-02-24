<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
</main><!-- #main -->

<footer class="Footer site-footer" id="colophon" role="contentinfo">
    <div class="container">
        <div class="pull-right">&copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?></div>
    </div>
</footer>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<!--<script src="offcanvas.js"></script>-->

<?php wp_footer(); ?>
<!-- <?php get_current_template(true); ?> -->
</body>
</html>