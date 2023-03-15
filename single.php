<?php get_header(); ?>
<main class="main js-main">
    <div class="breadcrumb">
        <div class="breadcrumb__inner">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
    </div>
    <div class="main-wrapper">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section class="news-detail">
                    <div class="news-detail__inner">
                        <div class="category__list"> <?php
                                                        $categories = get_the_category();
                                                        foreach ($categories as $category) {
                                                            echo "<span class='tag'>$category->name</span>";
                                                        }
                                                        ?>
                        </div>
                        <h1 class="news-detail__title"><?php the_title(); ?></h1>
                        <time class="time news-detail__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                        <div class="news-detail__img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
                    <?php the_post_navigation(array(
                        'prev_text' => '<i class="fa-solid fa-chevron-left arrow-icon"></i>前の記事へ',
                        'next_text' => '次の記事へ<i class="fa-solid fa-chevron-right arrow-icon"></i>'
                    ));
                    ?>
                </section>
        <?php endwhile;
        endif; ?>
        <aside class="news-detail__side side-bar">
            <section class="new-post">
                <h2 class="side-bar__title">最新の記事</h2>
                <div class="side-bar__inner">
                    <?php
                    $args = array(
                        'posts_per_page' => 5 // 表示件数の指定
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) : // ループの開始
                        setup_postdata($post); // 記事データの取得
                    ?>
                        <article class="new-post__item">
                            <a class="new-post__link" href="<?php the_permalink(); ?>">
                                <div class="new-post__item--img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="new-post__body">
                                    <h3 class="new-post__title post-title"><?php the_title(); ?></h3>
                                    <time class="time new-post__time" datetime="2022-09-22">2022.09.22</time>
                                </div>
                            </a>
                        </article>
                    <?php
                    endforeach; // ループの終了
                    wp_reset_postdata(); // 直前のクエリを復元する
                    ?>
                </div>
            </section>
            <section class="archive">
                <h2 class="side-bar__title">アーカイブ</h2>
                <div class="side-bar__inner">
                    <ul class="side-bar__list">
                    <?php
                    wp_get_archives(array(
                        'type' => 'monthly', //表示するアーカイブの種類
                        'limit' => '3', //取得する件数
                        'format' => 'html', //アーカイブの表示形式
                        'before' => '', //formatがhtmlまたはcustomのとき、aタグの直前に付けるテキスト（htmlタグ可）
                        'after' => '', //formatがhtmlまたはcustomのとき、aタグの直後に付けるテキスト（htmlタグ可）
                        'show_post_count' => false, //投稿数を表示するか
                        'echo' => 1, //表示するか（1）、値を返すか（0）
                        'order' => 'DESC', //項目をどの方向に並べるか
                        'post_type' => 'post' //アーカイブを取得する投稿タイプ
                    ));
                    ?>
                    </ul>
                </div>
            </section>

            <section class="category">
                <h2 class="side-bar__title">カテゴリー</h2>
                <div class="side-bar__inner">
                    <ul class="side-bar__list">
                        <?php
                        // 親カテゴリーのものだけを一覧で取得
                        $args = array(
                            'parent' => 0,
                            'orderby' => 'term_order',
                            'order' => 'ASC'
                        );
                        $categories = get_categories($args);
                        ?>
                        <?php foreach ($categories as $category) : ?>
                            <li>
                                <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>

            </section>
        </aside>
    </div>
</main>
<?php get_footer(); ?>