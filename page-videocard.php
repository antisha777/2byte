<?php
/**
 * 
 * Template Name: Ремонт видеокарт
 *
 */

get_header('vc');
?>

<main class="main">
    <section id="about" class="section section_top">
        <div class="container">
            <div class="section__inner">
                <div class="content__left">
                    <div class="about">
                        <div class="about__content about__content_page">
                            <h2 class="about-title vc__title"><?php the_title(); ?></h2>
                            <div class="expandable-text about__text2 vc__content"><?php the_content(); ?></div>
                            
                            <section id="price" class="section">
                                <div class="container">
                                    <div class="section__header">
                                        <h2 class="section__title">Услуги и цены</h2>
                                    </div>
                                    <div class="services__inner">    
                                        <div id="myTabs" class="tabs">
                                            <nav class="navigation tabs__navigation">
                                            <ul class="navigation__list tabs__links "> 
                                                <li class="navigation__item">Ремонт видеокарт<a class="navigation__link-vc"></a></li> 
                                                <li class="navigation__item">Обслуживание<a class="navigation__link-vc"></a></li> 
                                                <li class="navigation__item">Замена<a class="navigation__link-vc"></a></li>
                                            </ul>
                                            </nav>
                                            <div class="tabs__content"> 
                                                <!-- Ремонт видеокарт -->
                                                <div class="tabs__item">
                                                    <div class="block-left">
                                                        <div class="block">
                                                            <h3 class="block__title">Ремонт чипа видеокарты</h3>
                                                            <p class="block__money">от 3000 &#x20bd;</p>
                                                            <p class="block__subtitle">С продолжением работ</p>
                                                        </div>
                                                        <div class="block">
                                                            <h3 class="block__title">Ремонт HDMI на видеокарте</h3>
                                                            <p class="block__money">от 990 &#x20bd;</p>
                                                            <p class="block__subtitle">За единицу</p>
                                                        </div>
                                                        <div class="block">
                                                            <h3 class="block__title">Ремонт кулера видеокарты</h3>
                                                            <p class="block__money">от 990 &#x20bd;</p>
                                                            <p class="block__subtitle">За единицу</p>
                                                        </div>
                                                        <div class="block">
                                                            <h3 class="block__title">Восстановление BIOS видеокарты</h3>
                                                            <p class="block__money">от 1390 &#x20bd;</p>
                                                            <p class="block__subtitle">За единицу</p>
                                                        </div>
                                                    </div>
                                                    <div class="block-right">
                                                        <div class="block">
                                                            <h3 class="block__title">Замена BIOS видеокарты</h3>
                                                            <p class="block__money">от 1390 &#x20bd;</p>
                                                            <p class="block__subtitle">За единицу</p>
                                                        </div>
                                                        <div class="block">
                                                            <h3 class="block__title">Замена памяти видеокарты</h3>
                                                            <p class="block__money">от 1490 &#x20bd;</p>
                                                            <p class="block__subtitle">За единицу</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Обслуживание видеокарт -->
                                                <div class="tabs__item">
                                                    <div class="block-left">
                                                        <div class="block">
                                                            <h3 class="block__title">Замена термопасты</h3>
                                                            <p class="block__money">от 490 &#x20bd;</p>
                                                            <p class="block__subtitle">Без стоимости термопасты</p>
                                                        </div>
                                                        <div class="block">
                                                            <h3 class="block__title">Чистка кулера</h3>
                                                            <p class="block__money">от 200 &#x20bd;</p>
                                                            <p class="block__subtitle">Без разбора</p>
                                                        </div>
                                                        <div class="block">
                                                            <h3 class="block__title">Ремонт охлаждения видеокарты</h3>
                                                            <p class="block__money">от 990 &#x20bd;</p>
                                                            <p class="block__subtitle">Без разбора</p>
                                                        </div>
                                                        <div class="block">
                                                            <h3 class="block__title">Установка драйверов</h3>
                                                            <p class="block__money">от 290 &#x20bd;</p>
                                                            <p class="block__subtitle">За единицу</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Замена -->
                                                <div class="tabs__item">
                                                    <div class="block-left">
                                                        <div class="block">
                                                            <h3 class="block__title">Установка видеокарты</h3>
                                                            <p class="block__money">от 400 &#x20bd;</p>
                                                            <p class="block__subtitle">Без драйверов</p>
                                                        </div>
                                                        <div class="block">
                                                            <h3 class="block__title">Выкуп</h3>
                                                            <p class="block__money">от 500 &#x20bd;</p>
                                                            <p class="block__subtitle">За единицу</p>
                                                        </div>
                                                        <div class="block">
                                                            <h3 class="block__title">Продажа</h3>
                                                            <p class="block__money">от 500 &#x20bd;</p>
                                                            <p class="block__subtitle">За единицу</p>
                                                        </div>
                                                    </div>
                                                </div>                              
                                            </div> 
                                        </div>
                                    </div>                    
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer('front-new');?>