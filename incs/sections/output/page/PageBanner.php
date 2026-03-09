<?php defined('ABSPATH') || exit;

/**
 * Render the Page Banner section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_PageBanner_html($section_data) { ?>
<?php
    $slug = 'PageBanner';
    $bg_img     = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'bg_image'));
    $title      = mthan_get_section_val($slug, $section_data, 'title');
    $home_text  = mthan_get_section_val($slug, $section_data, 'home_text');
    $bc_title   = mthan_get_section_val($slug, $section_data, 'breadcrumb_title');

    $styles = mthan_section_styles($slug, $section_data);
    if (empty($title)) {
        $title = get_the_title();
    }
    if (empty($bc_title)) {
        $bc_title = $title;
    }
?>
<section class="page-banner <?php echo esc_attr($styles['class']); ?>" <?php echo $styles['style']; ?>>
    <div class="image-layer" <?php if ($bg_img) { ?>style="background-image:url(<?php echo esc_url($bg_img); ?>);"<?php } ?>></div>
    <div class="banner-bottom-pattern"></div>

    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1><?php echo esc_html($title); ?></h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><span class="fa fa-home"></span><?php if ($home_text) echo ' ' . esc_html($home_text); ?></a></li>
                        <li class="active"><?php echo esc_html($bc_title); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
