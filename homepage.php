<?php
/* Template Name: Homepage */
get_header();
?>

<div class="section-1">
    <div class="row-wrapper d-grid page-padding">
        <div class="column-wrapper col-1 position-relative">
            <div class="content-wrapper">
                <div class="upper-card">
                    <div class="photo-wrapper">
                        <img src="https://i1.wp.com/hcigroup.co.id/theofilus/wp-content/uploads/2023/08/photo_2023-08-21-19.45.37.jpeg" alt="Photo Personal">
                    </div>
                    <div class="name-pos-wrapper position-relative">
                        <div class="name-wrapper position-relative">Theofilus Chandra</div>
                        <div class="position-wrapper">Web Developer</div>
                    </div>
                </div>
                <div class="social-wrapper">
                    <div class="social-item social-facebook">
                        <a href="">
                            <i data-feather="facebook"></i>
                        </a>
                    </div>
                    <div class="social-item social-twitter">
                        <a href="">
                            <i data-feather="twitter"></i>
                        </a>
                    </div>
                    <div class="social-item social-linkedin">
                        <a href="">
                            <i data-feather="linkedin"></i>
                        </a>
                    </div>
                    <div class="social-item social-instagram">
                        <a href="">
                            <i data-feather="instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-wrapper col-2">
            <div class="content-wrapper">
                <div class="col-title-wrapper">
                    <h1 class="col-title">Hello</h1>
                    <p class="col-subtitle">Here's who I am & what I do</p>
                </div>
                <div class="col-button-wrapper">
                    <a href="<?php echo get_home_url(); ?>/resume" class="btn-resume">Resume</a>
                    <a href="<?php echo get_home_url(); ?>/project" class="btn-project">Projects</a>
                </div>
                <div class="col-desc-wrapper">
                    <p class="col-desc">
                        👋 Greetings! I'm Theofilus Chandra, a seasoned website developer with over 3 years of hands-on experience in the field. My passion lies in the intricate world of WordPress development, where I've honed my skills to create captivating online experiences. I specialize in three distinct approaches: harnessing the versatility of Elementor and Divi, as well as crafting unique custom themes. Embracing the art of coding, I seamlessly weave CSS and custom HTML to ensure every project is tailored to perfection. Let's connect and explore the endless possibilities at the crossroads of creativity and technology! 💻🌐 #WebDevelopment #WordPressWizard #FrontEndMagic
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>