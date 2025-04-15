<?php

/**
 * Brand area template.
 *
 * @param array $block The block settings and attributes.
 * @param bool  $is_preview True during the admin preview.
 */

// Show a preview image in the Gutenberg editor
if (!empty($is_preview)) {
?>



    <!-- Begin Brand Area -->
    <div class="brand-area section-space-bottom-100">
        <div class="container">
            <div class="brand-bg" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/brand/bg/1-1170x300.jpg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container brand-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/1-1.png" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/1-2.png" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/1-3.png" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/1-4.png" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/1-5.png" alt="Brand Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->





<?php
    return;
}


?>

<?php
$brands = get_field('brands');
?>

<div class="brand-area section-space-bottom-100">
    <div class="container">
        <div class="brand-bg" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/brand/bg/1-1170x300.jpg">
            <div class="row">
                <div class="col-lg-12">
                    <?php if (!empty($brands)): ?>
                        <div class="swiper-container brand-slider">
                            <div class="swiper-wrapper">
                                <?php foreach ($brands as $brand): ?>
                                    <?php
                                    $image = $brand['brand_image'] ?? null;
                                    $link = $brand['link'] ?? null;
                                    ?>
                                    <?php if (!empty($image) && !empty($link)): ?>
                                        <div class="swiper-slide">
                                            <a class="brand-item"
                                               href="<?php echo esc_url($link['url']); ?>"
                                               target="<?php echo esc_attr($link['target'] ?? '_self'); ?>"
                                               rel="noopener">
                                                <img src="<?php echo esc_url($image['url']); ?>"
                                                     alt="<?php echo esc_attr($image['alt'] ?? 'Brand Image'); ?>">
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brand Area End Here -->