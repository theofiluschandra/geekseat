<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Personal_Site
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', get_post_type());
	?>

		<div class="post-navigation-wrapper w-70 mg-side-auto">
		<?php
		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'personal-site') . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'personal-site') . '</span> <span class="nav-title">%title</span>',
			)
		);

	endwhile; // End of the loop.
		?>
		</div>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
