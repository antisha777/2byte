<?php
/**
 * 
 * Template Name: Ремонт телефонов
 *
 */

get_header();
?>

<main class="main">
    <section id="about" class="section">
        <div class="container">
            <div class="section__inner">
                <div class="about">
                    <div class="about__page">
                        <h2 class="about-title about-title_padding"><?php the_title(); ?></h2>
                        <div class="page-phone">
                            <div class="page-phone__row">
                                <div class="page-phone__col page-phone__col_left">
                                    <div class="page-phone__img">
                                        <a data-fancybox href="https://youtu.be/b3iuta-HpqM">
                                            <div class="page-phone__play"></div>
                                        </a>
                                        <div class="page-phone__overlay"></div>
                                        <img src="<?php echo get_template_directory_uri() ?>/assests/img/telephone-page01.jpg">
                                    </div>
                                </div>
                                <div class="page-phone__col page-phone__col_right">
                                    <div class="page-phone__wrap">
                                        <div class="page-phone__item">
                                            <h3 class="page-phone__title">Срочный ремонт</h3>
                                            <div class="page-phone__subtitle">Мы производим ремонт мобильных телефонов и смартфонов ориентируясь на самые высокие стандарты качества.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero__triangle"></div>
                    </div>
                    <div class="saidebar saidebar-right-none"><?php get_sidebar('category'); ?></div>
                </div>
            </div>
            <div class="standards">
                <div class="standards__row">

                    <div class="standards__col">
                        <div class="standards__item">
                            <div class="standards__number">01</div>
                            <div class="standards__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assests/img/original-phone.jpg" alt="">
                            </div>
                            <div class="standards__title">Мы используем оригинальные и близкие к оригинальным запчасти при проведении ремонта</div>
                        </div>
                    </div>

                    <div class="standards__col">
                        <div class="standards__item">
                            <div class="standards__number">02</div>
                            <div class="standards__img"><img src="<?php echo get_template_directory_uri() ?>/assests/img/service-select.jpg" alt=""></div>
                            <div class="standards__title">Работу выполняют мастера с многолетним стажем</div>
                        </div>
                    </div>

                    <div class="standards__col">
                        <div class="standards__item">
                            <div class="standards__number">03</div>
                            <div class="standards__img"><img src="<?php echo get_template_directory_uri() ?>/assests/img/profi-master.jpg" alt=""></div>
                            <div class="standards__title">У нас  есть профессиональное оборудование для выполнения ремонта любой сложности</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="section__grey section__grey_contacts d-flex">
            <div class="container">
                <div class="section__header">
                    <h2 class="about-title about-title_padding section__title">Основные услуги</h2>
                </div>
                <!-- Slider main container -->
                <div class="swiper swiper1 swiper__container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper swiper__slider">
                        <!-- Slides -->
                        <div class="swiper-slide swiper__slide">
                            <div class="swiper__item">
                                <div class="swiper__img">
                                    <div class="swiper__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>/assests/img/fon.jpg" alt="Экран">
                                </div>
                                <div class="swiper__content">
                                    <div class="swiper__title">Разбит экран</div>
                                    <div class="swiper__subtitle">Треснул экран или перестал показывать и реагировать на нажатия? В таком случае потребуется замена тачскрина, экрана или модуля полностью</div>
                                    <div class="swiper__time">
                                        <p class="swiper__parameters">Время исполнения</p>
                                        <p class="swiper__volue">от 1 часа</p>
                                    </div>
                                    <div class="swiper__price">
                                        <p class="swiper__parameters">Стоимость</p>
                                        <p class="swiper__volue">600-1500р</p>
                                    </div>
                                    <a data-fancybox data-src="#form" href="#" class="swiper__more">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper__slide">
                            <div class="swiper__item">
                                <div class="swiper__img">
                                    <div class="swiper__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>/assests/img/no-energy.jpg" alt="Зарядка">
                                </div>
                                <div class="swiper__content">
                                    <div class="swiper__title">Не заряжается</div>
                                    <div class="swiper__subtitle">Не можете воткнуть шнурок от зарядки в телефон? При подключении зарядного устройства телефон не заряжается? Скорее всего дело в неисправном разъеме USB</div>
                                    <div class="swiper__time">
                                        <p class="swiper__parameters">Время исполнения</p>
                                        <p class="swiper__volue">от 1 часа</p>
                                    </div>
                                    <div class="swiper__price">
                                        <p class="swiper__parameters">Стоимость</p>
                                        <p class="swiper__volue">440-1500р</p>
                                    </div>
                                    <a data-fancybox data-src="#form" href="#" class="swiper__more">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper__slide">
                            <div class="swiper__item">
                                <div class="swiper__img">
                                    <div class="swiper__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>/assests/img/no-point.jpg" alt="Кнопки">
                                </div>
                                <div class="swiper__content">
                                    <div class="swiper__title">Не работают кнопки</div>
                                    <div class="swiper__subtitle">При нажатии на кнопку включения телефона ничего не происходит? Не можете прибавить или убавить звук? Требуется замена клавиш.</div>
                                    <div class="swiper__time">
                                        <p class="swiper__parameters">Время исполнения</p>
                                        <p class="swiper__volue">от 20 мин</p>
                                    </div>
                                    <div class="swiper__price">
                                        <p class="swiper__parameters">Стоимость</p>
                                        <p class="swiper__volue">400-800р</p>
                                    </div>
                                    <a data-fancybox data-src="#form" href="#" class="swiper__more">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide swiper__slide">
                            <div class="swiper__item">
                                <div class="swiper__img">
                                    <div class="swiper__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>/assests/img/no-batary.jpg" alt="АКБ">
                                </div>
                                <div class="swiper__content">
                                    <div class="swiper__title">Не включается</div>
                                    <div class="swiper__subtitle">Не держит заряд, выключается или не включается. Возможно проблема в аккумуляторной батареи.</div>
                                    <div class="swiper__time">
                                        <p class="swiper__parameters">Время исполнения</p>
                                        <p class="swiper__volue">от 1 часа</p>
                                    </div>
                                    <div class="swiper__price">
                                        <p class="swiper__parameters">Стоимость</p>
                                        <p class="swiper__volue">800-1200р</p>
                                    </div>
                                    <a data-fancybox data-src="#form" href="#" class="swiper__more">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper__slide">
                            <div class="swiper__item">
                                <div class="swiper__img">
                                    <div class="swiper__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>/assests/img/fon.jpg" alt="Экран">
                                </div>
                                <div class="swiper__content">
                                    <div class="swiper__title">Разбит экран</div>
                                    <div class="swiper__subtitle">Треснул экран или перестал показывать и реагировать на нажатия? В таком случае потребуется замена тачскрина, экрана или модуля полностью</div>
                                    <div class="swiper__time">
                                        <p class="swiper__parameters">Время исполнения</p>
                                        <p class="swiper__volue">от 1 часа</p>
                                    </div>
                                    <div class="swiper__price">
                                        <p class="swiper__parameters">Стоимость</p>
                                        <p class="swiper__volue">600-1500р</p>
                                    </div>
                                    <a data-fancybox data-src="#form" href="#" class="swiper__more">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper__slide">
                            <div class="swiper__item">
                                <div class="swiper__img">
                                    <div class="swiper__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>/assests/img/no-energy.jpg" alt="Зарядка">
                                </div>
                                <div class="swiper__content">
                                    <div class="swiper__title">Не заряжается</div>
                                    <div class="swiper__subtitle">Не можете воткнуть шнурок от зарядки в телефон? При подключении зарядного устройства телефон не заряжается? Скорее всего дело в неисправном разъеме USB</div>
                                    <div class="swiper__time">
                                        <p class="swiper__parameters">Время исполнения</p>
                                        <p class="swiper__volue">от 1 часа</p>
                                    </div>
                                    <div class="swiper__price">
                                        <p class="swiper__parameters">Стоимость</p>
                                        <p class="swiper__volue">440-1500р</p>
                                    </div>
                                    <a data-fancybox data-src="#form" href="#" class="swiper__more">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper__slide">
                            <div class="swiper__item">
                                <div class="swiper__img">
                                    <div class="swiper__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>/assests/img/no-point.jpg" alt="Кнопки">
                                </div>
                                <div class="swiper__content">
                                    <div class="swiper__title">Не работают кнопки</div>
                                    <div class="swiper__subtitle">При нажатии на кнопку включения телефона ничего не происходит? Не можете прибавить или убавить звук? Требуется замена клавиш.</div>
                                    <div class="swiper__time">
                                        <p class="swiper__parameters">Время исполнения</p>
                                        <p class="swiper__volue">от 20 мин</p>
                                    </div>
                                    <div class="swiper__price">
                                        <p class="swiper__parameters">Стоимость</p>
                                        <p class="swiper__volue">400-800р</p>
                                    </div>
                                    <a data-fancybox data-src="#form" href="#" class="swiper__more">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide swiper__slide">
                            <div class="swiper__item">
                                <div class="swiper__img">
                                    <div class="swiper__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>/assests/img/no-batary.jpg" alt="АКБ">
                                </div>
                                <div class="swiper__content">
                                    <div class="swiper__title">Не включается</div>
                                    <div class="swiper__subtitle">Не держит заряд, выключается или не включается. Возможно проблема в аккумуляторной батареи.</div>
                                    <div class="swiper__time">
                                        <p class="swiper__parameters">Время исполнения</p>
                                        <p class="swiper__volue">от 1 часа</p>
                                    </div>
                                    <div class="swiper__price">
                                        <p class="swiper__parameters">Стоимость</p>
                                        <p class="swiper__volue">800-1200р</p>
                                    </div>
                                    <a data-fancybox data-src="#form" href="#" class="swiper__more">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <!-- If we need navigation buttons -->
                    <div class="swiper__button swiper__button_next">
                        <svg version="1.1" class="svg-icon right-arrow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 129 129" style="enable-background:new 0 0 129 129;" xml:space="preserve">
                        <g>
                            <path class="st0" d="M40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2,0-5.8l51-51l-51-51
                                c-1.6-1.6-1.6-4.2,0-5.8s4.2-1.6,5.8,0l53.9,53.9c1.6,1.6,1.6,4.2,0,5.8L40.4,121.3z"></path>
                        </g>
                        </svg>
                    </div>

                    <div class="swiper__button swiper__button_prev"><svg version="1.1" class="svg-icon left-arrow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 129 129" style="enable-background:new 0 0 129 129;" xml:space="preserve">
                        <g>
                            <path class="st0" d="M34.6,67.4c-1.6-1.6-1.6-4.2,0-5.8L88.5,7.7c1.6-1.6,4.2-1.6,5.8,0s1.6,4.2,0,5.8l-51,51l51,51
                                c1.6,1.6,1.6,4.2,0,5.8c-0.8,0.8-1.8,1.2-2.9,1.2c-1.1,0-2.1-0.4-2.9-1.2L34.6,67.4z"></path>
                        </g>
                        </svg>
                    </div>

                </div>



            </div>
        </div>
        <div class="container">
            <div class="calc">
                <div class="calc__title">Калькулятор</br>стоимости ремонта телефона</div>
                <div class="calc__subtitle">Укажаите нужные Вам пункты</br> и отправьте нам для точной оценки</br> стоимости ремонта</div>
                <div class="calc__text">Склад</div>
                <div class="calc__inner">
                    <div class="calc__col">

                        <div class="calc__brend">Бренд:</div>
                        <select onchange="calc()" id="type_design">
                            <option value="0">Выбрать</option>
                            <option value="2000">Samsung </option>
                            <option value="0">Huawei</option>
                            <option value="2000">LG</option>
                            <option value="0">Nokia</option>
                            <option value="0">Vivo</option>
                            <option value="0">Alcatel</option>
                            <option value="0">Motorola</option>
                            <option value="0">Sony</option>
                            <option value="0">ZTE</option>
                            <option value="0">Apple</option>
                            <option value="0">Honor</option>
                            <option value="0">Oppo</option>
                            <option value="0">Sharp</option>
                            <option value="0">Lenovo</option>
                            <option value="0">BLU</option>
                            <option value="0">HTC</option>
                            <option value="0">Philips</option>
                            <option value="500">Asus</option>
                            <option value="0">Fly</option>
                            <option value="0">Xiaomi</option>
                            <option value="0">Sony Ericsson</option>
                            <option value="0">Doogee</option>
                            <option value="0">Micromax</option>
                            <option value="0">Coolpad</option>
                            <option value="0">Siemens</option>
                            <option value="0">Panasonic</option>
                            <option value="0">Intex</option>
                            <option value="0">Kyocera</option>
                            <option value="0">Hisense</option>
                            <option value="0">Cubot</option>
                            <option value="0">Другая модель</option>
                        </select>
                    </div>

                    <div class="calc__col">

                        <div class="calc__problem">Неисправность:</div>
                            <select onchange="calc()" id="is_html2">
                                <option value="0">Выбрать</option>
                                <option value="1200">Трещены на эркане (экран работает)</option>
                                <option value="1200">Трещены на эркане (экран не работает)</option>
                                <option value="800">Не нажимаются кнопки</option>
                                <option value="600">Меня не слышно при разговоре</option>
                                <option value="600">Меня не слышат при разговоре</option>
                                <option value="600">Я не слышу звонков</option>
                                <option value="1200">Не заряжается</option>
                                <option value="600">Не включается</option>
                                <option value="600">Быстро садится батарея</option>
                                <option value="1200">Другая поломка</option>
                            </select>
                    </div>
                </div>

                <div class="calc__price">
                    <h4>Приблезительная стоимсоть ремонта:</h4>
                    <div class="calc__rezult"><span id="out">0</span>&nbsp;Руб</div>

                    <div data-fancybox data-src="#form" class="calc__btn"><h5>Уточнить</h5></div>
                </div>
                <!-- <div class="calc__btn"><h4>Уточнить</h4></div> -->
                <div class="calc__corection">* Точную стоимость ремонта уточняйте у специалистов сервисного центра</div>

            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();?>