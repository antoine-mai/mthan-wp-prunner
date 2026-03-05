<?php defined('ABSPATH') || exit;

// ──────────────────────────────────────────────────────────────────
// Admin JS: auto-fill section Name field from the select label
// ──────────────────────────────────────────────────────────────────
function mthan_admin_section_autofill_js()
{
?>
<script>
(function ($) {
    function syncSectionName($select) {
        var label = $select.find('option:selected').text().trim();
        var $group = $select.closest('.csf-field-group-item, .csf-group-item');
        var $nameField = $group.find('input[data-section-name]');
        if ($nameField.length && label) {
            $nameField.val(label).trigger('input').trigger('change');
        }
    }
    // On change
    $(document).on('change', 'select', function () {
        var $select = $(this);
        var $group = $select.closest('.csf-field-group-item, .csf-group-item');
        if ($group.length && $group.find('input[data-section-name]').length) {
            syncSectionName($select);
        }
    });
    // On cloning (when new group item is added)
    $(document).on('csf:group-added csf:repeater-added', function (e, $item) {
        $item.find('select').each(function () {
            var $s = $(this);
            var $g = $s.closest('.csf-field-group-item, .csf-group-item');
            if ($g.length && $g.find('input[data-section-name]').length) {
                syncSectionName($s);
            }
        });
    });
})(jQuery);
</script>
<?php
}
add_action('admin_footer', 'mthan_admin_section_autofill_js');
