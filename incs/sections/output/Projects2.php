<?php defined('ABSPATH') || exit;

/**
 * Render the Projects 2 section (Fixed 7 Items Masonry).
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_Projects2_html($section_data) { ?>
<?php
    $slug = 'Projects2';
    $title_icon = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'title_icon'));
    $subtitle   = mthan_get_section_val($slug, $section_data, 'subtitle');
    $title      = mthan_get_section_val($slug, $section_data, 'title');
    $count      = mthan_get_section_val($slug, $section_data, 'count', 7);
    $btn_text   = mthan_get_section_val($slug, $section_data, 'btn_text');
    $btn_link   = mthan_get_link(mthan_get_section_val($slug, $section_data, 'btn_link'));

    // Fixed configuration for each item to maintain Masonry layout
    $item_configs = array(
        1 => array('class' => 'col-lg-6 col-md-12 col-sm-12'),
        2 => array('class' => 'col-lg-3 col-md-6 col-sm-12'),
        3 => array('class' => 'col-lg-3 col-md-6 col-sm-12'),
        4 => array('class' => 'col-lg-3 col-md-6 col-sm-12'),
        5 => array('class' => 'col-lg-3 col-md-6 col-sm-12'),
        6 => array('class' => 'col-lg-6 col-md-12 col-sm-12'),
        7 => array('class' => 'col-lg-3 col-md-6 col-sm-12'),
    );

    $args = array(
        'post_type'      => 'mthan_project',
        'posts_per_page' => $count,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);

    $styles = mthan_section_styles($slug, $section_data);
    if (!$query->have_posts()) return;
?>
<section class="projects-two <?php echo esc_attr($styles['class']); ?>" <?php echo $styles['style']; ?>>
    <div class="auto-container">
        <div class="upper-box clearfix">
            <div class="sec-title">
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
            
            <?php if ($btn_text) { ?>
            <div class="link-box">
                <a href="<?php echo esc_url($btn_link); ?>" class="theme-btn btn-style-four">
                    <span class="btn-title"><?php echo esc_html($btn_text); ?> <i class="arrow flaticon-play-button-1"></i></span>
                </a>
            </div>
            <?php } ?>
        </div>

        <div class="masonry-box">
            <div class="row masonry-container clearfix">
                <!-- Grid Sizer -->
                <div class="column-width col-lg-3 col-md-6 col-sm-12" style="height: 0; padding: 0; margin: 0; visibility: hidden;"></div>

                <?php 
                $i = 0;
                while ($query->have_posts()) { 
                    $query->the_post();
                    $i++;
                    
                    $tit    = get_the_title();
                    $img    = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $link   = get_permalink();
                    
                    // Try to get category from meta if available
                    $cat    = get_post_meta(get_the_ID(), 'project_category', true);
                    $cat_l  = '#';
                    
                    // Cycle through configs if more than 7
                    $config_idx = (($i - 1) % 7) + 1;
                    $class  = $item_configs[$config_idx]['class'];
                ?>
                <!--Project Block-->
                <div class="project-block-two masonry-item <?php echo esc_attr($class); ?>">
                    <div class="inner-box">
                        <?php if ($img) { ?>
                        <div class="image-box">
                            <img src="<?php echo esc_url($img); ?>" alt="image">
                        </div>
                        <?php } ?>
                        <div class="hover-box">
                            <div class="hvr-content">
                                <?php if ($cat) { ?>
                                <div class="cat"><a href="<?php echo esc_url($cat_l); ?>"><?php echo esc_html($cat); ?></a></div>
                                <?php } ?>
                                <?php if ($tit) { ?>
                                <h5><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($tit); ?></a></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
<?php }
