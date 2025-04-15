<?php

/**
 * Template Name: Proizvodi
 */

get_header();

?>

<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="<?php echo get_template_directory_uri() ?>/assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h1 class="breadcrumb-heading"><?php the_title(); ?></h1>
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


    <div class="shop-area section-space-y-axis-100">
        <div class="container">
            <div class="row">


                <div class="col-xl-3 col-lg-4 order-2 order-lg-1 pt-5 pt-lg-0">
                    <div class="sidebar-area">
                        <div class="widgets-searchbox">
                            <form id="product-search-form">
                                <input class="input-field" type="text" id="product-search" placeholder="Pretraži proizvode">
                                <button class="widgets-searchbox-btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widgets-area">
                            <div class="widgets-item pt-0">
                                <h2 class="widgets-title mb-4">Kategorije</h2>



                                <ul class="widgets-category">
                                    <li><a href="#" class="filter-category" data-category="">Svi proizvodi</a></li>
                                    <?php
                                    $categories = get_categories(array(
                                        'exclude' => array(1) // Exclude uncategorized (ID 1)
                                    ));
                                    foreach ($categories as $cat) {
                                        echo '<li>
                                                <a href="#" class="filter-category" data-category="' . esc_attr($cat->slug) . '">
                                                    ' . esc_html($cat->name) . ' <span>(' . $cat->count . ')</span>
                                                </a>
                                            </li>';
                                    }
                                    ?>
                                </ul>






                            </div>


                            <div class="widgets-item">
                                <h2 class="widgets-title mb-4">Popularni Tagovi</h2>



                                <ul class="widgets-tag">
                                    <?php
                                    $tags = get_tags(['orderby' => 'count', 'order' => 'DESC', 'number' => 6]);
                                    foreach ($tags as $tag) {
                                        echo '<li><a href="#" class="filter-tag" data-tag="' . esc_attr($tag->slug) . '">' . esc_html($tag->name) . '</a></li>';
                                    }
                                    ?>
                                </ul>





                            </div>
                        </div>
                    </div>
                </div>















                <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
                    <div class="product-topbar">
                        <ul>
                            <li class="page-count products-count-info">
                                <?php
                                $total = new WP_Query(['post_type' => 'proizvodi', 'posts_per_page' => -1]);
                                $found = $total->found_posts;
                                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                $per_page = 12;
                                $from = (($paged - 1) * $per_page) + 1;
                                $to = min($found, $paged * $per_page);
                                ?>
                                <span><?php echo $from . '-' . $to; ?></span> proizvoda od <span><?php echo $found; ?></span>
                            </li>

                        
                            <li class="short">
                                <select class="nice-select" id="product-sort">
                                    <option value="default" <?php selected($_GET['sort'] ?? '', 'default'); ?>>Sortiraj</option>
                                    <option value="latest" <?php selected($_GET['sort'] ?? '', 'latest'); ?>>Sortiraj po najskorijim</option>
                                    <option value="title" <?php selected($_GET['sort'] ?? '', 'title'); ?>>Sortiraj po imenu</option>
                                </select>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                            <div id="product-grid-container" class="product-grid-view row g-y-20">
                                <?php
                                // Call the helper function to display products
                                echo get_products_grid_html();
                                ?>
                            </div>

                            <div class="pagination-area">
                                <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center" id="ajax-pagination"></ul>

                                </nav>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                            <!-- List view content if needed -->
                            <p>List view is not implemented yet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->

<?php get_footer(); ?>








