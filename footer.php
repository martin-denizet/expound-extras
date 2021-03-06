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