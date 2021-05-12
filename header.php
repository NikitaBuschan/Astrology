<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Астролог</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <div class="header__body">
                    <a href="#" class="header__logo__with__burger">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/_header/logo.png">
                    </a>
                    <div class="header__burger">
                        <span>

                        </span>
                    </div>
                    <nav class="header__menu">
                        <ul class="header__list">
                            <li>
                                <a href="/index.php" class="header__link">Главная</a>
                            </li>
                            <li>
                                <a href="/programs" class="header__link">Программы</a>
                            </li>
                            <li>
                                <a href="/services" class="header__link" >Услуги и цены</a>
                            </li>
                            <li>
                                <a href="#" class="header__logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/_header/logo.png">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="header__link">Специалисты</a>
                            </li>
                            <li>
                                <a href="#" class="header__link">Исследования</a>
                            </li>
                            <li>
                                <a href="/contacts" class="header__link">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <script src="<?php echo get_template_directory_uri(); ?>/scripts/header.js"></script>
        </header>