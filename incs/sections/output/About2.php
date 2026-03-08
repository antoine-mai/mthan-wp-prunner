<?php defined('ABSPATH') || exit;

/**
 * Render the About 2 section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_About2_html($section_data) { ?>
<?php
    $slug = 'About2';
    
    // Core Values
    $title_icon     = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'title_icon'));
    $subtitle       = mthan_get_section_val($slug, $section_data, 'subtitle');
    $title          = mthan_get_section_val($slug, $section_data, 'title');
    $bigger_text    = mthan_get_section_val($slug, $section_data, 'bigger_text');
    $description    = mthan_get_section_val($slug, $section_data, 'description');
    
    // Insured Box
    $insured_icon   = mthan_get_section_val($slug, $section_data, 'insured_icon');
    $insured_title  = mthan_get_section_val($slug, $section_data, 'insured_title');
    $insured_text   = mthan_get_section_val($slug, $section_data, 'insured_text');
    
    // Lower Box
    $btn_text       = mthan_get_section_val($slug, $section_data, 'btn_text');
    $btn_link       = mthan_get_link(mthan_get_section_val($slug, $section_data, 'btn_link'));
    
    // ISO Box
    $iso_icon       = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'iso_icon'));
    $iso_text       = mthan_get_section_val($slug, $section_data, 'iso_text');
    $iso_number     = mthan_get_section_val($slug, $section_data, 'iso_number');
    
    // Image Column
    $main_image     = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'main_image'));
    $vid_thumb      = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'vid_thumb'));
    $vid_link       = mthan_get_link(mthan_get_section_val($slug, $section_data, 'vid_link'));
    $styles = mthan_section_styles($slug, $section_data);
?>
<section class="about-two <?php echo esc_attr($styles['class']); ?>" <?php echo $styles['style']; ?>>
    <div class="auto-container">
        <div class="row clearfix">
            <!--Text Column-->
            <div class="text-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <?php if ($title_icon) { ?>
                        <div class="title-icon">
                            <span class="icon"><img src="<?php echo esc_url($title_icon); ?>" alt="icon"></span>
                        </div>
                        <?php } ?>
                        
                        <?php if ($subtitle) { ?>
                        <div class="subtitle"><?php echo esc_html($subtitle); ?></div>
                        <?php } ?>
                        
                        <?php if ($title) { ?>
                        <h2><?php echo wp_kses_post($title); ?></h2>
                        <?php } ?>
                    </div>
                    
                    <div class="text">
                        <?php if ($bigger_text) { ?>
                        <p class="bigger-text"><?php echo esc_html($bigger_text); ?></p> 
                        <?php } ?>
                        
                        <?php if ($description) { ?>
                        <p><?php echo wp_kses_post($description); ?></p>
                        <?php } ?>
                    </div>
                    
                    <?php if ($insured_title || $insured_icon) { ?>
                    <div class="insured">
                        <?php if ($insured_icon) { ?>
                        <div class="icon"><span class="<?php echo esc_attr($insured_icon); ?>"></span></div>
                        <?php } ?>
                        
                        <?php if ($insured_title) { ?>
                        <h5><?php echo esc_html($insured_title); ?></h5>
                        <?php } ?>
                        
                        <?php if ($insured_text) { ?>
                        <div class="text"><?php echo esc_html($insured_text); ?></div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    
                    <div class="lower-box clearfix">
                        <?php if ($btn_text) { ?>
                        <div class="link-box">
                            <a href="<?php echo esc_url($btn_link); ?>" class="theme-btn btn-style-three alternate">
                                <span class="btn-title"><?php echo esc_html($btn_text); ?> <i class="arrow flaticon-play-button-1"></i></span>
                            </a>
                        </div>
                        <?php } ?>
                        
                        <?php if ($iso_text || $iso_number || $iso_icon) { ?>
                        <div class="iso">
                            <?php if ($iso_icon) { ?>
                            <div class="iso-icon">
                                <span class="icon"><img src="<?php echo esc_url($iso_icon); ?>" alt="iso"></span>
                            </div>
                            <?php } ?>
                            
                            <?php if ($iso_text) { ?>
                            <div class="txt"><?php echo esc_html($iso_text); ?></div>
                            <?php } ?>
                            
                            <?php if ($iso_number) { ?>
                            <div class="number"><?php echo esc_html($iso_number); ?></div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            
            <!--Image Column-->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-box">
                        <?php if ($main_image) { ?>
                        <figure class="image"><img src="<?php echo esc_url($main_image); ?>" alt="image"></figure>
                        <?php } ?>

                        <?php if ($vid_link) { ?>
                        <a href="<?php echo esc_url($vid_link); ?>" class="vid-link lightbox-image">
                            <?php if ($vid_thumb) { ?>
                            <span class="image"><img src="<?php echo esc_url($vid_thumb); ?>" alt="thumb"></span>
                            <?php } ?>
                            <span class="icon flaticon-play-button-1"></span>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
