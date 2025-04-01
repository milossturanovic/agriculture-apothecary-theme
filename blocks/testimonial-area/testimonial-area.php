<?php

/**
 *
 * @param array $block The block settings and attributes.
 * @param bool  $is_preview True during the admin preview.
 */

// Show a preview image in the Gutenberg editor
if (!empty($is_preview)) {
?>




<!-- Begin Testimonial Area -->
<div class="testimonial-area section-space-top-90 section-space-bottom-95">
    <div class="container-fluid">
        <div class="testimonial-bg" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/bg/1-1-1820x443.jpg">
            <div class="section-title-wrap">
                <h2 class="section-title">What Say Client</h2>
                <p class="section-desc mb-0">Contrary to popular belief, Lorem Ipsum is not simply random
                    text. It has roots in a piece of classical Latin literature
                </p>
            </div>
        </div>
        <div class="container custom-space">
            <div class="swiper-container testimonial-slider with-bg">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial-item">
                        <div class="user-info mb-3">
                            <div class="user-shape-wrap">
                                <div class="user-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/user/1.png" alt="User Image">
                                </div>
                            </div>
                            <div class="user-content text-charcoal">
                                <h4 class="user-name mb-1">Phoenix Baker</h4>
                                <span class="user-occupation">Client</span>
                            </div>
                        </div>
                        <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                            tempo incididunt ut labore et dolore. magna
                        </p>
                    </div>
                    <div class="swiper-slide testimonial-item">
                        <div class="user-info mb-3">
                            <div class="user-shape-wrap">
                                <div class="user-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/user/2.png" alt="User Image">
                                </div>
                            </div>
                            <div class="user-content text-charcoal">
                                <h4 class="user-name mb-1">Phoenix Baker</h4>
                                <span class="user-occupation">Client</span>
                            </div>
                        </div>
                        <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                            tempo incididunt ut labore et dolore. magna
                        </p>
                    </div>
                    <div class="swiper-slide testimonial-item">
                        <div class="user-info mb-3">
                            <div class="user-shape-wrap">
                                <div class="user-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/user/3.png" alt="User Image">
                                </div>
                            </div>
                            <div class="user-content text-charcoal">
                                <h4 class="user-name mb-1">Phoenix Baker</h4>
                                <span class="user-occupation">Client</span>
                            </div>
                        </div>
                        <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                            tempo incididunt ut labore et dolore. magna
                        </p>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination without-absolute"></div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End Here -->




<?php
    return;
}

// Get ACF fields
$heading = get_field('hero_heading') ?: 'Default Heading';
$subheading = get_field('hero_subheading') ?: 'Default Subheading';
$background = get_field('hero_background') ?: get_template_directory_uri() . "/assets/images/hero-slider/hero-slider-07.jpg";
?>



<!-- Begin Testimonial Area -->
<div class="testimonial-area section-space-top-90 section-space-bottom-95">
    <div class="container-fluid">
        <div class="testimonial-bg" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/bg/1-1-1820x443.jpg">
            <div class="section-title-wrap">
                <h2 class="section-title">What Say Client</h2>
                <p class="section-desc mb-0">Contrary to popular belief, Lorem Ipsum is not simply random
                    text. It has roots in a piece of classical Latin literature
                </p>
            </div>
        </div>
        <div class="container custom-space">
            <div class="swiper-container testimonial-slider with-bg">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial-item">
                        <div class="user-info mb-3">
                            <div class="user-shape-wrap">
                                <div class="user-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/user/1.png" alt="User Image">
                                </div>
                            </div>
                            <div class="user-content text-charcoal">
                                <h4 class="user-name mb-1">Phoenix Baker</h4>
                                <span class="user-occupation">Client</span>
                            </div>
                        </div>
                        <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                            tempo incididunt ut labore et dolore. magna
                        </p>
                    </div>
                    <div class="swiper-slide testimonial-item">
                        <div class="user-info mb-3">
                            <div class="user-shape-wrap">
                                <div class="user-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/user/2.png" alt="User Image">
                                </div>
                            </div>
                            <div class="user-content text-charcoal">
                                <h4 class="user-name mb-1">Phoenix Baker</h4>
                                <span class="user-occupation">Client</span>
                            </div>
                        </div>
                        <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                            tempo incididunt ut labore et dolore. magna
                        </p>
                    </div>
                    <div class="swiper-slide testimonial-item">
                        <div class="user-info mb-3">
                            <div class="user-shape-wrap">
                                <div class="user-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/user/3.png" alt="User Image">
                                </div>
                            </div>
                            <div class="user-content text-charcoal">
                                <h4 class="user-name mb-1">Phoenix Baker</h4>
                                <span class="user-occupation">Client</span>
                            </div>
                        </div>
                        <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                            tempo incididunt ut labore et dolore. magna
                        </p>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination without-absolute"></div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End Here -->

