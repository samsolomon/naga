<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package NAGA
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row site-info">
			<div class="col-sm-4">
				<address class="m2">
				National Amputee Golf Association
				<br>701 Orkney Ct.
				<br>Smyrna, TN 37167-6395
				</address>
			</div>
			<nav id="footer-navigation" class="col-sm-6 footer-navigation" role="footer-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</div> <!-- end container -->

</body>
</html>
