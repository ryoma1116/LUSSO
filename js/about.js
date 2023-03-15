$(function () {
  //スワイパー
  const swiper = new Swiper(".swiper", {
    loop: true,
    slidesPerView: "auto",
    loopedSlides: 3,
    speed: 3000,
    autoplay: {
      delay: 1,
      disableOnInteraction: false,
    }
  });

//可視領域に入ったらアニメーション
  $(function () {
    $(window).scroll(function () {
      $(".js-fade").each(function () {
        var position = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > position - windowHeight + 200) {
          $(this).addClass("is-active");
        }
      });
    });
  });

}); //最初のファンクション
