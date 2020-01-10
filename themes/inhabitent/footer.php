<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="contact-info">
						<h2>Contact Info</h2>
						<p>
							<a href="info@inhabitent.com">info.inhabitent.com</a> <br>
							778-456-7891
						</p>
					</div>

					<div class="open-hour">
						<h2>Business Hours</h2>
						<p>
							Monday-Friday: 9am to 5pm <br>
							Saturday: 10am to 2pm <br>
							Sunday: Closed
						</p>
					</div>

					<div class="logo-img">
						<a href="<?php echo esc_url( 'http://localhost:8888/wp4/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
					</div>

					<div class="copyright">
						<p>&#169; COPYRIGHT 2019 INHIBITENT</p>
					</div>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		

		<?php wp_footer(); ?>

	</body>
</html>
