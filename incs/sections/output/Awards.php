<?php defined('ABSPATH') || exit;

/**
 * Render the Awards section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_Awards_html($section_data) { ?>
<?php
    $slug = 'Awards';
    $bottom_img  = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'bottom_image'));
    $bg_image    = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'bg_image'));
    $bg_icon     = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'bg_icon'));
    $content_ico = mthan_get_section_val($slug, $section_data, 'content_icon');
    $subtitle    = mthan_get_section_val($slug, $section_data, 'subtitle');
    $title       = mthan_get_section_val($slug, $section_data, 'title');
    $description = mthan_get_section_val($slug, $section_data, 'description');
    $btn_text    = mthan_get_section_val($slug, $section_data, 'btn_text');
    $btn_link    = mthan_get_link(mthan_get_section_val($slug, $section_data, 'btn_link'));
    $items       = mthan_get_section_val($slug, $section_data, 'items', array());

    if (empty($items)) return;
?>
<section class="awards-section">
    <?php if ($bottom_img) { ?>
    <div class="bottom-image"><img src="<?php echo esc_url($bottom_img); ?>" alt="anim image"></div>
    <?php } ?>
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <?php if ($bg_image) { ?>
                <div class="image-layer" style="background-image: url(<?php echo esc_url($bg_image); ?>);"></div>
                <?php } ?>
                <?php if ($bg_icon) { ?>
                <div class="bg-icon"><img src="<?php echo esc_url($bg_icon); ?>" alt="icon"></div>
                <?php } ?>
                <div class="inner clearfix">
                    <div class="content-box">
                        <div class="content">
                            <div class="title-box">
                                <?php if ($content_ico) { ?>
                                <div class="icon-box"><span class="icon <?php echo esc_attr($content_ico); ?>"></span></div>
                                <?php } ?>
                                <?php if ($subtitle) { ?>
                                <div class="subtitle"><?php echo esc_html($subtitle); ?></div>
                                <?php } ?>
                                <?php if ($title) { ?>
                                <h4><?php echo wp_kses_post($title); ?></h4>
                                <?php } ?>
                            </div>
                            <?php if ($description) { ?>
                            <div class="text"><?php echo wp_kses_post($description); ?></div>
                            <?php } ?>
                            <?php if ($btn_text) { ?>
                            <div class="link-box"><a href="<?php echo esc_url($btn_link); ?>" class="theme-btn btn-style-three"><span class="btn-title"><?php echo esc_html($btn_text); ?> <i class="arrow flaticon-play-button-1"></i></span></a></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--Right Column-->
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner clearfix">
                    <div class="carousel-box">
                        <div class="awards-carousel owl-theme owl-carousel">
                            <?php foreach ($items as $item) { 
                                $label     = isset($item['label']) ? $item['label'] : '';
                                $date      = isset($item['date']) ? $item['date'] : '';
                                $tit       = isset($item['title']) ? $item['title'] : '';
                                $aw_img    = mthan_sec_img(isset($item['image']) ? $item['image'] : '');
                                if (!$aw_img) {
                                  // Default gallery image if not set
                                  $aw_img = get_template_directory_uri() . '/assets/images/gallery/7.jpg';
                                }
                            ?>
                            <!--Award Block-->
                            <div class="award-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="award-date"><?php echo wp_kses_post($label); ?></span></div>
                                    <div class="date"><?php echo esc_html($date); ?></div>
                                    <h6><?php echo wp_kses_post($tit); ?></h6>
                                    <div class="link-box">
                                        <a href="<?php echo esc_url($aw_img); ?>" class="has-tooltip lightbox-image" title="Award Images"><span class="fa fa-image"></span><span class="t-tip-box"><span class="t-t-text">Award Images</span></span></a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php }
