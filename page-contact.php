<?php
/*
Template Name: お問い合わせ
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
    <div class="contact">
        <div class="contact__inner">
            <div class="contact__body">
                <p class="contact__text">弊社へのお問い合わせは<br>
                    下記フォームより受け付けております。<br>
                    担当者が確認後、折り返しご連絡させていただきます。</p>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="2140" title="お問い合わせフォーム"]'); ?>
        </div>
    </div>
    <?php get_template_part('common-contact'); ?>
</main>
<?php get_footer(); ?>
