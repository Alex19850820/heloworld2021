<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/***
  * Верстка шорткода
  * весь контент лежит в переменной $atts
 *@var $atts array
 *
 **/
$slider = fw_get_db_customizer_option()['menu_header'];
//fw_print($slider);
$query = new WP_Query;
$myposts = $query->query([ 'category_name' => 'catalog','posts_per_page' => 4,'order' => 'ASC' ]);
//fw_print($myposts);
?>
<?php if(is_front_page()):?>
<div class="home_slider swiper-container" id="homeslider">
    <div class="swiper-wrapper">
        <?php foreach ($slider as $slide):?>
            <div class="swiper-slide">
                <div class="home_slider_item">
                    <img src="<?php echo $slide['img']['url']?>" alt="">
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div><!-- /home_slider -->
<?php endif;?>
<section class="content">
    <div class="wrapper">
        <h2 class="pagetitle">Продукция</h2>

        <div class="row production">
            <div class="grid-3 tb6 sm12">
                <a href="#" class="production_img"><img src="<?php echo bloginfo('template_url')?>/images/uploads/img1.jpg" alt=""></a>
                <div class="production_name"><a href="#">Встраиваемые компьютеры</a></div>
                <ul>
                    <li><a href="#">Серия DI: Высокопроизводительные и компактные</a></li>
                    <li><a href="#">Серия DS: Высокопроизводительные и расширяемые</a></li>
                    <li><a href="#">Серия DE: Энергоэффективные и расширяемые</a></li>
                    <li><a href="#">Серия DC: Компактные</a></li>
                    <li><a href="#">Серия DA: Ультракомпактные</a></li>
                    <li><a href="#">Серия DX: Экстремальная производительность и компактность</a></li>
                </ul>
            </div>
            <div class="grid-3 tb6 sm12">
                <a href="#" class="production_img"><img src="<?php echo bloginfo('template_url')?>/images/uploads/img1.jpg" alt=""></a>
                <div class="production_name"><a href="#">Конвертируемые встраиваемые системы</a></div>
                <ul>
                    <li><a href="#">Серия P2000: Высокопроизводительные</a></li>
                    <li><a href="#">Серия P1000: Энергоэффективные</a></li>
                    <li><a href="#">Серия M1000: Мониторные модули</a></li>
                    <li><a href="#">Серия CV-100: Дисплейные модули</a></li>
                    <li><a href="#">Серия CS-100: Дисплейные модули с Optical Bonding</a></li>
                </ul>
            </div>
            <div class="grid-3 tb6 sm12">
                <a href="#" class="production_img"><img src="<?php echo bloginfo('template_url')?>/images/uploads/img1.jpg" alt=""></a>
                <div class="production_name"><a href="#">Промышленные панельные компьютеры</a></div>
                <ul>
                    <li><a href="#">Серия CV-100/P2000: Высокопроизводительные</a></li>
                    <li><a href="#">Серия CV-100/P1000: Энергоэффективные</a></li>
                    <li><a href="#">Серия CS-100/P1000: Энергоэффективные с Optical Bonding</a></li>
                    <li><a href="#">Серия CS-100/P2000: Высокопроизводительные с Optical Bonding</a></li>
                </ul>
            </div>
            <div class="grid-3 tb6 sm12">
                <a href="#" class="production_img"><img src="<?php echo bloginfo('template_url')?>/images/uploads/img1.jpg" alt=""></a>
                <div class="production_name"><a href="#">Промышленные мониторы</a></div>
                <ul>
                    <li><a href="#">С высоким разрешением</a></li>
                    <li><a href="#">Широкоформатные (16:9)</a></li>
                    <li><a href="#">С резистивным сенсорным экраном</a></li>
                    <li><a href="#">С проекционно-емкостным сенсорным экраном</a></li>
                    <li><a href="#">Сверхъяркие</a></li>
                    <li><a href="#">Сверхъяркие с Optical Bonding</a></li>
                </ul>
            </div>
        </div><!-- /production -->

        <div class="pagehead">
            <h2 class="pagetitle">Новости</h2>
            <a href="#" class="btn_more">Показать все</a>
        </div>
        <div class="row newsitem_row">
            <div class="grid-4 sm12 newsitem">
                <a href="#" class="newsitem_img" style="background-image: url(<?php echo bloginfo('template_url')?>/images/uploads/news.jpg);"></a>
                <div class="newsitem_date">Mar 27, 2020</div>
                <div class="newsitem_name"><a href="#">Промышленный панельный компьютер Cincoze на производстве камня и мрамора</a></div>
            </div><!-- /newsitem --><div class="grid-4 sm12 newsitem">
                <a href="#" class="newsitem_img" style="background-image: url(<?php echo bloginfo('template_url')?>/images/uploads/news.jpg);"></a>
                <div class="newsitem_date">Mar 27, 2020</div>
                <div class="newsitem_name"><a href="#">Встраиваемый компьютер Cincoze DA-1100 – оптимальное решение для автоматически управляемых транспортных средств</a></div>
            </div><!-- /newsitem --><div class="grid-4 sm12 newsitem">
                <a href="#" class="newsitem_img" style="background-image: url(<?php echo bloginfo('template_url')?>/images/uploads/news.jpg);"></a>
                <div class="newsitem_date">Mar 27, 2020</div>
                <div class="newsitem_name"><a href="#">Cincoze анонсировала модернизированные встраиваемые безвентиляторные компьютеры с процессорами Intel Core и Xeon 9-го поколения</a></div>
            </div><!-- /newsitem -->
        </div><!-- /newsitem_row -->

        <h2 class="pagetitle">Новинки продукции</h2>
        <div class="row novelty_row">
            <?php foreach ($myposts as $mypost):?>
                <div class="grid-3 tb6 sm12">
                    <div class="novelty">
                        <div class="novelty_img">
                            <?php $image_url = get_the_post_thumbnail_url($mypost->ID);?>
                            <a href="<?php the_permalink($mypost->ID); ?>"><img src="<?php echo $image_url?>" alt=""></a>
                        </div>
                        <div class="novelty_name"><a href="<?php the_permalink($mypost->ID); ?>"><?php echo $mypost->post_title;?></a></div>
                        <div class="novelty_text">
                            <?php if(fw_get_db_post_option($mypost->ID,'text')):?>
                                <?php echo fw_get_db_post_option($mypost->ID,'text');?>
                            <?php endif;?>
                        </div>
                    </div>
                </div><!-- /grid -->
            <?php endforeach;?>

        </div><!-- /novelty_row -->

        <h2 class="pagetitle">Применение</h2>
        <div class="row usage_row">
            <div class="grid-3 tb6 sm12 usage">
                <a href="#" class="newsitem_img" style="background-image: url(<?php echo bloginfo('template_url')?>/images/uploads/news2.jpg);"></a>
                <div class="usage_name"><a href="#">Factory Automation</a></div>
                <div class="usage_text">The fourth industrial revolution—Industry 4.0, brought forth by the Germany government in 2011, defines the technological confluence of smart factories, smart machines and products to the Internet of Things to...</div>
            </div><!-- /grid --><div class="grid-3 tb6 sm12 usage">
                <a href="#" class="newsitem_img" style="background-image: url(<?php echo bloginfo('template_url')?>/images/uploads/news2.jpg);"></a>
                <div class="usage_name"><a href="#">Machine Automation</a></div>
                <div class="usage_text">The fourth industrial revolution—Industry 4.0, brought forth by the Germany government in 2011, defines the technological confluence of smart factories, smart machines and products to the Internet of Things to...</div>
            </div><!-- /grid --><div class="grid-3 tb6 sm12 usage">
                <a href="#" class="newsitem_img" style="background-image: url(<?php echo bloginfo('template_url')?>/images/uploads/news2.jpg);"></a>
                <div class="usage_name"><a href="#">Transportation</a></div>
                <div class="usage_text">The fourth industrial revolution—Industry 4.0, brought forth by the Germany government in 2011, defines the technological confluence of smart factories, smart machines and products to the Internet of Things to...</div>
            </div><!-- /grid --><div class="grid-3 tb6 sm12 usage">
                <a href="#" class="newsitem_img" style="background-image: url(<?php echo bloginfo('template_url')?>/images/uploads/news2.jpg);"></a>
                <div class="usage_name"><a href="#">Surveillance & Security</a></div>
                <div class="usage_text">The fourth industrial revolution—Industry 4.0, brought forth by the Germany government in 2011, defines the technological confluence of smart factories, smart machines and products to the Internet of Things to...</div>
            </div><!-- /grid -->
        </div><!-- /novelty_row -->


    </div><!-- /wrapper -->
</section><!-- /content -->