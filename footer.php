<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rekos_Agency
 */

?>





<!-- Begin Footer Area -->
<footer class="footer-area" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/footer/bg/1-1920x465.jpg">
    <div class="footer-top section-space-top-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget-item">
                        <div class="footer-widget-logo">
                            <?php
                            $logo = get_field('logo', 'option');
                            ?>

                            <?php if ($logo): ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" width="200">
                                </a>
                            <?php endif; ?>

                        </div>

                        <?php
                        $footer_paragraph = get_field('footer_paragraph', 'option');
                        $facebook_url     = get_field('facebook_url', 'option');
                        $instagram_url    = get_field('instagram_url', 'option');
                        ?>




                        <?php if ($footer_paragraph): ?>
                            <p class="footer-widget-desc"><?php echo wp_kses_post($footer_paragraph); ?></p>
                        <?php endif; ?>

                        <div class="social-link with-border">
                            <ul>
                                <?php if ($facebook_url): ?>
                                    <li>
                                        <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener"
                                            data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away"
                                            data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if ($instagram_url): ?>
                                    <li>
                                        <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener"
                                            data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away"
                                            data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>




                    </div>
                </div>

                <div class="col-lg-2 col-md-4 pt-40">
                    <div class="footer-widget-item">
                        <h3 class="footer-widget-title">Linkovi stranica</h3>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_1',
                            'menu_class'     => 'footer-widget-list-item',
                            'container'      => false,
                        ));
                        ?>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 pt-40">
                    <div class="footer-widget-item">
                        <h3 class="footer-widget-title">Korisni linkovi</h3>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_2',
                            'menu_class'     => 'footer-widget-list-item',
                            'container'      => false,
                        ));
                        ?>
                    </div>
                </div>


                <?php
                $mobile_phone = get_field('mobile_phone', 'option');
                $adress       = get_field('adress', 'option');
                $telephone    = get_field('telephone', 'option');
                $pib          = get_field('pib', 'option');
                $email        = get_field('email', 'option'); // You need to create this field

                // Format phone numbers
                function format_phone($number)
                {
                    $clean = preg_replace('/\D+/', '', $number); // remove non-digits
                    if (strpos($clean, '0') === 0) {
                        return '+382' . substr($clean, 1);
                    }
                    return $clean;
                }

                ?>

                <div class="col-lg-3 pt-40">
                    <div class="footer-contact-info">
                        <h3 class="footer-widget-title">Imate pitanja? Pozovite nas </h3>

                        <?php if ($mobile_phone): ?>
                            <a class="number" href="tel:<?php echo esc_attr(format_phone($mobile_phone)); ?>">
                                <?php echo esc_html($mobile_phone); ?>
                            </a>
                        <?php endif; ?>

                        <div class="address">
                            <ul>
                                <?php if ($adress): ?>
                                    <li>Adresa: <?php echo esc_html($adress); ?></li>
                                <?php endif; ?>

                                <?php if ($telephone): ?>
                                    <li>Tel: <a href="tel:<?php echo esc_attr(format_phone($telephone)); ?>">
                                            <?php echo esc_html($telephone); ?>
                                        </a></li>
                                <?php endif; ?>

                                <?php if ($email): ?>
                                    <li>Email: <a href="mailto:<?php echo esc_attr($email); ?>">
                                            <?php echo esc_html($email); ?>
                                        </a></li>
                                <?php endif; ?>

                                <?php if ($pib): ?>
                                    <li>PIB: <?php echo esc_html($pib); ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <span class="copyright-text">
                            © <?php echo date('Y'); ?> All rights reserved | by
                            <a href="milossturanovic.com" rel="noopener" target="_blank">Milos Sturanovic</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->

<?php wp_footer(); ?>