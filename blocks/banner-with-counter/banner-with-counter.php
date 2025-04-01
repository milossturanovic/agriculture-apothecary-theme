<?php

/**
 * Banenr with coutner section template.
 *
 * @param array $block The block settings and attributes.
 * @param bool  $is_preview True during the admin preview.
 */

// Show a preview image in the Gutenberg editor
if (!empty($is_preview)) {
?>






<!-- Begin Product Area -->
<div class="product-area section-space-top-100 section-space-bottom-90">
    <!-- ... existing product code ... -->
</div>
<!-- Product Area End Here -->

<!-- Begin Banner Area -->
<div class="banner-with-counter">
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-boxshadow">
                        <div class="banner-item" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/banner/3-1-1208x542.jpg">
                            <div class="popup-btn">
                                <a class="popup-vimeo wave-btn" href="https://player.vimeo.com/video/172601404?autoplay=1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="icon">
                                        <i class="pe-7s-play"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="counter-area">
        <div class="container">
            <h2 class="counter-title">Lorem ipsum dolor sit amet, consectetur adipisicing <br> elit, sed do
                <span>eiusmod tempor</span> incididunt.
            </h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="counter-item">
                        <div class="count-wrap">
                            <h3 class="count mb-0" data-counterup-time="500">150</h3>
                            <span class="prefix">+</span>
                        </div>
                        <h4 class="count-title mb-0">Projects</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="counter-item">
                        <div class="count-wrap">
                            <h3 class="count mb-0" data-counterup-time="1000">359</h3>
                            <span class="prefix">+</span>
                        </div>
                        <h4 class="count-title mb-0">Clients</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 pt-4 pt-md-0">
                    <div class="counter-item">
                        <div class="count-wrap">
                            <h3 class="count mb-0" data-counterup-time="1500">251</h3>
                            <span class="prefix">+</span>
                        </div>
                        <h4 class="count-title mb-0">Rating</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 pt-4 pt-lg-0">
                    <div class="counter-item">
                        <div class="count-wrap">
                            <h3 class="count mb-0" data-counterup-time="2000">110</h3>
                            <span class="prefix">+</span>
                        </div>
                        <h4 class="count-title mb-0">Award</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->







<?php
    return;
}

// Get ACF fields
$heading = get_field('hero_heading') ?: 'Default Heading';
$subheading = get_field('hero_subheading') ?: 'Default Subheading';
$background = get_field('hero_background') ?: get_template_directory_uri() . "/assets/images/hero-slider/hero-slider-07.jpg";
?>



<!-- Begin Product Area -->
<div class="product-area section-space-top-100 section-space-bottom-90">
    <!-- ... existing product code ... -->
</div>
<!-- Product Area End Here -->

<!-- Begin Banner Area -->
<div class="banner-with-counter">
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-boxshadow">
                        <div class="banner-item" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/banner/3-1-1208x542.jpg">
                            <div class="popup-btn">
                                <a class="popup-vimeo wave-btn" href="https://player.vimeo.com/video/172601404?autoplay=1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="icon">
                                        <i class="pe-7s-play"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="counter-area">
        <div class="container">
            <h2 class="counter-title">Lorem ipsum dolor sit amet, consectetur adipisicing <br> elit, sed do
                <span>eiusmod tempor</span> incididunt.
            </h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="counter-item">
                        <div class="count-wrap">
                            <h3 class="count mb-0" data-counterup-time="500">150</h3>
                            <span class="prefix">+</span>
                        </div>
                        <h4 class="count-title mb-0">Projects</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="counter-item">
                        <div class="count-wrap">
                            <h3 class="count mb-0" data-counterup-time="1000">359</h3>
                            <span class="prefix">+</span>
                        </div>
                        <h4 class="count-title mb-0">Clients</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 pt-4 pt-md-0">
                    <div class="counter-item">
                        <div class="count-wrap">
                            <h3 class="count mb-0" data-counterup-time="1500">251</h3>
                            <span class="prefix">+</span>
                        </div>
                        <h4 class="count-title mb-0">Rating</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 pt-4 pt-lg-0">
                    <div class="counter-item">
                        <div class="count-wrap">
                            <h3 class="count mb-0" data-counterup-time="2000">110</h3>
                            <span class="prefix">+</span>
                        </div>
                        <h4 class="count-title mb-0">Award</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->
