<?php
/**
 * Title:Related Posts
 * Post Type:page
 * Tab: My Tab
 * Flow: My Flow
 */
piklist('field', array(
    'type' => 'select',
    'field' => 'related_posts',
    'label' => __('Related Posts', 'twentyseventeen'),
    'add_more' => true,
    'choices' => piklist(get_posts(array(
        'posts_per_page' => -1,
        'post_type' => 'section',
        'post_status' => 'publish',
    )
    ),
        array('ID', 'post_title')),

));
piklist('field', array(
    'type' => 'file'
    , 'field' => 'my_upload_field'
    , 'scope' => 'post_meta'
    , 'label' => 'Media Uploader'
    , 'options' => array(
        'modal_title' => 'Add File(s)'
        , 'button' => 'Add',
    ),
    'add_more' => true,
));
