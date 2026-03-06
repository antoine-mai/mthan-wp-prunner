<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Get section instance fields
 * @return array
 **/
function mthan_get_section_instance_fields()
{
    $fields = [];
    $sections_path = get_template_directory() . '/sections/';
    
    // ──────────────────────────────────────────────────────────────────
    // 1. Style Selectors (Dynamic)
    // ──────────────────────────────────────────────────────────────────
    $style_map = mthan_get_section_style_map();
    foreach ($style_map as $base_slug => $style_files) {
        $style_count = count($style_files);
        if ($style_count > 1) {
            $options = [];
            for ($s = 1; $s <= $style_count; $s++) {
                $options[$s] = "Style {$s}";
            }
            $fields[] = [
                'id' => 'section_style',
                'type' => 'select',
                'title' => 'Style Variant',
                'options' => $options,
                'default' => '1',
                'dependency' => ['section_template', '==', $base_slug],
            ];
        }
    }

    // ──────────────────────────────────────────────────────────────────
    // 2. Content Overrides (Dynamic from sections/*.php)
    // ──────────────────────────────────────────────────────────────────
    if (is_dir($sections_path)) {
        $files = glob($sections_path . '*.php');
        if ($files) {
            foreach ($files as $file) {
                $slug = basename($file, '.php');
                $options_func = 'mthan_section_' . str_replace('-', '_', $slug) . '_options';
               
                if (function_exists($options_func)) {
                    $content_fields = $options_func();
                    $overrides = [];
                    $global_options = get_option(MTHAN_THEME_OPTIONS, []);

                    foreach($content_fields as $cf) {
                        // Populate default from global configuration if available
                        if (isset($cf['id'])) {
                            $field_id = str_replace($slug . '_', '', $cf['id']);
                            $global_key = 'g_' . $slug . '_' . $field_id;
                            if (isset($global_options[$global_key])) {
                                $cf['default'] = $global_options[$global_key];
                            }
                        }
                        
                        // Prefix Title for clarity
                        if (isset($cf['title'])) {
                            $cf['title'] = 'Override ' . $cf['title'];
                        }

                        // Handle internal dependencies
                        if (isset($cf['dependency'])) {
                            $cf['dependency'] = [
                                ['section_template', '==', $slug],
                                $cf['dependency']
                            ];
                        } else {
                            $cf['dependency'] = ['section_template', '==', $slug];
                        }

                        // Ensure the ID matches the mthan_get_section_val expectation: slug_field
                        if (isset($cf['id'])) {
                            $cf['id'] = $slug . '_' . str_replace($slug . '_', '', $cf['id']);
                        }

                        $overrides[] = $cf;
                    }

                    // ────────── ADD BACKGROUND & PADDING OVERRIDES ──────────
                    $overrides[] = [
                        'type'    => 'subheading',
                        'content' => 'Section Appearance',
                        'dependency' => ['section_template', '==', $slug],
                    ];

                    $bg_id = $slug . '_background';
                    $overrides[] = [
                        'id'         => $bg_id,
                        'type'       => 'background',
                        'title'      => 'Override Background Settings',
                        'dependency' => ['section_template', '==', $slug],
                        'default'    => isset($global_options['g_' . $bg_id]) ? $global_options['g_' . $bg_id] : [],
                    ];

                    $pad_id = $slug . '_padding';
                    $overrides[] = [
                        'id'         => $pad_id,
                        'type'       => 'spacing',
                        'title'      => 'Override Padding Settings',
                        'left'       => false,
                        'right'      => false,
                        'units'      => ['px', '%', 'em', 'rem'],
                        'dependency' => ['section_template', '==', $slug],
                        'default'    => isset($global_options['g_' . $pad_id]) ? $global_options['g_' . $pad_id] : [
                            'top'    => '120',
                            'bottom' => '120',
                            'unit'   => 'px',
                        ],
                    ];
                    // ──────────────────────────────────────────────────────
                    
                    if (!empty($overrides)) {
                        foreach($overrides as $override_field) {
                            $fields[] = $override_field;
                        }
                    }
                }
            }
        }
    }

    // ──────────────────────────────────────────────────────────────────
    // 3. Universal Attributes (Only ID should be universal)
    // ──────────────────────────────────────────────────────────────────
    $fields[] = [
        'id'      => 'section_id',
        'type'    => 'text',
        'title'   => 'Section ID',
        'desc'    => 'Optional ID for this section instance (useful for anchor links)',
    ];

    return $fields;
}