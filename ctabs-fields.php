<?php 
/**
 * Creates the custom fields for adding content to the tabs
 */
function create_options_page(){
    if( function_exists( 'acf_add_options_page') ){
        $page_opt = array(
            'page_title' => 'Custom Tabs Content Management',
            'menu_title' => 'Tabs Content',
            'menu_slug' => 'custom_tabs_content',
            'redirect' => true,
        );
        acf_add_options_page( $page_opt );
    
     }
} 

function create_field_group(){
    if( function_exists( 'acf_add_local_field_group' )){
        $all_tabs_groups = array(
            'key' => 'tab_group_1',
            'title' => 'Group for tabs creation',
            'fields' => array(
                array(
                'key' => 'field_1',
                'label' => 'Custom tabs content',
                'name' => 'custom_tabs_content',
                'type' => 'repeater',
                'instructions' => 'Add the content of the tabs section',
                'required' => 0,
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
                'sub_fields' => array(
                            array(
                                'key'=> 'field_1r',
                                'label' => 'Tab label',
                                'name' => 'tab_label_',
                                'type' => 'text',
                                'instructions' => 'Label for the the tab ',
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
                                'key'=> 'field_2r',
                                'label' => 'Tab main image',
                                'name' => 'tab_label_',
                                'type' => 'image',
                                'instructions' => 'Label for the the tab ',
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
                                'key'=> 'field_3r',
                                'label' => 'Tab quote text',
                                'name' => 'tab_quote_text',
                                'type' => 'wysiwyg',
                                'instructions' => 'Quote text ',
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
                        )
                )
    
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
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
        );

        acf_add_local_field_group($all_tabs_groups);

    }

}

add_action('init', 'create_options_page');
add_action('init', 'create_field_group');