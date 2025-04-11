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
            <h2 class="section-title">Šta kažu naši kupci</h2>
                <p class="section-desc mb-0">Povjerenje koje godinama gradimo sa našim kupcima ogleda se u njihovim riječima.  
                Zadovoljstvo uslugom, kvalitet proizvoda i iskrena preporuka su ono što nas izdvaja.
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

// ACF Fields here
$data = get_field('testimonial_section');
$title = $data['title'] ?? '';
$description = $data['section_description'] ?? '';
$testimonials = $data['testimonials'] ?? [];
?>

<!-- Begin Testimonial Area -->
<div class="testimonial-area section-space-top-90 section-space-bottom-95">
    <div class="container-fluid">
        <div class="testimonial-bg" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/bg/1-1-1820x443.jpg">
            <div class="section-title-wrap">
                <?php if (!empty($title)): ?>
                    <h2 class="section-title"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
                <?php if (!empty($description)): ?>
                    <p class="section-desc mb-0"><?php echo esc_html($description); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <?php if (!empty($testimonials)): ?>
        <div class="container custom-space">
            <div class="swiper-container testimonial-slider with-bg">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div class="swiper-slide testimonial-item">
                            <div class="user-info mb-3">
                                <div class="user-content text-charcoal">
                                    <?php if (!empty($testimonial['user_name'])): ?>
                                        <h4 class="user-name mb-1"><?php echo esc_html($testimonial['user_name']); ?></h4>
                                    <?php endif; ?>
                                    <?php if (!empty($testimonial['user_occupation'])): ?>
                                        <span class="user-occupation"><?php echo esc_html($testimonial['user_occupation']); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if (!empty($testimonial['user_comment'])): ?>
                                <p class="user-comment mb-6"><?php echo esc_html($testimonial['user_comment']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination without-absolute"></div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- Testimonial Area End Here -->