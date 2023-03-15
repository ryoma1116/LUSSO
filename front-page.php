<?php get_header(); ?>
<main class="main">
    <div class="mv">
        <div class="mv__inner">
            <div class="mv__swiper swiper">
                <!-- 必要に応じたwrapper -->
                <div class="swiper-wrapper mv__swipe-wrapper">
                    <!-- スライド -->
                    <div class="swiper-slide mv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri("images/FV-img01-sp.jpg"); ?>" media="(max-width :768px)">
                            <img src="<?php echo get_theme_file_uri("images/FV-img01.jpg"); ?>" alt="サングラスをかけた女性4人が左ハンドルの車で、楽しそうに笑っている様子">
                        </picture>
                    </div>
                    <div class="swiper-slide mv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri("images/FV-img02-sp.jpg"); ?>" media="(max-width :768px)">
                            <img src="<?php echo get_theme_file_uri("images/FV-img02.jpg"); ?>" alt="男性が運転し、女性が助手席に乗り楽しそうにしている様子">
                        </picture>
                    </div>
                    <div class="swiper-slide mv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri("images/FV-img03-sp.jpg"); ?>">
                            <img src="<?php echo get_theme_file_uri("images/FV-img03.jpg"); ?>" alt="サングラスをかけたワイルドな男性が片手で運転をしている様子">
                        </picture>
                    </div>
                    <div class="swiper-slide mv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri("images/FV-img04-sp.jpg"); ?>" media="(max-width :768px)">
                            <img src="<?php echo get_theme_file_uri("images/FV-img04.jpg"); ?>" alt="山が見える場所で赤いスポーツカーの運転席近くに腰をかけている女性">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="mv__copy">
                <h2 class="mv__copy--main">あなたの<br>日常が目覚める</h2>
                <p class="mv__copy--sub">Change your life</p>
            </div>
        </div>
    </div> <!--mv-->
    <div class="site-copy">
        <p class="site-copy__text">Good life for Good Car</p>
    </div>
    <section id="about" class="about" data-aos="fade-up" data-aos-duration="1000">
        <div class="inner about__inner">
            <div class="about__img">
                <img src="<?php echo get_theme_file_uri("/images/top-about-img.jpg"); ?>" alt="山に向かってグレーのスポーツカー駐車している様子">
            </div>
            <div class="about__bpdy">
                <h3 class="about__title">About&#160;us</h3>
                <p class="about__text">
                    LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
                </p>
                <div class="read-more about__read-more">
                    <a href="<?php echo esc_url(home_url('/')); ?>about" class="read-more__link">read&#160;more<i class="fa-solid fa-chevron-right arrow-icon"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section id="service" class="service">
        <div class="section-title section-title--right">
            <h3 class="section-title__text" data-aos="fade-left" data-aos-duration="1000">Service</h3>
        </div>
        <div class="service__content service__content--bg js-service-bg">
            <div class="service__item js-service__item service-item">
                <div class="service-item__inner">
                    <div class="service__sp-bg">
                        <p class="service__item-number">Service01</p>
                        <h4 class="service__item-heading">購入サポート</h4>
                    </div>
                    <div class="service__body">
                        <p class="service__item--lead">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p>
                        <div class="read-more read-more--border service__read-more">
                            <a href="<?php echo esc_url(home_url('/')); ?>service/#support" class="read-more__link read-more__link--border">read&#160;more
                                <i class="fa-solid fa-chevron-right arrow-icon arrow-icon--white js-arrow service-arrow-icon--white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--service-item-->
            <div class="service__item js-service__item service-item">
                <div class="service-item__inner">
                    <div class="service__sp-bg">
                        <p class="service__item-number">Service02</p>
                        <h4 class="service__item-heading">修理・整備</h4>
                    </div>
                    <div class="service__body">
                        <p class="service__item--lead">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p>
                        <div class="read-more read-more--border service__read-more">
                            <a href="<?php echo esc_url(home_url('/')); ?>service/#repair" class="read-more__link read-more__link--border">read&#160;more
                                <i class="fa-solid fa-chevron-right arrow-icon arrow-icon--white js-arrow service-arrow-icon--white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--service-item-->
            <div class="service__item js-service__item service-item">
                <div class="service-item__inner">
                    <div class="service__sp-bg">
                        <p class="service__item-number">Service03</p>
                        <h4 class="service__item-heading">車検・点検</h4>
                    </div>
                    <div class="service__body">
                        <p class="service__item--lead">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならLUSSOへご相談ください。</p>
                        <div class="read-more read-more--border service__read-more">
                            <a href="<?php echo esc_url(home_url('/')); ?>service/#inspection" class="read-more__link read-more__link--border">read&#160;more
                                <i class="fa-solid fa-chevron-right arrow-icon arrow-icon--white js-arrow service-arrow-icon--white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--service-item-->

        </div>
    </section>
    <section id="works" class="works">
        <div class="works__inner">
            <div class="section-title">
                <h2 class="section-title__text" data-aos="fade-right" data-aos-duration="1000">Works</h2>
            </div>
            <div class="works__content works-content">
                <div class="works-content__inner">
                    <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = [
                        'post_type' => 'works', // 投稿タイプのスラッグ(通常投稿なので'post')
                        'paged' => $paged, // ページネーションがある場合に必要
                        'posts_per_page' => 3, // 表示件数
                    ];
                    $wp_query = new WP_Query($args);
                    if (have_posts()) : while (have_posts()) : the_post();
                    ?> <article class="works__item" data-aos="fade-up" data-aos-duration="1000">
                                <a href="<?php the_permalink(); ?>" class="works__item--link">
                                    <div class="works__item--img">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="works__item--body">
                                        <div class="category__list">
                                            <?php
                                            $categories = get_the_category();
                                            foreach ($categories as $category) {
                                                echo "<span class='tag'>$category->name</span>";
                                            }
                                            ?>
                                        </div>
                                        <p class="works__item--title js-works-title"><?php the_title(); ?></p>
                                        <?php
                                        $excerpt = get_the_excerpt();
                                        echo '<p class="works__item--text js-works-text">' . $excerpt . '</p>';
                                        ?>
                                        <time class="works__item--time" <?php the_time('Y-n-j'); ?>><?php the_time('Y.n.j'); ?></time>
                                    </div>
                                </a>
                            </article>
                    <?php endwhile;
                    endif; ?>
                    <?php wp_reset_postdata(); ?>

                    <div class="read-more works__read-more">
                        <a href="<?php echo esc_url(home_url('/')); ?>works" class="read-more__link">read&#160;more<i class="fa-solid fa-chevron-right arrow-icon"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="news" class="news">
        <div class="news__inner">
            <div class="news__side">
                <div class="section-title">
                    <h2 class="section-title__text" data-aos="fade-right" data-aos-duration="1000">News</h2>
                </div>
                <aside class="news__nav news-nav" data-aos="fade-up" data-aos-duration="1000">
                    <ul class="news-nav__list">
                        <li class="news-nav__item js-news-nav is-active">
                            <a href="<?php echo esc_url(home_url('/')); ?>news" class="news-nav__link">すべてのお知らせ</a>
                        </li>
                        <li class="news-nav__item js-news-nav">
                            <a href="<?php echo esc_url(home_url('/')); ?>category/topix" class="news-nav__link">トピックス</a>
                        </li>
                        <li class="news-nav__item js-news-nav">
                            <a href="<?php echo esc_url(home_url('/')); ?>category/event" class="news-nav__link">イベント・キャンペーン</a>
                        </li>
                        <li class="news-nav__item js-news-nav">
                            <a href="<?php echo esc_url(home_url('/')); ?>category/warehousing" class="news-nav__link">入庫情報</a>
                        </li>
                        <li class="news-nav__item news-nav__item--view js-news-nav">
                            <a href="<?php echo esc_url(home_url('/')); ?>news" class="news-nav__link news-nav__link--view">お知らせ一覧へ<i class="fa-solid fa-chevron-right arrow-icon"></i></a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="news__post">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = [
                    'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
                    'paged' => $paged, // ページネーションがある場合に必要
                    'posts_per_page' => 5, // 表示件数
                ];
                $wp_query = new WP_Query($args);
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                        <article class="news__article news-article">
                            <a href="<?php the_permalink(); ?>">
                                <div class="news-article__top-wrapper">
                                    <time class="time" datetime="<?php the_time('Y-n-j'); ?>"><?php the_time('Y.n.j'); ?></time>
                                    <div class="category__list category__list--white top-news__category">
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
                <div class="read-more works__read-more">
                    <a href="<?php echo esc_url(home_url('/')); ?>news" class="read-more__link">read&#160;more<i class="fa-solid fa-chevron-right arrow-icon"></i></a>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('common-contact'); ?>
</main>
<?php get_footer(); ?>