<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>

	</div><!-- #content -->

	<div class="margin-for-footer"></div>
	<footer id="colophon" class="site-footer">
    <div class="container flex-row">
      <div class="footer-left flex1">
				<h3>Have any questions?</h3>
				<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]') ?>
      </div>
      <div class="footer-right flex1">
				<h3>Contact Info.</h3>
				<p><strong>Call: </strong>647-999-999</p><br>
				<p><strong>Email: </strong>info@joblink.com</p><br>
				<p><strong>Address</strong></p><br>
				<p>1232 Danforth Ave.</p>
				<p>Toronto, ON M4C 1L2</p>
				<p>Canada</p>
      </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
