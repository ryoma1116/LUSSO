$(function () {
  $(".js-news-nav").hover(
    function () {
      $(".js-news-nav").removeClass("is-active");
      $(this).addClass("is-active");
    },
    function () {
      $(".js-news-nav").removeClass("is-active");
    }
  );
}); //最初のファンクション
