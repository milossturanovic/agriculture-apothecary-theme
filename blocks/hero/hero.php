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
// Bail if accessed directly
if (!defined('ABSPATH')) {
	return;
}

// Get ACF groups
$content    = get_field('hero_content');
$background = get_field('hero_background');

// Get content values
$heading     = $content['heading'] ?? 'Default Heading';
$subheading  = $content['subheading'] ?? 'Default Subheading';
$paragraph   = $content['paragraph'] ?? 'Default paragraph text here.';
$button      = $content['button'] ?? null;

// Get button values
$button_label  = $button['title'] ?? '';
$button_url    = $button['url'] ?? '';
$button_target = $button['target'] ?? '_self';

// Get background image
$image           = $background['background_url'] ?? null;
$background_url  = !empty($image['url']) ? $image['url'] : null;
$image_alt       = !empty($image['alt']) ? $image['alt'] : 'Hero background';
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