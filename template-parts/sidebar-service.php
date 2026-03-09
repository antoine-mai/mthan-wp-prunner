<?php defined('ABSPATH') or die('Cheatin\' uh?'); 
$sidebar_settings = mthan_get_sidebar_settings();
$sidebar_id = !empty($sidebar_settings['id']) ? $sidebar_settings['id'] : 'service-sidebar';
?>

<aside class="sidebar services-sidebar">
    <?php mthan_render_sidebar($sidebar_id); ?>
</aside>
