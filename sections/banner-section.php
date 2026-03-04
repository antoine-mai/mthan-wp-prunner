<?php defined('ABSPATH') or die('Cheatin\' uh?');

$theme_options = get_option('mthan_theme_options');
$slides = !empty($theme_options['banner_slides']) ? $theme_options['banner_slides'] : array();

// Fallback slides if none configured
if (empty($slides)) {
    $slides = array(
            array(
            'background_image' => array('url' => get_template_directory_uri() . '/images/main-slider/4.jpg'),
            'subtitle' => 'High Quality &amp; Affordable Price',
            'title' => 'Unique Designs',
            'alignment' => 'left',
            'btn1_text' => 'Read More',
            'btn1_link' => '#',
            'btn2_text' => 'Contact Us',
            'btn2_link' => '#',
        ),
            array(
            'background_image' => array('url' => get_template_directory_uri() . '/images/main-slider/5.jpg'),
            'subtitle' => 'Adding Perfection to Your Lawn',
            'title' => 'Lawn Stylist',
            'alignment' => 'right',
            'btn1_text' => 'Read More',
            'btn1_link' => '#',
            'btn2_text' => 'Services',
            'btn2_link' => '#',
        ),
            array(
            'background_image' => array('url' => get_template_directory_uri() . '/images/main-slider/3.jpg'),
            'subtitle' => 'Solutions for Your Green Edge',
            'title' => 'Build and Care',
            'alignment' => 'left',
            'btn1_text' => 'Read More',
            'btn1_link' => '#',
            'btn2_text' => 'Services',
            'btn2_link' => '#',
        ),
    );
}
?>
<section class="banner-section banner-two">
    <div class="banner-carousel owl-theme owl-carousel">
        <?php foreach ($slides as $slide) {
    $bg_url = !empty($slide['background_image']['url']) ? esc_url($slide['background_image']['url']) : '';
    $subtitle = !empty($slide['subtitle']) ? $slide['subtitle'] : '';
    $title = !empty($slide['title']) ? $slide['title'] : '';
    $alignment = !empty($slide['alignment']) && $slide['alignment'] === 'right' ? ' right-aligned' : '';
    $btn1_text = !empty($slide['btn1_text']) ? $slide['btn1_text'] : 'Read More';
    $btn1_link = !empty($slide['btn1_link']) ? esc_url($slide['btn1_link']) : '#';
    $btn2_text = !empty($slide['btn2_text']) ? $slide['btn2_text'] : '';
    $btn2_link = !empty($slide['btn2_link']) ? esc_url($slide['btn2_link']) : '#';
?>
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(<?php echo $bg_url; ?>);"></div>
            <div class="auto-container">
                <div class="content-box<?php echo $alignment; ?>">
                    <div class="content clearfix">
                        <div class="inner">
                            <?php if ($subtitle) { ?>
                            <div class="subtitle">
                                <?php echo esc_html($subtitle); ?>
                            </div>
                            <?php
    }?>
                            <?php if ($title) { ?>
                            <h1>
                                <?php echo esc_html($title); ?>
                            </h1>
                            <?php
    }?>
                            <div class="link-box clearfix">
                                <a href="<?php echo $btn1_link; ?>" class="theme-btn btn-style-one">
                                    <span class="btn-title">
                                        <?php echo esc_html($btn1_text); ?> <i class="arrow flaticon-play-button-1"></i>
                                    </span>
                                </a>
                                <?php if ($btn2_text) { ?>
                                <a href="<?php echo $btn2_link; ?>" class="theme-btn btn-style-three">
                                    <span class="btn-title">
                                        <?php echo esc_html($btn2_text); ?> <i class="arrow flaticon-play-button-1"></i>
                                    </span>
                                </a>
                                <?php
    }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
}?>
    </div>
</section>