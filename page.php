<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package twobytes
 */

get_header();
?>

	<main class="main">
<!-------------------------section about------------------------->
<section id="about" class="section">
    <div class="container">
        <div class="section__header">
            <!-- <h2 class="about-title">Ремонтируем компьютерную технику</h2> -->
         </div>
            <div class="section__inner">
                <div class="about">
                    <div class="about__content">
                        <h2 class="about-title">Ремонтируем компьютерную технику</h2>
                            <div class="about__description">
                                <p class="about__text1">Ваш компьютер вышел из строя или доставляет неприятности, и Вам требуется восстановить его работу как можно быстрее?</p>
                             </div>
                                <div class="expandable-text about__text2">
                                    Когда ломается компьютер, нужна профессиональная помощь квалифицированного мастера. Мы оказываем «Услуги по ремонту компьютеров». С нашими мастерами можно заказать разовые услуги или заключить договор на долгосрочное сотрудничество. Мы выполняем ремонт и настройку компьютеров, ноутбуков, компьютерных сетей — любой сложности.

                                    Кроме основного перечня услуг по оказанию компьютерной помощи компания наша компания «2БАЙТА» обеспечивает телефонную поддержку каждого клиента, которая заключается в оказании консультаций на время проведения работ специалистами компании, а также на гарантийный период после ремонта ПК. Мы уверены, что сотрудничая с нами вы по достоинству оцените качество и высокий уровень наших профессиональных мастеров, по настройке и ремонту компьютеров.

                                    Многолетний опыт работы, а также весомый багаж практических навыков и теоретических знаний помогает нам гарантировать успех любого мероприятия, которое связано с ремонтом компьютеров и выполнением комплексных услуг по оказанию профессиональной компьютерной помощи.

                                    Помните, что своевременная диагностика, компьютерная помощь и ремонт ПК дает возможность предотвратить выход из строя наиболее чувствительных и дорогостоящих периферийных устройств и компонентов, состоящих в одном комплексном звене с поврежденными элементами и микросхемами блока.

                                    Внимание!!! Диагностика является бесплатной при продолжении наладочных работ нашим мастером.
                                </div>
                            </div>

                            <div class="saidebar">
                            	
                         <?php get_sidebar('category'); ?>
                                <!-- <aside id="saidebar">
                                    <div class="widget widget_search search-bar">
                                    <form class="search-bar__form" action="/">
                                        <input class="search-bar__input" type="text" name="s" value="" placeholder=" Поиск по сайту">
                                        <button type="submit" class="search-bar__button">
                                        </button>
                                    </form>
                                    </div>

                                    <div class="widget widget_cotegories saidebar-menu">
                                        <ul class="link-list saidebar-menu__list">
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Ремонт компьютеров</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Ремонт ноутбуков</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Ремонт телефонов</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Ремонт телевизоров</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Услуги</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Заправка картриджей</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Продажа</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Контакты</a></li>
                                        </ul>
                                    </div>
                                </aside> -->
                                

                            </div>
                            
                            <!-- <a class="video" data-fancybox href="https://www.youtube.com/watch?v=jNQXAC9IVRw">
                                <div class="video">
                                    <div class="video__overlay"></div>
                                    <img src="img/videoabout.png" alt="video">
                                </div>
                            </a> -->
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
                                    <div class="popular__overlay"></div>
                                    <div class="popular__box">                                        
                                        <img src="<?php echo get_template_directory_uri() ?>./aseset/img/partner01.jpg" alt="Компьютеры" class="popular__background">
                                    </div>
                                    <div class="popular__title">
                                        <h3 class="column__title">Ремонт компьютров</h3>
                                    </div>
                                </div>

                                <div class="column popular__col">

                                    <div class="popular__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>./aseset/img/popular-nout.PNG" alt="Компьютеры" class="popular__background">
                                    <div class="popular__box">
                                        <div class="popular__title">
                                            <h3 class="column__title">Ремонт ноутбуков</h3>
                                        </div>
                                            <!-- <p class="column__subtitle subtitle_bottom"></p> -->
                                        <div class="popular__button">
                                            <button data-fancybox href="#order-form" class="btn btn_popular but-effect">Подробнее</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="column popular__col">
                                    <div class="popular__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>./aseset/img/popular-tv.PNG" alt="Телевизоры" class="popular__background">
                                    <div class="popular__box">
                                        <div class="popular__img">
                                            <img src="./img/remont-tv.png" alt="Компьютеры" class="column__img">
                                        </div>
                                        <div class="popular__title">
                                            <h3 class="column__title">Ремонт телевизоров</h3>
                                        </div>
                                            <!-- <p class="column__subtitle subtitle_bottom"></p> -->
                                        <div class="popular__button">
                                            <button data-fancybox href="#order-form" class="btn btn_popular but-effect">Подробнее</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="column popular__col">
                                    <div class="popular__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>./aseset/img/popular-phone.PNG" alt="Смартфон" class="popular__background">
                                    <div class="popular__box">
                                        <div class="popular__img">
                                            <img src="./img/telephon.png" alt="Смартфон" class="column__img">
                                        </div>
                                        <div class="popular__title">
                                            <h3 class="column__title">Ремонт смартфонов</h3>
                                        </div>
                                            <!-- <p class="column__subtitle subtitle_bottom"></p> -->
                                        <div class="popular__button">
                                            <button data-fancybox href="#order-form" class="btn btn_popular but-effect">Подробнее</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="column popular__col">
                                    <div class="popular__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>./aseset/img/maxresdefault.jpg" alt="Жесткий диск" class="popular__background">
                                    <div class="popular__box">
                                        <div class="popular__img">
                                            <img src="./img/recovery.png" alt="Компьютеры" class="column__img">
                                        </div>
                                        <div class="popular__title">
                                            <h3 class="column__title">Восстановление данных</h3>
                                        </div>
                                            <!-- <p class="column__subtitle subtitle_bottom"></p> -->
                                        <div class="popular__button">
                                            <button data-fancybox href="#order-form" class="btn btn_popular but-effect">Подробнее</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="column popular__col">
                                    <div class="popular__overlay"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>./aseset/img/program.jpg" alt="Прораммы" class="popular__background">
                                    <div class="popular__box">
                                        <div class="popular__img">
                                            <img src="./img/software.png" alt="Компьютеры" class="column__img">
                                        </div>
                                        <div class="popular__title">
                                            <h3 class="column__title">Установка порграмм</h3>
                                        </div>
                                            <!-- <p class="column__subtitle subtitle_bottom">Аппаратный, комбинированный или классический.</p> -->
                                        <div class="popular__button">
                                            <button data-fancybox href="#order-form" class="btn btn_popular but-effect">Записаться</button>
                                        </div>
                                    </div>
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
                     <div class="about__inner">
                            <div class="about__title section__title">Нас выберают</div>
                            <div class="about__row">
                                
                                <div class="column">
                                    <img src="./img/like.png" alt="icon1" class="column__icon">
                                    <h3 class="column__title">Удобно</h3>
                                    <div class="column__description">
                                        <p class="column__subtitle subtitle_width">Мы выполним ремонт компьютеров в удобное для Вас время. Вы можете привезти его в наш сервис или вызвать мастера по ремонту на дом</p>
                                    </div>
                                </div>
                                <div class="column">
                                    <img src="./img/free.png" alt="icon2" class="column__icon">
                                    <h3 class="column__title">Бесплатная диагностика</h3>
                                    <div class="column__description">
                                        <p class="column__subtitle subtitle_width">Бесплатный выезд мастера по Томску в течении часа. Как правило, ремонт компьютеров на дому составляет 1,5 часа</p>
                                    </div>  
                                </div>
                                <div class="column">
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
               <!--      </div>                    
                </div> -->


            <section id="price" class="section">
                <div class="container">
                    <div class="section__header">
                        <h2 class="section__title">Услуги и цены</h2>
                    </div>
                    <div class="services__inner">    
                        <div id="myTabs" class="tabs">
                            <nav class="navigation tabs__navigation">
                              <ul class="navigation__list tabs__links "> 
                                <li class="navigation__item">Ремонт компьютеров<a class="navigation__link"></a></li> 
                                <li class="navigation__item">Ремонт ноутбуков<a class="navigation__link"></a></li> 
                                <li class="navigation__item">Ремонт телевизоров<a class="navigation__link"></a></li>
                                <li class="navigation__item">Ремонт смартфонов<a class="navigation__link"></a></li>
                                <li class="navigation__item">Восстановление данных<a class="navigation__link"></a></li>
                                <li class="navigation__item">Компьютерная помощь<a class="navigation__link"></a></li>
                              </ul>
                            </nav>
                            <div class="tabs__content"> 
                                <!-- Ремонт компьютеров -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block">
                                            <h3 class="block__title">Диагностика компьютеров</h3>
                                            <p class="block__money">9999 &#x20bd;</p>
                                            <p class="block__subtitle">С продолжением работ</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Ремонт, замена комплектующих</h3>
                                            <p class="block__money">200 &#x20bd;</p>
                                            <p class="block__subtitle">За единицу</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Ремонт мониторов</h3>
                                            <p class="block__money">200 &#x20bd;</p>
                                            <p class="block__subtitle">Без разбора</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Ремонт моноблоков</h3>
                                            <p class="block__money">200 &#x20bd;</p>
                                            <p class="block__subtitle">Без разбора</p>
                                        </div>
                                    </div>
                                    <div class="block-right">
                                        <div class="block">
                                            <h3 class="block__title">Ремонт материнской платы</h3>
                                            <p class="block__money">500 &#x20bd;</p>
                                            <p class="block__subtitle">Замена конденсаторов</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Ремонт блоков питания</h3>
                                            <p class="block__money">500 &#x20bd;</p>
                                            <p class="block__subtitle">Замена конденсаторов</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Замена HDD</h3>
                                            <p class="block__money">200 &#x20bd;</p>
                                            <p class="block__subtitle">Без данных</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Замена термопасты</h3>
                                            <p class="block__money">300 &#x20bd;</p>
                                            <p class="block__subtitle">Без стоимости термопасты</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Ремонт ноутбуков -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block">
                                            <h3 class="block__title"></h3>
                                            <p class="block__money">100 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title"></h3>
                                            <p class="block__money">130 &#x20bd;</p>
                                            <p class="block__subtitle"></p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Детский Стиль</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Креативный Стиль</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                    </div>
                                    <div class="block-right">
                                        <div class="block">
                                            <h3 class="block__title">Стрижка бороды и усов</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Экспресс укладка</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Укладка дневная</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Прическа вечерняя (свадебная)</h3>
                                            <p class="block__money">3000 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Маникюр и педикюр -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block">
                                            <h3 class="block__title">Классический</h3>
                                            <p class="block__money">400 &#x20bd;</p>
                                            <p class="block__subtitle">Женский</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Классический</h3>
                                            <p class="block__money">500 &#x20bd;</p>
                                            <p class="block__subtitle">Мужской</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Детский Стиль</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Креативный Стиль</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                    </div>
                                    <div class="block-right">
                                        <div class="block">
                                            <h3 class="block__title">Стрижка бороды и усов</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Экспресс укладка</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Укладка дневная</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Spa</h3>
                                            <p class="block__money">2990 &#x20bd;</p>
                                            <p class="block__subtitle">Маникюр и педикюр</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Макияж -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block">
                                            <h3 class="block__title">Женская стрижка</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Мужская стрижка</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Детский Стиль</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Креативный Стиль</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                    </div>
                                    <div class="block-right">
                                        <div class="block">
                                            <h3 class="block__title">Стрижка бороды и усов</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Экспресс укладка</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Укладка дневная</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Прическа вечерняя (свадебная)</h3>
                                            <p class="block__money">3000 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Брови и ресницы -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block">
                                            <h3 class="block__title">Женская стрижка</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Мужская стрижка</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Детский Стиль</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Креативный Стиль</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                    </div>
                                    <div class="block-right">
                                        <div class="block">
                                            <h3 class="block__title">Стрижка бороды и усов</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Экспресс укладка</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Укладка дневная</h3>
                                            <p class="block__money">1300 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Прическа вечерняя (свадебная)</h3>
                                            <p class="block__money">3000 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Массаж -->
                                <div class="tabs__item">
                                    <div class="block-left">
                                        <div class="block">
                                            <h3 class="block__title">Женская стрижка</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Мужская стрижка</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Детский Стиль</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Креативный Стиль</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                    </div>
                                    <div class="block-right">
                                        <div class="block">
                                            <h3 class="block__title">Стрижка бороды и усов</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Экспресс укладка</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Укладка дневная</h3>
                                            <p class="block__money">1200 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                        <div class="block">
                                            <h3 class="block__title">Прическа вечерняя (свадебная)</h3>
                                            <p class="block__money">3000 &#x20bd;</p>
                                            <p class="block__subtitle">Короткие волосы</p>
                                        </div>
                                    </div>
                                </div>                              
                            </div> 
                          </div>
                    </div>                    
                </div>
            </section>

            <!-------------------------section contacts, form---------------->
            
        </main><!-- #main -->

<?php
// get_sidebar();
get_footer();
