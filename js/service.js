$(function () {
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
