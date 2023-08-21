<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Personal_Site
 */

?>

<div class="single-wrapper single-post-page">
	<article class="single-post-lho" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post-thumbnail-wrapper">
			<?php personal_site_post_thumbnail(); ?>
		</div>
		<div class="post-content-wrapper w-70 mg-side-auto d-grid">
			<header class="entry-header">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title">', '</h1>');
				else :
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;
				?>

				<div class="blog-date-wrapper">
					<?php
					$post_date = get_the_date('F j, Y');
					?>
					<div class="blog-date"><?php echo $post_date ?></div>
				</div>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'personal-site'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post(get_the_title())
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'personal-site'),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		</div>

	</article><!-- #post-<?php the_ID(); ?> -->
</div>