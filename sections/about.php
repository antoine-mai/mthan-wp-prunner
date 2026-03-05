<?php defined('ABSPATH') or die('Cheatin\' uh?');

/**
 * Returns the CSF field definitions for the about section instance.
 * @return array
 */
function mthan_section_about_options()
{
    return array(
            array(
            'id' => 'section_style',
            'type' => 'select',
            'title' => 'Section Style',
            'options' => array(
                '1' => 'Style 1 (Standard)',
                '2' => 'Style 2 (Insurance)',
                '3' => 'Style 3 (Experience)',
            ),
            'default' => '1',
        ),
            array(
            'id' => 'about_subtitle',
            'type' => 'text',
            'title' => 'Subtitle (small label)',
            'default' => 'About Us',
        ),
            array(
            'id' => 'about_title',
            'type' => 'text',
            'title' => 'Section Title (H2)',
            'default' => 'Professional Gardener',
        ),
            array(
            'id' => 'about_text',
            'type' => 'textarea',
            'title' => 'Description Paragraph 1',
            'default' => 'Leader in landscaping, lawn care, and irrigation services in Los Angeles since 2004.',
        ),
            array(
            'id' => 'about_text_2',
            'type' => 'textarea',
            'title' => 'Description Paragraph 2',
            'default' => 'Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actualy teachings.',
        ),
            array(
            'id' => 'about_signature',
            'type' => 'upload',
            'title' => 'Signature Image',
        ),
            array(
            'id' => 'about_video_link',
            'type' => 'text',
            'title' => 'Video Link',
            'default' => 'https://www.youtube.com/watch?v=CB_rXABU8DI',
        ),
            array(
            'id' => 'about_btn_text',
            'type' => 'text',
            'title' => 'Button Text',
            'default' => 'Read More',
        ),
            array(
            'id' => 'about_btn_link',
            'type' => 'text',
            'title' => 'Button Link',
            'default' => 'about.html',
        ),

        // Style 1 specific fields
            array(
            'id' => 'about_1_projects_count',
            'type' => 'text',
            'title' => 'Style 1 - Projects Count',
            'default' => '2k',
            'dependency' => array('section_style', '==', '1'),
        ),
            array(
            'id' => 'about_1_projects_text',
            'type' => 'text',
            'title' => 'Style 1 - Projects Text',
            'default' => 'Projects <br>were completed',
            'dependency' => array('section_style', '==', '1'),
        ),
            array(
            'id' => 'about_1_quote_text',
            'type' => 'textarea',
            'title' => 'Style 1 - Quote Text',
            'default' => '“Our Company has established a reputation as the leader in landscape design.”',
            'dependency' => array('section_style', '==', '1'),
        ),
            array(
            'id' => 'about_1_quote_name',
            'type' => 'text',
            'title' => 'Style 1 - Quote Name',
            'default' => 'Chris Stanley,',
            'dependency' => array('section_style', '==', '1'),
        ),
            array(
            'id' => 'about_1_quote_designation',
            'type' => 'text',
            'title' => 'Style 1 - Quote Designation',
            'default' => 'Founder of Pruners',
            'dependency' => array('section_style', '==', '1'),
        ),
            array(
            'id' => 'about_1_featured_image',
            'type' => 'upload',
            'title' => 'Style 1 - Featured Image',
            'dependency' => array('section_style', '==', '1'),
        ),
            array(
            'id' => 'about_1_anim_image',
            'type' => 'upload',
            'title' => 'Style 1 - Animated Image',
            'dependency' => array('section_style', '==', '1'),
        ),
            array(
            'id' => 'about_1_quote_thumb',
            'type' => 'upload',
            'title' => 'Style 1 - Quote Thumbnail',
            'dependency' => array('section_style', '==', '1'),
        ),

        // Style 2 specific fields
            array(
            'id' => 'about_2_insured_title',
            'type' => 'text',
            'title' => 'Style 2 - Insured Title',
            'default' => 'Fully Insured',
            'dependency' => array('section_style', '==', '2'),
        ),
            array(
            'id' => 'about_2_insured_text',
            'type' => 'textarea',
            'title' => 'Style 2 - Insured Text',
            'default' => 'Indignation and dislike men who are so that our garden therefore always holds in these matters too this stone has beguiled and occur demoralized.',
            'dependency' => array('section_style', '==', '2'),
        ),
            array(
            'id' => 'about_2_cert_title',
            'type' => 'text',
            'title' => 'Style 2 - Certificate Title',
            'default' => 'Certified Company',
            'dependency' => array('section_style', '==', '2'),
        ),
            array(
            'id' => 'about_2_cert_number',
            'type' => 'text',
            'title' => 'Style 2 - Certificate Number',
            'default' => 'ISO 9001:2015',
            'dependency' => array('section_style', '==', '2'),
        ),
            array(
            'id' => 'about_2_iso_icon',
            'type' => 'upload',
            'title' => 'Style 2 - ISO Icon',
            'dependency' => array('section_style', '==', '2'),
        ),
            array(
            'id' => 'about_2_anim_image',
            'type' => 'upload',
            'title' => 'Style 2 - Animated Image',
            'dependency' => array('section_style', '==', '2'),
        ),
            array(
            'id' => 'about_2_vid_thumb',
            'type' => 'upload',
            'title' => 'Style 2 - Video Thumbnail',
            'dependency' => array('section_style', '==', '2'),
        ),

        // Style 3 specific fields
            array(
            'id' => 'about_3_exp_years',
            'type' => 'text',
            'title' => 'Style 3 - Experience Years',
            'default' => '16',
            'dependency' => array('section_style', '==', '3'),
        ),
            array(
            'id' => 'about_3_exp_text',
            'type' => 'text',
            'title' => 'Style 3 - Experience Text',
            'default' => 'Years <br>of Experience',
            'dependency' => array('section_style', '==', '3'),
        ),
            array(
            'id' => 'about_3_featured_image',
            'type' => 'upload',
            'title' => 'Style 3 - Featured Image',
            'dependency' => array('section_style', '==', '3'),
        ),
            array(
            'id' => 'about_3_vid_thumb',
            'type' => 'upload',
            'title' => 'Style 3 - Video Thumbnail',
            'dependency' => array('section_style', '==', '3'),
        ),
    );
}

/**
 * Render the about section.
 *
 * @param array $section_data Per-instance CSF field values.
 */
function mthan_section_about_html($section_data)
{
    $style = isset($section_data['section_style']) ? $section_data['section_style'] : '1';

    if ($style === '2') {
        mthan_section_about_html_2($section_data);
    }
    elseif ($style === '3') {
        mthan_section_about_html_3($section_data);
    }
    else {
        mthan_section_about_html_1($section_data);
    }
}

/**
 * Style 1 Rendering
 */
function mthan_section_about_html_1($section_data)
{
    $sec_subtitle = !empty($section_data['about_subtitle']) ? $section_data['about_subtitle'] : 'About Us';
    $sec_title = !empty($section_data['about_title']) ? $section_data['about_title'] : 'Professional Gardener';
    $sec_text = !empty($section_data['about_text']) ? $section_data['about_text'] : '';
    $sec_text_2 = !empty($section_data['about_text_2']) ? $section_data['about_text_2'] : '';

    $projects_count = !empty($section_data['about_1_projects_count']) ? $section_data['about_1_projects_count'] : '2k';
    $projects_text = !empty($section_data['about_1_projects_text']) ? $section_data['about_1_projects_text'] : 'Projects <br>were completed';
    $quote_text = !empty($section_data['about_1_quote_text']) ? $section_data['about_1_quote_text'] : '';
    $quote_name = !empty($section_data['about_1_quote_name']) ? $section_data['about_1_quote_name'] : '';
    $quote_designation = !empty($section_data['about_1_quote_designation']) ? $section_data['about_1_quote_designation'] : '';

    $about_video_link = !empty($section_data['about_video_link']) ? $section_data['about_video_link'] : '#';
    $about_btn_text = !empty($section_data['about_btn_text']) ? $section_data['about_btn_text'] : 'Read More';
    $about_btn_link = !empty($section_data['about_btn_link']) ? $section_data['about_btn_link'] : '#';

    $signature = !empty($section_data['about_signature']['url']) ? $section_data['about_signature']['url'] : get_template_directory_uri() . '/images/resource/signature-1.png';
    $feat_img = !empty($section_data['about_1_featured_image']['url']) ? $section_data['about_1_featured_image']['url'] : get_template_directory_uri() . '/images/resource/featured-image-1.jpg';
    $anim_img = !empty($section_data['about_1_anim_image']['url']) ? $section_data['about_1_anim_image']['url'] : get_template_directory_uri() . '/images/resource/anim-image-1.png';
    $quote_thumb = !empty($section_data['about_1_quote_thumb']['url']) ? $section_data['about_1_quote_thumb']['url'] : get_template_directory_uri() . '/images/resource/quote-thumb.jpg';
?>
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Text Column-->
            <div class="text-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <div class="title-icon">
                            <span class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/leaf-two.png" alt="" title="">
                            </span>
                        </div>
                        <div class="subtitle"><?php echo esc_html($sec_subtitle); ?></div>
                        <h2><?php echo esc_html($sec_title); ?></h2>
                    </div>
                    <div class="text">
                        <?php if ($sec_text): ?>
                            <p class="bigger-text"><?php echo esc_html($sec_text); ?></p>
                        <?php
    endif; ?>
                        <?php if ($sec_text_2): ?>
                            <p><?php echo esc_html($sec_text_2); ?></p>
                        <?php
    endif; ?>
                    </div>
                    <div class="quote-box">
                        <a href="<?php echo esc_url($about_video_link); ?>" class="vid-link lightbox-image">
                            <span class="image"><img src="<?php echo esc_url($quote_thumb); ?>" alt="" title=""></span>
                            <span class="icon flaticon-play-button-1"></span>
                        </a>
                        <div class="quote">
                            <div class="quote-icon"><span></span></div>
                            <div class="quote-text"><?php echo esc_html($quote_text); ?></div>
                            <div class="info">
                                <span class="name"><?php echo esc_html($quote_name); ?></span> 
                                <span class="designation"><?php echo esc_html($quote_designation); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box clearfix">
                        <div class="link-box">
                            <a href="<?php echo esc_url($about_btn_link); ?>" class="theme-btn btn-style-four"><span class="btn-title"><?php echo esc_html($about_btn_text); ?> <i
                                         class="arrow flaticon-play-button-1"></i></span></a>
                        </div>
                        <div class="signature">
                            <img src="<?php echo esc_url($signature); ?>" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
            <!--Image Column-->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-box clearfix">
                        <figure class="image"><img src="<?php echo esc_url($feat_img); ?>" alt="" title=""></figure>
                        <div class="anim-image"><img src="<?php echo esc_url($anim_img); ?>" alt="" title=""></div>
                        <div class="caption">
                            <span class="icon flaticon-leaves"></span>
                            <span class="big-txt"><?php echo esc_html($projects_count); ?></span>
                            <span class="txt"><?php echo wp_kses_post($projects_text); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}?>

<?php function mthan_section_about_html_2($section_data)
{
    $sec_subtitle = !empty($section_data['about_subtitle']) ? $section_data['about_subtitle'] : 'About Us';
    $sec_title = !empty($section_data['about_title']) ? $section_data['about_title'] : 'Professional Gardener';
    $sec_text = !empty($section_data['about_text']) ? $section_data['about_text'] : '';
    $sec_text_2 = !empty($section_data['about_text_2']) ? $section_data['about_text_2'] : '';

    $insured_title = !empty($section_data['about_2_insured_title']) ? $section_data['about_2_insured_title'] : 'Fully Insured';
    $insured_text = !empty($section_data['about_2_insured_text']) ? $section_data['about_2_insured_text'] : '';
    $cert_title = !empty($section_data['about_2_cert_title']) ? $section_data['about_2_cert_title'] : '';
    $cert_number = !empty($section_data['about_2_cert_number']) ? $section_data['about_2_cert_number'] : '';

    $about_btn_text = !empty($section_data['about_btn_text']) ? $section_data['about_btn_text'] : 'Read More';
    $about_btn_link = !empty($section_data['about_btn_link']) ? $section_data['about_btn_link'] : '#';
    $about_video_link = !empty($section_data['about_video_link']) ? $section_data['about_video_link'] : '#';

    $iso_icon = !empty($section_data['about_2_iso_icon']['url']) ? $section_data['about_2_iso_icon']['url'] : get_template_directory_uri() . '/images/icons/iso-icon.png';
    $anim_img = !empty($section_data['about_2_anim_image']['url']) ? $section_data['about_2_anim_image']['url'] : get_template_directory_uri() . '/images/resource/anim-image-3.png';
    $vid_thumb = !empty($section_data['about_2_vid_thumb']['url']) ? $section_data['about_2_vid_thumb']['url'] : get_template_directory_uri() . '/images/resource/vid-thumb-1.jpg';
?>
<section class="about-two">
        <div class="auto-container">
        	<div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="title-icon">
                                <span class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/leaf-two.png" alt="" title="">
                                </span>
                            </div>
                            <div class="subtitle"><?php echo esc_html($sec_subtitle); ?></div>
                            <h2><?php echo esc_html($sec_title); ?></h2>
                        </div>
                        <div class="text">
                            <?php if ($sec_text): ?>
                                <p class="bigger-text"><?php echo esc_html($sec_text); ?></p>
                            <?php
    endif; ?>
                            <?php if ($sec_text_2): ?>
                                <p><?php echo esc_html($sec_text_2); ?></p>
                            <?php
    endif; ?>
                        </div>
                        <div class="insured">
                            <div class="icon"><span class="flaticon-insurance"></span></div>
                            <h5><?php echo esc_html($insured_title); ?></h5>
                            <div class="text"><?php echo esc_html($insured_text); ?></div>
                        </div>
                        <div class="lower-box clearfix">
                            <div class="link-box">
                                <a href="<?php echo esc_url($about_btn_link); ?>" class="theme-btn btn-style-three alternate"><span class="btn-title"><?php echo esc_html($about_btn_text); ?> <i class="arrow flaticon-play-button-1"></i></span></a>
                            </div>
                            <div class="iso">
                                <div class="iso-icon">
                                    <span class="icon">
                                        <img src="<?php echo esc_url($iso_icon); ?>" alt="">
                                    </span>
                                </div>
                                <div class="txt"><?php echo esc_html($cert_title); ?></div>
                                <div class="number"><?php echo esc_html($cert_number); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-box">
                            <figure class="image">
                                <img src="<?php echo esc_url($anim_img); ?>" alt="" title="">
                            </figure>
                            <a href="<?php echo esc_url($about_video_link); ?>" class="vid-link lightbox-image">
                                <span class="image">
                                    <img src="<?php echo esc_url($vid_thumb); ?>" alt="" title="">
                                </span>
                                <span class="icon flaticon-play-button-1"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}?>

<?php function mthan_section_about_html_3($section_data)
{
    $sec_subtitle = !empty($section_data['about_subtitle']) ? $section_data['about_subtitle'] : 'About Us';
    $sec_title = !empty($section_data['about_title']) ? $section_data['about_title'] : 'Professional Gardener';
    $sec_text = !empty($section_data['about_text']) ? $section_data['about_text'] : '';
    $sec_text_2 = !empty($section_data['about_text_2']) ? $section_data['about_text_2'] : '';

    $quote_text = !empty($section_data['about_1_quote_text']) ? $section_data['about_1_quote_text'] : '';
    $quote_name = !empty($section_data['about_1_quote_name']) ? $section_data['about_1_quote_name'] : '';
    $quote_designation = !empty($section_data['about_1_quote_designation']) ? $section_data['about_1_quote_designation'] : '';

    $cert_title = !empty($section_data['about_2_cert_title']) ? $section_data['about_2_cert_title'] : '';
    $cert_number = !empty($section_data['about_2_cert_number']) ? $section_data['about_2_cert_number'] : '';

    $exp_years = !empty($section_data['about_3_exp_years']) ? $section_data['about_3_exp_years'] : '16';
    $exp_text = !empty($section_data['about_3_exp_text']) ? $section_data['about_3_exp_text'] : 'Years <br>of Experience';

    $about_video_link = !empty($section_data['about_video_link']) ? $section_data['about_video_link'] : '#';

    $signature = !empty($section_data['about_signature']['url']) ? $section_data['about_signature']['url'] : get_template_directory_uri() . '/images/resource/signature-1.png';
    $iso_icon = !empty($section_data['about_2_iso_icon']['url']) ? $section_data['about_2_iso_icon']['url'] : get_template_directory_uri() . '/images/icons/iso-icon.png';
    $feat_img = !empty($section_data['about_3_featured_image']['url']) ? $section_data['about_3_featured_image']['url'] : get_template_directory_uri() . '/images/resource/featured-image-12.jpg';
    $vid_thumb = !empty($section_data['about_3_vid_thumb']['url']) ? $section_data['about_3_vid_thumb']['url'] : get_template_directory_uri() . '/images/resource/vid-thumb-2.jpg';
?>
<section class="about-three">
        <div class="auto-container">
        	<div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="title-icon">
                                <span class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/leaf-two.png" alt="" title="">
                                </span>
                            </div>
                            <div class="subtitle"><?php echo esc_html($sec_subtitle); ?></div>
                            <h2><?php echo esc_html($sec_title); ?></h2>
                        </div>
                        <div class="text">
                            <?php if ($sec_text): ?>
                                <p class="bigger-text"><?php echo esc_html($sec_text); ?></p>
                            <?php
    endif; ?>
                            <?php if ($sec_text_2): ?>
                                <p><?php echo esc_html($sec_text_2); ?></p>
                            <?php
    endif; ?>
                        </div>
                        <div class="quote-box">
                            <a href="<?php echo esc_url($about_video_link); ?>" class="vid-link lightbox-image">
                                <span class="image"><img src="<?php echo esc_url($vid_thumb); ?>" alt="" title=""></span>
                                <span class="icon flaticon-play-button-1"></span>
                            </a>
                            <div class="quote">
                                <div class="quote-icon"><span></span></div>
                                <div class="quote-text"><?php echo esc_html($quote_text); ?></div>
                                <div class="info">
                                    <span class="name"><?php echo esc_html($quote_name); ?></span> 
                                    <span class="designation"><?php echo esc_html($quote_designation); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="lower-text">
                            <?php echo esc_html($sec_text); ?>
                        </div>
                        <div class="lower-box clearfix">
                            <div class="signature">
                                <img src="<?php echo esc_url($signature); ?>" alt="" title="">
                            </div>
                            <div class="iso">
                                <div class="iso-icon">
                                    <span class="icon">
                                        <img src="<?php echo esc_url($iso_icon); ?>" alt="">
                                    </span>
                                </div>
                                <div class="txt"><?php echo esc_html($cert_title); ?></div>
                                <div class="number"><?php echo esc_html($cert_number); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-box clearfix">
                            <figure class="image">
                                <img src="<?php echo esc_url($feat_img); ?>" alt="" title="">
                            </figure>
                            <div class="caption">
                                <span class="big-txt"><?php echo esc_html($exp_years); ?></span> 
                                <span class="txt"><?php echo wp_kses_post($exp_text); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}