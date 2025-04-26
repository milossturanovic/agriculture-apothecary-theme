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

;
?>



<!-- Begin Product Area -->
<div class="product-area section-space-top-100 section-space-bottom-90">
    <!-- ... existing product code ... -->
</div>
<!-- Product Area End Here -->

<?php
$data = get_field('banner_with_counter');
$title = $data['title'] ?? '';
$counter_items = $data['counter_items'] ?? [];
$video_link = $data['video_link'] ?? '';
$background_image = $data['background_image'] ?? '';
?>

<div class="banner-with-counter">
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?php if (!empty($video_link)): ?>
                        <div class="banner-boxshadow">
                            <div class="banner-item" data-bg-image="<?php 
                                echo !empty($background_image['url']) 
                                    ? esc_url($background_image['url']) 
                                    : get_template_directory_uri() . '/assets/images/banner/3-1-1208x542.jpg'; 
                            ?>">
                                <div class="popup-btn">
                                    <a class="popup-vimeo wave-btn" href="<?php echo esc_url($video_link); ?>">
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
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <div class="counter-area">
        <div class="container">
            <?php if (!empty($title)): ?>
                <h2 class="counter-title"><?php echo nl2br(esc_html($title)); ?></h2>
            <?php endif; ?>

            <?php if (!empty($counter_items)): ?>
                <div class="row">
                    <?php foreach ($counter_items as $index => $item): ?>
                        <div class="col-lg-3 col-md-4 col-6<?php echo $index > 1 ? ' pt-4 pt-md-0' : ''; ?>">
                            <div class="counter-item">
                                <div class="count-wrap">
                                    <h3 class="count mb-0" data-counterup-time="1000"><?php echo esc_html($item['count_number']); ?></h3>
                                    <span class="prefix">+</span>
                                </div>
                                <h4 class="count-title mb-0"><?php echo esc_html($item['count_title']); ?></h4>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>