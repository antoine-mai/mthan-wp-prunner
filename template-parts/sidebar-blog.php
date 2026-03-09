<?php defined('ABSPATH') or die('Cheatin\' uh?'); 
$sidebar_settings = mthan_get_sidebar_settings();
$sidebar_id = !empty($sidebar_settings['id']) ? $sidebar_settings['id'] : 'blog-sidebar';
?>

<aside class="sidebar blog-sidebar">
    <?php mthan_render_sidebar($sidebar_id); ?>
</aside>