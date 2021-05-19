<?php get_header(); ?>

<?php
    /* Template Name: jyotish */
?>

<section class="one">
   <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_one_background.jpg" alt="">
   </div>
   <div class="container">
      <div class="one__block">
         <h1>ВИДЕОКУРС</h1>
         <h1 class="a">АЗБУКА ДЖЙОТИШ АСТРОЛОГА</h1>
         <h1 class="s">АЗБУКА ДЖЙОТИШ</h1>
         <h1 class="s">АСТРОЛОГА</h1>
         <h3>БЕСПЛАТНОЕ ОБУЧЕНИЕ АСТРОЛОГИИ</h3>
         <h4>
            Материал полезен для начинающих астрологов и тех, кто хочет просто познакомиться чуть ближе с Джйотиш
            астрологией, узнать ее основные принципы и законы.
         </h4>
         <a href="#">Присоединиться к курсу</a>
      </div>
   </div>
</section>

<section class="two">
   <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_two_stars.png" alt="">
   <div class="two__left">
      <div class="two__left_info">

         <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_two_lines.png" alt="">

         <div class="two__left_info-block">
            <h3>
               Джйотиш Астрология - это наука. Наука познания &nbsp;&nbsp; себя &nbsp;&nbsp; через
               &nbsp;&nbsp;&nbsp; соединения планет. &nbsp;Мне &nbsp;всегда &nbsp;поступало &nbsp;много
               вопросов &nbsp;о &nbsp;том, &nbsp;что такое &nbsp;натальная карта, дома &nbsp;в &nbsp;астрологии &nbsp;и
               &nbsp;за &nbsp;&nbsp;какие сферы &nbsp;жизни &nbsp;отвечает каждый из
               них.
               </br>
               </br>
               Я &nbsp;&nbsp;рада, &nbsp;&nbsp;что &nbsp;&nbsp;могу &nbsp;поделиться &nbsp;этими знаниями &nbsp;с
               &nbsp;вами. И я надеюсь, что вы найдете &nbsp;в &nbsp;нем &nbsp;все &nbsp;&nbsp;ответы &nbsp;на
               &nbsp;&nbsp;ваши
               вопросы.
            </h3>
            <h4>Нелли Фарданова</h4>
         </div>

      </div>
   </div>

   <div class="two__middle_block">
      <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish//block_two_middle_stars.png" alt="">
      <h3>
         “ДЖЙОТИШ” означает свет.
         И этот курс проливает свет на базовые понятия в Джйотиш Астрологии.
      </h3>
   </div>

   <div class="two__right">

      <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_two_nelli.jpg" alt="">

   </div>
</section>

<section class="three">
   <div class="container">

      <div class="three__block">

         <div class="three__block_item">
            <svg class="icon">
               <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/jyotish/sprite.svg#book"></use>
            </svg>
            <h3>
               <span>Знания</span>, применяя которые Вы уже сейчас сможете менять свою жизнь к лучшему!
            </h3>
         </div>

         <div class="three__block_item">
            <svg class="icon">
               <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/jyotish/sprite.svg#clock"></use>
            </svg>
            <h3>
               <span>6 видео уроков</span> длительностью по 15-20 минут
            </h3>
         </div>

         <div class="three__block_item">
            <svg class="icon">
               <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/jyotish/sprite.svg#computer"></use>
            </svg>
            <h3>
               <span>Удобный формат</span> — обучение онлайн из любой точки света в удобное для вас время
            </h3>
         </div>

      </div>

      <div class="three__img">
         <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_three.jpg" alt="">
      </div>

   </div>
</section>

<section class="four">
   <div class="four__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_four_background.jpg" alt="">
   </div>

   <div class="container">
      <div class="four__block">
         <h3>
            <span>Азбука Джйотиш Астролога</span> — курс, где Вы более подробно сможете познакомиться с ведической
               астрологией Джйотиш. Этот курс рассчитан для новичков. Здесь Вы сможете познать основы Джйотиш астрологии
               и ее главные элементы.
               </br>
               </br>
               Узнайте, как Джйотиш Астрология может помочь в жизни. Как применить эти знания, а также решите, хотите ли
               Вы стать профессиональным Джйотиш астрологом.

         </h3>
      </div>
   </div>
</section>

<section class="five">
   <?php 
       $text = array(
          "Вы поймете, что такое натальная карта. 
           Научитесь самостоятельно ее читать.",
           "Узнаете, как влияют на нас планеты. Что делать, чтобы сгладить проявление “поврежденных” планет в
           натальной карте.", 
           "Какова роль астрологических домов, Накшатр и Гун. Как эти знания помогут вам жизни.",
           "Сможете разбираться в особенностях каждого знака зодика."
           );
   ?>

   <div class="container">
      <div class="five__block_info">
         <h1>
            ПОСЛЕ ПРОХОЖДЕНИЯ ПРОГРАММЫ:
         </h1>

         <? for ($i = 0; $i < count($text); $i++) { ?>

         <div class="five__block_info-item">
            <h2>
               <? echo $i + 1 ?>
            </h2>
            <h3>
               <? echo $text[$i]?>
            </h3>
         </div>

         <? } ?>

      </div>
   </div>

   <div class="five__block_img">
      <div class="line"></div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_five.png" alt="">
   </div>

</section>

<section class="six">
   <? 
      $items = array(
         "Что такое Джйотиш?", 
         "Что такое Натальная карта?", 
         "Что такое Знаки зодиака в Джйотиш Астрологии и как они пишутся?",
         "Что такое Планеты в Джйотиш Астрологии?", 
         "Что такое Дома в Джйотиш Астрологии?",
         "Что такое Накшатры и Гуны?"
      );
   ?>

   <div class="six__block_info">
      <div class="container">
         <h1>
            ПРОГРАММА ВИДЕОКУРСА:
         </h1>
         <div class="six__block_info-items">
            <? for ($i = 0; $i < count($items); $i++) { ?>

            <h3>
               <? echo $items[$i] ?>
            </h3>

            <? } ?>
         </div>

         <a href="#">Присоединиться к курсу</a>
      </div>
   </div>

   <div class="six__block_img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_six.png" alt="">
   </div>
</section>

<section class="seven">
   <div class="seven__block_info">

      <div class="container">
         <h1>
            БЕСПЛАТНЫЙ ВИДЕОКУРС
            “ДОМА В ДЖЙОТИШ АСТРОЛОГИИ”
         </h1>
         <h3>
            Дома в гороскопе — это одна из основополагающих частей натальной карты человека. Всего домов 12. Каждый из
            них
            воздействует на определенную сферу жизни и является “жилищем” для попадающих в него планет.
            В зависимости от качества планет и домов, в котором они находятся мы можем определить особенности личности,
            характера, тела, здоровья, отношений, благосостояния и судьбу человека.
         </h3>
         <a href="#">Присоединиться к курсу</a>
      </div>

   </div>
   <div class="seven__block_house">
      
      <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_seven_background.jpg" alt="">

      <div class="seven__block_house-img">
         <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_seven_map.png" alt="">
      </div>
   </div>
</section>

<section class="eight">
   <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_eight.png" alt="">
   <div class="container">

      <div class="eight__block">
         <div class="eight__block_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/jyotish/block_eight_nelli.jpg" alt="">
         </div>
         <div class="eight__block_info">
            <h1>
               О ВЕДУЩЕЙ КУРСА:
            </h1>
            <h3>
               <span>Я, Нелли Фарданова</span> - Джйотиш астролог-терапевт с 10 летним опытом консультирования людей по
               древне-индийской ведической Джйотиш астрологии.
               </br>
               </br>
               Уже более 2000 клиентов получили через меня ответы на свои вопросы, преодолели трудности и стали жить в
               понимании себя и своей природы.

            </h3>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>