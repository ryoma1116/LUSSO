$(function () {
  //AOS.js
  AOS.init();

  // ハンバーガーメニュー
  $(function () {
    $(".js-hamburger,.js-drawer, .js-drawer a").click(function () {
      $(".js-hamburger").toggleClass("is-active");
      $(".js-header__logo").toggleClass("is-active");
      $(".js-drawer").toggleClass("is-active");
      $(".js-circle-bg").toggleClass("is-active");
    });
  });

  //Gナビserviceのhoverアクション
  $(".js-header__item").hover(
    function () {
      $(".js-mask").addClass("is-active");
    },
    function () {
      $(".js-mask").removeClass("is-active");
    }
  );
  //上scrollで出てくるheader
  var scroll = 0;
  $(window).on("scroll", function () {
    $(".js-header").addClass("is-transparent");
    if ($(this).scrollTop() < scroll) {
      $(".js-header").addClass("is-fixed");
    } else {
      $(".js-header").removeClass("is-fixed");
    }
    scroll = $(this).scrollTop();
  });


  //パンくずリスト文字制限
  function textTrimBread() {
    var selector = document.getElementsByClassName("js-breadcrumb-title");
    var wordCount = 10;
    var clamp = "…";
    for (var i = 0; i < selector.length; i++) {
      if (selector[i].innerText.length > wordCount) {
        var str = selector[i].innerText; // 文字数を取得
        str = str.substr(0, wordCount - 1); // 1文字削る
        selector[i].innerText = str + clamp; // 文末にテキストを足す
      }
    }
  }
  textTrimBread();
}); //最初のファンクション
