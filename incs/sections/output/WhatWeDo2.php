<?php defined('ABSPATH') || exit;

/**
 * Render the What We Do 2 section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_WhatWeDo2_html($section_data) { ?>
<?php
    $slug = 'WhatWeDo2';
    $title_icon  = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'title_icon'));
    $subtitle    = mthan_get_section_val($slug, $section_data, 'subtitle');
    $title       = mthan_get_section_val($slug, $section_data, 'title');
    $description = mthan_get_section_val($slug, $section_data, 'description');
    $items       = mthan_get_section_val($slug, $section_data, 'items', array());

    if (empty($items)) return;
?>
<section class="main-services">
    <div class="auto-container">
        <div class="title-box">
            <div class="row clearfix">
                <div class="left-col col-xl-6 col-lg-12 col-md-12">
                    <div class="sec-title alternate">
                        <?php if ($title_icon) { ?>
                        <div class="title-icon"><span class="icon"><img src="<?php echo esc_url($title_icon); ?>" alt="icon"></span></div>
                        <?php } ?>
                        <?php if ($subtitle) { ?>
                        <div class="subtitle"><?php echo esc_html($subtitle); ?></div>
                        <?php } ?>
                        <?php if ($title) { ?>
                        <h2><?php echo wp_kses_post($title); ?></h2>
                        <?php } ?>
                    </div>
                </div>
                <?php if ($description) { ?>
                <div class="right-col col-xl-6 col-lg-12 col-md-12">
                    <div class="text"><?php echo wp_kses_post($description); ?></div>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="row clearfix">
            <?php foreach ($items as $item) { 
                $tit   = isset($item['title']) ? $item['title'] : '';
                $img   = mthan_sec_img(isset($item['image']) ? $item['image'] : '');
                $icon  = isset($item['icon']) ? $item['icon'] : '';
                $text  = isset($item['text']) ? $item['text'] : '';
                $link  = mthan_get_link(isset($item['link']) ? $item['link'] : '');
            ?>
            <!--Service block-->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="upper">
                        <div class="image-box">
                            <?php if ($img) { ?>
                            <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($tit); ?>">
                            <?php } ?>
                        </div>
                        <div class="hvr-icon"><?php echo mthan_get_icon_html($icon); ?></div>
                    </div>
                    <div class="lower">
                        <div class="icon-right"><?php echo mthan_get_icon_html($icon); ?></div>
                        <?php if ($tit) { ?>
                        <h5><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($tit); ?></a></h5>
                        <?php } ?>
                        <?php if ($text) { ?>
                        <div class="text"><?php echo wp_kses_post($text); ?></div>
                        <?php } ?>
                        <div class="more-link"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html__('Read More', 'mthan-wp'); ?> <i class="icon fa fa-caret-right"></i></a></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php }
