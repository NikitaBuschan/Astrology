$(document).ready(function () {
   $('.header__burger').on("touchstart", function (event) {
       $('.header__burger, .header__menu').toggleClass('active');
       $('body').toggleClass('lock');
       $('.header').toggleClass('active');
   });
});