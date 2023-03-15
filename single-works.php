<?php get_header('detail'); ?>
<main class="main">
    <div class="breadcrumb">
        <div class="breadcrumb__inner">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
    </div>
    <section class="works-detail">
        <div class="works-detail__inner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php
                    $terms = get_the_terms($post->ID, 'achievement');
                    // 複数のカスタム分類を指定する場合は配列を使用する
                    // $terms = get_the_terms($post->ID, array('カスタム分類名1','カスタム分類名2'));
                    if ($terms) {
                        echo '<div class="category__list">';
                        foreach ($terms as $term) {
                            echo '<span class="tag">' . $term->name . '</span>';
                        }
                        echo '</div>';
                    }
                    ?>
                    <h1 class="works-detail__title"><?php the_title(); ?></h1>
                    <time class="time works-detail__time" datetime="<?php the_time('Y-n-j'); ?>"><?php the_time('Y.n.j'); ?></time>
                    <div class="works-detail__img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="works-detail__body">
                        <?php the_content(); ?>
                    </div>

            <?php endwhile;
            endif; ?>
            <div class="works-detail__prev">
                <a href="<?php echo esc_url(home_url('/')); ?>works" class="works-detail__prev-link"><i class="fa-solid fa-chevron-left works-detail__prev--icon"></i>実績一覧へ戻る</a>
            </div>
        </div>
    </section>
    <?php get_template_part('common-contact'); ?>
</main>
<?php get_footer(); ?>