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

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-left">
				<h3>Have any questions?</h3>
				<?php echo do_shortcode('[contact-form-7 id="12" title="Contact form footer"]') ?>
	    </div>
	    <div class="footer-right">
				<h3>Contact Info.</h3>
				<p id="Num"><strong>Call:<br> </strong><br>Mossarraf Hossain: 01 818 631 217<br>
					Sahadat Hossain: 01 820 079 532<br>
					Rony: 01 780 111 959<br>
					Rana: 01 871 775 547</p><br>
				<p><strong>Email: </strong>northamerica@joblinkcorporate.com</p><br>
				<p><strong>Address:</strong></p><br>
				<p>House #10, Road #06, Block-B,</p>
				<p> Banasree, Rampura,</p>
				<p>Dhaka - 1219, Bangladesh</p><br>
				<p><strong>Payment Info:</strong></p><br>
				<p id="Num">A/C No. 14024 38 68 5001</p>
				<p>The City Bank Ltd., Banani Branch</p>
				<p>Dhaka, Bangladesh</p>

	    </div>
		</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
