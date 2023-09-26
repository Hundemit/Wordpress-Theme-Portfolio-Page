<?php

/* 
Plugin Name: Roter Hintergrund
Description: Färbt den Body rot ein
Author: Jonas Hellwig
*/
function tailpress_setup()
{
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'tailpress'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support(
        'custom-logo'
    );
    add_theme_support('post-thumbnails');

    add_theme_support(
        'align-wide'
    );
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');


function is_using_page_or_single_template()
{
    if (is_page() || is_single()) {
        return true;
    } else {
        return false;
    }
}


function add_head_javascript()
{
    add_editor_style('style.css');
    get_template_part('js/tailwindJs');
    get_template_part('js/customJsForHeader');
}

function add_footer_javascript()
{
    get_template_part('js/customJs');
}

add_action('wp_head', 'add_head_javascript');
add_action('wp_footer', 'add_footer_javascript');

function get_first_text_paragraph($post_id)
{
    // Get the post content
    $post = get_post($post_id);
    $content = $post->post_content;

    // Remove shortcodes from the content
    $content = strip_shortcodes($content);


    // Get the first paragraph
    $paragraphs = explode('</p>', $content);
    $first_paragraph = $paragraphs[0];

    // Remove any remaining HTML tags
    $first_paragraph = wp_strip_all_tags($first_paragraph);

    echo $first_paragraph;
}

function get_post_without_first_paragraph($post_id)
{
    // Get the post content
    $post = get_post($post_id);
    $content = $post->post_content;

    // Delete the first paragraph
    $content = preg_replace('/<p>.*?<\/p>/', '', $content, 1);

    // Remove shortcodes from the content
    $content = strip_shortcodes($content);

    return $content;
}

function get_first_image($post_id)
{
    // Get the post content
    $post = get_post($post_id);
    $content = $post->post_content;

    // Get the first image from the content
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
    $first_img = $matches[1][0];

    echo $first_img;
}

function delete_first_image($content)
{
    // Get the post content
    // $post = get_post($post_id);
    // $content = $post->post_content;

    // Delete the first image from the content
    $content = preg_replace('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', '', $content, 1);

    return $content;
}

function get_galleries_images($post_id)
{
    $galleries = array();
    $content = get_post_field('post_content', $post_id);
    preg_match_all('/<figure class="wp-block-gallery.+?>(.+?)<\/figure>/', $content, $matches);
    if (isset($matches[1])) {
        foreach ($matches[1] as $match) {
            preg_match_all('/<img src="(.+?)" alt=".+?"\/>/', $match, $images);
            if (isset($images[1])) {
                $galleries[] = $images[1];
            }
        }
    }
    return $galleries;
}

function replace_gallery($post_content)
{
    // Suche nach allen Galerien im Post-Content
    preg_match_all('/<figure class="wp-block-gallery(.*?)<\/figure>/s', $post_content, $matches, PREG_SET_ORDER);

    // Durchsuche jede Galerie nach Bildern und speichere die Bild-URLs in einem Array
    foreach ($matches as $gallery) {
        // Suche nach Bildern innerhalb der Galerie
        preg_match_all('/<img.*?src=["\'](.*?)["\']/si', $gallery[0], $img_matches);

        // foreach ($img_matches as $img) {
        //     // preg_match_all('/<img.*?src=["\'](.*?)["\']/si', $img, $img_matches);
        //     // $post_content = str_replace($img, '<!-- Hier die neue Gallerie einfügen -->', $post_content);

        // }

        // // Entferne die Original-Galerie aus dem Post-Content
        // $post_content = str_replace($gallery, '<!-- Hier die neue Gallerie einfügen -->', $post_content);
    }



    // return $gallery[0];
}


function get_blog_text($post_id)
{
    $post = get_post_without_first_paragraph($post_id);

    $post = delete_first_image($post);

    $post = replace_galleries_with_custom_gallery($post);
  
  	$post = remove_link_button($post);


    echo $post;
}

function remove_link_button($content)
{
    // Remove the div containing the link button
    $content = preg_replace('/<div[^>]*?wp-block-button[^>]*?id="LINK"[^>]*?>.*?<\/div>/', '', $content);

    return $content;
}


function replace_galleries_with_custom_gallery($content)
{
    // Suche nach allen Galerien im Inhalt
    preg_match_all('/<!--\s*wp:gallery[^>]*-->.*?<!--\s*\/wp:gallery\s*-->/s', $content, $matches);

    $image_sources_array = array();

    // Iteriere durch alle gefundenen Bildergalerien
    // Iteriere durch alle gefundenen Bildergalerien
    foreach ($matches[0] as $match) {
        // Suche nach allen Bild-Quellen in der Bildergalerie
        preg_match_all('/<img.*?src="(.*?)"/', $match, $image_matches);

        // Speichere alle Bildquellen in einem Array
        $image_sources = $image_matches[1];

        // Füge die Bildquellen dem 2D-Array hinzu
        array_push($image_sources_array, $image_sources);


        // Ersetze die Bildergalerie im Inhalt durch die eigene Galerie
        ob_start();
        include(__DIR__ . '/template_parts/gallery-custom.php');
        $custom_gallery = ob_get_clean();
        $content = str_replace($match, $custom_gallery, $content);
    }

    return $content;

    // return implode("\n", $image_sources_array[0]);
}

function is_exists_link_button($post_id)
{
    $post = get_post($post_id);
    $content = $post->post_content;

    // Check if the link button div exists in the content
    $pattern = '/<div[^>]*?wp-block-button[^>]*?id="LINK"[^>]*?>.*?<\/div>/i';
    $exists = preg_match($pattern, $content);

    return $exists;
}

function get_link_from_button($post_id)
{
  
  $post = get_post($post_id);
    $content = $post->post_content;
    // Find the link URL using regex pattern
    $pattern = '/<a[^>]*?class="wp-block-button__link[^>]*?href="([^"]+)".*?>/i';
    preg_match($pattern, $content, $matches);

    if (isset($matches[1])) {
        $link = $matches[1];
        return $link;
    }

    return false;
}


