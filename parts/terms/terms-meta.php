<?php
/**
 * Title:Terms Extra Fields
 * Taxonomy:category,post_tag
 *
 */
?>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptate expedita iste aut ipsum. Maxime exercitationem voluptas similique nam reiciendis id sed atque expedita, tenetur illum officiis, libero minus? Sint.</p>
<?php
piklist('field', array(
    'type' => 'text',
    'field' => 'extra_data',
    'label' => __('Some Extra Data', 'twentyseventeen'),
    'help' => __("Here is some help", 'twentyseventeen'),
    'attributes' => array(
        'class' => 'large-text',
    ),

));
piklist('field', array(
    'type' => 'file',
    'field' => 'category_image',
    'label' => __('Category_image', 'twentyseventeen'),
    'help' => __("Here is some help", 'twentyseventeen'),
    'options' => array(
        'model_title' => __('Category Image', 'twentyseventeen'),
        'help' => __("Add", 'twentyseventeen'),

    ),

));