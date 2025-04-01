# 📘 Agriculture Apothercary theme – Custom WordPress Theme (ACF Blocks & Asset Setup)

This document explains how ACF blocks and assets are set up in the **Project Beta** theme for the Agriculture apothecary website, including automatic block registration, asset loading, and Gutenberg editor styling.

---

### 📁 Block Folder Structure

Each custom ACF block must follow this structure inside `/blocks/{block-name}/`:

- `block.json` defines block metadata and ACF-specific options
- `my-block.php` is the template rendered on the frontend
- `my-block.css` and `my-block.js` are automatically enqueued if present

---

## ⚙️ Dynamic Block Registration

ACF blocks are dynamically registered from the `/blocks/` folder using `acf_register_block_type()`.

**Function (in `functions.php`):**
```php
add_action('acf/init', 'project_beta_register_acf_blocks');
```

---

## 🧹 How to Add a New Block

1. Create a new folder inside `/blocks/`, e.g. `/blocks/my-block/`
2. Add the following files:
   - `block.json`
   - `my-block.php`
   - `my-block.css` *(optional)*
   - `my-block.js` *(optional)*
3. Ensure `block.json` includes `"name": "acf/my-block"` and `"acf.renderTemplate": "my-block.php"`
4. The block will automatically be registered and available in Gutenberg!

---

## 🎨 Gutenberg Editor Styling

The block editor (Gutenberg) is styled using the following function:

```php
function project_beta_enqueue_editor_assets() {
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
```

---

## ✍️ Font Setup

- Fonts are defined in `/assets/css/fonts.css`
- Font files are located in `/assets/fonts/`
- These fonts are loaded both on the frontend and inside Gutenberg

---

## 🎨 Assets Folder Structure

Theme assets are located inside `/assets/` and follow this structure:

```
assets/
│
├── css/                   → All CSS styles including bootstrap, animations, icons, etc.
│   ├── bootstrap.min.css
│   ├── font-awesome.min.css
│   ├── Pe-icon-7-stroke.css
│   ├── animate.min.css
│   ├── swiper-bundle.min.css
│   ├── nice-select.css
│   ├── magnific-popup.min.css
│   ├── ion.rangeSlider.min.css
│   └── style.css          → Main theme stylesheet
│
├── js/                    → Theme JS files and vendor plugins
│   ├── vendor/
│   │   ├── bootstrap.bundle.min.js
│   │   ├── jquery-3.6.0.min.js (not used, WP loads jQuery)
│   │   ├── jquery-migrate-3.3.2.min.js
│   │   ├── jquery.waypoints.js
│   │   └── modernizr-3.11.2.min.js
│   ├── plugins/
│   │   ├── wow.min.js
│   │   ├── swiper-bundle.min.js
│   │   ├── jquery.nice-select.js
│   │   ├── parallax.min.js
│   │   ├── jquery.magnific-popup.min.js
│   │   ├── tippy.min.js
│   │   ├── ion.rangeSlider.min.js
│   │   ├── mailchimp-ajax.js
│   │   └── jquery.counterup.js
│   └── main.js            → Main theme functionality
│
├── fonts/                 → Icon fonts like FontAwesome and Pe Icon 7 Stroke
│   ├── fontawesome-webfont.woff2
│   ├── Pe-icon-7-stroke.ttf
│   └── ...
│
└── images/                → All static images used in the theme
```

---

## ⚡ Smart Asset Loading

Each block's CSS and JS are only loaded on pages where that block appears.  
This is handled via dynamic block registration and conditional asset enqueueing with `acf_register_block_type()`.

This helps keep frontend performance optimal.

