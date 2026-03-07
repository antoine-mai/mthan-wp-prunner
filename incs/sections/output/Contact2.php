<?php defined('ABSPATH') || exit;

/**
 * Render the Contact 2 section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_Contact2_html($section_data) { ?>
<?php
    $slug = 'Contact2';
    $left_title  = mthan_get_section_val($slug, $section_data, 'left_title');
    $map_iframe  = mthan_get_section_val($slug, $section_data, 'map_iframe');
    $info_items  = mthan_get_section_val($slug, $section_data, 'info_items', array());
    $form_title  = mthan_get_section_val($slug, $section_data, 'form_title');
    $form_text   = mthan_get_section_val($slug, $section_data, 'form_text');
    $cf7_short   = mthan_get_section_val($slug, $section_data, 'cf7_shortcode');
?>
<section class="contact-two">
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <!--Map Column-->
            <div class="map-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <?php if ($left_title) { ?>
                    <div class="title">
                        <h2><?php echo wp_kses_post($left_title); ?></h2>
                    </div>
                    <?php } ?>
                    <div class="map-outer">
                        <?php if ($map_iframe) { ?>
                        <div class="map-box">
                            <?php echo $map_iframe; // Keep as is to allow iframe ?>
                        </div>
                        <?php } ?>
                        
                        <?php if (!empty($info_items)) { ?>
                        <div class="info-box">
                            <ul class="info clearfix">
                                <?php foreach ($info_items as $item) { 
                                    $icon = isset($item['icon']) ? $item['icon'] : '';
                                    $text = isset($item['text']) ? $item['text'] : '';
                                ?>
                                <li>
                                    <?php if ($icon) { ?>
                                    <span class="icon <?php echo esc_attr($icon); ?>"></span>
                                    <?php } ?>
                                    <?php if ($text) { ?>
                                    <div class="text"><?php echo wp_kses_post($text); ?></div>
                                    <?php } ?>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--Text Column-->
            <div class="form-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="form-outer">
                        <?php if ($form_title) { ?>
                        <div class="title-box">
                            <h4><?php echo esc_html($form_title); ?></h4>
                        </div>
                        <?php } ?>
                        <div class="form-box">
                            <?php if ($form_text) { ?>
                            <div class="text"><?php echo wp_kses_post($form_text); ?></div>
                            <?php } ?>
                            <!--Appointment-->
                            <div class="default-form">
                                <?php if ($cf7_short) { 
                                    echo do_shortcode($cf7_short);
                                } else { ?>
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="text" name="name" value="" placeholder="Your Name *" required>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="phone" value="" placeholder="Phone *" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="email" name="email" value="" placeholder="Email *" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
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
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <select class="custom-select-box" name="service">
                                                <option>Property Type</option>
                                                <option>Commercial</option>
                                                <option>Residential</option>
                                                <option>Industries</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <button type="submit" class="theme-btn btn-style-four alternate"><span class="btn-title">Time Schedule <i class="arrow flaticon-play-button-1"></i></span></button>
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
    </div>
</section>
<?php }
