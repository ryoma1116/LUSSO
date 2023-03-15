<?php
/*
Template Name: お問い合わせ確認
*/
get_header();
?>
<main class="main js-main">
    <section class="fv js-fv">
        <div class="fv__inner">
            <div class="fv__bg fade-fv--up js-fade-load"><img src="<?php echo get_theme_file_uri('/images/contact-fv-img.jpg'); ?>" alt="走行中の車のサイドミラー">
            </div>
            <div class="page__title page-title fade-fv--right js-fade-load">
                <div class="page-title__inner">
                    <h2 class="page__title--main">Contact</h2>
                    <p class="page__title--sub">お問い合わせ</p>
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
    <div class="confirm">
        <div class="confirm__inner">
            <div class="confirm__body">
                <p class="confirm__text">入力内容をご確認ください</p>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="2167" title="お問い合わせ確認"]'); ?>
        </div>
    </div>
    <?php get_template_part('common-contact'); ?>
</main>
<?php get_footer(); ?>