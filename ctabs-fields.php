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
        acf_add_options_page();
    
        }
} 

function create_field_group(){

        if( function_exists( 'acf_add_local_field_group' )){
            $all_tabs_groups = array(
                'key' => 'group_1f4345fg',
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
                    'layout' => 'block',
                    'button_label' => 'Add tab',
                    'readonly' => 0,
                    'disabled' => 0,
                    'sub_fields' => array(
                                array(
                                    'key'=> 'field_1r',
                                    'label' => 'Tab label',
                                    'name' => 'tab_label',
                                    'type' => 'text',
                                    'instructions' => 'Label for the the tab',
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
                                    'parent_repeater' => 'field_1',
                                ), 
                                array(
                                    'key'=> 'field_2r',
                                    'label' => 'Tab main image',
                                    'name' => 'tab_main_back',
                                    'type' => 'image',
                                    'instructions' => 'Main background image',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array (
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'return_format' => 'url',
                                    'preview_size' => 'thumbnail',
                                    'library' => 'all',
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                    'parent_repeater' => 'field_1',
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
                                    'tabs' => 'all',
                                    'toolbar' => 'full',
                                    'media_upload' => 1,
                                    'parent_repeater' => 'field_1',
                                ), 
                                array(
                                    'key'=> 'field_4r',
                                    'label' => 'Tab right top text',
                                    'name' => 'tab_right_top_text',
                                    'type' => 'text',
                                    'instructions' => 'Text for the upper right section ',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array (
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'parent_repeater' => 'field_1',
                                ),
                                array(
                                    'key'=> 'field_5r',
                                    'label' => 'Tab right top hightlight text',
                                    'name' => 'tab_right_top_hightlight_text',
                                    'type' => 'text',
                                    'instructions' => 'Highlightted Text for the upper right section ',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array (
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'parent_repeater' => 'field_1',
                                ),
                                array(
                                    'key'=> 'field_78r',
                                    'label' => 'Tab right bottom text',
                                    'name' => 'tab_right_bottom_text',
                                    'type' => 'text',
                                    'instructions' => 'Bottom Text',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array (
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'parent_repeater' => 'field_1',
                                ),  
                                array(
                                    'key' => 'field_6r',
                                    'label' => 'Icons for the tab',
                                    'name' => 'icons_for_the_tab',
                                    'type' => 'repeater',
                                    'instructions' => 'Add the icons for this tab',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array (
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layout' => 'block',
                                    'button_label' => 'Add icon',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                    'parent_repeater' => 'field_1',
                                    'sub_fields' =>array(
                                        array(
                                            'key'=> 'field_288r',
                                            'label' => 'Tab icon',
                                            'name' => 'tab_icon',
                                            'type' => 'image',
                                            'instructions' => 'Add an icon ',
                                            'required' => 1,
                                            'conditional_logic' => 0,
                                            'wrapper' => array (
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'return_format' => 'url',
                                            'preview_size' => 'thumbnail',
                                            'library' => 'all',
                                            'readonly' => 0,
                                            'disabled' => 0,
                                            'parent_repeater' => 'field_6r',
                                        )
                                    )
                                ),
                                array(
                                    'key'=> 'field_91r',
                                    'label' => 'Name and position',
                                    'name' => 'name_position',
                                    'type' => 'wysiwyg',
                                    'instructions' => 'Name and position of the testimonial',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array (
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'parent_repeater' => 'field_1',
                                ),
                                array(
                                    'key'=> 'field_156r',
                                    'label' => 'Client Picture',
                                    'name' => 'client_picture',
                                    'type' => 'image',
                                    'instructions' => 'Picture of the client',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array (
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'return_format' => 'url',
                                    'preview_size' => 'thumbnail',
                                    'library' => 'all',
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                    'parent_repeater' => 'field_1',
                                ), 
                                array(
                                    'key'=> 'field_452r',
                                    'label' => 'Icon testimonial',
                                    'name' => 'icon_testimonial',
                                    'type' => 'image',
                                    'instructions' => 'Client company icon',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array (
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'return_format' => 'url',
                                    'preview_size' => 'thumbnail',
                                    'library' => 'all',
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                    'parent_repeater' => 'field_1',
                                )       
                            )
                    )
        
                ),
                'location' => array (
                            array (
                                array (
                                    'param' => 'options_page',
                                    'operator' => '==',
                                    'value' => 'acf-options',
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

add_action('init', 'create_options_page'); //it does not work with admin_init
add_action('init', 'create_field_group');