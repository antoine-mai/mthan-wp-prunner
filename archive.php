<?php defined('ABSPATH') or die('Cheatin\' uh?');
get_header();
mthan_render_global_sections('before', 'blog');
mthan_render_page_sections('before');
?>

<main id="site-content">
    <h1><?php the_archive_title(); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </article>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'No posts found.', 'my-theme' ); ?></p>
<?php endif; ?>
</main>

<?php 
mthan_render_page_sections('after');
mthan_render_global_sections('after', 'blog');
get_footer(); ?>
