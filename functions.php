<?php

function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

/* Googleフォントの読み込み */
function google_font_scripts()
{
    wp_enqueue_style('google-web-style', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Oswald:wght@700&family=Roboto:wght@400;500&display=swap');
}
add_action('wp_enqueue_scripts', 'google_font_scripts');

/* 共通CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1", true);
    wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', "", "1.0.1", true);
    wp_enqueue_script('aos-js', '//unpkg.com/aos@2.3.1/dist/aos.js', "", "1.0.1", true);
    wp_enqueue_script('fontawesome-js', '//kit.fontawesome.com/70037469e5.js', "", "1.0.1", true);
    wp_enqueue_style('aos-css', '//unpkg.com/aos@2.3.1/dist/aos.css', "", "1.0.1",);
    wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', "", "1.0.1",);
}
add_action('wp_enqueue_scripts', 'my_script_init');

//各ページ毎のcss読み込み
function css_script()
{
    switch (true) {
        case is_page('about'):
        case is_page('service'):
            wp_enqueue_style('about-service-css', get_template_directory_uri() . '/css/pages.css');
            break;
        case is_page('contact'):
        case is_page('contact-confirm'):
        case is_page('contact-thanks'):
            wp_enqueue_style('contact-css', get_template_directory_uri() . '/css/contact.css');
            break;
        case is_singular('works'):
        case is_tax('achievement'):
        case is_post_type_archive('works'):
            wp_enqueue_style('works-css', get_template_directory_uri() . '/css/works.css');
            break;
        case is_home():
        case is_category():
        case is_single():
            wp_enqueue_style('news-style', get_stylesheet_directory_uri() . '/css/news.css', array(), '1.0', 'all');
            break;
        case is_404():
            wp_enqueue_style('404-css', get_template_directory_uri() . '/css/404.css');
            break;
        default:
            wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
            break;
    }
}
add_action('wp_enqueue_scripts', 'css_script');



//共通css読み込み
function common_css_script()
{
    wp_enqueue_style('global-css', get_template_directory_uri() . '/css/global.css');
}
add_action('wp_enqueue_scripts', 'common_css_script');


//各ページ毎のjs読み込み
function js_script()
{
    switch (true) {
        case is_page('about'):
            wp_enqueue_script('about-js', get_template_directory_uri() . '/js/about.js', array('jquery'), '1.0.1', true);
            break;
        case is_page('service'):
            wp_enqueue_script('service-js', get_template_directory_uri() . '/js/service.js', array('jquery'), '1.0.1', true);
            break;
        case is_home():
        case is_category():
        case is_single():
            wp_enqueue_script('news-js', get_template_directory_uri() . '/js/news.js', array('jquery'), '1.0.1', true);
            break;
        case is_archive():
            wp_enqueue_script('archive-js', get_template_directory_uri() . '/js/works.js', array('jquery'), '1.0.1', true);
            break;
        default:
            wp_enqueue_script('script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.1', true);
            break;
    }
}
add_action('wp_enqueue_scripts', 'js_script');



//共通js読み込み
function add_common_scripts()
{
    wp_enqueue_script('common-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_common_scripts');



//月別アーカイブの表示件数変更
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;

    if ($query->is_archive()) { /* アーカイブページの時に表示件数を5件にセット */
        $query->set('posts_per_page', '5');
    }
}
add_action('pre_get_posts', 'change_posts_per_page');


//カスタム投稿タイプ
add_action('init', function () {
    register_post_type('works', [
        'label' => '実績',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => ['thumbnail', 'title', 'editor'],
        'has_archive' => true, //一覧を作成するかどうか
        'show_in_rest' => true, //グーテンベルグ対応
    ]);
    //カスタム分類
    register_taxonomy('achievement', 'works', [
        'label' => '実績内容',
        'hierarchical' => true,
        'show_in_rest' => true, //グーテンベルグ対応

    ]);
});

//記事のthumbnailがなければno-img
function default_post_thumbnail($html, $post_id, $post_thumbnail_id, $size, $attr)
{
    if (empty($html)) {
        $html = '<img src="' . esc_url(get_template_directory_uri()) . '/images/no-img.png" alt="画像が設定されていません"' . esc_attr(get_the_title($post_id)) . '">';
    }
    return $html;
}
add_filter('post_thumbnail_html', 'default_post_thumbnail', 10, 5);
