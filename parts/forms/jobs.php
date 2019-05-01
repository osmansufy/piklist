<?php
/**
 * Title:Job Application
 * Method:post
 * Message:Your Job Application Has Been Received
 * Looged in:false
 */
piklist('field', array(
    'type' => 'hidden',
    'field' => 'post_type',
    'value' => 'job',
    'scope' => 'post',
));
piklist('field', array(
    'type' => 'hidden',
    'field' => 'post_status',
    'value' => 'pending',
    'scope' => 'post',
));
piklist('field', array(
    'type' => 'text',
    'field' => 'post_title',

    'label' => 'Your Name',
    'scope' => 'post',
));
piklist('field', array(
    'type' => 'textarea',
    'field' => 'post_content',

    'label' => 'Biography',
    'scope' => 'post',
));
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
piklist('field', array(
    'type' => 'submit',
    'field' => 'submit',

    'value' => 'Apply',

));
