<?php

/**
 * Hero Block template.
 *
 * @param array $block The block settings and attributes.
 * @param bool  $is_preview True during the admin preview.
 */

// Show a preview image in the Gutenberg editor only
if (!empty($is_preview)) :
?>




	<!-- Begin Slider Area -->
	<div class="slider-area">

		<!-- Main Slider -->
		<div class="swiper-container main-slider-2 swiper-arrow with-bg_white">
			<div class="swiper-wrapper">
				<div class="swiper-slide animation-style-02">
					<div class="slide-inner style-2" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/slider/bg/2-1.jpg">
						<div class="slide-content text-black">
							<h2 class="title">Indoor <br> Planters</h2>
							<p class="short-desc">Pronia, With 100% Natural, Organic & Plant Shop.</p>
							<div class="btn-wrap">
								<a class="btn btn-custom-size xl-size btn-pronia-primary" href="shop.html">Discover Now</a>
							</div>
						</div>
						<div class="slide-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slide-img/2-1-960x741.jpg" alt="Slide Image">
							<div class="slide-count">
								<span class="data-count" data-count="01">
									<span class="forward-slash">/</span>
									<span>03</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide animation-style-02">
					<div class="slide-inner style-2" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/slider/bg/2-1.jpg">
						<div class="slide-content text-black">
							<h2 class="title">Indoor <br> Planters</h2>
							<p class="short-desc">Pronia, With 100% Natural, Organic & Plant Shop.</p>
							<div class="btn-wrap">
								<a class="btn btn-custom-size xl-size btn-pronia-primary" href="shop.html">Discover Now</a>
							</div>
						</div>
						<div class="slide-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slide-img/2-2-960x741.jpg" alt="Slide Image">
							<div class="slide-count">
								<span class="data-count" data-count="02">
									<span class="forward-slash">/</span>
									<span>03</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide animation-style-02">
					<div class="slide-inner style-2" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/slider/bg/2-1.jpg">
						<div class="slide-content text-black">
							<h2 class="title">Indoor <br> Planters</h2>
							<p class="short-desc">Pronia, With 100% Natural, Organic & Plant Shop.</p>
							<div class="btn-wrap">
								<a class="btn btn-custom-size xl-size btn-pronia-primary" href="shop.html">Discover Now</a>
							</div>
						</div>
						<div class="slide-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slide-img/2-3-960x741.jpg" alt="Slide Image">
							<div class="slide-count">
								<span class="data-count" data-count="03">
									<span class="forward-slash">/</span>
									<span>03</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Add Arrows -->
			<div class="slide-button-wrap">
				<div class="slide-button-prev">
					<i class="pe-7s-angle-left"></i>
				</div>
				<div class="slide-button-next">
					<i class="pe-7s-angle-right"></i>
				</div>
			</div>
		</div>

	</div>




<?php
	return;
endif;
?>

<?php
$slides = get_field('slides');
$static_bg_url = get_template_directory_uri() . '/assets/images/slider/bg/2-1.jpg';
?>

<?php if (!empty($slides)): 
    // Get the background image ID from URL
    $static_bg_id = attachment_url_to_postid($static_bg_url);
    
    // If we have an ID, get optimized image
    if ($static_bg_id) {
        $bg_image = wp_get_attachment_image_src($static_bg_id, 'full');
        $bg_image_mobile = wp_get_attachment_image_src($static_bg_id, array(767, 500));
        $static_bg_url = $bg_image[0];
    }
?>
    <!-- Preload the hero background image -->
    <link rel="preload" 
          as="image" 
          href="<?php echo esc_url($static_bg_url); ?>"
          media="(min-width: 768px)">
    
    <?php if (isset($bg_image_mobile)): ?>
        <link rel="preload" 
              as="image" 
              href="<?php echo esc_url($bg_image_mobile[0]); ?>"
              media="(max-width: 767px)">
    <?php endif; ?>

    <style>
        .slider-area {
            background-image: url('<?php echo esc_url($static_bg_url); ?>');
            background-size: cover;
            background-position: center;
            background-color: #f8f8f8; /* Fallback color while image loads */
        }
        
        @media (max-width: 767px) {
            .slider-area {
                background-image: url('<?php echo esc_url($bg_image_mobile[0] ?? $static_bg_url); ?>');
            }
        }
    </style>

    <div class="slider-area">
        <div class="swiper-container main-slider-2 swiper-arrow with-bg_white">
            <div class="swiper-wrapper">
                <?php foreach ($slides as $index => $slide):
                    $content = $slide['content_group'];
                    $images = $slide['image_group'];
                    $count = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                    $total = str_pad(count($slides), 2, '0', STR_PAD_LEFT);
                ?>
                    <div class="swiper-slide animation-style-02">
                        <div class="slide-inner style-2">
                            <div class="slide-content text-black">
                                <?php if (!empty($content['sub_title'])): ?>
                                    <span class="sub-title"><?php echo esc_html($content['sub_title']); ?></span>
                                <?php endif; ?>

                                <?php if (!empty($content['title'])): ?>
                                    <h1 class="title"><?php echo nl2br(esc_html($content['title'])); ?></h1>
                                <?php endif; ?>

                                <?php if (!empty($content['description'])): ?>
                                    <p class="short-desc"><?php echo esc_html($content['description']); ?></p>
                                <?php endif; ?>

                                <?php if (!empty($content['button_link'])):
                                    $link = $content['button_link'];
                                ?>
                                    <div class="btn-wrap">
                                        <a class="btn btn-custom-size xl-size btn-pronia-primary"
                                           href="<?php echo esc_url($link['url']); ?>"
                                           target="<?php echo esc_attr($link['target'] ?? '_self'); ?>">
                                           <?php echo esc_html($link['title']); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="slide-img">
                                <?php if (!empty($images['slide_image'])):
                                    $image_id = $images['slide_image']['ID'];
                                    $image = wp_get_attachment_image_src($image_id, array(960, 741));
                                ?>
                                    <img 
                                        src="<?php echo esc_url($image[0]); ?>"
                                        srcset="<?php echo wp_get_attachment_image_srcset($image_id); ?>"
                                        sizes="(max-width: 767px) 100vw, 960px"
                                        width="960"
                                        height="741"
                                        alt="<?php echo esc_attr($images['slide_image']['alt'] ?? 'Slide Image'); ?>"
                                        <?php echo $index === 0 ? 'fetchpriority="high"' : 'loading="lazy" decoding="async"'; ?>>
                                <?php endif; ?>
                                <div class="slide-count">
                                    <span class="data-count" data-count="<?php echo $count; ?>">
                                        <span class="forward-slash">/</span>
                                        <span><?php echo $total; ?></span>
                                    </span>
                                </div>
                            </div>
                        </div> <!-- .slide-inner -->
                    </div> <!-- .swiper-slide -->
                <?php endforeach; ?>
            </div> <!-- .swiper-wrapper -->

            <!-- Add Arrows -->
            <div class="slide-button-wrap">
                <div class="slide-button-prev">
                    <i class="pe-7s-angle-left"></i>
                </div>
                <div class="slide-button-next">
                    <i class="pe-7s-angle-right"></i>
                </div>
            </div>
        </div> <!-- .swiper-container -->
    </div> <!-- .slider-area -->

<?php endif; ?>

