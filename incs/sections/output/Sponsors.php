<?php defined('ABSPATH') || exit;

/**
 * Render the Sponsors section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_Sponsors_html($section_data) { ?>
<?php
    $slug = 'Sponsors';
    $items = mthan_get_section_val($slug, $section_data, 'items', array());

    if (empty($items)) return;
?>
<section class="sponsors-section">
    <div class="sponsors-outer">
        <!--Sponsors-->
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="sponsors-carousel owl-theme owl-carousel">
                <?php foreach ($items as $item) { 
                    $logo = mthan_sec_img(isset($item['image']) ? $item['image'] : '');
                    $link = mthan_get_link(isset($item['link']) ? $item['link'] : '');
                    if (!$logo) continue;
                ?>
                <div class="slide-item">
                    <figure class="image-box"><a href="<?php echo esc_url($link); ?>"><img src="<?php echo esc_url($logo); ?>" alt="sponsor logo"></a></figure>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php }
