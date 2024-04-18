<aside id="saidebar">
                                    <div class="widget widget_search search-bar">
                                    <form class="search-bar__form" action="<?php echo get_home_url(); ?>">
                                        <input class="search-bar__input" type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder=" Поиск по сайту">
                                        <button type="submit" class="search-bar__button">
                                        </button>
                                    </form>
                                    </div>

                                    

                                    <div class="widget widget_cotegories saidebar-menu">

                                        <?php wp_nav_menu( array (
                                            'theme_location'  => 'menu-1',
                                            'container'       => 'div',
                                            'container_class' => 'menu-menu-1-container',
                                            'menu_class'      => 'menu-menu-1-container',
                                            'menu_id'         => '',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'before'          => '',
                                            'after'           => '',
                                            'link_before'     => '',
                                            'link_after'      => '',
                                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth'           => 0,
                                            'walker'          => '',

                                    ) ); ?>

<!--                                         <ul class="link-list saidebar-menu__list">
                                            <li class="saidebar-menu__item"><span><a href="" class="saidebar-menu__link"><em style="padding-right: 5px;"><</em>Ремонт</a></span></li>
                                                <ul>
                                                    <li><a>Ремонт компьютеров</a></li>
                                                    <li><a>Ремонт ноутбуков</a></li>
                                                    <li><a>Ремонт телефонов</a></li>
                                                    <li><a>Ремонт телевизоров</a></li>
                                                    <li><a>Ремонт принтеров</a></li>
                                                </ul>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Ремонт ноутбуков</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Ремонт телефонов</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Ремонт телевизоров</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Услуги</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Заправка картриджей</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Продажа</a></li>
                                            <li class="saidebar-menu__item"><a href="" class="saidebar-menu__link">Контакты</a></li>
                                        </ul> -->
                                    </div>
                                </aside>