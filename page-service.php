<?php
/*
Template Name: サービス紹介
*/
get_header();
?>

<main class="main js-main">
    <section class="fv js-fv">
        <div class="fv__inner">
            <div class="fv__bg fade-fv--up js-fade-load"><img src="<?php echo get_theme_file_uri('/images/service-fv-img.jpg'); ?>" alt="車屋の中に多くの車が展示してある様子"></div>
            <div class="page__title page-title fade-fv--right js-fade-load">
                <div class="page-title__inner">
                    <h2 class="page__title--main">Service</h2>
                    <p class="page__title--sub">サービス紹介</p>
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
                    <a href="#support" class="page-nav__link">購入サポート<i class="fa-solid fa-chevron-right arrow-icon page-nav-arrow"></i></a>
                </li>
                <li class="page-nav__item">
                    <a href="#repair" class="page-nav__link">修理・整備<i class="fa-solid fa-chevron-right arrow-icon page-nav-arrow"></i></a>
                </li>
                <li class="page-nav__item">
                    <a href="#inspection" class="page-nav__link">車検・点検<i class="fa-solid fa-chevron-right arrow-icon page-nav-arrow"></i></a>
                </li>
            </ul>
            <div class="page-nav__body fade-up--fluffy js-fade">
                <p class="page-nav__text--top">お客様一人一人が求める<br>理想のカー ライフに寄り添います</p>
                <p class="page-nav__text--bottom">
                    様々な輸入車・国産車のメンテナンスのご 相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお
                    答えします。最新鋭の自社集中工場には、四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、フロントでは車種ブランド別の専用電話回線をご用意しております。
                </p>
            </div>
        </div>
    </div>
    <section id="support" class="support">
        <div class="service-inner">
            <div class="service-content">
                <div class="service-body">
                    <div class="service-body--top fade-up fade-up-first js-fade">
                        <p class="service-number">01</p>
                        <h3 class="service-heading">購入サポート</h3>
                        <p class="service-text--top">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p>
                    </div>
                </div>
                <div class="service-img fade-up fade-up-second js-fade">
                    <img src="<?php echo get_theme_file_uri('/images/service-cont-img-01.jpg'); ?>" alt="白いベンツのセダンがヘッドライトを光らせている様子">
                </div>
            </div>
            <div class="service-body--bottom body-bottom fade-up fade-up-third js-fade">
                <div class="body-bottom__inner">
                    <div class="service-features">
                        <h4 class="service-features--heading">features</h4>
                        <p class="service-features--text">特徴</p>
                    </div>
                    <p class="service-text--bottom">
                        LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。
                        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
                </div>
            </div>
        </div>
    </section>
    <section id="repair" class="repair">
        <div class="service-inner">
            <div class="service-content">
                <div class="service-body">
                    <div class="service-body--top fade-up fade-up-first js-fade">
                        <p class="service-number">02</p>
                        <h3 class="service-heading">修理・サービス</h3>
                        <p class="service-text--top">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p>
                    </div>
                </div>
                <div class="service-img fade-up fade-up-second js-fade">
                    <img src="<?php echo get_theme_file_uri('/images/service-cont-img-02.jpg'); ?>" alt="整備士が車のボンネットを開けて点検している様子">
                </div>
            </div>
            <div class="service-body--bottom body-bottom fade-up fade-up-third js-fade">
                <div class="body-bottom__inner">
                    <div class="service-features">
                        <h4 class="service-features--heading">features</h4>
                        <p class="service-features--text">特徴</p>
                    </div>
                    <p class="service-text--bottom">
                        LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。
                        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
                </div>
            </div>
        </div>
    </section>
    <section id="inspection" class="inspection">
        <div class="service-inner">
            <div class="service-content">
                <div class="service-body">
                    <div class="service-body--top fade-up fade-up-first js-fade">
                        <p class="service-number">03</p>
                        <h3 class="service-heading">車検・点検</h3>
                        <p class="service-text--top">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならLUSSOへご相談ください。</p>
                    </div>
                </div>
                <div class="service-img fade-up fade-up-second js-fade">
                    <img src="<?php echo get_theme_file_uri('/images/service-cont-img-03.jpg'); ?>" alt="整備士が車検で車のタイヤを点検している様子">
                </div>
            </div>
            <div class="service-body--bottom body-bottom fade-up fade-up-third js-fade">
                <div class="body-bottom__inner">
                    <div class="service-features">
                        <h4 class="service-features--heading">features</h4>
                        <p class="service-features--text">特徴</p>
                    </div>
                    <p class="service-text--bottom">
                        LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。
                        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
                </div>
            </div>
        </div>
    </section>


    <?php get_template_part( 'common-contact' ); ?>
</main>
<?php get_footer(); ?>