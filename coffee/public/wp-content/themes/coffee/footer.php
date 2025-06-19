<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coffee
 */

?>

<!-- Footer -->
<footer class="footer">
	<div class="container">
		<div class="footer__wrapper">
			<div class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?> /assets/img/header/logo.png" alt="" /></div>

			<div class="footer__inner">
				<ul class="footer__items">
					<li class="footer__item">
						<a class="footer__link" href="#">Main</a>
					</li>
					<li class="footer__item">
						<a class="footer__link" href="#">Buy</a>
					</li>
					<li class="footer__item">
						<a class="footer__link" href="#">More</a>
					</li>
				</ul>
				<ul class="footer__items">
					<li class="footer__item">
						<a class="footer__link" href="#">We make</a>
					</li>
					<li class="footer__item">
						<a class="footer__link" href="#">Process</a>
					</li>
				</ul>
				<ul class="footer__items">
					<li class="footer__item">
						<a class="footer__link" href="#">Products</a>
					</li>
					<li class="footer__item">
						<a class="footer__link" href="#">Cappuccino</a>
					</li>
					<li class="footer__item">
						<a class="footer__link" href="#">Fast</a>
					</li>
				</ul>
				<ul class="footer__items">
					<li class="footer__item">
						<a class="footer__link" href="#">Events</a>
					</li>
					<li class="footer__item">
						<a class="footer__link" href="#">Drinks</a>
					</li>
					<li class="footer__item">
						<a class="footer__link" href="#">Eat</a>
					</li>
				</ul>
				<ul class="footer__items">
					<li class="footer__item">
						<a class="footer__link" href="#">Contacts</a>
					</li>
					<li class="footer__item">
						<a class="footer__link" href="#">Instagram</a>
					</li>
					<li class="footer__item">
						<a class="footer__link" href="#">Number</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>