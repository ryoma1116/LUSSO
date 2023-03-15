<?php get_header(); ?>

<main class="main js-main">
    <section class="fv js-fv">
        <div class="fv__inner">
            <div class="fv__bg fade-fv--up js-fade-load"><img src="<?php echo get_theme_file_uri('/images/works-fv-img.jpg'); ?>" alt="黄色の車が倉庫に格納されている様子">
            </div>
            <div class="page__title page-title fade-fv--right js-fade-load">
                <div class="page-title__inner">
                    <h2 class="page__title--main">Works</h2>
                    <p class="page__title--sub">実績紹介</p>
                </div>
            </div>
        </div>
    </section>
    <div class="breadcrumb">
        <div class="breadcrumb__inner">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
    </div>
    <section class="works">
        <div class="works__inner">
            <div class="works__side">
                <aside class="works__nav works-nav">
                    <ul class="works-nav__list js-sticky">
                        <li class="works-nav__item js-works-nav is-active">
                            <a href="<?php echo esc_url(home_url('/')); ?>works" class="works-nav__link">すべてのお知らせ</a>
                        </li>
                        <li class="works-nav__item js-works-nav">
                            <a href="<?php echo esc_url(home_url('/')); ?>achievement/support" class="works-nav__link">購入サポート</a>
                        </li>
                        <li class="works-nav__item js-works-nav">
                            <a href="<?php echo esc_url(home_url('/')); ?>achievement/repair" class="works-nav__link">修理・整備</a>
                        </li>
                        <li class="works-nav__item js-works-nav">
                            <a href="<?php echo esc_url(home_url('/')); ?>achievement/inspection" class="works-nav__link">車検・点検</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="works__post">
                <?php
                if (wp_is_mobile()) {
                    $num = 4; // スマホの表示数(全件は-1)
                } else {
                    $num = 8; // PCの表示数(全件は-1)
                }
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $type = get_query_var('achievement'); // タクソノミーのスラッグ
                $args = [
                    'post_type' => 'works', // 投稿タイプスラッグ
                    'paged' => $paged, // ページネーションがある場合に必要
                    'posts_per_page' => $num, // 表示件数（変更不要）
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'achievement', // タクソノミーのスラッグ
                            'field' => 'slug', // ターム名をスラッグで指定する（変更不要）
                            'terms' => $type,
                        ),
                    )
                ];
                $wp_query = new WP_Query($args);
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                        <article class="works__article works-article">
                            <a href="<?php the_permalink(); ?>" class="works-article__link">
                                <div class="works__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="works__body">
                                    <div class="category__list">
                                        <?php
                                        $terms = get_the_terms($post->ID, 'achievement');
                                        // 複数のカスタム分類を指定する場合は配列を使用する
                                        // $terms = get_the_terms($post->ID, array('カスタム分類名1','カスタム分類名2'));
                                        if ($terms) {
                                            echo '<ul>';
                                            foreach ($terms as $term) {
                                                echo '<span class="tag">' . $term->name . '</span>';
                                            }
                                            echo '</ul>';
                                        }
                                        ?>
                                    </div>
                                    <h3 class="works-article__title js-article-title post-title"><?php the_title(); ?></h3>
                                    <time class="time" datetime="<?php the_time('Y-n-j'); ?>"><?php the_time('Y.n.j'); ?></time>
                                </div>
                            </a>
                        </article>
                    <?php endwhile;
                else : ?>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>
                <?php wp_pagenavi(array('query' => $wp_query)); ?>
            </div>
        </div> <!-- inner -->
    </section>
    <?php get_template_part('common-contact'); ?>
</main>
<?php get_footer(); ?>