<?php
get_header();
?>
<main class="main">
    <section class="fv js-fv">
        <div class="fv__inner">
            <div class="fv__bg fade-fv--up js-fade-load">
                <img src="<?php echo get_theme_file_uri('/images/news-fv-img.jpg'); ?>" alt="黒のスポーツカーが窓を開けて走っている様子">
            </div>
            <div class="page__title page-title fade-fv--right js-fade-load">
                <div class="page-title__inner">
                    <h2 class="page__title--main">News</h2>
                    <p class="page__title--sub">お知らせ</p>
                </div>
            </div>
        </div>
    </section>
    <div class="breadcrumb">
        <div class="breadcrumb__inner">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
    </div>
    <section id="news" class="news">
        <div class="news__inner">
            <div class="news__side">
                <aside class="news__nav news-nav" data-aos="fade-up" data-aos-duration="1000">
                    <ul class="news-nav__list js-sticky">
                        <li class="news-nav__item js-news-nav is-active">
                            <a href="<?php echo esc_url(home_url('/')); ?>news" class="news-nav__link js-news-link">すべてのお知らせ</a>
                        </li>
                        <li class="news-nav__item js-news-nav">
                            <a href="<?php echo esc_url(home_url('/')); ?>category/topix" class="news-nav__link js-news-link">トピックス</a>
                        </li>
                        <li class="news-nav__item js-news-nav">
                            <a href="<?php echo esc_url(home_url('/')); ?>category/event" class="news-nav__link js-news-link">イベント・キャンペーン</a>
                        </li>
                        <li class="news-nav__item js-news-nav">
                            <a href="<?php echo esc_url(home_url('/')); ?>category/warehousing" class="news-nav__link js-news-link">入庫情報</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="news__post">
                <?php
                if (wp_is_mobile()) {
                    $num = 5; // スマホの表示数(全件は-1)
                } else {
                    $num = 10; // PCの表示数(全件は-1)
                }
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = [
                    'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
                    'paged' => $paged, // ページネーションがある場合に必要
                    'posts_per_page' => $num, // 表示件数
                ];
                $wp_query = new WP_Query($args);
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                        <article class="news__article news-article">
                            <a href="<?php the_permalink(); ?>">
                                <div class="news-article__top-wrapper">
                                    <time class="news__time" datetime="<?php the_time('Y-n-j'); ?>"><?php the_time('Y.n.j'); ?></time>
                                    <div class="category__list">
                                        <?php
                                        $categories = get_the_category();
                                        foreach ($categories as $category) {
                                            echo "<span class='tag'>$category->name</span>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <h3 class="news-article__title post-title"><?php the_title(); ?></h3>
                            </a>
                        </article>
                    <?php endwhile;
                else : ?>
                    <p>まだ記事がありません</p>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>
                <!-- 記事のループ処理終了 -->

                <?php wp_pagenavi(array('query' => $wp_query)); ?>
            </div>
        </div> <!-- inner -->
    </section>
    <?php get_template_part('common-contact'); ?>
</main>
<?php get_footer(); ?>