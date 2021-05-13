<?php get_header(); ?>
<picture>
   <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/images/home/top/top_mobile.webp"
      media="(max-width: 768px)">
   <source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/images/home/top/top_mobile.jpeg"
      media="(max-width: 768px)">
   <source type="image/jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/home/top/top_mobile.jpg"
      media="(max-width: 768px)">
   <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/images/home/top/top.webp">
   <source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/images/home/top/top.jpeg">
   <img class="main_background" src="<?php echo get_template_directory_uri(); ?>/images/home/top/top.jpg" alt="">
</picture>

<section class="one">
   <picture>
      <source type="image/webp"
         srcset="<?php echo get_template_directory_uri(); ?>/images/home/block_one/block_one_mobile.webp"
         media="(max-width: 768px)">
      <source type="image/jpeg"
         srcset="<?php echo get_template_directory_uri(); ?>/images/home/block_one/block_one_mobile.png"
         media="(max-width: 768px)">
      <source type="image/webp"
         srcset="<?php echo get_template_directory_uri(); ?>/images/home/block_one/block_one.webp">
      <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/images/home/block_one/block_one.png">
      <img class="ring" src="<?php echo get_template_directory_uri(); ?>/images/home/block_one/block_one.png" alt="">
   </picture>
   <!-- <img class="ring" src="<?php echo get_template_directory_uri(); ?>/images/home/block_one.png" alt=""> -->
   <div class="container">
      <div class="one__block">
         <div class="one__block_title">
            <h2>Школа Джйотиш Астрологии</h2>
            <h1>Нелли Фардановой</h1>
         </div>
         <div class="one__block_data">
            <div class="experience">
               <h2>10+</h2>
               <h3>лет опыта</h3>
            </div>
            <div class="pupils">
               <h2>1 000+</h2>
               <h3>Учеников со всего мира</h3>
            </div>
            <div class="consultation">
               <h2>2 000+</h2>
               <h3>Консультаций</h3>
            </div>
         </div>
         <div class="one__block_buttons">
            <a href="#" class="btn">Записаться на курс</a>
            <div class="contacts__info">
               <a href="https://web.telegram.org/#/im?p=@nelly_astrology" target="_blank" class="contacts__info_link">
                  <svg class="icon">
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons/sprite.svg#telegram">
                     </use>
                  </svg>
                  <!-- <i class="fab fa-telegram-plane"></i> -->
               </a>
               <a href="https://www.instagram.com/nelli.astrology/" target="_blank" class="contacts__info_link">
                  <!-- <i class="fab fa-instagram"></i> -->
                  <svg class="icon">
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons/sprite.svg#instagram">
                     </use>
                  </svg>
               </a>
               <a href="https://www.youtube.com/channel/UCg13Ixz_FS6GdxarZJWE6cg" target="_blank"
                  class="contacts__info_link">
                  <!-- <i class="fab fa-youtube"></i> -->
                  <svg class="icon">
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons/sprite.svg#youtube">
                     </use>
                  </svg>
               </a>
            </div>
         </div>
      </div>
      </siv>
</section>

<section class="two">
   <picture>
      <source type="image/webp"
         srcset="<?php echo get_template_directory_uri(); ?>/images/home/block_two/block_two_mobile.webp"
         media="(max-width: 768px)">
      <source type="image/jpeg"
         srcset="<?php echo get_template_directory_uri(); ?>/images/home/block_two/block_two_mobile.png"
         media="(max-width: 768px)">
      <source type="image/webp"
         srcset="<?php echo get_template_directory_uri(); ?>/images/home/block_two/block_two.webp">
      <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/images/home/block_two/block_two.png">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home/block_two/block_two.png" alt="">
   </picture>
   <div class="two__block">
      <div class="two__block_white-line">
         <div class="container">
            <div class="two__block_title">
               <h2>ГЛАВНЫЙ СПЕЦИАЛИСТ</h2>
               <p>Это сайт профессионального Джйотиш Астролога — Терапевта Нелли Фардановой. Здесь вы сможете
                  узнать что такое Джойтиш астрология, окунуться в восточную ведическую астрологию, познать
                  себя, раскрыть свой потенциал.
               </p>
               <div class="two__block_buttons">
                  <a href="#">Записаться на консультацию</a>
                  <a href="#">Подробнее о специалисте</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



<script src="<?php echo get_template_directory_uri(); ?>/scripts/home.js"></script>

<?php get_footer(); ?>