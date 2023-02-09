<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twobytes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();
       for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
       k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
       ym(92084339, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/92084339" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
		<!-------------------------section heade------------------------->
        <header class="header">
            <div class="container">
                <div class="header__top">
                    <div class="white-stripe">
                        <div id="bar" class="bar-menu"></div>
                    </div>
                    <div class="mobile-menu">
                        <div class="bar-black-line"></div>
                        <div class="bar mobile-menu__burger"></div>
                        <ul  class="links-menu">
                            <li class="navigation__item"><a href="<?php bloginfo('url')?>" class="navigation__link">Главная</a></li>
                            <li class="navigation__item"><a href="#about" class="navigation__link">О нас</a></li>
                            <li class="navigation__item"><a href="#popular" class="navigation__link">Основные услуги</a></li>
                            <li class="navigation__item"><a href="#we" class="navigation__link">Нас выбирают</a></li>
                            <li class="navigation__item"><a href="#price" class="navigation__link"yu>Цены</a></li>
                            <li class="navigation__item"><a href="#contacts" class="navigation__link">Контакты</a></li>
                            <div class="widget widget_search search-bar">
                               <form class="search-bar__form" action="<?php echo get_home_url(); ?>">
                                    <input class="search-bar__input" type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder=" Поиск по сайту">
                                    <button type="submit" class="search-bar__button"></button>
                                </form>
                             </div>
                            <div class="saidebar">
                                <?php get_sidebar(''); ?>
                            </div>
                        </ul>
                    </div>
                    <div class="header__mobile">
                    	<?php the_custom_logo (); ?>
                        <a href="<?php bloginfo('url')?>" class="logo header__logo header__logo_page">2 Байта</a>
                    <div class="header__menu">
                        <!-- <nav id="nav" class="navigation  header__nav header__nav_none">
                            <ul class="navigation__list">
                                <li class="navigation__item"><a href="<?php bloginfo('url')?>" class="navigation__link">Главная</a></li>
                                <li class="navigation__item"><a href="#about" class="navigation__link">О нас</a></li>
                                <li class="navigation__item"><a href="#popular" class="navigation__link">Основные услуги</a></li>
                                <li class="navigation__item"><a href="#we" class="navigation__link">Нас выберают</a></li>
                                <li class="navigation__item"><a href="#price" class="navigation__link"yu>Цены</a></li>
                                <li class="navigation__item"><a href="#contacts" class="navigation__link">Контакты</a></li>
                            </ul>
                        </nav> -->
                        <div id="marquee" class="blink-2">
                          <marquee class="merquee-header" behavior="scroll" weight="150" loop="infinity" truespeed="200" scrolldelay="200" onmouseover="this.stop()" onmouseout="this.start()">
                            <div id='mylist' class='garage-title blink-2'></div>#Ремонтцифровойтехники #Ремонткомпьютероввтомске #Ремонтноутбуковвтомске #Сервисныйцентртомск #Ремонттелефоноввтомске #Ремонтпланшетоввтомске #Ремонтмонитороввтомске #Ремонттелевизороввтомске
                          </marquee>
                        </div>
                    </div>
                    <div class="header-phone header-phone_page">
                        <a href="tel:84996861762" class="header-phone__number">8 (952) 155-59-36</a>
                        <time class="header-phone__schedule">с 10.00 до 19.00 без выходных</time>
                    </div>
                </div>
                </div>
                <div class="header__content">
                    <div class="hero header__hero">
                        <h1 class="hero__title">Ремонт компьютеров, ноутбуков, телевизоров, телефонов, моноблоков в Томске</h1>
                        <p class="hero__subtitle">Задать вопрос</p>
                        <button data-fancybox data-src="#order-form" class="btn btn_large but-effect">Записаться онлайн</button>
                        <div class="hero__social">
                            <ul class="social social_horizon">
                                <li class="social__item"><a href="https://vk.com/sc2bytes"><img class="social__link" src="<?php echo get_template_directory_uri() ?>/assests/img/vk_w.png" alt="Vk"></a></li>
                                <li class="social__item"><a href="#"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/insta_w.png" alt="Instagram"></a></li>
                                <li class="social__item"><a href="#"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/You_w.png" alt="Youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__codepen">
                        <div class="header__cube">
                            <canvas id="cube"></canvas>
                            <div id='text'>
    <h1 id="fps">Antisha</h1>
  </div>
                        </div>

                        <!-- <img class="header__img" src="./img/hero_girl.png" alt="fasion-girl"> -->
                       
                    </div>
                    <ul class="social social_vertical header__social">
                        <li class="social__item"><a href="https://vk.com/sc2bytes"><img class="social__link" src="<?php echo get_template_directory_uri() ?>/assests/img/vk_w.png" alt="Vk"></a></li>
                        <li class="social__item"><a href="#"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/insta_w.png" alt="Instagram"></a></li>
                        <li class="social__item"><a href="#"><img class="social__link"  src="<?php echo get_template_directory_uri() ?>/assests/img/You_w.png" alt="Youtube"></a></li>
                    </ul>
                </div>
            </div>
            </header>
