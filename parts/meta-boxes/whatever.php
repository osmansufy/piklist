<?php
/**
 * Title:Some Metabox Title
 *
 * Post Type:Post
 * Flow:My Flow
 * Tab: My Tab2
 */

piklist('field', array(
    'type' => 'text',
    'field' => 'my_text',
    'label' => __('My text', 'twentyseventeen'),
    'attributes' => array(
        'class' => 'widefat',
    ),

));

piklist('field', array(
    'type' => 'colorpicker',
    'field' => 'my_color',
    'label' => __('Color Picker', 'twentyseventeen'),
    'value' => '#FF0000',
));
piklist('field', array(
    'type' => 'text',
    'field' => 'favfoods',
    'label' => __('Foods', 'twentyseventeen'),
    'add_more' => true,
    'validate' => array(
        array(
            'type' => 'limit',
            'options' => array(
                'min' => 2,
                'max' => 6,
            ),
        ),
    ),
));

piklist('field', array(
    'type' => 'radio'
    , 'field' => 'subscribe_to_newsletter'
    , 'label' => 'Would you like to subscribe to our newsletter?'
    , 'attributes' => array(
        'class' => 'text',
    )
    , 'choices' => array(
        'yes' => 'Yes'
        , 'no' => 'No',
    )
    , 'value' => 'no',
));

piklist('field', array(
    'type' => 'text'
    , 'field' => 'email_address'
    , 'label' => 'Email Address'
    , 'description' => 'Please enter your email address'
    , 'conditions' => array(
        array(
            'field' => 'subscribe_to_newsletter'
            , 'value' => 'yes',
        ),
    ),
));
piklist('field', array(
    'type' => 'file'
    , 'field' => 'my_upload_basic_field'
    , 'scope' => 'post_meta'
    , 'label' => 'Basic Upload Field'
    , 'preview_size' => 'medium'
    , 'options' => array(
        'basic' => true,
    ),
));
