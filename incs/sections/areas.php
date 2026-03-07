<?php defined('ABSPATH') or die('Cheatin\' uh?');

/**
 * Render the areas section.
 *
 * @param array $section_data Per-instance CSF field values.
 */
function mthan_section_areas_html($section_data) { 
    $slug = 'areas';
    $blocks = mthan_get_section_val($slug, $section_data, 'blocks', array());
    if (empty($blocks)) return;
?>
<section class="areas-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <?php foreach ($blocks as $block) { 
                    $title = !empty($block['title']) ? $block['title'] : '';
                    $subtitle = !empty($block['subtitle']) ? $block['subtitle'] : '';
                    $icon = !empty($block['icon']) ? $block['icon'] : '';
                    $link = !empty($block['link']) ? $block['link'] : '#';
                ?>
                <!--Area Block-->
                <div class="area-block col-lg-4 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="content">
                            <div class="icon">
                                <span class="<?php echo esc_attr($icon); ?>"></span>
                            </div>
                            <h5>
                                <a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a>
                            </h5>
                            <div class="sub-text"><?php echo esc_html($subtitle); ?></div>
                        </div>
                        <div class="link-box">
                            <a href="<?php echo esc_url($link); ?>" class="theme-btn">
                                <span class="flaticon-plus-1"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php }
