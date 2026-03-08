<?php defined('ABSPATH') || exit;

/**
 * Render the Projects 1 section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_Projects1_html($section_data) { ?>
<?php
    $slug = 'Projects1';
    $title_icon = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'title_icon'));
    $subtitle   = mthan_get_section_val($slug, $section_data, 'subtitle');
    $title      = mthan_get_section_val($slug, $section_data, 'title');
    $count      = mthan_get_section_val($slug, $section_data, 'count', 6);
    $lower_text = mthan_get_section_val($slug, $section_data, 'lower_text');
    $btn_text   = mthan_get_section_val($slug, $section_data, 'btn_text');
    $btn_link   = mthan_get_link(mthan_get_section_val($slug, $section_data, 'btn_link'));

    $args = array(
        'post_type'      => 'mthan_project',
        'posts_per_page' => $count,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);

    if (!$query->have_posts()) return;
?>
<section class="projects-section">
    <div class="auto-container">
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

        <div class="carousel-box">
            <div class="project-carousel owl-theme owl-carousel">
                <?php while ($query->have_posts()) { 
                    $query->the_post();
                    $img   = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $i_tit = get_the_title();
                    $link  = get_permalink();
                    
                    // Try to get category from meta if available
                    $cat   = get_post_meta(get_the_ID(), 'project_category', true);
                    $cat_l = '#'; // Might need taxonomy link later
                ?>
                <!--Project Block-->
                <div class="project-block">
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
                                <?php if ($i_tit) { ?>
                                <h5><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($i_tit); ?></a></h5>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="link-box"><a href="<?php echo esc_url($link); ?>"><span class="icon flaticon-right-arrow-1"></span></a></div>
                    </div>
                </div>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
        
        <?php if ($lower_text || $btn_text) { ?>
        <div class="lower-text">
            <?php echo wp_kses_post($lower_text); ?> 
            <?php if ($btn_text) { ?>
            <a href="<?php echo esc_url($btn_link); ?>" class="theme-btn"><?php echo esc_html($btn_text); ?> <i class="arrow flaticon-play-button-1"></i></a>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>
<?php }
