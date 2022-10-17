<?php 

if(class_exists('CSF')){


    // Set a unique slug-like ID
    $prefix = 'novena_options';

    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => __('Novena Options'),
        'menu_slug'  =>'novena-options',
        'framework_title' => __('Novena Theme Options', 'novena'),
        'theme'=> 'dark',
    ));

    //Create Header Section
    CSF::createSection( $prefix, array(
        'id'     => 'header_section',
        'title'  => __('Header Section', 'novena'),
        'icon'   => 'fas fa-server'
    ));
    
    //Create Header Section
    CSF::createSection($prefix, array(
        'parent'=> 'header_section',
        'title' =>__('Header Top', 'novena'),
        'fields'=> array(
            array(
                'id'=>'header_top_bar',
                'title'=>__('Header Top bar', 'novena'),
                'type' =>'switcher',
                'label'   => 'Do you want activate Header Top ?',
                'default' => true,
            ),
            array(
                'id'=>'header_top_icon',
                'title'=>__('Header Top Icon', 'novena'),
                'type' =>'icon',
                'default' => 'fas fa-headset',
                'button_title' => __('Change Icon', 'novena'),
            ),
            array(
                'id'=>'header_top_email',
                'title'=>__('Header Top Email', 'novena'),
                'type' =>'text',
                'placeholder' => __('Please write your email', 'novena')
            ),

            array(
                'id'=>'header_top_address_icon',
                'title'=>__('Header Top Address Icon', 'novena'),
                'type' =>'icon',
                'default' => 'fas fa-map-marker-alt',
                'button_title' => __('Change Icon', 'novena'),
            ),

            array(
                'id'=>'header_top_address',
                'title'=>__('Header Top Address', 'novena'),
                'type' =>'text',
                'placeholder' => __('Please write your Address', 'novena')
            ),

            array(
                'id'=>'header_top_right_text',
                'title'=>__('Header Top Right Text', 'novena'),
                'type' =>'text',
                'placeholder' => __('Write Text', 'novena')
            ),

            array(
                'id'=>'header_top_right_number',
                'title'=>__('Header Top Right Number', 'novena'),
                'type' =>'text',
                'placeholder' => __('Write Number', 'novena')
            ),

        )

    ));
    
    CSF::createSection($prefix , array(
        'parent' => 'header_section',
        'title' => __('Header Style', 'novena'),
        'icon' =>'fas fa-tint',
        'fields'=> array(
            array(
                'id'=>'header_top_bg',
                'title'=> __('Header Top Background Color', 'novena'),
                'type'=> 'background',
                'background_image' => false,
                'background_position' => false,
                'background_repeat' => false,
                'background_attachment' => false,
                'background_size' => false,
                'output'=>'.header-top-bar',
                'default' => array(
                    'background-color' =>'#223a66'
                )
            ),

            array(
                'id'=>'header_top_icon_color',
                'title'=> __('Header Top Icon Color', 'novena'),
                'type'=> 'color',
                'output'=>'.top-bar-info li a i',
                'default' => '#FFFFFF',
            ),

            array(
                'id'=>'header_top_email_color',
                'title'=> __('Header Top Email Color', 'novena'),
                'type'=> 'color',
                'output'=>'.top-bar-info li a',
                'default' => '#FFFFFF',
            ),
            
            array(
                'id'=>'header_top_address_icon_color',
                'title'=> __('Header Top Address Icon Color', 'novena'),
                'type'=> 'color',
                'output'=>'.list-inline-item i',
                'default' => '#FFFFFF',
            ),
            array(
                'id'=>'header_top_address_color',
                'title'=> __('Header Top Address Color', 'novena'),
                'type'=> 'color',
                'output'=>'.list-inline-item',
                'default' => '#FFFFFF',
            ),

            array(
                'id'=>'header_top_right',
                'title'=> __('Header Top Right Text Color', 'novena'),
                'type'=> 'color',
                'output'=>'.top-right-bar a span',
                'default' => '#FFFFFF',
            ),
            array(
                'id'=>'header_top_right_text_size',
                'title'=> __('Header Top Right Text Size', 'novena'),
                'type'=> 'number',
                'unit'     => 'rem',
                'output'=>'.top-right-bar span',
                'output_mode' => 'font-size',
                'default' => 1.5,
            ),
        )
    ));


    //Create Banner Section
    CSF::createSection( $prefix, array(
        'id'     => 'banner_section',
        'title'  => __('Banner Section', 'novena'),
        'icon'   => 'fas fa-layer-group'
    ));

    CSF::createSection($prefix, array(
        'parent'=> 'banner_section',
        'title' =>__('Banner Section', 'novena'),
        'icon'   => 'fas fa-pencil-alt',
        'fields'=> array(
            array(
                'id'=>'banner_subtitle',
                'title'=>__('Banner Subtitle', 'novena'),
                'type' =>'text',
                'placeholder' => __('Banner Subtitle', 'novena')
            ),

            array(
                'id'=>'banner_title',
                'title'=>__('Banner Title', 'novena'),
                'type' =>'text',
                'placeholder' => __('Banner Title', 'novena')
            ),

            array(
                'id'=>'banner_description',
                'title'=>__('Banner Description', 'novena'),
                'type' =>'textarea',
                'placeholder' => __('Banner Description', 'novena')
            ),

            array(
                'id'=>'banner_button',
                'title'=>__('Banner Button', 'novena'),
                'type' =>'link',
                'add_title' => __('Add Button', 'novena'),
                'edit_title' => __('Edit Button', 'novena'),
                'remove_title' => __('Remove Button', 'novena'),
                
            ),

            array(
                'id'=>'banner_btn_icon',
                'title'=>__('Button Icon', 'novena'),
                'type' =>'icon',
                'default' => 'fas fa-arrow-right', 
                'placeholder' => __('Icon', 'novena')
            ),

            array(
                'id'=>'banner_background',
                'title'=>__('Button Background', 'novena'),
                'type' =>'background',
                'output'=>'.banner',
                'background_color'=> false,
                'background_attachment'=> false,

            ),
        )
    ));

    CSF::createSection($prefix, array(
        'parent' => 'banner_section',
        'title' => __('Bannar Style', 'novena'),
        'icon'   => 'fas fa-paint-roller',
        'fields' => array(
          array(
            'id' => 'bannar_separator',
            'title' => __('Bannar Separator', 'novena'),
            'type' => 'background',
            'default' => array(
              'background-color' => '#e12454'
            ),
            'output' => '.divider',
            'background_image' => false,
            'background_position' => false,
            'background_repeat' => false,
            'background_size' => false,
            'background_attachment' => false,
          ),
          array(
            'id' => 'bannar_substitle_color',
            'title' => __('Bannar Subtitle', 'novena'),
            'type' => 'color',
            'output' => '.letter-spacing',
            'default' => '#6F8BA4'
          ),
          array(
            'id' => 'bannar_title_color',
            'title' => __('Bannar Title', 'novena'),
            'type' => 'color',
            'output' => '.banner .block h1',
            'default' => '#223a66'
          ),
          array(
            'id' => 'bannar_desc_color',
            'title' => __('Bannar Description', 'novena'),
            'type' => 'color',
            'output' => '.banner .block p',
            'default' => '#6F8BA4'
          ),
          array(
            'id' => 'button_background',
            'title' => __('Button Background', 'novena'),
            'type' => 'background',
            'default' => array(
              'background-color' => '#e12454'
            ),
            'output' => '.btn-main-2',
            'background_image' => false,
            'background_position' => false,
            'background_repeat' => false,
            'background_size' => false,
            'background_attachment' => false,
          ),
          array(
            'id' => 'button_background_hover',
            'title' => __('Button Background Hover', 'novena'),
            'type' => 'background',
            'default' => array(
              'background-color' => '#223a66'
            ),
            'output' => '.btn-main-2:hover',
            'background_image' => false,
            'background_position' => false,
            'background_repeat' => false,
            'background_size' => false,
            'background_attachment' => false,
          ),
        )
      ));
}
