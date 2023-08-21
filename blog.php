<?php
/* Template Name: Blog */
get_header();
?>

<div class="page-blog page-padding page-body">
    <div class="section-wrapper">
        <div class="row-wrapper row-1 mg-side-auto w-50 banner-internal">
            <div class="column-wrapper">
                <div class="section-title-wrapper position-relative">
                    <h3 class="section-title"><?php echo esc_html(get_the_title()); ?></h3>
                </div>
            </div>
        </div>

        <div class="row-wrapper row-blog-wrapper w-70 mg-side-auto">
            <div class="blog-wrapper d-grid">
                <?php
                $postPerPage = 9;
                $args = array(
                    'order'             => 'DESC',
                    'posts_per_page' => $postPerPage
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $ID = get_the_ID();
                        $blog_url = get_permalink($ID);
                        $post_date = get_the_date('F j, Y');
                ?>
                        <div class="blog-card">
                            <a href="<?php echo $blog_url ?>" class="blog-outter">
                                <div class="blog-content">
                                    <div class="blog-image">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="blog-content-wrapper">
                                        <div class="blog-title"><?php the_title(); ?></div>
                                        <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>