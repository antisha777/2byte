<div class="mobile">
    <nav class="mobile__nav">
        <button class="mobile__burger"></button>
        <div class="mobile__holder">
            <div class="mobile__navigation">
                <!-- <?php include (TEMPLATEPATH . '/template-parts/nav.php'); ?> -->
                <?php get_sidebar('sidebar-telephone'); ?>
            </div>
            <div class="mobile__footer">
                <a href="tel:89521555936" class="mobile__btn">Позвонить</a>
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
        </div>
    </nav>
</div>