<?php
/* Template Name: Contact Form */
get_header();

?>






<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="<?php echo get_template_directory_uri() ?>/assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading"><?php the_title(); ?></h2>
                        <ul>
                            <li>
                                <a href="/">Početna</a>
                            </li>
                            <li><?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php
    $contact = get_field('o_nama_contact_section');
    $title = $contact['title'] ?? '';
    $description = $contact['description'] ?? '';
    $phone = $contact['phone'] ?? '';
    $email = $contact['email'] ?? '';
    $address = $contact['address'] ?? '';
    ?>

    <div class="contact-form-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="contact-info text-white" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/contact/1-1-370x500.jpg">

                            <?php if ($title): ?>
                                <h2 class="contact-title"><?php echo esc_html($title); ?></h2>
                            <?php endif; ?>

                            <?php if ($description): ?>
                                <p class="contact-desc"><?php echo esc_html($description); ?></p>
                            <?php endif; ?>

                            <ul class="contact-list">
                                <?php if ($phone): ?>
                                    <?php
                                    // Clean phone number for tel: link
                                    $formatted_phone = preg_replace('/\D+/', '', $phone);
                                    if (strpos($formatted_phone, '0') === 0) {
                                        $formatted_phone = '+382' . substr($formatted_phone, 1);
                                    }
                                    ?>
                                    <li>
                                        <i class="pe-7s-call"></i>
                                        <a href="tel:<?php echo esc_attr($formatted_phone); ?>">
                                            <?php echo esc_html($phone); ?>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if ($email): ?>
                                    <li>
                                        <i class="pe-7s-mail"></i>
                                        <a href="mailto:<?php echo antispambot($email); ?>">
                                            <?php echo antispambot($email); ?>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if ($address): ?>
                                    <li>
                                        <i class="pe-7s-map-marker"></i>
                                        <span><?php echo esc_html($address); ?></span>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <div class="contact-form">
                            <?php echo do_shortcode('[forminator_form id="200"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="contact-with-map">
        <div class="contact-map">


            <iframe class="contact-map-size"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2928.470295634771!2d18.954466812313125!3d42.77840670844801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134da84e86857cfb%3A0xea2862de99bf4a6!2s25%20Narodne%20omladine%2C%20Niksic%2C%20Montenegro!5e0!3m2!1sen!2s!4v1744756697374!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->








<?php get_footer(); ?>