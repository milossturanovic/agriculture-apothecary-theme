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
if ($slides): ?>
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
                <div class="slide-inner style-2" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/slider/bg/2-1.jpg">
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
                                <a class="btn btn-custom-size xl-size btn-pronia-primary" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
                                    <?php echo esc_html($link['title']); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="slide-img">
                        <?php if (!empty($images['slide_image'])): ?>
                            <img src="<?php echo esc_url($images['slide_image']['url']); ?>" alt="<?php echo esc_attr($images['slide_image']['alt']); ?>">
                        <?php endif; ?>
                        <div class="slide-count">
                            <span class="data-count" data-count="<?php echo $count; ?>">
                                <span class="forward-slash">/</span>
                                <span><?php echo $total; ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
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
<?php endif; ?>
