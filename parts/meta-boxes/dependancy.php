<?php
/**
 * Title:Dependancy Metabox Title
 *
 * Post Type:Post
 * Tab: My Tab
 *  Flow: My Flow
 */

piklist('field', array(
    'type' => 'select',
    'field' => 'colors',
    'label' => __('select color', 'twentyseventeen'),
    'attributes' => array(
        'class' => 'widefat',
    ),
    'choices' => array(
        'red' => __("RED", 'twentyseventeen'),
        'green' => __("Green", 'twentyseventeen'),
        'cyan' => __("Cyan", 'twentyseventeen'),
        'other' => __("Other", 'twentyseventeen'),
    ),

));
piklist('field', array(
    'type' => 'colorpicker',
    'field' => 'othercolor',
    'label' => __('select color', 'twentyseventeen'),
    'value' => '#FFFFF',
    'conditions' => array(
        array(
            'field' => 'colors',
            'value' => 'other',
        ),
    ),

));
