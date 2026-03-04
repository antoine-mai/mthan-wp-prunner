<?php defined('ABSPATH') or die('Cheatin\' uh?');
get_header();
mthan_render_global_sections('before', 'main');
mthan_render_page_sections('before');
?>

<div class="sidebar-page-container blog-page">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-content">
                    <?php if (have_posts()) { while (have_posts()) { the_post(); ?>
                    <div class="post-details">
                        <div class="inner-box">

                            <div class="post-meta">
                                <ul class="clearfix">
                                    <li class="author">
                                        <span class="thumb"><img src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" alt=""></span>
                                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">By: <?php the_author(); ?></a>
                                    </li>
                                    <li><a href="#"><span class="icon far fa-comment"></span> Comments: <?php echo get_comments_number(); ?></a></li>
                                    <li><a href="#"><span class="icon far fa-calendar"></span> <?php echo get_the_date(); ?></a></li>
                                </ul>
                            </div>

                            <?php if (has_post_thumbnail()) { ?>
                            <div class="upper">
                                <div class="image-box">
                                    <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="lower">
                                <div class="text">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                            <div class="lower-info clearfix">
                                <div class="related-tags">
                                    <ul class="clearfix">
                                        <li><span class="fa fa-tags"></span> Tags :</li>
                                        <li><?php the_tags('', ', '); ?></li>
                                    </ul>
                                </div>
                                <div class="share-post">
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="author-box">
                        <div class="inner-box">
                            <figure class="thumb"><img src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" alt=""></figure>
                            <h5><?php the_author(); ?></h5>
                            <div class="link"><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">View all posts</a></div>
                            <div class="text"><?php the_author_meta('description'); ?></div>
                        </div>
                    </div>

                    <div class="post-controls">
                        <div class="inner clearfix">
                            <?php $prev = get_previous_post(); if ($prev) { ?>
                            <div class="prev-post">
                                <a href="<?php echo esc_url(get_permalink($prev->ID)); ?>">
                                    <?php if (has_post_thumbnail($prev->ID)) { echo get_the_post_thumbnail($prev->ID, 'thumbnail'); } ?>
                                    <div class="upper-title"><span class="icon fa fa-caret-left"></span>&ensp; Prev Post</div>
                                    <span class="txt"><?php echo esc_html(get_the_title($prev->ID)); ?></span>
                                </a>
                            </div>
                            <?php } $next = get_next_post(); if ($next) { ?>
                            <div class="next-post">
                                <a href="<?php echo esc_url(get_permalink($next->ID)); ?>">
                                    <?php if (has_post_thumbnail($next->ID)) { echo get_the_post_thumbnail($next->ID, 'thumbnail'); } ?>
                                    <div class="upper-title">Next Post &ensp;<span class="icon fa fa-caret-right"></span></div>
                                    <span class="txt"><?php echo esc_html(get_the_title($next->ID)); ?></span>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="comments-area">
                        <?php comments_template(); ?>
                    </div>

                    <?php } } ?>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</div>

<?php
mthan_render_page_sections('after');
mthan_render_global_sections('after', 'main');
get_footer();