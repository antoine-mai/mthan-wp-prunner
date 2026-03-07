<?php defined('ABSPATH') || exit;

/**
 * Render the Services section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_Services_html($section_data) { ?>
<?php
    $slug = 'Services';
    $items = mthan_get_section_val($slug, $section_data, 'items', array());

    if (empty($items)) return;
?>
<section class="main-services">
    <div class="auto-container">
        <div class="row clearfix">
            <?php foreach ($items as $item) { 
                $title = isset($item['title']) ? $item['title'] : '';
                $icon  = isset($item['icon']) ? $item['icon'] : 'flaticon-hedge';
                $img   = mthan_sec_img(isset($item['image']) ? $item['image'] : '');
                $desc  = isset($item['description']) ? $item['description'] : '';
                $lnk   = mthan_get_link(isset($item['link']) ? $item['link'] : '');
            ?>
            <!--Service block-->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="upper">
                        <?php if ($img) { ?>
                        <div class="image-box">
                            <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($title); ?>">
                        </div>
                        <?php } ?>
                        <div class="hvr-icon"><span class="<?php echo esc_attr($icon); ?>"></span></div>
                    </div>
                    <div class="lower">
                        <div class="icon-right"><span class="<?php echo esc_attr($icon); ?>"></span></div>
                        <?php if ($title) { ?>
                        <h5><a href="<?php echo esc_url($lnk); ?>"><?php echo esc_html($title); ?></a></h5>
                        <?php } ?>
                        <?php if ($desc) { ?>
                        <div class="text"><?php echo wp_kses_post($desc); ?></div>
                        <?php } ?>
                        <div class="more-link">
                            <a href="<?php echo esc_url($lnk); ?>">
                                <?php esc_html_e('Read More', 'mthan'); ?> <i class="icon fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php }
