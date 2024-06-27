<?php 
/**
 * Creates the custom fields for adding content to the tabs
 */

 if( function_exists( 'acf_add_options_page') ){
    $page_opt = array(
        'page_title' => 'Custom Tabs Content Management',
        'menu_title' => 'Tabs Content',
        'menu_slug' => 'custom_tabs_content',
        'redirect' => true,
    );
    acf_add_options_page( $page_opt );
    echo "nada";
 }

 if( function_exists( 'add_local_fields_group' )){

 }

 function create_groups_array(){
    $all_tabs_groups = array();
    $max_tabs = 6; 

    for ($i = 1; i < $max_tabs; $i++){
        $tab[] = array(
            'key' => 'tab_'.$i,
            'title' => 'Tab '.$i,
            'fields' => array(
                array(
                    'key'=> 'field_1',
                    'label' => 'Tab label'.$i,
                    'name' => 'tab_label_'.$i,
                    'type' => 'text',
                    'instructions' => 'Label for tab '.$i,
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                array(
                    'key'=> 'field_2',
                    'label' => 'Main Image'.$i,
                    'name' => 'main_image_'.$i,
                    'type' => 'text',
                    'instructions' => 'Main image for tab '.$i,
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'post',
                        ),
                    ),
                ),
            )
        );   
    }
 }

 $group_basic = array();
/* add_local_fields_group();*/