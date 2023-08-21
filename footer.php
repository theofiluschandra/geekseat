<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Personal_Site
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info d-grid w-90 mg-side-auto align-items-center">
		<div class="col-left">
			<p class="copy">© 2023 by Theofilus Chandra.</p>
			<span class="reff">reference to <a href="https://urlis.net/e9gz2qn3">Wix Theme</a></span>
		</div>
		<div class="col-right d-grid">
			<div class="col-telp col-footer-info d-grid">
				<div class="info-title">Call</div>
				<div class="info-content"><a href="tel:+6282141477447">0821-4147-7447</a></div>
			</div>
			<div class="col-email col-footer-info d-grid">
				<div class="info-title">Write</div>
				<div class="info-content"><a href="mailto:theofiluschandratc@gmail.com"></a>theofiluschandratc@gmail.com</div>
			</div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
<script>
	feather.replace();

	$(window).scroll(function() {
		var scrollHeight = $(window).scrollTop();
		var batasGeser = 50;

		if (scrollHeight >= batasGeser) {
			// if (scrollHeight >= $(window).height()) {
			$('.section-fixed-header').addClass('punya-shadow');
		} else {
			$('.section-fixed-header').removeClass('punya-shadow');
		}
	});

	$('.nav-burger-wrapper').click(function() {
		$('.mobile-sidebar').toggleClass('active');
	});

	$('.icon-sidebar-close').click(function() {
		$('.mobile-sidebar').removeClass('active');
	});

	$('.mobile-sidebar').click(function() {
		$(this).removeClass('active');
	});

	const swiper = new Swiper('.swiper', {
		direction: "horizontal",
		slidesPerView: "auto",
		centeredSlides: true,
		autoHeight: true,
		spaceBetween: 50,
		loop: false,

		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
			dynamicBullets: true,
			clickable: true,
		},
	});

</script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>