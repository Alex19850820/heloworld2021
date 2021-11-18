<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package helloworld2021
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url')?>/images/favicon.ico">
    <!--[if IE]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <title><?php the_title()?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <div class="headertop" id="headertop">
            <div class="wrapper">
                <div class="phone_header">
                    <div class="phone"><a href="tel:+74959806406">+7 (495) 980-64-06</a></div>
                    <div class="cities">
                        <a href="#" class="cities_link">Москва</a>
                        <ul class="cities_dropdown">
                            <li><a href="tel:+77273469717"><span class="phone">+7 (727) 346-97-17</span> Санкт-Петербург</a></li>
                            <li><a href="tel:+77273469717"><span class="phone">+7 (727) 346-97-17</span> Екатеринбург</a></li>
                            <li><a href="tel:+77273469717"><span class="phone">+7 (727) 346-97-17</span> Новосибирск</a></li>
                            <li><a href="tel:+77273469717"><span class="phone">+7 (727) 346-97-17</span> Алматы</a></li>
                        </ul>
                    </div><!-- /cities -->
                </div>
                <div class="search sm-hidden" id="search_head">
                    <form action="#" method="POST">
                        <input type="text" class="input" id="autocomplete" placeholder="Поиск">
                        <input type="submit" class="search_btn" style="background: url(<?php echo bloginfo('template_url')?>/images/svg/lens.svg) center center no-repeat;">
                    </form>
                </div><!-- /search -->
                <div class="sm-visible">
                    <a href="#" class="search_btn"></a>
                </div>
            </div>
        </div><!-- /headertop -->
        <div class="header_bottom" id="header_bottom">
            <div class="wrapper">
                <div class="logo">
                    <a href="/index" class="logo_link"></a>
                </div>
                <nav class="navmenu">
                    <ul class="navmenu_list" id="nav_wrapper">
                        <li><a href="#">О компании</a></li>
                        <li class="production_item">
                            <a href="/production">продукция</a>
                            <div class="childmenu">
                                <div class="row">
                                    <div class="grid-20">
                                        <div class="childmenu_title"><a href="#">Встраиваемые компьютеры</a></div>
                                        <ul>
                                            <li><a href="#">Серия DI: Высокопроизводительные и компактные</a></li>
                                            <li><a href="#">Серия DS: Высокопроизводительные и расширяемые</a></li>
                                            <li><a href="#">Серия DE: Энергоэффективные и расширяемые</a></li>
                                            <li><a href="#">Серия DC: Компактные</a></li>
                                            <li><a href="#">Серия DA: Ультракомпактные</a></li>
                                            <li><a href="#">Серия DX: Экстремальная производительность и компактность</a></li>
                                        </ul>
                                    </div>
                                    <div class="grid-20">
                                        <div class="childmenu_title"><a href="#">Конвертируемые встраиваемые системы</a></div>
                                        <ul>
                                            <li><a href="#">Серия P2000: Высокопроизводительные</a></li>
                                            <li><a href="#">Серия P1000: Энергоэффективные</a></li>
                                            <li><a href="#">Серия M1000: Мониторные модули</a></li>
                                            <li><a href="#">Серия CV-100: Дисплейные модули</a></li>
                                            <li><a href="#">Серия CS-100: Дисплейные модули с Optical Bonding</a></li>
                                        </ul>
                                    </div>
                                    <div class="grid-20">
                                        <div class="childmenu_title"><a href="#">Промышленные панельные компьютеры</a></div>
                                        <ul>
                                            <li><a href="#">Серия CV-100/P2000: Высокопроизводительные</a></li>
                                            <li><a href="#">Серия CV-100/P1000: Энергоэффективные</a></li>
                                            <li><a href="#">Серия CS-100/P1000: Энергоэффективные с Optical Bonding</a></li>
                                            <li><a href="#">Серия CS-100/P2000: Высокопроизводительные с Optical Bonding</a></li>
                                        </ul>
                                    </div>
                                    <div class="grid-20">
                                        <div class="childmenu_title"><a href="#">Промышленные мониторы</a></div>
                                        <ul>
                                            <li><a href="#">С высоким разрешением</a></li>
                                            <li><a href="#">Широкоформатные (16:9)</a></li>
                                            <li><a href="#">С резистивным сенсорным экраном</a></li>
                                            <li><a href="#">С проекционно-емкостным сенсорным экраном</a></li>
                                            <li><a href="#">Сверхъяркие</a></li>
                                            <li><a href="#">Сверхъяркие с Optical Bonding</a></li>
                                        </ul>
                                    </div>
                                    <div class="grid-20">
                                        <div class="childmenu_title"><a href="#">Промышленные мониторы</a></div>
                                        <ul>
                                            <li><a href="#">С высоким разрешением</a></li>
                                            <li><a href="#">Широкоформатные (16:9)</a></li>
                                            <li><a href="#">С резистивным сенсорным экраном</a></li>
                                            <li><a href="#">С проекционно-емкостным сенсорным экраном</a></li>
                                            <li><a href="#">Сверхъяркие</a></li>
                                            <li><a href="#">Сверхъяркие с Optical Bonding</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- /childmenu -->
                        </li>
                        <li>
                            <a href="#">поддержка</a>
                            <ul class="childmenu small">
                                <li><a href="#">Техническая поддержка</a></li>
                                <li><a href="#">Информационная поддержка</a></li>
                                <li><a href="#">Сервисное обслуживание</a></li>
                                <li><a href="#">Документация и программное обеспечение</a></li>
                            </ul>
                        </li>
                        <li><a href="#">новости</a></li>
                        <li><a href="#">доставка и оплата</a></li>
                        <li><a href="#">Где купить</a></li>
                    </ul>
                    <a href="#" class="cart_btn"> 2 22 420 у.е.</a>
                    <a href="#" class="bars" id="bars_link"></a>
                </nav>
            </div>
        </div><!-- /header_bottom -->
    </header><!-- /header -->
