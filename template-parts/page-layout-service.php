<?php
/**
 * Page Layout: Service List
 */
?>
<div class="services-content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>
