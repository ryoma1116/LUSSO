<footer class="footer">
    <div class="footer__inner">
        <div class="footer__cont--left">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_file_uri("/images/footer-logo.svg"); ?>" alt="フッターロゴ" class="footer__logo"></a>
            <ul class="footer__sns footer-sns">
                <li class="footer-sns__item"><a href="#"><i class="fa-brands fa-facebook footer-sns__icon"></i></a></li>
                <li class="footer-sns__item"><a href="#"><i class="fa-brands fa-twitter footer-sns__icon"></i></a></li>
                <li class="footer-sns__item"><a href="#"><i class="fa-brands fa-instagram footer-sns__icon"></i></a></li>
                </li>
            </ul>
            <small class="footer__copy">&copy2022&#160;LUSSO&#160;Automobile</small>
        </div>
        <div class="footer__cont--right">
            <ul class="footer__nav footer-nav">
                <li class="footer-nav__item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-nav__link">top</a>
                </li>
                <li class="footer-nav__item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>about" class="footer-nav__link">about</a>
                </li>
                <li class="footer-nav__item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>service" class="footer-nav__link">service</a>
                </li>
                <li class="footer-nav__item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>works" class="footer-nav__link">works</a>
                </li>
                <li class="footer-nav__item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>news" class="footer-nav__link">news</a>
                </li>
                <li class="footer-nav__item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="footer-nav__link">contact</a>
                </li>
                <li class="footer-nav__item">
                    <a href="#" class="footer-nav__link">プライバシーポリシー</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>