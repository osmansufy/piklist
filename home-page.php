<?php
/**
 * Template Name:Homepage
 */
$h_section_ids = get_post_meta(get_the_ID(), 'related_posts');
foreach ($h_section_ids as $h_section_id) {
    $h_section_type = get_post_meta($h_section_id, 't_section_type', true);
    echo get_the_title($h_section_id) . " :" . $h_section_type . "<br/>";
}
$p_image_id = get_post_meta(get_the_ID(), 'my_upload_field', true);
echo get_the_attachment_link($p_image_id, 'large');
