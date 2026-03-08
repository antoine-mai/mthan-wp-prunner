<?php defined('ABSPATH') || exit;

/**
 * Render the Contact 1 section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_Contact1_html($section_data) { ?>
<?php
    $slug = 'Contact1';
    $title_icon  = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'title_icon'));
    $subtitle    = mthan_get_section_val($slug, $section_data, 'subtitle');
    $title       = mthan_get_section_val($slug, $section_data, 'title');
    $sub_text    = mthan_get_section_val($slug, $section_data, 'sub_text');
    $discount    = mthan_get_section_val($slug, $section_data, 'discount');
    $cf7_short   = mthan_get_section_val($slug, $section_data, 'cf7_shortcode');
    $side_img    = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'side_image'));
    $styles = mthan_section_styles($slug, $section_data);
?>
<section class="contact-section <?php echo esc_attr($styles['class']); ?>" <?php echo $styles['style']; ?>>
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <!--Text Column-->
            <div class="text-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner">
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
                        <?php if ($sub_text) { ?>
                        <div class="sub-text"><?php echo wp_kses_post($sub_text); ?></div>
                        <?php } ?>
                    </div>
                    <div class="form-outer">
                        <div class="form-box">
                            <?php if ($discount) { ?>
                            <div class="discount"><?php echo esc_html($discount); ?></div>
                            <?php } ?>
                            <!--Newsletter-->
                            <div class="quote-form default-form">
                                <?php if ($cf7_short) { 
                                    echo do_shortcode($cf7_short);
                                } else { ?>
                                <form method="post" action="#">
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="name" value="" placeholder="Your Name *" required>
                                                <span class="alt-icon far fa-user"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="email" name="email" value="" placeholder="Email Address *" required>
                                                <span class="alt-icon far fa-envelope"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="phone" value="" placeholder="Phone *" required>
                                                <span class="alt-icon fa fa-phone-alt"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <select class="custom-select-box" name="service">
                                                    <option>Choose Service</option>
                                                    <option>Spring Cleanup</option>
                                                    <option>Plants Planting</option>
                                                    <option>Water Fountain</option>
                                                    <option>Hard Scaping</option>
                                                    <option>Garden Care</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="address" value="" placeholder="Address *" required>
                                                <span class="alt-icon fa fa-map-marker-alt"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <button type="submit" class="theme-btn btn-style-three alternate"><span class="btn-title">Get a Quote <i class="arrow flaticon-play-button-1"></i></span></button>
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
            <!--Image Column-->
            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-box clearfix">
                        <?php if ($side_img) { ?>
                        <figure class="image"><img src="<?php echo esc_url($side_img); ?>" alt="contact image"></figure>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
