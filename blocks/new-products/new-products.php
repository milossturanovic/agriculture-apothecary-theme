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
            <h2 class="section-title mb-0">Najnoviji proizvodi</h2>
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
                                                       
                                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                            <a href="#"><i class="pe-7s-look"></i></a>
                                                        </li>
                                                     
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="<?php echo esc_url(home_url('/shop')); ?>"><?php echo esc_html($product['name']); ?></a>
                                               
                                              
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


?>



<!-- Begin Product Area -->
<div class="product-area section-space-top-100 section-space-bottom-90">
    <div class="container">
        <div class="section-title-wrap">
            <h2 class="section-title mb-0">Najnoviji proizvodi</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                        <div class="product-item-wrap row">

                            <?php
                            $latest_proizvodi = new WP_Query([
                                'post_type' => 'proizvodi',
                                'posts_per_page' => 8,
                                'post_status' => 'publish'
                            ]);

                            if ($latest_proizvodi->have_posts()) :
                                while ($latest_proizvodi->have_posts()) : $latest_proizvodi->the_post(); ?>
                                    <div class="col-xl-3 col-md-4 col-sm-6 pt-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <img class="primary-img" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'similar_product')); ?>" alt="<?php the_title_attribute(); ?>">
                                                        <img class="secondary-img" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'similar_product')); ?>" alt="<?php the_title_attribute(); ?>">
                                                    <?php endif; ?>
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        
                                                        <li class="quuickview-btn">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal-<?php the_ID(); ?>"><i class="pe-7s-look"></i></a>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                <?php if ($price = get_field('cijena')) : ?>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price"><?php echo esc_html($price); ?> €</span>
                                                    </div>
                                                <?php endif; ?>
                                                <!-- <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal quick-view-modal fade" id="quickModal-<?php the_ID(); ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zatvori"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-wrap row">
                                                        <div class="col-lg-6">
                                                            <div class="modal-img">
                                                                <?php if (has_post_thumbnail()) : ?>
                                                                    <img class="img-full" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php the_title_attribute(); ?>">
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-5 pt-lg-0">
                                                            <div class="single-product-content">
                                                                <h2 class="title"><?php the_title(); ?></h2>
                                                                <?php
                                                                $tabs = get_field('product_tabs');
                                                                if (!empty($tabs['product_description'])) :
                                                                    $desc_raw = strip_tags($tabs['product_description']);
                                                                    $desc_trimmed = mb_strimwidth($desc_raw, 0, 500, '...');
                                                                    ?>
                                                                    <div class="short-desc"><?php echo esc_html($desc_trimmed); ?></div>
                                                                <?php else : ?>
                                                                    <p class="short-desc">Opis nije dostupan.</p>
                                                                <?php endif; ?>
                                                                <ul class="quantity-with-btn">
                                                                    <li class="add-to-cart">
                                                                        <a class="btn btn-pronia-primary px-3" href="<?php the_permalink(); ?>">
                                                                            Pogledaj proizvod
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endwhile;
                                wp_reset_postdata();
                            else : ?>
                                <p class="px-3">Trenutno nema proizvoda.</p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
