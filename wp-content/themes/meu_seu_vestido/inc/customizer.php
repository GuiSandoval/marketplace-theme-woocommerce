<?php 

/**
 * Meu Seu Vestido Theme Customizer
 * 
 * @package Meu Seu Vestido
 */


function meu_seu_vestido_customizer($wp_customize){

    // Copyright Section
    $wp_customize->add_section(
        'sec_copyright',array(
            'title'         => 'Configurações copyright',
            'description'   => 'Copyright Section' 
        )
    );

        // Field 1 - Copyright Text box
        $wp_customize->add_setting(
            'set_copyright',array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_copyright',array(
                'label'         => 'Copyright',
                'description'   => 'Por favor, adicione a informação sobre copyright',
                'section'       => 'sec_copyright',
                'type'          => 'text'

            )
        );

    //  *****************************************
    
    //Slider Section 
    $wp_customize->add_section(
        'sec_slider',array(
            'title'         => 'Configurações Slider',
            'description'   => 'Slider Section' 
        )
    );

    // Slider Number Slides
    // $wp_customize->add_setting(
    //     'set_num_slides',array(
    //         'type'                  => 'theme_mod',
    //         'default'               => '3',
    //         'sanitize_callback'     => 'absint'
    //     )
    // );
    
    // $wp_customize->add_control(
    //     'set_num_slides',array(
    //         'label'         => 'Números de slides',
    //         'description'   => 'Numero de slides',
    //         'section'       => 'sec_slider',
    //         'type'          => 'number'

    //     )
    // );
    // $slider_num_images = get_theme_mod('set_num_slides');
            //select sanitization function
            function theme_slug_sanitize_select( $input, $setting ){
          
                //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
                $input = sanitize_key($input);
      
                //get the list of possible select options 
                $choices = $setting->manager->get_control( $setting->id )->choices;
                                  
                //return input if valid or return default option
                return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
                  
            }
    for ($i=1; $i < 4; $i++) { 
        // Field 1 - Slider Page Number 1
        $wp_customize->add_setting(
            'set_slider_page'.$i ,array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_slider_page'.$i ,array(
                'label'         => 'Set Slider Page '.$i,
                'description'   => 'Set Slider Page '.$i,
                'section'       => 'sec_slider',
                'type'          => 'dropdown-pages'

            )
        );
        // Field 2 - Slider button Text Number 
        $wp_customize->add_setting(
            'set_slider_button_text'.$i,array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_slider_button_text'.$i ,array(
                'label'         => 'Button Text for Page '.$i,
                'description'   => 'Button Text for Page '.$i,
                'section'       => 'sec_slider',
                'type'          => 'text'

            )
        );
        // Field 3 - Slider button url 
        $wp_customize->add_setting(
            'set_slider_button_url'.$i,array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'esc_url_raw'
            )
        );

        $wp_customize->add_control(
            'set_slider_button_url'.$i,array(
                'label'         => 'URL for Page '.$i,
                'description'   => 'URL for Page '.$i,
                'section'       => 'sec_slider',
                'type'          => 'url '

            )
        );
        // Field 4 - Select slider 


        $wp_customize->add_setting(
            'set_select_slider'.$i,array(
                'type'                  => 'theme_mod',
                'default'               => 'image',
                'sanitize_callback'     => 'theme_slug_sanitize_select'
            )
        );
        $wp_customize->add_control(
            'set_select_slider'.$i,array(
                // 'settings'		=> 'color_scheme',
                'section'		=> 'sec_slider',
                'type'			=> 'select',
                'label'			=> __( 'Escolha o tipo do Slider '.$i , 'theme-slug' ),
                'description'	=> __( 'Selecione o tipo que preferir.', 'theme-slug' ),
                'choices'		=> array(
                    'image' => __( 'Só imagem', 'theme-slug' ),
                    'image_btn' => __( 'Imagem com botão', 'theme-slug' ),
                    'image_btn_txt' => __( 'Imagem com texto e botão', 'theme-slug' )
                )
            )
        );
    }
}
add_action('customize_register','meu_seu_vestido_customizer');



