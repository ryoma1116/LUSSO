$(function () {
  //AOS.js
  AOS.init();

  //スワイパー
  const swiper = new Swiper(".swiper", {
    loop: true,
    speed: 3000,
    direction: "vertical",
    autoplay: {
      delay: 3000,
    },
  });

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
      //上スクロール時、クラス付与
      $(".js-header").addClass("is-fixed");
    } else {
      //下スクロール時、クラス削除
      $(".js-header").removeClass("is-fixed");
    }
    scroll = $(this).scrollTop();
  });

  function textTrim(selectorClass, wordCount, clamp) {
    // テキストをトリミングする要素
    var selector = document.getElementsByClassName(selectorClass);

    for (var i = 0; i < selector.length; i++) {
      // 文字数を超えたら
      if (selector[i].innerText.length > wordCount) {
        var str = selector[i].innerText; // 文字数を取得
        str = str.substr(0, wordCount - 1); // 1文字削る
        selector[i].innerText = str + clamp; // 文末にテキストを足す
      }
    }
  }

  textTrim("js-works-text", 86, "…");
  textTrim("js-works-title", 25, "…");

  //news-nav

  $(".js-news-nav").hover(
    function () {
      $(".js-news-nav").removeClass("is-active");
      $(this).addClass("is-active");
    },
    function () {
      $(".js-news-nav").removeClass("is-active");
    }
  );

  $(function () {
    const serviceItem = $(".js-service__item"),
      serviceBg = $(".js-service-bg"),
      arrow = $(".js-arrow"),
      serviceItemChilds = [
        null,
        $(".js-service__item:nth-child(1)"),
        $(".js-service__item:nth-child(2)"),
        $(".js-service__item:nth-child(3)"),
      ];

    function updateServiceHover() {
      if (window.matchMedia("(max-width: 768px)").matches) {
        // スマホ・タブレットの時の処理
        serviceItem.off("mouseenter mouseleave");
      } else {
        //PC時の処理
        for (let i = 1; i < serviceItemChilds.length; i++) {
          serviceItemChilds[i].off("mouseenter mouseleave");
          serviceItemChilds[i].on("mouseenter", function () {
            const backgroundImage = `url(/wp-content/themes/LUSSO/images/top-service-hover-bg0${i}.jpg)`;
            serviceBg.css("background-image", backgroundImage);
            arrow
              .not(serviceItemChilds[i].find(".js-arrow"))
              .addClass("is-color");
            serviceItem.not(serviceItemChilds[i]).addClass("is-color");
          });
          serviceItemChilds[i].on("mouseleave", function () {
            serviceBg.css(
              "background-image",
              "url(/wp-content/themes/LUSSO/images/top-service-img.jpg)"
            );
            serviceItem.removeClass("is-color");
            arrow.removeClass("is-color");
          });
        }
      }
    }

    updateServiceHover();
    $(window).on("resize", function () {
      updateServiceHover();
    });
  });
}); //最初のファンクション
