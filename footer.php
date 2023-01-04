<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agencia
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col">
					<?php if ( is_active_sidebar('footer-1') ) { ?>
						<div class="footer">
							<?php dynamic_sidebar('footer-1'); ?>
						</div>
					<?php } ?>
				</div>
				<div class="col offset-md-1">
					<?php if ( is_active_sidebar('footer-2') ) { ?>
						<div class="footer">
							<?php dynamic_sidebar('footer-2'); ?>
						</div>
					<?php } ?>
				</div>
				<div class="col offset-md-1">
					<?php if ( is_active_sidebar('footer-3') ) { ?>
						<div class="footer">
							<?php dynamic_sidebar('footer-3'); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
