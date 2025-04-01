<?php

/**
 * Product area section template.
 *
 * @param array $block The block settings and attributes.
 * @param bool  $is_preview True during the admin preview.
 */

// Show a preview image in the Gutenberg editor
if (!empty($is_preview)) {
?>






<!-- Begin Product Area -->
<div class="product-area section-space-top-100 section-space-bottom-90">
    <div class="container">
        <div class="section-title-wrap">
            <h2 class="section-title mb-0">Our Products</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
              

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                        <div class="product-item-wrap row">

                            <?php
                            $products = [
                                ['name' => 'American Marigold', 'price' => '$23.45', 'primary' => '1-1', 'secondary' => '1-2'],
                                ['name' => 'Black Eyed Susan', 'price' => '$25.45', 'primary' => '1-2', 'secondary' => '1-3'],
                                ['name' => 'Bleeding Heart', 'price' => '$30.45', 'primary' => '1-3', 'secondary' => '1-4'],
                                ['name' => 'Bloody Cranesbill', 'price' => '$45.00', 'primary' => '1-4', 'secondary' => '1-5'],
                                ['name' => 'Butterfly Weed', 'price' => '$50.45', 'primary' => '1-5', 'secondary' => '1-6'],
                                ['name' => 'Common Yarrow', 'price' => '$65.00', 'primary' => '1-6', 'secondary' => '1-7'],
                                ['name' => 'Doublefile Viburnum', 'price' => '$67.45', 'primary' => '1-7', 'secondary' => '1-8'],
                                ['name' => 'Feather Reed Grass', 'price' => '$20.00', 'primary' => '1-8', 'secondary' => '1-1'],
                            ];
                            ?>

                            <?php foreach ($products as $product): ?>
                                <div class="col-xl-3 col-md-4 col-sm-6 pt-4">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="<?php echo esc_url(home_url('/shop')); ?>">
                                                <img class="primary-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/medium-size/<?php echo esc_attr($product['primary']); ?>-270x300.jpg" alt="<?php echo esc_attr($product['name']); ?>">
                                                <img class="secondary-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/medium-size/<?php echo esc_attr($product['secondary']); ?>-270x300.jpg" alt="<?php echo esc_attr($product['name']); ?>">
                                            </a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li><a href="<?php echo esc_url(home_url('/wishlist')); ?>"><i class="pe-7s-like"></i></a></li>
                                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                        <a href="#"><i class="pe-7s-look"></i></a>
                                                    </li>
                                                    <li><a href="<?php echo esc_url(home_url('/cart')); ?>"><i class="pe-7s-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="<?php echo esc_url(home_url('/shop')); ?>"><?php echo esc_html($product['name']); ?></a>
                                            <div class="price-box pb-1">
                                                <span class="new-price"><?php echo esc_html($product['price']); ?></span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <!-- You can do the same loop logic for bestseller and latest tabs -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->






<?php
    return;
}

// Get ACF fields
$heading = get_field('hero_heading') ?: 'Default Heading';
$subheading = get_field('hero_subheading') ?: 'Default Subheading';
$background = get_field('hero_background') ?: get_template_directory_uri() . "/assets/images/hero-slider/hero-slider-07.jpg";
?>




<!-- Begin Product Area -->
<div class="product-area section-space-top-100 section-space-bottom-90">
    <div class="container">
        <div class="section-title-wrap">
            <h2 class="section-title mb-0">Our Products</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
            

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                        <div class="product-item-wrap row">

                            <?php
                            $products = [
                                ['name' => 'American Marigold', 'price' => '$23.45', 'primary' => '1-1', 'secondary' => '1-2'],
                                ['name' => 'Black Eyed Susan', 'price' => '$25.45', 'primary' => '1-2', 'secondary' => '1-3'],
                                ['name' => 'Bleeding Heart', 'price' => '$30.45', 'primary' => '1-3', 'secondary' => '1-4'],
                                ['name' => 'Bloody Cranesbill', 'price' => '$45.00', 'primary' => '1-4', 'secondary' => '1-5'],
                                ['name' => 'Butterfly Weed', 'price' => '$50.45', 'primary' => '1-5', 'secondary' => '1-6'],
                                ['name' => 'Common Yarrow', 'price' => '$65.00', 'primary' => '1-6', 'secondary' => '1-7'],
                                ['name' => 'Doublefile Viburnum', 'price' => '$67.45', 'primary' => '1-7', 'secondary' => '1-8'],
                                ['name' => 'Feather Reed Grass', 'price' => '$20.00', 'primary' => '1-8', 'secondary' => '1-1'],
                            ];
                            ?>

                            <?php foreach ($products as $product): ?>
                                <div class="col-xl-3 col-md-4 col-sm-6 pt-4">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="<?php echo esc_url(home_url('/shop')); ?>">
                                                <img class="primary-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/medium-size/<?php echo esc_attr($product['primary']); ?>-270x300.jpg" alt="<?php echo esc_attr($product['name']); ?>">
                                                <img class="secondary-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/medium-size/<?php echo esc_attr($product['secondary']); ?>-270x300.jpg" alt="<?php echo esc_attr($product['name']); ?>">
                                            </a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li><a href="<?php echo esc_url(home_url('/wishlist')); ?>"><i class="pe-7s-like"></i></a></li>
                                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                        <a href="#"><i class="pe-7s-look"></i></a>
                                                    </li>
                                                    <li><a href="<?php echo esc_url(home_url('/cart')); ?>"><i class="pe-7s-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="<?php echo esc_url(home_url('/shop')); ?>"><?php echo esc_html($product['name']); ?></a>
                                            <div class="price-box pb-1">
                                                <span class="new-price"><?php echo esc_html($product['price']); ?></span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <!-- You can do the same loop logic for bestseller and latest tabs -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

