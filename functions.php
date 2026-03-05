<?php defined('ABSPATH') || exit;
/**
 * functions.php — loader only.
 * All function definitions live in incs/.
 */

// ── Core framework ─────────────────────────────────────────────────
require_once get_template_directory() . '/incs/codestar/autoload.php';

// ── Theme helpers (must load BEFORE theme-options; layouts.php calls these) ──
require_once get_template_directory() . '/incs/section-helpers.php';
require_once get_template_directory() . '/incs/theme-setup.php';
require_once get_template_directory() . '/incs/admin-helpers.php';

// ── Theme Options (loads admin/layouts.php which calls mthan_get_available_base_sections) ──
require_once get_template_directory() . '/incs/theme-options.php';

// ── Section files (registers mthan_section_*_html / *_options fns) ─
add_action('after_setup_theme', function () {
    foreach (glob(get_template_directory() . '/sections/*.php') as $file) {
        require_once $file;
    }
}, 5);