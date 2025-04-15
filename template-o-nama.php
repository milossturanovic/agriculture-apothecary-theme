<?php


/* Template Name: O nama */
get_header();

?>






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



<?php
$data = get_field('o_nama_intro_section');
$title_before = $data['title_before_span'] ?? '';
$title_span = $data['title_span'] ?? '';
$description = $data['description'] ?? '';
?>

<div class="about-area section-space-top-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content">
                    <?php if ($title_before || $title_span): ?>
                        <h2 class="about-title">
                            <?php echo esc_html($title_before); ?>
                            <?php if ($title_span): ?>
                                <span><?php echo esc_html($title_span); ?></span>
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










<!-- Begin Shipping Area -->
<div class="shipping-area section-space-y-axis-100">
 
</div>
<!-- Shipping Area End Here -->

<!-- Begin Banner Area -->
<?php
$data = get_field('o_nama_banner_with_counter');
$title = $data['title'] ?? '';
$counter_items = $data['counter_items'] ?? [];
?>

<div class="banner-with-counter">
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-boxshadow">
                        <div class="banner-item" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/banner/3-1-1208x542.jpg">
                            <div class="popup-btn">
                                <a class="popup-vimeo wave-btn" href="https://player.vimeo.com/video/172601404?autoplay=1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="icon">
                                        <i class="pe-7s-play"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="counter-area">
        <div class="container">
            <?php if (!empty($title)): ?>
                <h2 class="counter-title"><?php echo nl2br(esc_html($title)); ?></h2>
            <?php endif; ?>

            <?php if (!empty($counter_items)): ?>
                <div class="row">
                    <?php foreach ($counter_items as $index => $item): ?>
                        <div class="col-lg-3 col-md-4 col-6<?php echo $index > 1 ? ' pt-4 pt-md-0' : ''; ?>">
                            <div class="counter-item">
                                <div class="count-wrap">
                                    <h3 class="count mb-0" data-counterup-time="1000"><?php echo esc_html($item['count_number']); ?></h3>
                                    <span class="prefix">+</span>
                                </div>
                                <h4 class="count-title mb-0"><?php echo esc_html($item['count_title']); ?></h4>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Banner Area End Here -->

<?php
$team = get_field('o_nama_team_section');
$title = $team['title'] ?? '';
$description = $team['description'] ?? '';
$members = $team['team_members'] ?? [];
?>

<div class="team-area section-space-top-100">
    <div class="container">
        <?php if ($title || $description): ?>
            <div class="section-title-wrap without-tab">
                <?php if ($title): ?>
                    <h2 class="section-title"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
                <?php if ($description): ?>
                    <p class="section-desc"><?php echo esc_html($description); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($members)): ?>
            <?php foreach (array_chunk($members, 4) as $row): ?>
                <div class="row">
                    <?php foreach ($row as $index => $member): ?>
                        <div class="col-lg-3 col-sm-6 <?php echo $index % 2 === 0 ? 'pt-sm-5' : 'pt-5 pt-sm-0'; ?>">
                            <div class="team-item">
                                <div class="team-img">
                                    <?php if (!empty($member['image']['url'])): ?>
                                        <img src="<?php echo esc_url($member['image']['url']); ?>" alt="<?php echo esc_attr($member['name']); ?>">
                                    <?php endif; ?>
                                    <div class="inner-content">
                                        <h2 class="team-member-name"><?php echo esc_html($member['name']); ?></h2>
                                        <span class="occupation"><?php echo esc_html($member['position']); ?></span>
                                        
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h2 class="team-member-name mb-0"><?php echo esc_html($member['name']); ?></h2>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>


<!-- Begin Brand Area -->
<?php
$brand_section = get_field('o_nama_brand_section');
$brands = $brand_section['brands'] ?? [];
?>

<div class="brand-area section-space-y-axis-100">
    <div class="container">
        <div class="brand-bg" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/brand/bg/1-1170x300.jpg">
            <div class="row">
                <div class="col-lg-12">
                    <?php if (!empty($brands)): ?>
                        <div class="swiper-container brand-slider">
                            <div class="swiper-wrapper">
                                <?php foreach ($brands as $brand): ?>
                                    <?php
                                    $image = $brand['brand_image'] ?? null;
                                    $link = $brand['link'] ?? null;
                                    ?>
                                    <?php if (!empty($image) && !empty($link) && is_array($link)): ?>
                                        <div class="swiper-slide">
                                            <a class="brand-item"
                                               href="<?php echo esc_url($link['url']); ?>"
                                               target="<?php echo esc_attr($link['target'] ?? '_self'); ?>"
                                               rel="noopener">
                                                <img src="<?php echo esc_url($image['url']); ?>"
                                                     alt="<?php echo esc_attr($image['alt'] ?? 'Brand Image'); ?>">
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>








<?php get_footer(); ?>