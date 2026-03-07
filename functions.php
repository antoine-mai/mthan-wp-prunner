<?php defined('ABSPATH') || exit;
/**
 * functions.php — loader only.
 * All function definitions live in incs/ and sections/.
 */

// Theme options prefix — single source of truth
define('MTHAN_THEME_OPTIONS', 'mthan_theme_options');
define('MTHAN_PAGE_OPTIONS', 'mthan_page_options');
define('MTHAN_MENU_OPTIONS', 'mthan_menu_options');

// ── Core framework ─────────────────────────────────────────────────
require_once get_template_directory() . '/incs/codestar/autoload.php';

// ── Autoload /incs/ directory ──────────────────────────────────────
$mthan_autoload_incs = function($dir) use (&$mthan_autoload_incs) {
    if (!is_dir($dir)) return;

    // Load all PHP files in the current directory
    foreach (glob($dir . '/*.php') as $file) {
        // Skip theme-options.php, we need to load it last
        if (basename($file) === 'theme-options.php') {
            continue;
        }
        require_once $file;
    }

    // Recursively load subdirectories (except codestar framework)
    foreach (glob($dir . '/*', GLOB_ONLYDIR) as $subdir) {
        if (basename($subdir) === 'codestar') {
            continue;
        }
        $mthan_autoload_incs($subdir);
    }
};

$mthan_autoload_incs(get_template_directory() . '/incs');

// ── Theme Options (loads admin/layouts.php → section-instance-fields.php) ──
require_once get_template_directory() . '/incs/theme-options.php';