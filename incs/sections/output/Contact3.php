<?php defined('ABSPATH') || exit;

/**
 * Render the Contact 3 section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_Contact3_html($section_data) { ?>
<?php
    $slug = 'Contact3';
    
    // Left Col
    $left_icon      = mthan_get_section_val($slug, $section_data, 'left_icon');
    $sec_title_icon = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'sec_title_icon'));
    $subtitle       = mthan_get_section_val($slug, $section_data, 'subtitle');
    $title          = mthan_get_section_val($slug, $section_data, 'title');
    
    $address_title  = mthan_get_section_val($slug, $section_data, 'address_title');
    $address_text   = mthan_get_section_val($slug, $section_data, 'address_text');
    $map_link_text  = mthan_get_section_val($slug, $section_data, 'map_link_text');
    $map_url        = mthan_get_section_val($slug, $section_data, 'map_url');
    
    $info_items     = mthan_get_section_val($slug, $section_data, 'info_items', array());
    
    // Right Col
    $form_bg        = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'form_bg'));
    $form_image     = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'form_image'));
    $form_subtitle  = mthan_get_section_val($slug, $section_data, 'form_subtitle');
    $form_title     = mthan_get_section_val($slug, $section_data, 'form_title');
    $form_shortcode = mthan_get_section_val($slug, $section_data, 'form_shortcode');
?>
<section class="contact-three">
    <div class="outer-container">
        <div class="row clearfix">
            
            <!--Text Col-->
            <div class="text-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner clearfix">
                    <?php if ($left_icon) { ?>
                    <div class="top-icon"><?php echo mthan_get_icon_html($left_icon); ?></div>
                    <?php } ?>
                    
                    <div class="content-box">
                        <div class="sec-title">
                            <?php if ($sec_title_icon) { ?>
                            <div class="title-icon"><span class="icon"><img src="<?php echo esc_url($sec_title_icon); ?>" alt="icon"></span></div>
                            <?php } ?>
                            <?php if ($subtitle) { ?>
                            <div class="subtitle"><?php echo esc_html($subtitle); ?></div>
                            <?php } ?>
                            <?php if ($title) { ?>
                            <h2><?php echo esc_html($title); ?></h2>
                            <?php } ?>
                        </div>

                        <?php if ($address_title || $address_text) { ?>
                        <div class="address">
                            <?php if ($address_title) { ?><h5><?php echo esc_html($address_title); ?></h5><?php } ?>
                            <?php if ($address_text) { ?><div class="text"><?php echo wp_kses_post($address_text); ?></div><?php } ?>
                            <?php if ($map_link_text) { ?>
                            <div class="link">
                                <a href="<?php echo esc_url($map_url); ?>" class="theme-btn"><span class="btn-title"><?php echo esc_html($map_link_text); ?> <i class="arrow flaticon-play-button-1"></i></span></a>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>

                        <div class="info">
                            <div class="row clearfix">
                                <?php foreach ($info_items as $item) { 
                                    $item_title = isset($item['title']) ? $item['title'] : '';
                                    $item_icon  = isset($item['icon']) ? $item['icon'] : '';
                                    $item_lines = isset($item['lines']) ? explode("\n", $item['lines']) : array();
                                ?>
                                <!--Block-->
                                <div class="info-block col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <?php if ($item_icon) { ?>
                                        <div class="icon"><?php echo mthan_get_icon_html($item_icon); ?></div>
                                        <?php } ?>
                                        <?php if ($item_title) { ?><h6><?php echo esc_html($item_title); ?></h6><?php } ?>
                                        <ul>
                                            <?php foreach ($item_lines as $line) { if (trim($line)) { ?>
                                            <li><?php echo esc_html($line); ?></li>
                                            <?php } } ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Form Col-->
            <div class="form-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <?php if ($form_bg) { ?>
                <div class="image-layer" style="background-image:url(<?php echo esc_url($form_bg); ?>);"></div>
                <?php } ?>
                <?php if ($form_image) { ?>
                <div class="image-right"><img src="<?php echo esc_url($form_image); ?>" alt="form foreground"></div>
                <?php } ?>
                
                <div class="inner clearfix">
                    <div class="content-box">
                        <div class="sec-title">
                            <?php if ($sec_title_icon) { ?>
                            <div class="title-icon"><span class="icon"><img src="<?php echo esc_url($sec_title_icon); ?>" alt="icon"></span></div>
                            <?php } ?>
                            <?php if ($form_subtitle) { ?>
                            <div class="subtitle"><?php echo esc_html($form_subtitle); ?></div>
                            <?php } ?>
                            <?php if ($form_title) { ?>
                            <h2><?php echo esc_html($form_title); ?></h2>
                            <?php } ?>
                        </div>

                        <div class="contact-form default-form">
                            <?php if ($form_shortcode) { 
                                echo do_shortcode($form_shortcode);
                            } else { ?>
                            <form method="post" action="#" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="username" value="" placeholder="Your Name *" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <input type="email" name="email" value="" placeholder="Email Address*" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="phone" value="" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <select class="custom-select-box" name="subject">
                                                <option>Subject</option>
                                                <option>Spring Cleanup</option>
                                                <option>Plants Planting</option>
                                                <option>Water Fountain</option>
                                                <option>Hard Scaping</option>
                                                <option>Garden Care</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="Your Message ..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <button type="submit" class="theme-btn btn-style-four alternate">
                                                <span class="btn-title">Submit Now <i class="arrow flaticon-play-button-1"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php }
