<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * Настройки сайта (телефоны, соц-сети и пр.)
 * Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	'logo_header' => [
		'title'   => __( 'Логотип', '{domain}' ),
		'options' => [
			'img_logo' => [
				'type'  => 'upload',
				'label' => __( 'Логотип', '{domain}' ),
				'value' => '',
				'images_only' => true,
			]
		],
	],
	'menu_header' => [
		'title'   => __( 'Слайдер на главной', '{domain}' ),
		'options' => [
			'menu_header' => [
				'type' => 'addable-popup',
				'label' => __('Редактировать слайдер', '{domain}'),
				'template' => '<img src={{-img.url  }}>',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
//					'h2' => [
//						'type'  => 'text',
//						'label' => __( 'Заголовок', '{domain}' ),
//						'value' => '',
//					],
//					'text' => [
//						'type'  => 'text',
//						'label' => __( 'Текст', '{domain}' ),
//						'value' => '',
//					],
					'img' => [
						'type'  => 'upload',
						'label' => __( 'Иконка', '{domain}' ),
						'value' => '',
						'images_only' => true,
					],
				],
			],
		],
	],
];


