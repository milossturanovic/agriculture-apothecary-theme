<?php

/**
 * Banner section template.
 *
 * @param array $block The block settings and attributes.
 * @param bool  $is_preview True during the admin preview.
 */

// Show a preview image in the Gutenberg editor
if (!empty($is_preview)) {
?>





<div class="banner-area banner-style-2 section-space-top-100">
    <div class="container">
        <div class="row g-y-30">
            <div class="col-md-6">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-1-570x500.jpg" alt="Banner Image">
                    </div>
                    <div class="banner-content text-position-center">
                        <span class="collection">New Collection</span>
                        <h3 class="title">Indoore Plant</h3>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size btn-pronia-primary" href="shop.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-wrap row g-y-30">
                    <div class="col-12">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-2-570x235.jpg" alt="Banner Image">
                            </div>
                            <div class="banner-content text-position-left">
                                <span class="collection">Collection Of Cactus</span>
                                <h3 class="title">Plant Port</h3>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size sm-size btn-pronia-primary" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-3-570x235.jpg" alt="Banner Image">
                            </div>
                            <div class="banner-content text-position-left">
                                <span class="collection">Collection Of Cactus</span>
                                <h3 class="title">Hanging Pots</h3>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size sm-size btn-pronia-primary" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
    return;
}

// Get ACF fields
$heading = get_field('hero_heading') ?: 'Default Heading';
$subheading = get_field('hero_subheading') ?: 'Default Subheading';
$background = get_field('hero_background') ?: get_template_directory_uri() . "/assets/images/hero-slider/hero-slider-07.jpg";
?>



<div class="banner-area banner-style-2 section-space-top-100">
    <div class="container">
        <div class="row g-y-30">
            <div class="col-md-6">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-1-570x500.jpg" alt="Banner Image">
                    </div>
                    <div class="banner-content text-position-center">
                        <span class="collection">New Collection</span>
                        <h3 class="title">Indoore Plant</h3>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size btn-pronia-primary" href="shop.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-wrap row g-y-30">
                    <div class="col-12">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-2-570x235.jpg" alt="Banner Image">
                            </div>
                            <div class="banner-content text-position-left">
                                <span class="collection">Collection Of Cactus</span>
                                <h3 class="title">Plant Port</h3>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size sm-size btn-pronia-primary" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-3-570x235.jpg" alt="Banner Image">
                            </div>
                            <div class="banner-content text-position-left">
                                <span class="collection">Collection Of Cactus</span>
                                <h3 class="title">Hanging Pots</h3>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size sm-size btn-pronia-primary" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
