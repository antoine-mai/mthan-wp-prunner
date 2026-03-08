<?php defined('ABSPATH') || exit;

/**
 * Render the Content Editor section.
 *
 * @param array $section_data CSF field values for this section instance.
 */
function mthan_section_ContentEditor_html($section_data) {
    $slug = 'ContentEditor';
    $content = mthan_get_section_val($slug, $section_data, 'content');
    $extra_class = mthan_get_section_val($slug, $section_data, 'extra_class');

    if (empty($content)) {
        return;
    }
    ?>
    <section class="content-editor-section <?php echo esc_attr($extra_class); ?>">
        <div class="auto-container">
            <div class="text">
                <?php echo do_shortcode(wpautop($content)); ?>
            </div>
        </div>
    </section>
    <?php
}
