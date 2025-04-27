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
                                // Get image dimensions
                                $img_width = 570; // Desired width
                                $img_height = 500; // Desired height
                                
                                // Get the image ID
                                $image_id = $image['ID'];
                                
                                // Generate srcset
                                $img_srcset = wp_get_attachment_image_srcset($image_id);
                                $img_sizes = '(max-width: 767px) 100vw, (max-width: 991px) 50vw, 33vw';
                                
                                // Get optimized image URL
                                $optimized_image = wp_get_attachment_image_src($image_id, array($img_width, $img_height));
                                
                                // Get WebP version if available
                                $webp_url = str_replace(array('.jpg', '.jpeg', '.png'), '.webp', $optimized_image[0]);
                                $webp_exists = file_exists(str_replace(home_url(), ABSPATH, $webp_url));
                            ?>
                                <picture>
                                    <?php if ($webp_exists): ?>
                                        <source
                                            srcset="<?php echo esc_url($webp_url); ?>"
                                            type="image/webp"
                                            sizes="<?php echo esc_attr($img_sizes); ?>">
                                    <?php endif; ?>
                                    <img
                                        class="img-cover-banner"
                                        src="<?php echo esc_url($optimized_image[0]); ?>"
                                        srcset="<?php echo esc_attr($img_srcset); ?>"
                                        sizes="<?php echo esc_attr($img_sizes); ?>"
                                        width="<?php echo esc_attr($img_width); ?>"
                                        height="<?php echo esc_attr($img_height); ?>"
                                        loading="lazy"
                                        alt="<?php echo esc_attr($image['alt'] ?? 'Banner Image'); ?>">
                                </picture>
                            <?php else: ?>
                                <img
                                    class="img-cover-banner"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-1-570x500.jpg"
                                    width="570"
                                    height="500"
                                    loading="lazy"
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
                            $img_width = 570; // Desired width
                            $img_height = 500; // Desired height
                            
                            if (is_array($image_field) && !empty($image_field['url'])) {
                                $image_id = $image_field['ID'];
                                $image_url = $image_field['url'];
                                $image_alt = $image_field['alt'] ?? 'Banner Image';
                            } elseif (is_numeric($image_field)) {
                                $image_id = $image_field;
                                $image_obj = wp_get_attachment_image_src($image_field, array($img_width, $img_height));
                                $image_url = $image_obj[0] ?? '';
                                $image_alt = get_post_meta($image_field, '_wp_attachment_image_alt', true);
                            }
                            
                            if (!empty($image_id)):
                                // Generate srcset
                                $img_srcset = wp_get_attachment_image_srcset($image_id);
                                $img_sizes = '(max-width: 767px) 100vw, (max-width: 991px) 50vw, 33vw';
                                
                                // Get optimized image
                                $optimized_image = wp_get_attachment_image_src($image_id, array($img_width, $img_height));
                                
                                // Get WebP version if available
                                $webp_url = str_replace(array('.jpg', '.jpeg', '.png'), '.webp', $optimized_image[0]);
                                $webp_exists = file_exists(str_replace(home_url(), ABSPATH, $webp_url));
                            ?>
                                <picture>
                                    <?php if ($webp_exists): ?>
                                        <source
                                            srcset="<?php echo esc_url($webp_url); ?>"
                                            type="image/webp"
                                            sizes="<?php echo esc_attr($img_sizes); ?>">
                                    <?php endif; ?>
                                    <img 
                                        class="img-cover-banner"
                                        src="<?php echo esc_url($optimized_image[0]); ?>"
                                        srcset="<?php echo esc_attr($img_srcset); ?>"
                                        sizes="<?php echo esc_attr($img_sizes); ?>"
                                        width="<?php echo esc_attr($img_width); ?>"
                                        height="<?php echo esc_attr($img_height); ?>"
                                        loading="lazy"
                                        alt="<?php echo esc_attr($image_alt); ?>">
                                </picture>
                            <?php else: ?>
                                <img
                                    class="img-cover-banner"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-2-570x235.jpg"
                                    width="570"
                                    height="500"
                                    loading="lazy"
                                    alt="Fallback Banner Image">
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
                                // Get image dimensions
                                $img_width = 570; // Desired width
                                $img_height = 500; // Desired height
                                
                                // Get the image ID
                                $image_id = $image['ID'];
                                
                                // Generate srcset
                                $img_srcset = wp_get_attachment_image_srcset($image_id);
                                $img_sizes = '(max-width: 767px) 100vw, (max-width: 991px) 50vw, 33vw';
                                
                                // Get optimized image
                                $optimized_image = wp_get_attachment_image_src($image_id, array($img_width, $img_height));
                                
                                // Get WebP version if available
                                $webp_url = str_replace(array('.jpg', '.jpeg', '.png'), '.webp', $optimized_image[0]);
                                $webp_exists = file_exists(str_replace(home_url(), ABSPATH, $webp_url));
                            ?>
                                <picture>
                                    <?php if ($webp_exists): ?>
                                        <source
                                            srcset="<?php echo esc_url($webp_url); ?>"
                                            type="image/webp"
                                            sizes="<?php echo esc_attr($img_sizes); ?>">
                                    <?php endif; ?>
                                    <img
                                        class="img-cover-banner"
                                        src="<?php echo esc_url($optimized_image[0]); ?>"
                                        srcset="<?php echo esc_attr($img_srcset); ?>"
                                        sizes="<?php echo esc_attr($img_sizes); ?>"
                                        width="<?php echo esc_attr($img_width); ?>"
                                        height="<?php echo esc_attr($img_height); ?>"
                                        loading="lazy"
                                        alt="<?php echo esc_attr($image['alt'] ?? 'Banner Image'); ?>">
                                </picture>
                            <?php else: ?>
                                <img
                                    class="img-cover-banner"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/2-3-570x235.jpg"
                                    width="570"
                                    height="500"
                                    loading="lazy"
                                    alt="Fallback Banner Image">
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