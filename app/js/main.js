$(function () {

  $('.menu__btn').on('click', function () {
    $('.menu__list').toggleClass('menu__list--active');
    $('.wrapper').toggleClass('wrapper__fixed');
  });

  $('.menu__link').on('click', function () {
    $('.menu__list').removeClass('menu__list--active');
    $('.wrapper').removeClass('wrapper__fixed');
  });

  $('.about__slider').slick({
    prevArrow: '<button type="button" class="slick-btn slick-prev"><img src="images/icons/arrow-prev.svg" alt=""></button>',
    nextArrow: '<button type="button" class="slick-btn slick-next"><img src="images/icons/arrow-next.svg" alt=""></button>',
    dots: true
  });

  $('.menu__link, .btn--scroll, .logo').on('click', function (e) {
    e.preventDefault();
    var id = $(this).attr('href'), top = $(id).offset().top;
    $('body, html').animate({ scrollTop: top }, 1500);
  });
  
});