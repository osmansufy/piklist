<?php
/**
 *
 * Title:Job Application Information
 * Post Type:job
 */
piklist('field', array(
    'type' => 'email',
    'field' => 'email',

    'label' => 'Email',
    'scope' => 'post_meta',
));
piklist('field', array(
    'type' => 'text',
    'field' => 'phone',

    'label' => 'Phone Number',
    'scope' => 'post_meta',
));
