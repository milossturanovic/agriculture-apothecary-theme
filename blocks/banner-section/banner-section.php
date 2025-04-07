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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
            </div>
        </div>
    </div>





<?php
    return;
}

$left_banner = get_field('left_banner');
$top_right_banner = get_field('top_right_banner');
$bottom_right_banner = get_field('bottom_right_banner');
?>



<div class="banner-area banner-style-2 section-space-top-100">
    <div class="container">
        <div class="row g-y-30">
           <!-- Left banner -->
    <div class="col-md-4">
        <?php if ($left_banner): ?>
            <div class="banner-item img-hover-effect">
                <div class="banner-img img-cover-banner banner-overlay-wrapper">
                <div class="banner-overlay"></div>
                    <?php
                    $image = $left_banner['image'];
                    if (!empty($image) && is_array($image) && !empty($image['url'])):
                    ?>
                        <img
                            class="img-cover-banner"
                            src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt'] ?? 'Banner Image'); ?>">
                    <?php else: ?>
                        <img
                            class="img-cover-banner"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-1-570x500.jpg"
                            alt="Fallback Banner Image">
                    <?php endif; ?>
                </div>
                <div class="banner-content text-position-left">
                    <?php if (!empty($left_banner['subheading'])): ?>
                        <span class="collection"><?php echo esc_html($left_banner['subheading']); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($left_banner['title'])): ?>
                        <h3 class="title"><?php echo esc_html($left_banner['title']); ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($left_banner['button_link'])):
                        $link = $left_banner['button_link']; ?>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size btn-pronia-primary"
                               href="<?php echo esc_url($link['url']); ?>"
                               target="<?php echo esc_attr($link['target'] ?? '_self'); ?>">
                                <?php echo esc_html($link['title']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Top right banner -->
    <div class="col-md-4">
        <?php if ($top_right_banner): ?>
            <div class="banner-item img-hover-effect">
                <div class="banner-img img-cover-banner banner-overlay-wrapper">
                <div class="banner-overlay"></div>
                    <?php
                    $image_field = $top_right_banner['image'];
                    if (is_array($image_field) && !empty($image_field['url'])) {
                        $image_url = $image_field['url'];
                        $image_alt = $image_field['alt'] ?? 'Banner Image';
                    } elseif (is_numeric($image_field)) {
                        $image_obj = wp_get_attachment_image_src($image_field, 'full');
                        $image_url = $image_obj[0] ?? '';
                        $image_alt = get_post_meta($image_field, '_wp_attachment_image_alt', true);
                    }
                    ?>
                    <?php if (!empty($image_url)): ?>
                        <img class="img-cover-banner" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                    <?php else: ?>
                        <img class="img-cover-banner" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-2-570x235.jpg" alt="Fallback Banner Image">
                    <?php endif; ?>
                </div>
                <div class="banner-content text-position-left">
                    <?php if (!empty($top_right_banner['subheading'])): ?>
                        <span class="collection"><?php echo esc_html($top_right_banner['subheading']); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($top_right_banner['title'])): ?>
                        <h3 class="title"><?php echo esc_html($top_right_banner['title']); ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($top_right_banner['button_link'])):
                        $link = $top_right_banner['button_link']; ?>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size sm-size btn-pronia-primary"
                               href="<?php echo esc_url($link['url']); ?>"
                               target="<?php echo esc_attr($link['target'] ?? '_self'); ?>">
                                <?php echo esc_html($link['title']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bottom right banner -->
    <div class="col-md-4">
        <?php if ($bottom_right_banner): ?>
            <div class="banner-item img-hover-effect">
            <div class="banner-img img-cover-banner banner-overlay-wrapper">
            <div class="banner-overlay"></div>
                    <?php
                    $image = $bottom_right_banner['image'];
                    if (!empty($image) && is_array($image) && !empty($image['url'])):
                    ?>
                        <img class="img-cover-banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?? 'Banner Image'); ?>">
                    <?php else: ?>
                        <img class="img-cover-banner" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-3-570x235.jpg" alt="Fallback Banner Image">
                    <?php endif; ?>
                </div>
                <div class="banner-content text-position-left">
                    <?php if (!empty($bottom_right_banner['subheading'])): ?>
                        <span class="collection"><?php echo esc_html($bottom_right_banner['subheading']); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($bottom_right_banner['title'])): ?>
                        <h3 class="title"><?php echo esc_html($bottom_right_banner['title']); ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($bottom_right_banner['button_link'])):
                        $link = $bottom_right_banner['button_link']; ?>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size sm-size btn-pronia-primary"
                               href="<?php echo esc_url($link['url']); ?>"
                               target="<?php echo esc_attr($link['target'] ?? '_self'); ?>">
                                <?php echo esc_html($link['title']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
        </div>
    </div>
</div>