<?php defined('ABSPATH') || exit;

/**
 * Render the Why Us 3 section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_WhyUs3_html($section_data) { ?>
<?php
    $slug = 'WhyUs3';
    $title_icon  = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'title_icon'));
    $subtitle    = mthan_get_section_val($slug, $section_data, 'subtitle');
    $title       = mthan_get_section_val($slug, $section_data, 'title');
    $description = mthan_get_section_val($slug, $section_data, 'description');
    $items       = mthan_get_section_val($slug, $section_data, 'items', array());
?>
<section class="why-us-three">
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
                        <h2><?php echo esc_html($title); ?></h2>
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

        <?php if (!empty($items)) { ?>
        <div class="why-box">
            <div class="row clearfix">
                <?php foreach ($items as $item) { 
                    $item_title = isset($item['title']) ? $item['title'] : '';
                    $item_icon  = isset($item['icon']) ? $item['icon'] : '';
                    $item_text  = isset($item['text']) ? $item['text'] : '';
                ?>
                <!--Why Block-->
                <div class="why-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <?php echo mthan_get_icon_html($item_icon, 'class="icon"'); ?>
                        </div>
                        <?php if ($item_title) { ?>
                        <h5><?php echo esc_html($item_title); ?></h5>
                        <?php } ?>
                        <?php if ($item_text) { ?>
                        <div class="text"><?php echo wp_kses_post($item_text); ?></div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>

    </div>
</section>
<?php }
