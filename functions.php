<?php
// миниатюры
add_theme_support( 'post-thumbnails' );

//меню
register_nav_menu( 'menu', 'меню в кшапке' );

// добавление класа menu к тегу <а> в меню
function add_class_to_all_menu_anchors( $atts ) {$atts['class'] = 'menu'; return $atts;}
            add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );
            
           //добавление телефона
           
/*
Короткий пример для использования Theme_Customization_API 
http://casepress.org/kb/web/nastrojki-temy-wordpress-kak-dobavit-svoi-polya/
*/
/**
 * Добавляет страницу настройки темы в админку Вордпресса
 */
function mytheme_customize_register( $wp_customize ) {
/*
Добавляем секцию в настройки темы
*/
$wp_customize->add_section(
    // ID
    'data_site_section',
    // Arguments array
    array(
        'title' => 'Настройки первой страницы',
        'capability' => 'edit_theme_options',
        'description' => "В этом пункте меню можно менять настройки главной страницы"
    )
);
/*
Добавляем поле контактных данных
*/
$wp_customize->add_setting(
    // ID
    'theme_contacttext',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'theme_contacttext_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Размер скидки",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'theme_contacttext'
    )
);

/*
Добавляем поле контактных данных 2
*/
$wp_customize->add_setting(
    // ID
    'theme_contacttext2',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'theme_contacttext2_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Заголовок страницы",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'theme_contacttext2'
    )
);

/*
Добавляем поле телефона site_telephone
*/
$wp_customize->add_setting(
    // ID
    'site_telephone',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'site_telephone_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Телефон на главной странице",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'site_telephone'
    )
);

// Текс с вопросом
$wp_customize->add_setting(
    // ID
    'theme_question',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'theme_question_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Текст вопроса",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'theme_question'
    )
);

// Заголовок сайта
$wp_customize->add_setting(
    // ID
    'theme_header',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'theme_header_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Заголовок страницы",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'theme_header'
    )
);

// Текст под заголовком
$wp_customize->add_setting(
    // ID
    'theme_header2',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'theme_header2_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Подзаголовок страницы",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'theme_header2'
    )
);


}
add_action( 'customize_register', 'mytheme_customize_register' );


// дбавлене настроек
add_action('customize_register', function($customizer){
    $customizer->add_section(
        'example_section_one',
        array(
            'title' => 'Мои настройки',
            'description' => 'Пример секции',
            'priority' => 11,
        )
    );

    $customizer->add_setting(
        'example_textbox',
        array('default' => 'Сайт Wp-book.ru')
    );
    
      $customizer->add_control(
        'example_textbox',
        array(
            'label' => 'футер зеленый текст',
            'section' => 'example_section_one',
            'type' => 'text',
        )
    );
// вывод с помощью <?php echo get_theme_mod('example_textbox', 'Текст еще не придумали');?
    
//Позволяет добавить палитру выбора цветов. К примеру, для заднего фона.
    $customizer->add_setting(
        'color-setting',
        array(
            'default' => '#e9f0fd',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    
    $customizer->add_control(
        new WP_Customize_Color_Control(
            $customizer,
            'color-setting',
            array(
                'label' => 'Настройка цвета',
                'section' => 'example_section_one',
                'settings' => 'color-setting',
           )
            )
    );

   });
  // //кастомайзерс каченый и подключен скрипт скаченый
   function true_customizer_init( $wp_customize ) {

	$true_transport = 'postMessage';
	
	// // Цвета ссылок
	// $wp_customize->add_setting(
	// 	'true_link_color', // id
	// 	array(
	// 		'default'     => '#000000',
	// 		'transport'   => $true_transport
	// 	)
	// );
	// $wp_customize->add_control(
	// 	new WP_Customize_Color_Control(
	// 		$wp_customize,
	// 		'true_link_color',
	// 		array(
	// 		    'label'      => 'Цвет ссылок',
	// 		    'section'    => 'colors',
	// 		    'settings'   => 'true_link_color'
	// 		)
	// 	)
	// );

	// // Добавляем собственную секцию настроек
	// $wp_customize->add_section(
	// 	'true_display_options',
	// 	array(
	// 		'title'     => 'Отображение',
	// 		'priority'  => 200,
	// 		'description' => 'Настройте внешний вид вашего сайта'
	// 	)
	// );

	// // Отображение шапки
	// $wp_customize->add_setting(
	// 	'true_display_header',
	// 	array(
	// 		'default'    =>  'true',
	// 		'transport'  =>  $true_transport
	// 	)
	// );
	// $wp_customize->add_control(
	// 	'true_display_header',
	// 	array(
	// 		'section'   => 'true_display_options',
	// 		'label'     => 'Отобразить заголовок?',
	// 		'type'      => 'checkbox'
	// 	)
	// );

	// // Цветовая схема сайта
	// $wp_customize->add_setting(
	// 	'true_color_scheme',
	// 	array(
	// 		'default'   => 'normal',
	// 		'transport' => $true_transport
	// 	)
	// );
	// $wp_customize->add_control(
	// 	'true_color_scheme',
	// 	array(
	// 		'section'  => 'true_display_options',
	// 		'label'    => 'Цветовая схема',
	// 		'type'     => 'radio',
	// 		'choices'  => array(
	// 			'normal'    => 'Светлая',
	// 			'inverse'   => 'Темная'
	// 		)
	// 	)
	// );

	// // Шрифт
	// $wp_customize->add_setting(
	// 	'true_font',
	// 	array(
	// 		'default'   => 'arial',
	// 		'type'      => 'theme_mod',
	// 		'transport' => $true_transport
	// 	)
	// );
	// $wp_customize->add_control(
	// 	'true_font',
	// 	array(
	// 		'section'  => 'true_display_options',
	// 		'label'    => 'Шрифт',
	// 		'type'     => 'select',
	// 		'choices'  => array(
	// 			'arial'     => 'Arial',
	// 			'courier'   => 'Courier New'
	// 		)
	// 	)
	// );

	// // Текст копирайта в футере
	// $wp_customize->add_setting(
	// 	'true_footer_copyright_text',
	// 	array(
	// 		'default'            => 'Все права защищены',
	// 		'sanitize_callback'  => 'true_sanitize_copyright',
	// 		'transport'          => $true_transport
	// 	)
	// );
	// $wp_customize->add_control(
	// 	'true_footer_copyright_text',
	// 	array(
	// 		'section'  => 'true_display_options',
	// 		'label'    => 'Копирайт',
	// 		'type'     => 'text'
	// 	)
	// );
	
	// Добавляем ещё одну секцию - Настройки фона
	$wp_customize->add_section(
		'true_advanced_options',
		array(
			'title'     => 'Настройки фона',
			'priority'  => 201
		)
	);
	
	// Фоновое изображение
	$wp_customize->add_setting(
		'true_background_image',
		array(
			'default'      => '',
			'transport'    => $true_transport
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'true_background_image',
			array(
				'label'    => 'Фон сайта',
				'settings' => 'true_background_image',
				'section'  => 'true_advanced_options'
			)
		)
	);
}

add_action( 'customize_register', 'true_customizer_init' );

/*
 * Функция обработки текстовых значений, перед их сохранением в базу
 */
function true_sanitize_copyright( $value ) {
	return strip_tags( stripslashes( $value ) );
}

/*
 * CSS для хука wp_head()
 */
function true_customizer_css() { 
	echo '<style>';
	// Сначала стили для body
	echo '.slider {
        font-family:';
	switch( get_theme_mod( 'true_font' ) ) {
		case 'arial':
			echo 'Arial, Helvetica, sans-serif;';
			break;
		case 'courier':
			echo '\'Courier New\', Courier;';
			break;
		default:
			echo 'Arial, Helvetica, sans-serif;';
			break;
	 }
	if ( 'inverse' == get_theme_mod( 'true_color_scheme' ) ) {
		// echo 'background-color:#000;color:#fff;';
    } 
    else {
		// echo 'background-color:#fff;color:#000;';
	}
	if ( 0 < count( strlen( ( $background_image_url = get_theme_mod( 'true_background_image', 'true' ) ) ) ) ) {
    		echo 'background-image: url( \'' . $background_image_url . '\' );';
    }
   
    
    echo '}'; 
    
    
	echo 'a { color: ' . get_theme_mod( 'true_link_color' ) . '; }';
	if( false === get_theme_mod( 'true_display_header' ) ) {
		echo '#header { display: none; }';
	}
	echo '</style>';
}
add_action( 'wp_head', 'true_customizer_css' );

/*
 * Подключение скриптов
 */
function true_customizer_live() {
	wp_enqueue_script(
		'true-theme-customizer',
		get_stylesheet_directory_uri() . '/js/theme-customizer.js', // URL
		array( 'jquery', 'customize-preview' ),
		null,
		true
	);
}
add_action( 'customize_preview_init', 'true_customizer_live' );






?>