<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footerinfo">
					<div class="contact">
						<h1> Contact Info </h1>
						<ul> <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#" class="email"> info@inhabitent.com </a></li>
						<li><i class="fa fa-phone" aria-hidden="true"></i> 778-456-7891</li>
						<li><i class="fa fa-facebook-official" aria-hidden="true"></i> 
						<i class="fa fa-google-plus-square" aria-hidden="true"></i>
						<i class="fa fa-twitter-square" aria-hidden="true"></i></li>
						</ul>
					</div>

					<div class="business">
						<h1> Business Hours	</h1>
						<ul>
						<li><b>Monday-Friday:</b> 9am to 5pm</li>
						<li><b>Saturday:</b> 10am to 2pm</li>
						<li><b>Sunday:</b> Closed </li>

						</ul>
					</div>
					<div class="logofoot">
					<img src="http://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-text.svg" alt="Inhabitent logo">
					</div>
				
			</div>
				<div class="copyright">
					<p> Copyright ©2016 Inhabitent</p>
				</div>
		
			<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div>
			<!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
