<?php
/*
Template Name: 私たちについて
*/
get_header();
?>
<main class="main js-main">
    <section class="fv js-fv">
        <div class="fv__inner">
            <div class="fv__bg fade-fv--up js-fade"><img src="<?php echo get_theme_file_uri('/images/about-fv-img.jpg'); ?>" alt="車屋の中に多くの車が展示してある様子"></div>
            <div class="page__title page-title fade-fv--right js-fade">
                <div class="page-title__inner">
                    <h2 class="page__title--main">About</h2>
                    <p class="page__title--sub">私たちについて</p>
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
    <div class="page-nav">
        <div class="page-nav__inner">
            <ul class="page-nav__list">
                <li class="page-nav__item">
                    <a href="#philosophy" class="page-nav__link">経営理念<i class="fa-solid fa-chevron-right arrow-icon page-nav-arrow"></i></a>
                </li>
                <li class="page-nav__item">
                    <a href="#accsess" class="page-nav__link">アクセス<i class="fa-solid fa-chevron-right arrow-icon page-nav-arrow"></i></a>
                </li>
                <li class="page-nav__item">
                    <a href="#company" class="page-nav__link">会社概要<i class="fa-solid fa-chevron-right arrow-icon page-nav-arrow"></i></a>
                </li>
            </ul>
            <div class="page-nav__body fade-up--fluffy is-active">
                <p class="page-nav__text--top">国境を超え、メーカーを超え<br>「型にはまらない」あなただけの歓びを</p>
                <p class="page-nav__text--bottom">
                    LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
                    これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
                </p>
            </div>
        </div>
    </div>
    <section id="philosophy" class="philosophy">
        <div class="inner">
            <div class="section__title">
                <h3 class="section__title--main">Philosophy</h3>
                <p class="section__title--sub">経営理念</p>
            </div>
            <div class="philosophy__content  fade-up--fluffy js-fade">
                <div class="philosophy__body">
                    <p class="philosophy__text">
                        「お客様とは一生涯のお付き合い」をモットーとし、同時に社員一人一人が責任と誇り、使命感を持ち日々の仕事にやりがいと喜びを感じることができる会社を目指します。<br>
                        そういう「社員満足」があってこそ、本当の「お客様に満足」が可能になり、そしてお客様のご満足がさらに社員の満足を高めてくれるからです。<br>
                        心の豊かさは楽とかゆとりとかいうより仕事の充実感に求めねばなりません。我々は現状に満足することなく挑戦し続けます。
                    </p>
                    <p class="philosophy__name">代表取締役&emsp;田中太郎</p>
                </div>
                <div class="philosophy__img">
                    <img src="<?php echo get_theme_file_uri('/images/about-philosophy-img.jpg'); ?>" alt="会社の前で笑顔の代表が腕を組んで立っている様子">
                </div>
            </div>
        </div>
    </section>
    <section id="accsess" class="access">
        <div class="access__inner">
            <div class="section__title">
                <h3 class="section__title--main">Access</h3>
                <p class="section__title--sub">アクセス</p>
            </div>
            <p class="access__post"><span class="access__post--code">〒000-0000</span><br class="sp-show"><span class="access__post--address">◯◯県△△市□□区▲▲町0-0-0</span></p>
            <div class="access__map fade-up--fluffy js-fade">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8280303808788!2d139.76493611525882!3d35.68123618019432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1675846985045!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <section id="company" class="company">
        <div class="inner">
            <div class="section__title">
                <h3 class="section__title--main">Company&#160;Profile</h3>
                <p class="section__title--sub">会社概要</p>
            </div>
            <div class="company__content fade-up--fluffy js-fade">
                <dl class="company__list">
                    <dt class="company__term">会社名</dt>
                    <dd class="company__description"><?php the_field('company_name'); ?></dd>
                </dl>
                <dl class="company__list">
                    <dt class="company__term">所在地</dt>
                    <dd class="company__description"><?php the_field('address'); ?></dd>
                </dl>
                <dl class="company__list">
                    <dt class="company__term">設立</dt>
                    <dd class="company__description"><time datetime="2015-12-10"><?php the_field('date'); ?></time></dd>
                </dl>
                <dl class="company__list">
                    <dt class="company__term">代表取締役</dt>
                    <dd class="company__description"><?php the_field('ceo'); ?></dd>
                </dl>
                <dl class="company__list">
                    <dt class="company__term">事業内容</dt>
                    <dd class="company__description">
                        <p>自動車販売（新車、中古車）古物No.第00000000号<br>
                            自動車整備（国産車、輸入車）陸運局認証工場&emsp;認証No.0-0000<br>
                            輸入車販売（自動車、自動車関連部品)<br>
                            保険代理店（ABC損害保険株式会社、DFG損害保険株式会社</p>
                    </dd>
                </dl>
            </div>
            <div class="company__swiper swiper">
                <!-- 必要に応じたwrapper -->
                <div class="swiper-wrapper">
                    <!-- スライド -->
                    <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('/images/about-slide-img-01.jpg'); ?>" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('/images/about-slide-img-02.jpg'); ?>" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('/images/about-slide-img-03.jpg'); ?>" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('/images/about-slide-img-04.jpg'); ?>" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('/images/about-slide-img-05.jpg'); ?>" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('/images/about-slide-img-06.jpg'); ?>" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('common-contact'); ?>
</main>
<?php get_footer(); ?>