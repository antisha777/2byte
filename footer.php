<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twobytes
 */

?>

	<!-- #page -->

<?php wp_footer(); ?>

 <footer class="footer">
    <section id="contacts" class="section-bottom">
                <div class="section__grey section__grey_contacts d-flex">

                        <div class="container-contacts">
                            <div class="container-contacts_wight">
                                <div class="container-info">
                                    <div class="container-info__byte">2Б</div>
                                    <div class="container-info__service">Сервисный центр</div>
                                    <div class="container-info__image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assests/img/Telephone-System.jpg" alt="Менеджер">
                                    </div>
                                    <div class="container-info__item"><h4>Наш менеджер перезвонит в течение нескольких минут, уточнит подробности и согласует время</h4></div>
                                </div>
                                <div class="contact-form">
                                    <div class="contact-form__padding">
                                        <div class="row">
                                            <div class="column">
                                                <?php get_sidebar('footer'); ?>
                                                <p class="column__police">Нажимая на кнопку вы соглашаетесь с 
                                                    <a href="#" class="column__blue">обработкой персональных данных</a>
                                                </p>                                        
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-contacts_adress">
                                <div class="container-info__contact">
                                        <h2 class="section__title section__title_white">Контакты</h2>
                                        <p class="section__subtitle subtitle-bottom">г.Томск, ул.Елизаровых 44
                                        <p class="section__subtitle subtitle-bottom">т.938-936; 8 (952) 155-59-36</p>
                                        <a href="#" class="section__subtitle section__subtitle_blue">twobytes@yandex.ru</a>
                                        <div class="social-inner">
                                            <p class="social-inner__title">Мы в социальных сетях</p>
                                            <ul class="social social_horizon">
                                                <li class="social__item"><a href="#"><img class="social__link" src="<?php echo get_template_directory_uri() ?>/assests/img/vk.png" alt="Vk"></a></li>
                                                <li class="social__item"><a href="https://wa.me/79521555936?text=Здравствуйте%2C+у+меня+есть+вопрос"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/whats.png" alt="Instagram"></a></li>
                                                <li class="social__item"><a href="#"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/telegram.png" alt="Youtube"></a></li>
                                            </ul>
                                        </div>  
                                </div>
                                <div class="contacts__maps">
                                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A08591060f0c36fd917b85be87c0d422836bc7bd66046efda2769322f484c549f&amp;source=constructor" max-width="500" width="100%" height="100%" frameborder="0"></iframe>
                                </div>
                            </div>

                        </div>
</section>
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-inner__left footer-inner__left_page">
                        <p class="footer-inner__copy">Copyright &copy <?php echo date('Y'); ?> «2 Байта»</p>
                        <a class="footer-inner__police" href="#">Политика конфиденциальности</a>
                        <p class="footer-inner__info">«Информация на сайте не является публичной офертой (ст. 437 ГК РФ)»</p>
                    </div>
					<div class="footer-inner__centr">
						<p class="footer-inner__info footer-inner__info_padding">ИП КРАСНОПЕРОВ ЮРИЙ МИХАЙЛОВИЧ</p>
						<p class="footer-inner__info footer-inner__info_padding">ИНН 701410112189</p>
						<p class="footer-inner__info footer-inner__info_padding">ОГРН 319703100061640</p>
						<p class="footer-inner__info footer-inner__info_padding">Елизаровых 44</p>
					</div>
                    <div class="footer-inner__right">
                        <div id="marquee" class="blink-2">
                            <marquee class="merquee-footer" behavior="scroll" weight="150" loop="infinity" truespeed="200" scrolldelay="200" onmouseover="this.stop()" onmouseout="this.start()">
                            <div id='mylist' class='garage-title blink-2'></div>#Ремонтцифровойтехники #Ремонткомпьютероввтомске #Ремонтноутбуковвтомске #Сервисныйцентртомск #Ремонттелефоноввтомске #Ремонтпланшетоввтомске #Ремонтмонитороввтомске #Ремонттелевизороввтомске
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-------------------------modal form----------------------------> 
        </main>
</div>

    <div id="form" class="contact-form form form__fancy">
        <div class="contact-form__padding">
            <div class="row">
                <div class="column">
                <?php get_sidebar('form'); ?>
                <p class="column__police">Нажимая на кнопку вы соглашаетесь с 
                    <a href="#" class="column__blue">обработкой персональных данных</a>
                </p>                                        
                </div> 
            </div>
        </div>
    </div>

<div id = "toTop" > ^ Наверх </div>

</body>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/tabs.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/whtemobil.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/moblmenu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/cont-form.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/redAbout.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/anime.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/calc.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/slide.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/button.js"></script>
</html>