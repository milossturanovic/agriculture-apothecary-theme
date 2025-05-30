<?php

/**
 * Project Beta functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Project_Beta
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function project_beta_setup()
{
    /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Project Beta, use a find and replace
		* to change 'project-beta' to the name of your theme in all the template files.
		*/
    load_theme_textdomain('project-beta', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
    add_theme_support('title-tag');

    /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'project-beta'),
        )
    );

    /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'Project_Beta_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'project_beta_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function Project_Beta_content_width()
{
    $GLOBALS['content_width'] = apply_filters('Project_Beta_content_width', 640);
}
add_action('after_setup_theme', 'Project_Beta_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function Project_Beta_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'project-beta'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'project-beta'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'Project_Beta_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function Project_Beta_scripts()
{
    // Ensure jQuery is loaded by WordPress
    wp_enqueue_script('jquery');

    wp_enqueue_style('project-beta-style', get_stylesheet_uri(), array(), null);
    wp_style_add_data('project-beta-style', 'rtl', 'replace');

    // Enqueue scripts with jQuery as a dependency
    wp_enqueue_script('rekos-gerenal-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);

    // Enqueue scripts with jQuery as a dependency
    wp_enqueue_script('rekos-new-shop-page', get_template_directory_uri() . '/js/new-shop-page.js', array('jquery'), null, true);

    wp_enqueue_script('project-beta-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), null, true);
    wp_enqueue_script('project-beta-homepage', get_template_directory_uri() . '/js/homepage.js', array('jquery', 'slick-js'), null, true);
    wp_enqueue_script('project-beta-category', get_template_directory_uri() . '/js/category-page.js', array('jquery'), null, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'Project_Beta_scripts');




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}




/**
 * 
 * 
 * 
 * Custom functions for the Project Beta theme
 * 
 * 
 * 
 * 
 */




/* 
    INDEX

    1. styles and scripts loading
    2. Enqueue styles for the Gutenberg editor.
    3. Dynamically registers ACF blocks
    4. register header menu
    5. Enable editor styles 
    6. Allow SVG
    7. Enable excerpts for pages
    8. additonal theme options
    9. enable exceprts for default posts
    10. enables video formats
    11. Enable support for WooCommerce plugin in your custom theme
    12. Register a custom sidebar for the shop page
    13. Register custom image sizes
    14. Additional menu register
    15. Register Ajax handlers for product pagination
    16. Modify search query to only show posts
*/




/**
 * 1. styles and scripts loading
 * Enqueues all frontend styles and scripts for the Project Beta theme .
 *
 * Loads required CSS and JS files directly from the theme's assets directory.
 */
function project_beta_enqueue_assets()
{

    // --- CSS ---
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), null, 'all');
    wp_enqueue_style('pe-icons', get_template_directory_uri() . '/assets/css/Pe-icon-7-stroke.css', array(), null, 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), null, 'all');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), null, 'all');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), null, 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), null, 'all');
    wp_enqueue_style('ion-range-slider', get_template_directory_uri() . '/assets/css/ion.rangeSlider.min.css', array(), null, 'all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), null, 'all');

    // --- JS ---
    wp_enqueue_script('jquery'); // WP bundled jQuery (don't load your own)

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/vendor/jquery-migrate-3.3.2.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/vendor/jquery.waypoints.js', array('jquery'), null, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.11.2.min.js', array(), null, false); // should load early if needed

    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/plugins/wow.min.js', array(), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/plugins/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/plugins/jquery.nice-select.js', array('jquery'), null, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/plugins/parallax.min.js', array(), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/plugins/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('tippy', get_template_directory_uri() . '/assets/js/plugins/tippy.min.js', array(), null, true);
    wp_enqueue_script('ion-range-slider', get_template_directory_uri() . '/assets/js/plugins/ion.rangeSlider.min.js', array(), null, true);
    wp_enqueue_script('mailchimp', get_template_directory_uri() . '/assets/js/plugins/mailchimp-ajax.js', array('jquery'), null, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/plugins/jquery.counterup.js', array('jquery'), null, true);

    // Ajax pagination script
    wp_enqueue_script('ajax-pagination', get_template_directory_uri() . '/assets/js/ajax-pagination.js', array('jquery'), null, true);
    wp_localize_script(
        'ajax-pagination',
        'ajax_pagination_params',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('ajax_pagination_nonce')
        )
    );

    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'project_beta_enqueue_assets');


/**
 *  2. Enqueue styles for the Gutenberg editor.
 *
 * This function ensures that the block editor (Gutenberg) matches the frontend styles.
 * 
 * - Loads the `fonts.css` file so that custom fonts are applied inside the editor.
 * - Applies `theme.css` using `add_editor_style()`, ensuring Gutenberg reflects the theme design.
 * - Applies `gutenberg-editor-style.css` using `add_editor_style()`, ensuring Gutenberg reflects the theme design.
 * - This function runs inside `enqueue_block_editor_assets` to affect only the editor and not the frontend.
 */
function project_beta_enqueue_editor_assets()
{
    wp_enqueue_style('project-beta-editor-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), filemtime(get_template_directory() . '/assets/css/bootstrap.min.css'));
    wp_enqueue_style('project-beta-editor-swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), filemtime(get_template_directory() . '/assets/css/swiper-bundle.min.css'));
    wp_enqueue_script('project-beta-editor-swiper-js', get_template_directory_uri() . '/assets/js/plugins/swiper-bundle.min.js', array(), filemtime(get_template_directory() . '/assets/js/plugins/swiper-bundle.min.js'), true);

    // Fonts and Icons
    wp_enqueue_style('project-beta-editor-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), filemtime(get_template_directory() . '/assets/css/fonts.css'));
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/fonts.css', array(), filemtime(get_template_directory() . '/assets/css/fonts.css')); // Note: same file as above
    wp_enqueue_style('pe-icons', get_template_directory_uri() . '/assets/css/Pe-icon-7-stroke.css', array(), null);

    // Editor inline styles
    add_editor_style('assets/css/fonts.css');
    add_editor_style('assets/css/bootstrap.min.css');
    add_editor_style('assets/css/Pe-icon-7-stroke.css');
    add_editor_style('assets/css/gutenberg-editor-style.css');
}
add_action('enqueue_block_editor_assets', 'project_beta_enqueue_editor_assets');











/**
 * 3. Dynamically registers ACF blocks from the `/blocks/` directory.
 *
 * This function scans the `/blocks/` folder for any subdirectories that contain a `block.json` file.
 * If a valid `block.json` file is found, it reads the configuration and registers the block dynamically.
 *
 * - Reads block configuration from `block.json`
 * - Ensures required data (like `name`) is present before registration
 * - Automatically sets `render_template`, `enqueue_style`, and `enqueue_script` if available
 * - Logs errors if `block.json` is missing required fields or if the block directory is not found
 *
 * This eliminates the need to manually register each block, making block management easier.
 */
function project_beta_register_acf_blocks()
{
    $blocks_dir = get_template_directory() . '/blocks';

    if (file_exists($blocks_dir)) {
        foreach (glob($blocks_dir . '/*/block.json') as $block_json) {
            $block_folder = dirname($block_json);
            $block_name   = basename($block_folder);
            $block_config = json_decode(file_get_contents($block_json), true);

            if (!isset($block_config['name'])) {
                error_log("ACF Block missing 'name' field: " . $block_json);
                continue;
            }

            // Determine block asset paths
            $render_template = $block_folder . '/' . ($block_config['acf']['renderTemplate'] ?? "{$block_name}.php");
            $style_path      = "/blocks/{$block_name}/{$block_name}.css";
            $script_path     = "/blocks/{$block_name}/{$block_name}.js";

            $style_url  = get_template_directory_uri() . $style_path;
            $style_file = get_template_directory() . $style_path;

            $script_url  = get_template_directory_uri() . $script_path;
            $script_file = get_template_directory() . $script_path;

            // Register the block
            acf_register_block_type(array(
                'name'              => str_replace('acf/', '', $block_config['name']),
                'title'             => $block_config['title'] ?? 'Unnamed Block',
                'description'       => $block_config['description'] ?? '',
                'category'          => $block_config['category'] ?? 'formatting',
                'icon'              => $block_config['icon'] ?? 'admin-generic',
                'keywords'          => $block_config['keywords'] ?? array(),
                'render_template'   => $render_template,
                'enqueue_style'     => file_exists($style_file) ? $style_url : '',
                'enqueue_script'    => file_exists($script_file) ? $script_url : '',
                'supports'          => $block_config['supports'] ?? array(),
            ));

            error_log("ACF Block Registered: " . $block_config['name']);
        }
    } else {
        error_log("ACF Blocks folder does not exist: " . $blocks_dir);
    }
}
add_action('acf/init', 'project_beta_register_acf_blocks');






// 4. register header menu
function register_main_menu()
{
    register_nav_menus(array(
        'main_menu' => __('Main Menu', 'project-beta')
    ));
}
add_action('after_setup_theme', 'register_main_menu');



// 5. Enable editor styles

function mytheme_add_editor_styles()
{
    add_theme_support('editor-styles'); // Enable editor styles
    add_editor_style('editor-style.css'); // Enqueue your editor-style.css file
}
add_action('after_setup_theme', 'mytheme_add_editor_styles');




/* 

6. Allow SVG

*/

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    global $wp_version;
    if ($wp_version !== '4.7.1') {
        return $data;
    }

    $filetype = wp_check_filetype($filename, $mimes);

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
}
add_action('admin_head', 'fix_svg');





/* 

7. Enable excerpts for pages

*/


function enable_page_excerpts()
{
    add_post_type_support('page', 'excerpt');
}
add_action('init', 'enable_page_excerpts');



/* 
8. additonal theme options

*/



if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-options',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ));
}





/* 

9. enable exceprts for default posts

*/


function enable_excerpt_for_posts()
{
    add_post_type_support('post', 'excerpt');
}
add_action('init', 'enable_excerpt_for_posts');







/* 

10. enables video formats

*/


function enable_custom_upload_mime_types($mime_types)
{
    // Add video MIME types
    $mime_types['mp4'] = 'video/mp4';
    $mime_types['webm'] = 'video/webm';
    $mime_types['ogg'] = 'video/ogg';

    // Add any other formats you need (optional)
    // $mime_types['m4v'] = 'video/x-m4v'; // Optional

    return $mime_types;
}
add_filter('upload_mimes', 'enable_custom_upload_mime_types');



/* 

11. Enable support for WooCommerce plugin in your custom theme

*/


function Project_Beta_add_woocommerce_support()
{
    add_theme_support('woocommerce'); // Enables WooCommerce in your custom theme
}
add_action('after_setup_theme', 'Project_Beta_add_woocommerce_support');



/* 

12. Register a custom sidebar for the shop page

*/

function Project_Beta_register_sidebar()
{
    register_sidebar(array(
        'name'          => 'Shop Sidebar',
        'id'            => 'shop-sidebar',
        'description'   => 'Widgets in this area will appear in the left sidebar on the shop page.',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'Project_Beta_register_sidebar');



/* 

13. Register custom image sizes


*/


// product main gallery size
add_image_size('product_gallery_auto', 9999, 600, false);


// Register custom image size for similar products
add_action('after_setup_theme', function () {
    add_image_size('similar_product', 540, 600, true);
});


/* 

14. Additional menu register

*/

function register_footer_menus()
{
    register_nav_menus(array(
        'footer_1' => __('Footer 1', 'project-beta'),
        'footer_2' => __('Footer 2', 'project-beta'),
    ));
}
add_action('after_setup_theme', 'register_footer_menus');






/**
 * 
 * 
 * 15. Register Ajax handlers for product pagination

 */


// Register AJAX handlers
add_action('init', function () {
    add_action('wp_ajax_ajax_load_products', 'ajax_load_products_handler');
    add_action('wp_ajax_nopriv_ajax_load_products', 'ajax_load_products_handler');
});

function ajax_load_products_handler()
{
    check_ajax_referer('ajax_pagination_nonce', 'nonce');

    $paged = isset($_POST['page']) ? absint($_POST['page']) : 1;
    $sort = sanitize_text_field($_POST['sort'] ?? 'default');
    $category = sanitize_text_field($_POST['category'] ?? '');
    $tag = sanitize_text_field($_POST['tag'] ?? '');
    $search = sanitize_text_field($_POST['search'] ?? '');

    $products_html = get_products_grid_html($paged, $sort, $category, $tag, $search);

    $args = [
        'post_type' => 'proizvodi',
        'posts_per_page' => 12,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => []
    ];

    if (!empty($search)) {
        $args['s'] = $search;
    }

    if ($sort === 'title') {
        $args['orderby'] = 'title';
        $args['order'] = 'ASC';
    }

    if ($category) {
        $args['tax_query'][] = [
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $category
        ];
    }

    if ($tag) {
        $args['tax_query'][] = [
            'taxonomy' => 'post_tag',
            'field' => 'slug',
            'terms' => $tag
        ];
    }

    if (count($args['tax_query']) > 1) {
        $args['tax_query']['relation'] = 'AND';
    }

    $query = new WP_Query($args);

    // Modified pagination logic
    $total_pages = $query->max_num_pages;
    $current_page = $paged;
    $pagination_html = '';

    // Calculate the range of pages to show (current page +/- 2)
    $start_page = max(1, min($current_page - 2, $total_pages - 4));
    $end_page = min($total_pages, max($current_page + 2, 5));

    // Generate pagination HTML
    if ($total_pages > 1) {
        for ($i = $start_page; $i <= $end_page; $i++) {
            if ($i == $current_page) {
                $pagination_html .= '<li class="page-item active"><span class="page-link">' . $i . '</span></li>';
            } else {
                $pagination_html .= '<li class="page-item"><a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a></li>';
            }
        }
    }

    $total = new WP_Query([
        'post_type' => 'proizvodi',
        'posts_per_page' => -1,
        'tax_query' => $args['tax_query']
    ]);

    $found = $total->found_posts;
    $per_page = 12;
    $from = (($paged - 1) * $per_page) + 1;
    $to = min($found, $paged * $per_page);
    $count_info = '<span>' . $from . '-' . $to . '</span> proizvoda od <span>' . $found . '</span>';

    wp_send_json_success([
        'products' => $products_html,
        'pagination' => $pagination_html,
        'count_info' => $count_info
    ]);
}

// Product grid HTML output
function get_products_grid_html($paged = 1, $sort = 'default', $category = '', $tag = '', $search = '')
{
    $orderby = 'date';
    $order = 'DESC';

    if ($sort === 'title') {
        $orderby = 'title';
        $order = 'ASC';
    }

    $args = [
        'post_type' => 'proizvodi',
        'posts_per_page' => 12,
        'paged' => $paged,
        'orderby' => $orderby,
        'order' => $order,
        'tax_query' => []
    ];

    if (!empty($search)) {
        $args['s'] = $search;
    }

    if ($category) {
        $args['tax_query'][] = [
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $category
        ];
    }

    if ($tag) {
        $args['tax_query'][] = [
            'taxonomy' => 'post_tag',
            'field' => 'slug',
            'terms' => $tag
        ];
    }

    if (count($args['tax_query']) > 1) {
        $args['tax_query']['relation'] = 'AND';
    }

    $query = new WP_Query($args);
    $output = '';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<div class="col-md-4 col-sm-6">';
            $output .= '<div class="product-item">';
            $output .= '<div class="product-img">';
            $output .= '<a href="' . get_permalink() . '">';
            $output .= '<img class="primary-img" src="' . get_the_post_thumbnail_url(get_the_ID(), 'medium') . '" alt="' . get_the_title() . '">';
            $second = get_field('secondary_image');
            if ($second) {
                $output .= '<img class="secondary-img" src="' . esc_url($second['url']) . '" alt="">';
            }
            $output .= '</a>';
            $output .= '</div>';
            $output .= '<div class="product-content">';
            $output .= '<a class="product-name" href="' . get_permalink() . '">' . get_the_title() . '</a>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
        }
    } else {
        $output .= '<p>Nismo pronašli proizvode.</p>';
    }

    wp_reset_postdata();
    return $output;
}

/**
 * 16. Modify search query to only show posts from 'proizvodi' post type
 */
function project_beta_search_filter($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_search()) {
        $query->set('post_type', array('proizvodi'));
        $query->set('posts_per_page', 20);
    }
}
add_action('pre_get_posts', 'project_beta_search_filter');
