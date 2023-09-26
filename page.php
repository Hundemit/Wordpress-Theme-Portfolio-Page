<?php
/**
 * Template Name: Page Default
 * Template Post Type: page
 */

get_header('page');
?> <div class="loop"> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('template_parts/content', 'page'); ?> <?php endwhile; else : ?>
    <?php get_template_part('template_parts/content', 'error'); ?> <?php endif; ?> </div> <?php get_footer("page"); ?>