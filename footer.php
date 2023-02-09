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
                <div class="section__grey section__grey_contacts">
                    <div class="container-contacts">
                        <div class="container-contacts_wight">
                            <div class="contacts">
                                <div class="section__header">
                                    <h2 class="section__title section__title_white">Контакты</h2>
                                    <p class="section__subtitle subtitle-bottom">г.Томск, ул.Елизаровых 44
                                    <p class="section__subtitle subtitle-bottom">т.938-936; 8 (952) 155-59-36</p>
                                    <a href="#" class="section__subtitle section__subtitle_blue">twobytes@yandex.ru</a>
                                    <div class="social-inner">
                                        <p class="social-inner__title">Мы в социальных сетях</p>
                                        <ul class="social social_horizon">
                                            <li class="social__item"><a href="#"><img class="social__link" src="<?php echo get_template_directory_uri() ?>/assests/img/vk_w.png" alt="Vk"></a></li>
                                            <li class="social__item"><a href="#"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/insta_w.png" alt="Instagram"></a></li>
                                            <li class="social__item"><a href="#"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/You_w.png" alt="Youtube"></a></li>
                                        </ul>
                                    </div>  
                                </div>
                                <div class="contacts__maps">
                                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A08591060f0c36fd917b85be87c0d422836bc7bd66046efda2769322f484c549f&amp;source=constructor" max-width="500" width="100%" height="210px" frameborder="0"></iframe>
                                </div>
                            </div>
                            <div class="contact-form">
                                <div class="contact-form__padding">
                                    <div class="row">
                                        <div class="column">
                                            <h3 class="column__title">Быстрая запись</h3>
                                            <p class="column__subtitle contacts-bottom">Наш менеджер перезвонит в течение нескольких минут, уточнит подробности и согласует время.</p>
                                            <form id="form" action="post" class="column__form form__input">
                                                <input type="text" name="name" placeholder="Ваше имя" class="column__imput" required>
                                                <input data-inputmask="'mask': '+7 (999) 999-99-99'" type="tel" name="phone" inputmode="tel" placeholder="+7 (___) ___-__-__" class="column__imput" required>
                                                <div class="loader-show loader-show_hide" id="loader"></div>
                                                <div class="form__message" id="succes" hidden>
                                                    <p>Заявка отправлена!</p>
                                                </div>
                                                <div class="form__message" id="unsucces" hidden>
                                                    <p>Что-то пошло не так, попробуйте еще раз</p>
                                                </div>
                                                <button class="btn btn_form but-effect">Записаться</button>
                                            </form>
                                            <p class="column__police">Нажимая на кнопку вы соглашаетесь с 
                                                <a href="#" class="column__blue">обработкой персональных данных</a>
                                            </p>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="footer-inner__right">
                        <div id="marquee" class="blink-2">
                          <marquee class="merquee-footer" behavior="scroll" weight="150" loop="infinity" truespeed="200" scrolldelay="200" onmouseover="this.stop()" onmouseout="this.start()">
                            <div id='mylist' class='garage-title blink-2'></div>#Ремонтцифровойтехники #Ремонткомпьютероввтомске #Ремонтноутбуковвтомске #Сервисныйцентртомск #Ремонттелефоноввтомске #Ремонтпланшетоввтомске #Ремонтмонитороввтомске #Ремонттелевизороввтомске
                          </marquee>
                        </div>
                        <!-- <nav class="navigation">
                            <ul class="navigation__list">
                                <li class="navigation__item"><a href="#" class="navigation__link link-size navigation__link-footer">Главная</a></li>
                                <li class="navigation__item"><a href="#about" class="navigation__link link-size navigation__link-footer">О нас</a></li>
                                <li class="navigation__item"><a href="#popular" class="navigation__link link-size navigation__link-footer">Основные услуги</a></li>
                                <li class="navigation__item"><a href="#we" class="navigation__link link-size navigation__link-footer">Нас выберают</a></li>
                                <li class="navigation__item"><a href="#price" class="navigation__link link-size navigation__link-footer">Цены</a></li>
                                <li class="navigation__item"><a href="#contacts" class="navigation__link link-size navigation__link-footer">Контакты</a></li>
                            </ul>
                        </nav> -->
                    </div>
                </div>
            </div>
        </footer>
<!-------------------------modal form----------------------------> 
        </main>
</div>
</body>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/tabs.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/whtemobil.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/moblmenu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/cont-form.js"></script>

</html>
