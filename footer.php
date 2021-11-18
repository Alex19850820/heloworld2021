<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package helloworld2021
 */

?>
<footer class="footer">
    <div class="wrapper">

        <div class="footer_top">
            <ul class="footer_nav tb-hidden">
                <li><a href="#">О компании</a></li>
                <li>
                    <a href="#">Продукция</a>
                    <ul>
                        <li><a href="#">Встраиваемые компьютеры</a></li>
                        <li><a href="#">Конвертируемые встраиваемые системы</a></li>
                        <li><a href="#">Промышленные панельные компьютеры</a></li>
                        <li><a href="#">Промышленные мониторы</a></li>
                        <li><a href="#">Аксессуары</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Поддержка</a>
                    <ul>
                        <li><a href="#">Техническая поддержка</a></li>
                        <li><a href="#">Информационная поддержка</a></li>
                        <li><a href="#">Сервисное обслуживание</a></li>
                        <li><a href="#">Документация и программное обеспечение</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Новости</a>
                    <ul class="md-visible normal">
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Где купить</a></li>
                    </ul>
                </li>
                <li class="md-hidden"><a href="#">Доставка и оплата</a></li>
                <li class="md-hidden"><a href="#">Где купить</a></li>
            </ul>
            <div class="footer_right">
                <div class="phone_header">
                    <div class="cities">
                        <a href="#" class="cities_link">Москва</a>
                        <ul class="cities_dropdown">
                            <li><a href="tel:+77273469717"><span class="phone">+7 (727) 346-97-17</span> Санкт-Петербург</a></li>
                            <li><a href="tel:+77273469717"><span class="phone">+7 (727) 346-97-17</span> Екатеринбург</a></li>
                            <li><a href="tel:+77273469717"><span class="phone">+7 (727) 346-97-17</span> Новосибирск</a></li>
                            <li><a href="tel:+77273469717"><span class="phone">+7 (727) 346-97-17</span> Алматы</a></li>
                        </ul>
                    </div><!-- /cities -->
                    <div class="phone"><a href="tel:+74959806406">+7 (495) 980-64-06</a></div>
                </div>
                <div class="mail_link">
                    <a href="mailto:russia@cincoze.pro">russia@cincoze.pro</a>
                </div>
            </div>
        </div><!-- /footer_top -->

        <div class="copyright">
            <div class="copyright_left">
                <p>Все материалы, характеристики, цены представленные на сайте не являются публичной офертой.</p>
                <p>© 2007—2020 cincoze.pro</p>
                <p>Copyright: фотобанк Лори</p>
                <p><a href="#">Политика конфиденциальности</a></p>
            </div>
            <div class="copyright_right">
                <a href="#"><img src="<?php echo bloginfo('template_url')?>/images/dpromo.svg" alt=""></a>
            </div>
        </div><!-- /copyright -->

    </div>
</footer><!-- /footer -->
<?php wp_footer(); ?>

</body>
</html>
