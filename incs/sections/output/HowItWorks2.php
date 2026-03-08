<?php defined('ABSPATH') || exit;

/**
 * Render the How It Works 2 section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_HowItWorks2_html($section_data) { ?>
<?php
    $slug = 'HowItWorks2';
    $title_icon  = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'title_icon'));
    $subtitle    = mthan_get_section_val($slug, $section_data, 'subtitle');
    $title       = mthan_get_section_val($slug, $section_data, 'title');
    $description = mthan_get_section_val($slug, $section_data, 'description');
    $items       = mthan_get_section_val($slug, $section_data, 'items', array());

    $styles = mthan_section_styles($slug, $section_data);
    if (empty($items)) return;
?>
<section class="work-process-two <?php echo esc_attr($styles['class']); ?>" <?php echo $styles['style']; ?>>
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

        <div class="process">
            <div class="row clearfix">
                <?php foreach ($items as $item) { 
                    $tit   = isset($item['title']) ? $item['title'] : '';
                    $count = isset($item['count']) ? $item['count'] : '';
                    $icon  = isset($item['icon']) ? $item['icon'] : '';
                    $text  = isset($item['text']) ? $item['text'] : '';
                ?>
                <!--Process Block-->
                <div class="process-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon">
                                <?php echo mthan_get_icon_html($icon); ?>
                            </div>
                            <?php if ($count) { ?>
                            <div class="count"><span class="number"><?php echo esc_html($count); ?></span></div>
                            <?php } ?>
                        </div>
                        <?php if ($tit) { ?>
                        <h5><?php echo esc_html($tit); ?></h5>
                        <?php } ?>
                        <?php if ($text) { ?>
                        <div class="text"><?php echo wp_kses_post($text); ?></div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </div>
</section>
<?php }
