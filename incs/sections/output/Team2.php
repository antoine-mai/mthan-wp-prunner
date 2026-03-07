<?php defined('ABSPATH') || exit;

/**
 * Render the Team 2 section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_Team2_html($section_data) { ?>
<?php
    $slug = 'Team2';
    $title_icon  = mthan_sec_img(mthan_get_section_val($slug, $section_data, 'title_icon'));
    $subtitle    = mthan_get_section_val($slug, $section_data, 'subtitle');
    $title       = mthan_get_section_val($slug, $section_data, 'title');
    $items       = mthan_get_section_val($slug, $section_data, 'items', array());

    if (empty($items)) return;
?>
<section class="team-two">
    <div class="auto-container">
        <div class="sec-title">
            <?php if ($title_icon) { ?>
            <div class="title-icon"><span class="icon"><img src="<?php echo esc_url($title_icon); ?>" alt="icon"></span></div>
            <?php } ?>
            <?php if ($subtitle) { ?>
            <div class="subtitle"><?php echo esc_html($subtitle); ?></div>
            <?php } ?>
            <?php if ($title) { ?>
            <h2><?php echo esc_html($title); ?></h2>
            <?php } ?>
        </div>

        <div class="team-box">
            <div class="team-carousel owl-theme owl-carousel">
                <?php foreach ($items as $item) { 
                    $name       = isset($item['name']) ? $item['name'] : '';
                    $desig      = isset($item['designation']) ? $item['designation'] : '';
                    $phone      = isset($item['phone']) ? $item['phone'] : '';
                    $phone_icon = isset($item['phone_icon']) ? $item['phone_icon'] : 'flaticon-headphones';
                    $img        = mthan_sec_img(isset($item['image']) ? $item['image'] : '');
                    $lnk        = mthan_get_link(isset($item['link']) ? $item['link'] : '');
                    $socials    = isset($item['socials']) ? $item['socials'] : array();
                ?>
                <!--Team block-->
                <div class="team-block-two">
                    <div class="inner-box">
                        <div class="upper">
                            <div class="image-box">
                                <?php if ($img) { ?>
                                <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($name); ?>">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="lower">
                            <?php if ($desig) { ?>
                            <div class="designation"><?php echo esc_html($desig); ?></div>
                            <?php } ?>
                            <?php if ($name) { ?>
                            <h5><a href="<?php echo esc_url($lnk); ?>"><?php echo esc_html($name); ?></a></h5>
                            <?php } ?>
                            <div class="phone-box">
                                <?php if ($phone) { ?>
                                <a href="<?php echo esc_url($lnk); ?>" class="phone"><span class="icon <?php echo esc_attr($phone_icon); ?>"></span><?php echo esc_html($phone); ?></a>
                                <?php } ?>
                                <?php if (!empty($socials)) { ?>
                                <div class="share-it">
                                    <span class="theme-btn share-icon flaticon-share-1"></span>
                                    <div class="share-list">
                                        <ul class="clearfix">
                                            <?php foreach ($socials as $soc) { ?>
                                            <li><a href="<?php echo esc_url($soc['url']); ?>"><span class="<?php echo esc_attr($soc['icon']); ?>"></span></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php }
