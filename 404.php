<?php get_header(); ?>
<main class="main">
    <div class="content">
        <div class="content__inner">
            <div class="content__img">
                <div class="content__body content-body">
                    <div class="content-body__inner">
                        <p class="content__message">404&#160;Not&#160;Found</p>
                        <p class="content__text sp-none">
                            お探しのページはURLが誤っているか、削除された可能性があります。<br>
                            3秒後にTOPページに遷移します
                        </p>
                        <div class="content__btn sp-none">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="content__btn--link">
                                <img src="<?php echo get_theme_file_uri( '/images/arrow-icon-white.svg' ); ?>" alt="" class="arrow-icon arrow-icon--reverse contact__arrow-icon">TOPへ戻る</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content__body content__body--sp sp-show">
                <div class="content-body__inner">
                    <p class="content__text">
                        お探しのページはURLが誤っているか、削除された可能性があります。<br>
                        3秒後にTOPページに遷移します</p>
                    <div class="content__btn">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="content__btn--link">
                                <img src="<?php echo get_theme_file_uri( '/images/arrow-icon.svg' ); ?>" alt="" class="arrow-icon arrow-icon--reverse contact__arrow-icon">TOPへ戻る
                        </a>
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>