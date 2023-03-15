$(function () {
  //news-nav
  $(".js-works-nav").hover(
    function () {
      $(".js-works-nav").removeClass("is-active");
      $(this).addClass("is-active");
    },
    function () {
      $(".js-works-nav").removeClass("is-active");
    }
  );
}); //最初のファンクション

//sp時に各記事の文字数を制限
const mediaQuery = window.matchMedia("(max-width: 768px)");
// ページが読み込まれた時に実行
handle(mediaQuery);
// ウィンドウサイズを変更しても実行（ブレイクポイントの監視）
mediaQuery.addListener(handle);

function handle(mm) {
  if (mm.matches) {
    function textTrim() {
      // テキストをトリミングする要素
      var selector = document.getElementsByClassName("js-article-title");

      // 制限する文字数
      var wordCount = 24;

      // 文末に追加したい文字
      var clamp = "…";

      for (var i = 0; i < selector.length; i++) {
        // 文字数を超えたら
        if (selector[i].innerText.length > wordCount) {
          var str = selector[i].innerText; // 文字数を取得
          str = str.substr(0, wordCount - 1); // 1文字削る
          selector[i].innerText = str + clamp; // 文末にテキストを足す
        }
      }
    }
    textTrim();
  } else {
    // それ以外の処理
  }
}
