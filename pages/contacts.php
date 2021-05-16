<?php get_header(); ?>
<?php
    /* Template Name: contacts */
?>

<section>
    <img src="<?php echo get_template_directory_uri(); ?>/images/contacts/background.png" alt="">
    <div class="container">
        <div class="contacts">
            <div class="contacts__data">
                <div class="contacts__data_contact">
                    <div class="wrap">
                        <div class="phone">
                            <h3>Наши телефоны:</h3>
                            <h4>WhatsApp/Vibes +7 911 100 54 05</h4>
                        </div>
                        <div class="social">
                            <h3>Ссылки на соц сети</h3>
                            <div class="social_buttons">
                                <a href="https://web.telegram.org/#/im?p=@nelly_astrology" target="_blank"
                                    class="contacts__info_link">
                                    <i class="fab fa-telegram-plane"></i>
                                </a>
                                <a href="https://www.instagram.com/nelli.astrology/" target="_blank"
                                    class="contacts__info_link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UCg13Ixz_FS6GdxarZJWE6cg" target="_blank"
                                    class="contacts__info_link">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                        <div class="address">
                            <h3>Адрес электронной почты</h3>
                            <h4>info@nelli-astrology.com</h4>
                        </div>
                    </div>
                </div>
                <div class="contacts__data_info">
                    <div class="wrap">
                        <a href="#">Записаться на консультацию</a>

                        <div class="buttons">
                            <button>Договор-оферта</button>
                            <button>Соглашение об обработке персональных данных</button>
                        </div>
                        <h4>ИП Фараднова Н.Г.
                            ОГРНИП 320470400013530 ИНН 110603112313
                            г. Выборг, ЛО</h4>
                    </div>
                </div>
            </div>
            <div class="contacts__form">
                <div class="contacts__form_block">
                    <h1>Если у вас остались вопросы, напишите нам:</h1>
                    <form action="#">

                        <input type="text" placeholder="Ваш E-mail на который мы пришлем ответ?" required name="email" id="email">
                        <label for="email">*</label>
                        <input type="text" placeholder="Как вас зовут?" required>
                        <div class="area">
                            <textarea name="area" id="area" cols="30" rows="5"
                                placeholder="Оставьте свое сообщение"></textarea>
                            <label for="area">*</label>
                        </div>
                        <input type="submit" class="button" value="Отправить сообщение">
                    </form>
                    <div class="personal-data">
                        <input class="custom-checkbox" id="check" class="check" type="checkbox" required form="form">
                        <label for="check"></label>
                        <h3>Я согласен на обработку моих персональных
                            данных в соответствии с Условиями
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $('input[type=checkbox]').click(function () {
        this.blur();
    });

    if ($(window).width() < 520) {
        $('#email').attr('placeholder', "Ваш Email?");
    }
</script>

<?php get_footer(); ?>

