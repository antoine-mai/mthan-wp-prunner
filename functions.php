<?php defined('ABSPATH') || exit;
/**
 * functions.php — loader only.
 * All function definitions live in incs/.
 */

// ── Core framework & options ───────────────────────────────────────
require_once get_template_directory() . '/incs/codestar/autoload.php';
require_once get_template_directory() . '/incs/theme-options.php';

// ── Theme helpers ─────────────────────────────────────────────────
require_once get_template_directory() . '/incs/theme-setup.php';
require_once get_template_directory() . '/incs/section-helpers.php';
require_once get_template_directory() . '/incs/admin-helpers.php';

// ── Section files (registers mthan_section_*_html / *_options fns) ─
add_action('after_setup_theme', function () {
    foreach (glob(get_template_directory() . '/sections/*.php') as $file) {
        require_once $file;
    }
}, 5);