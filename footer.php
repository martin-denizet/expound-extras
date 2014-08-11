<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Expound
 */
?>

	</div><!-- #main -->
	<div id="pre-footer" class="pre-footer-content">
    		<div id="pre-footer-widgets1" class="pre-footer-col"><?php dynamic_sidebar( 'pre-footer-widgets1' ) ?></div>
    		<div id="pre-footer-widgets2" class="pre-footer-col"><?php dynamic_sidebar( 'pre-footer-widgets2' ) ?></div>
    		<div id="pre-footer-widgets3" class="pre-footer-col"><?php dynamic_sidebar( 'pre-footer-widgets3' ) ?></div>
    		<div id="pre-footer-widgets4" class="pre-footer-col"><?php dynamic_sidebar( 'pre-footer-widgets4' ) ?></div>
  	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
                <div id="footer-widgets" class="full-container">
                        <?php dynamic_sidebar( 'sidebar-footer' ) ?>
                </div><!-- #footer-widgets -->
		<div class="site-info">
			<?php do_action( 'expound_credits' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
