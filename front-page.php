<?php
/**
 * 
 * Template Name: Главная
 *
 */

get_header('front-new');
?>

<main class="main">
<!-------------------------section about------------------------->
<section id="about" class="section">
    <div class="container container_two">
        <div class="section__header">
            <!-- <h2 class="about-title">Ремонтируем компьютерную технику</h2> -->
         </div>
            <div class="section__inner">
                <div class="about">
                <div class="block-simbol">
                    <div class="block-simbol block-simbol__left">0</div>
                    <div class="block-simbol block-simbol__right">1</div>
                </div>
                    <div class="about__content">
                        <h2 class="about-title">Ремонтируем компьютерную технику</h2>
                            <div class="about__description">
                                <p class="about__text1">Ваш компьютер вышел из строя или доставляет неприятности, и Вам требуется восстановить его работу как можно быстрее?</p>
                             </div>
                                <div class="expandable-text about__text2">
                                    <p>Когда ломается компьютер, нужна профессиональная помощь квалифицированного мастера. Мы оказываем «Услуги по ремонту компьютеров». С нашими мастерами можно заказать разовые услуги или заключить договор на долгосрочное сотрудничество. Мы выполняем ремонт и настройку компьютеров, ноутбуков, компьютерных сетей — любой сложности.

                                    Кроме основного перечня услуг по оказанию компьютерной помощи компания наша компания «2БАЙТА» обеспечивает<span id="dots">...</span><span id="more">&nbsp;телефонную поддержку каждого клиента, которая заключается в оказании консультаций на время проведения работ специалистами компании, а также на гарантийный период после ремонта ПК. Мы уверены, что сотрудничая с нами вы по достоинству оцените качество и высокий уровень наших профессиональных мастеров, по настройке и ремонту компьютеров.

                                    Многолетний опыт работы, а также весомый багаж практических навыков и теоретических знаний помогает нам гарантировать успех любого мероприятия, которое связано с ремонтом компьютеров и выполнением комплексных услуг по оказанию профессиональной компьютерной помощи.

                                    Помните, что своевременная диагностика, компьютерная помощь и ремонт ПК дает возможность предотвратить выход из строя наиболее чувствительных и дорогостоящих периферийных устройств и компонентов, состоящих в одном комплексном звене с поврежденными элементами и микросхемами блока.

                                    Внимание!!! Диагностика является бесплатной при продолжении наладочных работ нашим мастером.</span></p>

                                    <button onclick="myFunction()" id="myBtn">Читать больше</button>
                                </div>
                            </div>

                            <div class="saidebar saidebar-right-none">     
                                <?php get_sidebar('category'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!------ Услуги ----->
<section id="popular" class="section">
                <div class="container">
                    <div class="section__header">
                        <h2 class="about-title section__title">Основные услуги</h1>
                    </div>
                        <div class="services__inner popular">
                            <div class="row popular__row">

                                <div class="column popular__col">
                                    <a href="<?php echo get_permalink() ?>/repair/computer-repair" class="popular__link">
                                        <div class="popular__box">
                                            <div class="popular__overlay"></div>
                                            <img src="<?php echo get_template_directory_uri() ?>/assests/img/computer.jpg" alt="Компьютеры" class="popular__background">                   
                                        </div>
                                        <div class="popular__item">
                                            <h3 class="popular__title">Ремонт компьютеров</h3>
                                        </div>
                                    </a>
                                </div>

                                <div class="column popular__col">
                                    <a href="<?php echo get_permalink() ?>/repair/laptop-repair" class="popular__link">
                                        <div class="popular__box">
                                            <div class="popular__overlay"></div>
                                            <img src="<?php echo get_template_directory_uri() ?>/assests/img/noutbuka.jpg" alt="Компьютеры" class="popular__background">                   
                                        </div>
                                        <div class="popular__item">
                                            <h3 class="popular__title">Ремонт ноутбуков</h3>
                                        </div>
                                        <div class="popular__poinst">10110111101011</div>
                                    </a>
                                </div>

                                <div class="column popular__col">
                                    <a href="<?php echo get_permalink() ?>/repair/repair-tv" class="popular__link">
                                        <div class="popular__box">
                                            <div class="popular__overlay"></div>
                                            <img src="<?php echo get_template_directory_uri() ?>/assests/img/remont-televizorov.jpg" alt="Компьютеры" class="popular__background">                   
                                        </div>
                                        <div class="popular__item">
                                            <h3 class="popular__title">Ремонт телевизоров</h3>
                                        </div>
                                    </a>
                                </div>

                                <div class="column popular__col">
                                    <a href="<?php echo get_permalink() ?>/repair/phone-repair" class="popular__link">
                                        <div class="popular__box">
                                            <div class="popular__overlay"></div>
                                            <img src="<?php echo get_template_directory_uri() ?>/assests/img/telephone.jpg" alt="Компьютеры" class="popular__background">                  
                                        </div>
                                        <div class="popular__item">
                                            <div class="popular__link"></div>
                                            <h3 class="popular__title">Ремонт смартфонов</h3>
                                        </div>
                                    </a>
                                </div>

                                <div class="column popular__col">
                                    <a href="/" class="popular__link">
                                        <div class="popular__box">
                                            <div class="popular__overlay"></div>
                                            <img src="<?php echo get_template_directory_uri() ?>/assests/img/databack.jpg" alt="Компьютеры" class="popular__background">                  
                                        </div>
                                        <div class="popular__item">
                                            <h3 class="popular__title">Восстановление данных</h3>
                                        </div>
                                    </a>
                                </div>

                                <div class="column popular__col">
                                    <a href="<?php echo get_permalink() ?>/services/computer-help" class="popular__link">
                                        <div class="popular__box">
                                            <div class="popular__overlay"></div>
                                            <img src="<?php echo get_template_directory_uri() ?>/assests/img/tabel.png" alt="Компьютеры" class="popular__background">                   
                                        </div>
                                        <div class="popular__item">
                                            <h3 class="popular__title">Установка программ</h3>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end services__inner -->
                </div>
                <!-- end container -->
</section>
<!----О нас ---->
<section id="we" class="section">
    <div class="container">
        <div class="selection">
            <div class="selection__title">
                <h3 class="">Нас выбирают</h3>
                <h4>Конкурентные преимущества нашей компании</h4>
            </div>
            <div class="selection__inner">

                <div class="selection__col">
                    <img src="./img/like.png" alt="icon1" class="column__icon">
                    <h3 class="column__title">Удобно</h3>
                    <div class="column__description">
                        <p class="column__subtitle subtitle_width">Мы выполним ремонт компьютеров в удобное для Вас время. Вы можете привезти его в наш сервис или вызвать мастера по ремонту на дом</p>
                    </div>
                </div>

                <div class="selection__col">
                    <img src="./img/free.png" alt="icon2" class="column__icon">
                    <h3 class="column__title">Бесплатная диагностика</h3>
                    <div class="column__description">
                        <p class="column__subtitle subtitle_width">Бесплатный выезд мастера по Томску в течении часа. Как правило, ремонт компьютеров на дому составляет 1,5 часа</p>
                    </div>
                </div>

                <div class="selection__col">
                    <img src="./img/time.png" alt="icon3" class="column__icon">
                    <h3 class="column__title">Быстро</h3>
                    <div class="column__description">
                        <p class="column__subtitle subtitle_width">Ремонт компьютеров в нашем сервисном центре проходит быстро и, как правило, длится 3 часаа</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
               <!--  Price -->


            <section id="price" class="section">
                <div class="container">
                    <div class="section__header">
                        <h2 class="section__title">Услуги и цены</h2>
                    </div>
                    <div class="services__inner">    
                        <div id="myTabs" class="tabs">
                            <nav class="navigation tabs__navigation">
                              <ul class="navigation__list tabs__links "> 
                                <li class="navigation__item"><a class="navigation__link">Ремонт компьютеров</a></li> 
                                <li class="navigation__item"><a class="navigation__link">Ремонт ноутбуков</a></li> 
                                <li class="navigation__item"><a class="navigation__link">Ремонт телевизоров</a></li>
                                <li class="navigation__item"><a class="navigation__link">Ремонт смартфонов</a></li>
                                <li class="navigation__item"><a class="navigation__link">ИТ - Услуги</a></li>
                                <li class="navigation__item"><a class="navigation__link">Компьютерная помощь</a></li>
                              </ul>
                            </nav>
                            <div class="tabs__content"> 
                                <!-- Ремонт компьютеров -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block block_background">
                                            <h3 class="block__title">Диагностика компьютеров</h3>
                                            <p class="block__money">0 &#x20bd;</p>
                                            <p class="block__subtitle">С продолжением работ</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Ремонт, замена комплектующих</h3>
                                            <p class="block__money">от 200 &#x20bd;</p>
                                            <p class="block__subtitle">За единицу</p>
                                        </div>
                                        <div class="block block_background">
                                            <h3 class="block__title">Ремонт мониторов</h3>
                                            <p class="block__money">от 200 &#x20bd;</p>
                                            <p class="block__subtitle">Без разбора</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Ремонт моноблоков</h3>
                                            <p class="block__money">от 200 &#x20bd;</p>
                                            <p class="block__subtitle">Без разбора</p>
                                        </div>
                                    </div>
                                    <div class="block-right">
                                        <div class="block block_background">
                                            <h3 class="block__title">Ремонт материнской платы</h3>
                                            <p class="block__money">от 500 &#x20bd;</p>
                                            <p class="block__subtitle">Замена конденсаторов</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Ремонт блоков питания</h3>
                                            <p class="block__money">от 500 &#x20bd;</p>
                                            <p class="block__subtitle">Замена конденсаторов</p>
                                        </div>
                                        <div class="block block_background">
                                            <h3 class="block__title">Замена HDD</h3>
                                            <p class="block__money">200 &#x20bd;</p>
                                            <p class="block__subtitle">Без данных</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Замена термопасты</h3>
                                            <p class="block__money">от 300 &#x20bd;</p>
                                            <p class="block__subtitle">Без стоимости термопасты</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Ремонт ноутбуков -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block block_background">
                                            <h3 class="block__title">Диагностика ноутбука</h3>
                                            <p class="block__money">0 &#x20bd;</p>
                                            <p class="block__subtitle">Без разбора</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Диагностика ноутбука</h3>
                                            <p class="block__money">от 800 &#x20bd;</p>
                                            <p class="block__subtitle">С полной разборкой</p>
                                        </div>
                                        <div class="block block_background">
                                            <h3 class="block__title">Чистка от пыли</h3>
                                            <p class="block__money">от 1300 &#x20bd;</p>
                                            <p class="block__subtitle">С разбором</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Установка жесткого диска</h3>
                                            <p class="block__money">200 &#x20bd;</p>
                                            <p class="block__subtitle">Без полного рабора</p>
                                        </div>
                                    </div>
                                    <div class="block-right">
                                        <div class="block block_background">
                                            <h3 class="block__title">Установка модулей памяти</h3>
                                            <p class="block__money">300 &#x20bd;</p>
                                            <p class="block__subtitle">Без полного рабора</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Замена матрицы</h3>
                                            <p class="block__money">от 800 &#x20bd;</p>
                                            <p class="block__subtitle">Без стоимости матрицы</p>
                                        </div>
                                        <div class="block block_background">
                                            <h3 class="block__title">Замена клавиаутуры</h3>
                                            <p class="block__money">от 500 &#x20bd;</p>
                                            <p class="block__subtitle">Без стоимости клавиатуры</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Замена разъемов</h3>
                                            <p class="block__money">от 1200 &#x20bd;</p>
                                            <p class="block__subtitle">Цены от 1500</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Ремонт телевизоров -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block block_background">
                                            <h3 class="block__title">Диагностика</h3>
                                            <p class="block__money">200 &#x20bd;</p>
                                            <p class="block__subtitle">Без разбора</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Замена ламп</h3>
                                            <p class="block__money">от 1000 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block block_background">
                                            <h3 class="block__title">Замена лент подсветки</h3>
                                            <p class="block__money">от 1000 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Ремонт блока питания</h3>
                                            <p class="block__money">от 500&#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                    </div>
                                    <!-- <div class="block-right">
                                        <div class="block">
                                            <h3 class="block__title"></h3>
                                            <p class="block__money"> &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title"></h3>
                                            <p class="block__money"> &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title"></h3>
                                            <p class="block__money"> &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title"></h3>
                                            <p class="block__money"> &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- Ремонт смартфонов -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block block_background">
                                            <h3 class="block__title">Диагностика</h3>
                                            <p class="block__money">0 &#x20bd;</p>
                                            <p class="block__subtitle">Без разбора</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Диагностика</h3>
                                            <p class="block__money">500&#x20bd;</p>
                                            <p class="block__subtitle">С разбором</p>
                                        </div>
                                        <div class="block block_background">
                                            <h3 class="block__title">Замена экрана</h3>
                                            <p class="block__money">от 1200 &#x20bd;</p>
                                            <p class="block__subtitle">Без стоимости запчастей</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Замена аккумулятоора</h3>
                                            <p class="block__money">от 600 &#x20bd;</p>
                                            <p class="block__subtitle">Без стоимости запчастей</p>
                                        </div>
                                    </div>
                                    <div class="block-right">
                                        <div class="block block_background">
                                            <h3 class="block__title">Ремонт кнопок</h3>
                                            <p class="block__money">от 600 &#x20bd;</p>
                                            <p class="block__subtitle">Без стоимости запчастей</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Чистка от залития</h3>
                                            <p class="block__money">от 1200 &#x20bd;</p>
                                            <p class="block__subtitle">Без гарантии</p>
                                        </div>
                                        <div class="block block_background">
                                            <h3 class="block__title">Разблокировка</h3>
                                            <p class="block__money">от 1000 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Прошивка</h3>
                                            <p class="block__money">от 1500 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- IT - услуги -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block block_background">
                                            <h3 class="block__title">Настройка Банк клиента</h3>
                                            <p class="block__money">от 500 &#x20bd;</p>
                                            <p class="block__subtitle">Одно рабочие место</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Видеонаблюдение</h3>
                                            <p class="block__money">от 500 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block block_background">
                                            <h3 class="block__title">Абонентское обслуживание</h3>
                                            <p class="block__money">от 500 &#x20bd;</p>
                                            <p class="block__subtitle">Обслуживание офисов</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Абонентское серверов</h3>
                                            <p class="block__money">от 1000 &#x20bd;</p>
                                            <p class="block__subtitle">Обслуживание офисов</p>
                                        </div>
                                    </div>
                                    <!-- <div class="block-right">
                                        <div class="block">
                                            <h3 class="block__title"></h3>
                                            <p class="block__money"></p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title"></h3>
                                            <p class="block__money"></p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title"></h3>
                                            <p class="block__money"></p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block"></h3>
                                            <p class="block__money"></p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- Компьютерная помощь -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block block_background">
                                            <h3 class="block__title">Выезд инженера</h3>
                                            <p class="block__money">0 &#x20bd;</p>
                                            <p class="block__subtitle">С продолжением работ</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Установка Windows</h3>
                                            <p class="block__money">от 500 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block block_background">
                                            <h3 class="block__title">Установка ОС Linux</h3>
                                            <p class="block__money">от 1200 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Установка Microsoft Office</h3>
                                            <p class="block__money">500 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                    </div>
                                    <div class="block-right">
                                        <div class="block block_background">
                                            <h3 class="block__title">Установка антивируса</h3>
                                            <p class="block__money">500 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Удаление вирусов</h3>
                                            <p class="block__money">от 350 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block block_background">
                                            <h3 class="block__title">Восстановление Windows</h3>
                                            <p class="block__money">от 600 &#x20bd;</p>
                                            <p class="block__subtitle">Восстановление после сбоя</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Настройка Wi-Fi роутера</h3>
                                            <p class="block__money">600 &#x20bd;</p>
                                            <p class="block__subtitle">Базавая настройка</p>
                                        </div>
                                    </div>
                                </div>                              
                            </div> 
                          </div>
                    </div>                    
                </div>
            </section>

            <section class="section">
                <div class="row">
                    <div class="row__col">
                        <div class="row__item">
                            <div class="row__count">10</div>
                            <span class="row__title">опыта на рынке</span>
                            лет
                        </div>
                    </div>
                    <div class="row__col">
                        <div class="row__col">
                            <div class="row__item">
                                <div class="row__count">18252</div>
                                <span class="row__title">довольных клиентов</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-------------------------section contacts, form---------------->
            
        </main><!-- #main -->

<?php
// get_sidebar();
get_footer('front');
