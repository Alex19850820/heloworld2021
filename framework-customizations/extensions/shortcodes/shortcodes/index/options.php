<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
//    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
//	'h2'     => [
//		'type'  => 'text',
//		'value' => '',
//		'label' => __('Заголовок', '{domain}'),
//	],
//	'slider' => [
//		'type'  => 'multi-upload',
//		'label' => __('Слайдер', '{domain}'),
//		'images_only' => true,
//	],
//	'img' => [
//		'type' => 'multi-upload',
//		'label' => __('Партнеры', '{domain}'),
//		'images_only' => true,
//	],
	'h2'     => [
		'type'  => 'text',
		'value' => '',
		'label' => __('Заголовок', '{domain}'),
	],
	'h2_table'     => [
		'type'  => 'text',
		'value' => '',
		'label' => __('Заголовок таблицы', '{domain}'),
	],
	'class' => [
		'type' => 'addable-popup',
		'label' => __('Добавить классы ', '{domain}'),
		'template' => '{{- number}}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'number'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Название классов', '{domain}'),
			],
            'item_class' => [
                'type' => 'addable-popup',
                'label' => __('Добавить классы ', '{domain}'),
                'template' => '{{- number_class}}',
                'size' => 'large', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'add-button-text' => __('добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => [
                    'number_class'     => [
                        'type'  => 'text',
                        'value' => '',
                        'label' => __('Название класса', '{domain}'),
                    ],
                    'href'     => [
                        'type'  => 'text',
                        'value' => '',
                        'label' => __('Сылка', '{domain}'),
                    ],
                ]
            ],
		],
	]
			//			'h2'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Название запроса', '{domain}'),
//			],
//			'first'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Первый результат(данные - было)', '{domain}'),
//			],
//			'last'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Последний результат(данные - стало)', '{domain}'),
//			],
//			'rows'     => [
//				'type'  => 'text',
//				'value' => 'Было,Стало',
//				'label' => __('Название столбцов', '{domain}'),
//			],
//			'p'     => [
//				'type'  => 'text',
//				'value' => 'Строительная компания «Кельман-Строй» stroi-innovatsii.ru',
//				'label' => __('Компания по которой составлен график', '{domain}'),
//			],
//			'val_all'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Все значение за период', '{domain}'),
//			],
//			'type' => ['type'  => 'select',
//			'value' => 'line',
//			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//			'label' => __('Тип графика', '{domain}'),
//			'desc'  => __('Description', '{domain}'),
//			'help'  => __('Help tip', '{domain}'),
//			'choices' => array(
//				'' => '---',
//				'line' => __('Линейный', '{domain}'),
//				'bar' => __('Столбики', '{domain}'),
//			),
//			],
//			'color' => array(
//				'type'  => 'color-picker',
//				'value' => '#FF0000',
//				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//				// palette colors array
//				'palettes' => array( 'rgb(0,128,0)', 'rgb(255, 99, 132)', '#2489eb' ),
//				'label' => __('Цвет графика', '{domain}'),
//				'desc'  => __('Description', '{domain}'),
//				'help'  => __('Help tip', '{domain}'),
//			),
//		]
//	],
	
];