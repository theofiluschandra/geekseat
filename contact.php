<?php
/* Template Name: Contact */
get_header();
?>

<div class="page-contact page-padding page-body">
    <div class="section-wrapper">
        <div class="row-wrapper row-1 mg-side-auto w-50 banner-internal">
            <div class="column-wrapper">
                <div class="section-title-wrapper position-relative">
                    <h3 class="section-title"><?php echo esc_html(get_the_title()); ?></h3>
                </div>
            </div>
        </div>

        <div class="row-wrapper mg-side-auto w-50 bg-white row-form-wrapper ">
            <div class="form-wrapper">
                <?php echo do_shortcode('[contact-form-7 id="fe07b61" title="Contact Form"]') ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>