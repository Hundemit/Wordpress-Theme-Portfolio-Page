<?php
/**
 * Template Name: My Projects
 * Template Post Type: page
 */

get_header("page");
?> <?php 
    // Hier wird das Template-Part my-projects-grid.php geladen
    get_template_part('template_parts/my-pojects-grid'); 
  ?> <?php get_footer("page"); ?>