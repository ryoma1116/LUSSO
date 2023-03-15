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
    <div class="complete">
        <div class="complete__inner">
            <div class="complete__message">
                <p class="complete__message--en">thank&#160;you&#160;for&#160;contacting&#160;us.</p>
                <p class="complete__message--jp">お問い合わせありがとうございます。</p>
            </div>
            <div class="complete__body">
                <p class="complete__body--text">近日中に折り返しご連絡いたします。<br>
                    今しばらくお待ちくださいますよう、よろしくお願い申し上げます。<br>
                    万が一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。<br>
                    今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>
            </div>
            <div class="complete__btn">
                <a class="complete__btn--link" href="<?php echo esc_url(home_url('/')); ?>home">
                <i class="fa-solid fa-chevron-left arrow-icon"></i>TOPへ戻る
                </a>
            </div>
        </div>
    </div>
    <?php get_template_part('common-contact'); ?>
</main>
<?php get_footer(); ?>