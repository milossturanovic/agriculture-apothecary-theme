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





    <div class="about-area section-space-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <h2 class="about-title">Our <span>Story</span></h2>
                        <p class="about-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum. Sed ut perspiciatis</p>

                    </div>
                </div>
            </div>
        </div>
    </div>





<?php
    return;
}

$data = get_field('about_us_section');
$title_part_1 = $data['title_part_1'] ?? '';
$title_highlight = $data['title_highlight'] ?? '';
$description = $data['description'] ?? '';
?>


<div class="about-area section-space-top-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content">
                    <?php if ($title_part_1 || $title_highlight): ?>
                        <h2 class="about-title">
                            <?php echo esc_html($title_part_1); ?>
                            <?php if ($title_highlight): ?>
                                <span><?php echo esc_html($title_highlight); ?></span>
                            <?php endif; ?>
                        </h2>
                    <?php endif; ?>

                    <?php if ($description): ?>
                        <p class="about-desc"><?php echo nl2br(esc_html($description)); ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>