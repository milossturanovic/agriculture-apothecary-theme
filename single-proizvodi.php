<?php get_header(); ?>




<div class="single-product-area section-space-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- <div class="single-product-img">
                                <div class="swiper-container single-product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="assets/images/product/large-size/1-1-570x633.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="assets/images/product/large-size/1-1-570x633.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="assets/images/product/large-size/1-2-570x633.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="assets/images/product/large-size/1-2-570x633.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="assets/images/product/large-size/1-3-570x633.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="assets/images/product/large-size/1-3-570x633.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="assets/images/product/large-size/1-4-570x633.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="assets/images/product/large-size/1-4-570x633.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbs-arrow-holder">
                                    <div class="swiper-container single-product-thumbs">
                                        <div class="swiper-wrapper">
                                            <a href="javascript:void(0);" class="swiper-slide">
                                                <img class="img-full" src="assets/images/product/large-size/1-1-570x633.jpg" alt="Product Thumnail">
                                            </a>
                                            <a href="javascript:void(0);" class="swiper-slide">
                                                <img class="img-full" src="assets/images/product/large-size/1-2-570x633.jpg" alt="Product Thumnail">
                                            </a>
                                            <a href="javascript:void(0);" class="swiper-slide">
                                                <img class="img-full" src="assets/images/product/large-size/1-3-570x633.jpg" alt="Product Thumnail">
                                            </a>
                                            <a href="javascript:void(0);" class="swiper-slide">
                                                <img class="img-full" src="assets/images/product/large-size/1-4-570x633.jpg" alt="Product Thumnail">
                                            </a>
                                        </div>
                                       
                                        <div class=" thumbs-button-wrap d-none d-md-block">
                                            <div class="thumbs-button-prev">
                                                <i class="pe-7s-angle-left"></i>
                                            </div>
                                            <div class="thumbs-button-next">
                                                <i class="pe-7s-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                <?php
                $gallery = get_field('product_gallery');

                if ($gallery):
                    $has_multiple_images = count($gallery) > 1;
                ?>
                    <div class="single-product-img">
                        <div class="swiper-container single-product-slider">
                            <div class="swiper-wrapper">
                                <?php foreach ($gallery as $image): ?>
                                    <div class="swiper-slide">
                                        <a href="<?php echo esc_url($image['url']); ?>" class="single-img gallery-popup">
                                            <img src="<?php echo esc_url($image['sizes']['product_gallery_auto']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <?php if ($has_multiple_images): ?>
                            <div class="thumbs-arrow-holder">
                                <div class="swiper-container single-product-thumbs">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($gallery as $image): ?>
                                            <a href="javascript:void(0);" class="swiper-slide">
                                                <img class="img-full" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            </a>
                                        <?php endforeach; ?>
                                    </div>

                                    <div class="thumbs-button-wrap d-none d-md-block">
                                        <div class="thumbs-button-prev">
                                            <i class="pe-7s-angle-left"></i>
                                        </div>
                                        <div class="thumbs-button-next">
                                            <i class="pe-7s-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>


            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <div class="single-product-content">
                    <h1 class="title"><?php echo get_the_title($post_id) ?></h1>


                    <?php
                    $short_description = get_field('short_description');

                    if (!empty($short_description)): ?>
                        <div class="product-short-description">
                            <?php echo wp_kses_post($short_description); ?>
                        </div>
                    <?php endif; ?>



                    <p>Imate pitanja u vezi proizvoda?</p>
                    <ul class="quantity-with-btn">

                        <li class="add-to-cart">
                            <a class="btn btn-pronia-primary px-3" href="/kontakt">Pošaljite email</a>
                        </li>
                    </ul>

                    <div class="mt-3 mb-4 pb-1">
                        <p>Ili nas kontaktirajte na:</p>
                        <ul class="quantity-with-btn">


                            </li>

                            <?php
                            $phone = get_field('phone_number', 'option');

                            if ($phone):
                                $formatted_phone = preg_replace('/\D+/', '', $phone);
                                if (strpos($formatted_phone, '0') === 0) {
                                    $formatted_phone = '+382' . substr($formatted_phone, 1);
                                }
                            ?>
                                <a href="tel:<?php echo esc_attr($formatted_phone); ?>">
                                <i class="pe-7s-call"></i> <?php echo esc_html($phone); ?>
                                </a>
                            <?php endif; ?>

                            </li>

                        </ul>

                    </div>




                    <div class="product-category mt-3">
                        <span class="title">Kategorije :</span>
                        <ul>
                            <?php
                            $categories = get_the_category();
                            if ($categories) :
                                foreach ($categories as $category) : ?>
                                    <li>
                                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                            <?php echo esc_html($category->name); ?>
                                        </a>
                                    </li>
                            <?php endforeach;
                            endif; ?>
                        </ul>
                    </div>

                    <div class="product-category product-tags">
                        <span class="title">Tagovi :</span>
                        <ul>
                            <?php
                            $post_tags = get_the_tags();
                            if ($post_tags) :
                                $tag_links = array();

                                foreach ($post_tags as $tag) {
                                    $tag_links[] = '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a>';
                                }

                                echo '<li>' . implode(', ', $tag_links) . '</li>';
                            endif;
                            ?>
                        </ul>
                    </div>



                    <?php
                    $current_url   = urlencode(get_permalink());
                    $current_title = urlencode(get_the_title());
                    ?>

                    <div class="product-category social-link align-items-center pb-0">
                        <span class="title pe-3">Podijeli:</span>
                        <ul>
                            <!-- Facebook -->
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>"
                                    target="_blank"
                                    rel="noopener"
                                    data-tippy="Facebook"
                                    data-tippy-inertia="true"
                                    data-tippy-animation="shift-away"
                                    data-tippy-delay="50"
                                    data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>

                            <!-- Twitter -->
                            <li>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo $current_url; ?>&text=<?php echo $current_title; ?>"
                                    target="_blank"
                                    rel="noopener"
                                    data-tippy="Twitter"
                                    data-tippy-inertia="true"
                                    data-tippy-animation="shift-away"
                                    data-tippy-delay="50"
                                    data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>

                            <!-- LinkedIn -->
                            <li>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url; ?>&title=<?php echo $current_title; ?>"
                                    target="_blank"
                                    rel="noopener"
                                    data-tippy="LinkedIn"
                                    data-tippy-inertia="true"
                                    data-tippy-animation="shift-away"
                                    data-tippy-delay="50"
                                    data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>





<div class="product-tab-area section-space-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav product-tab-nav tab-style-2 pt-0" role="tablist">

                    <li class="nav-item" role="presentation">
                        <a class="active tab-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                            Opis proizvoda
                        </a>
                    </li>

                </ul>


                <div class="tab-content product-tab-content">

                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="product-description-body">
                            <?php the_field('product_tabs_product_description'); ?>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>
</div>



<!-- Begin Product Area -->
<div class="product-area section-space-y-axis-90">
    <div class="container">
        <div class="row">
            <div class="section-title-wrap without-tab">
                <h2 class="section-title">Slični proizvodi</h2>
                <p class="section-desc">Proivodi koji bi vas takođe mogli zanimati</p>

            </div>
            <div class="col-lg-12">
                <?php
                $current_post_id = get_the_ID();
                $categories = wp_get_post_terms($current_post_id, 'category', array('fields' => 'ids'));

                if (!empty($categories)) {
                    $args = array(
                        'post_type' => 'proizvodi',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post__not_in' => array($current_post_id),
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'term_id',
                                'terms'    => $categories,
                                'operator' => 'IN',
                            ),
                        ),
                    );

                    $related_query = new WP_Query($args);

                    $shown_ids = array(); // Track shown posts to avoid duplicates

                    if ($related_query->have_posts()) : ?>
                        <div class="swiper-container product-slider">
                            <div class="swiper-wrapper">
                                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                                    <?php
                                    if (in_array(get_the_ID(), $shown_ids)) {
                                        continue; // Skip if already shown
                                    }
                                    $shown_ids[] = get_the_ID();
                                    ?>
                                    <div class="swiper-slide product-item">
                                        <div class="product-img">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img class="primary-img" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'similar_product')); ?>" alt="<?php the_title_attribute(); ?>" style="object-fit: cover; width: 100%; height: 100%;">
                                                    <img class="secondary-img" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'similar_product')); ?>" alt="<?php the_title_attribute(); ?>" style="object-fit: cover; width: 100%; height: 100%;">



                                                <?php else : ?>
                                                    <img class="primary-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="Placeholder">
                                                    <img class="secondary-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="Placeholder">
                                                <?php endif; ?>
                                            </a>

                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>Trenutno nema sličnih proizvoda.</p>
                <?php endif;
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->



<?php get_footer(); ?>