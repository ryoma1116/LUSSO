<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- ogp -->
    <meta property="og:title" content="架空コーポレートデモサイト" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://hogehoge.com" />
    <meta property="og:image" content="/images/hogehoge.png" />
    <meta property="og:site_name" content="LUSSO" />
    <meta property="og:description" content="架空のコーポレートデモサイト" />
    <meta name="twitter:card" content="summary" />
    <!-- ファビコン -->
    <link rel="icon" href="/images/favicon.svg" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>
    <header class="header js-header">
        <div class="header__inner">
            <div class="header__logo js-header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="243" height="180" viewBox="0 0 245.868 180">
                        <g id="LUSSOロゴ" transform="translate(15.94 28.5)">
                            <rect id="長方形_41" data-name="長方形 41" width="180" height="180" transform="translate(-15.94 -28.5)" fill="#ececf4" />
                            <path id="パス_1" data-name="パス 1" d="M71.82,43.85v28.7H89.348V67.156H77.791V43.85Z" transform="translate(-11.195 3.331)" />
                            <path id="パス_2" data-name="パス 2" d="M114.12,73.051c7.629,0,12.286-4.932,12.286-13.29V43.85h-5.9V60.256c0,4.313-1.926,7.051-6.4,7.051-4.237,0-6.432-2.545-6.432-7.051V43.85H101.71V59.259c0,7.973,4,13.792,12.4,13.792Z" transform="translate(-20.524 3.331)" />
                            <g id="グループ_23" data-name="グループ 23" transform="translate(109.507 46.672)">
                                <path id="パス_3" data-name="パス 3" d="M151.355,59.606c2.772.31,4.313,1.734,4.313,4.045a3.474,3.474,0,0,1-3.5,3.426,4.973,4.973,0,0,1-4.354-2.084l-4.932,3.625a12.216,12.216,0,0,0,9.28,4.2,9.662,9.662,0,0,0,9.706-9.589c0-5.586-4.045-8.86-8.936-9.17-3.047-.193-4-1.39-4-2.7a2.439,2.439,0,0,1,2.655-2.545,4.7,4.7,0,0,1,3.041,1.424l4.7-3.426a9.75,9.75,0,0,0-7.746-3.7c-3.969,0-8.441,3.426-8.441,8.282,0,4.506,3.233,7.629,8.207,8.207Z" transform="translate(-142.88 -43.11)" />
                                <path id="パス_4" data-name="パス 4" d="M182.495,59.606c2.772.31,4.313,1.734,4.313,4.045a3.474,3.474,0,0,1-3.5,3.426,4.973,4.973,0,0,1-4.354-2.084l-4.932,3.625a12.216,12.216,0,0,0,9.28,4.2,9.662,9.662,0,0,0,9.706-9.589c0-5.586-4.045-8.86-8.936-9.17-3.047-.193-4-1.39-4-2.7a2.439,2.439,0,0,1,2.655-2.545,4.7,4.7,0,0,1,3.041,1.424l4.7-3.426a9.75,9.75,0,0,0-7.746-3.7c-3.969,0-8.441,3.426-8.441,8.282,0,4.506,3.233,7.629,8.207,8.207Z" transform="translate(-152.599 -43.11)" />
                                <path id="パス_5" data-name="パス 5" d="M220.586,72.827A14.848,14.848,0,1,0,205.72,57.961,14.845,14.845,0,0,0,220.586,72.827Zm-.034-24a9.141,9.141,0,1,1-8.709,9.135A8.824,8.824,0,0,1,220.551,48.826Z" transform="translate(-162.492 -43.116)" />
                            </g>
                            <path id="パス_6" data-name="パス 6" d="M174.89,121.272c0-.275-.069-.42-.213-.447a1.57,1.57,0,0,0-.186-.014h-.516l-4.01-9.761h-1.259l-3.728,9.761H163.89v.461h3.137c0-.275-.076-.42-.227-.447a1.569,1.569,0,0,0-.186-.014h-.949l1.218-3.268h3.384l1.273,3.268h-1.2v.461H174.9Zm-4.829-4.244h-2.979l1.465-3.914,1.52,3.914Z" transform="translate(-39.93 -17.642)" />
                            <path id="パス_7" data-name="パス 7" d="M188.821,122.139h-.571V115.26h-2.992v.447h.832l-.014,4.286a2.02,2.02,0,0,1-.977,1.761,1.277,1.277,0,0,1-.516.117q-.96,0-1.135-1.135a3.52,3.52,0,0,1-.027-.475v-5H180.27v.447h.991v4.272q.031,2.765,2.435,2.779a2.564,2.564,0,0,0,2.325-1.362c.034-.062.069-.131.1-.2l.089,1.39h3.041c0-.248-.069-.392-.213-.433a1.6,1.6,0,0,0-.2-.014Z" transform="translate(-45.042 -18.956)" />
                            <path id="パス_8" data-name="パス 8" d="M194.16,114.938h1.176V119.2c0,1.644.674,2.545,2.036,2.71.144.007.282.014.413.014a1.933,1.933,0,0,0,1.809-.846,4.3,4.3,0,0,0,.371-1.135l-.461-.055c-.227.915-.564,1.417-1,1.507a1.077,1.077,0,0,1-.213.014c-.42,0-.674-.289-.757-.874a3.052,3.052,0,0,1-.027-.433v-5.159h2.236v-.447H197.5V112.53l-2.167.344v1.617H194.16Z" transform="translate(-49.377 -18.104)" />
                            <path id="パス_9" data-name="パス 9" d="M205.785,118.773c0-1.582.193-2.6.585-3.041a1.262,1.262,0,0,1,1-.4,1.336,1.336,0,0,1,1.39,1.121,9.254,9.254,0,0,1,.2,2.263c0,1.658-.213,2.7-.647,3.123a1.422,1.422,0,0,1-2.325-.729,9.066,9.066,0,0,1-.213-2.339Zm1.678-3.873a3.7,3.7,0,0,0-4,3.811,3.944,3.944,0,0,0,7,2.483,3.993,3.993,0,0,0,.846-2.525,3.613,3.613,0,0,0-1.348-2.979,4.011,4.011,0,0,0-2.5-.791Z" transform="translate(-52.279 -18.843)" />
                            <path id="パス_10" data-name="パス 10" d="M219.553,122.03h-.316l.028-4.389a1.987,1.987,0,0,1,.874-1.761,1.008,1.008,0,0,1,.447-.117c.42,0,.722.268.9.791a2.457,2.457,0,0,1,.131.832v3.756q0,.7-.33.846a1.806,1.806,0,0,1-.433.041v.447h3.612c0-.261-.069-.4-.213-.433-.076-.007-.151-.014-.213-.014h-.289v-4.471c.076-.949.378-1.534.915-1.761a1.2,1.2,0,0,1,.344-.055c.488,0,.819.289,1,.86a3.146,3.146,0,0,1,.1.791v3.756c0,.468-.11.75-.316.846a1.806,1.806,0,0,1-.433.041v.447h3.887c0-.261-.076-.4-.227-.433-.069-.007-.138-.014-.2-.014h-.557v-4.444a2.6,2.6,0,0,0-1.1-2.366,2.141,2.141,0,0,0-1.121-.316,2.665,2.665,0,0,0-2.463,1.575,2.176,2.176,0,0,0-1.445-1.52,2.972,2.972,0,0,0-.543-.055,2.529,2.529,0,0,0-2.38,1.493l-.089-1.245H216.1v.447h.991v5.544a.762.762,0,0,1-.729.874,1.665,1.665,0,0,1-.261.014v.447h3.852c0-.261-.069-.4-.213-.433a1.569,1.569,0,0,0-.186-.014Z" transform="translate(-56.224 -18.846)" />
                            <path id="パス_11" data-name="パス 11" d="M238.655,118.773c0-1.582.193-2.6.585-3.041a1.262,1.262,0,0,1,1-.4,1.336,1.336,0,0,1,1.39,1.121,9.253,9.253,0,0,1,.2,2.263c0,1.658-.213,2.7-.647,3.123a1.422,1.422,0,0,1-2.325-.729,9.066,9.066,0,0,1-.213-2.339Zm1.678-3.873a3.7,3.7,0,0,0-4,3.811,3.944,3.944,0,0,0,7,2.483,3.993,3.993,0,0,0,.846-2.525,3.613,3.613,0,0,0-1.348-2.979,4.011,4.011,0,0,0-2.5-.791Z" transform="translate(-62.538 -18.843)" />
                            <path id="パス_12" data-name="パス 12" d="M254.026,121.063A3.252,3.252,0,0,0,256.7,119.8a4.338,4.338,0,0,0,.887-2.807,3.643,3.643,0,0,0-1.376-3.185,2.794,2.794,0,0,0-1.589-.488,2.854,2.854,0,0,0-2.635,1.733V109.83H248.86v.461h.977v9.259c0,.488-.193.777-.571.86a2.479,2.479,0,0,1-.4.028v.461h2.607l.131-1.19a2.833,2.833,0,0,0,2.435,1.362Zm-.241-6.92q1.465.031,1.465,3.1c-.014,2.236-.537,3.364-1.575,3.371q-1.1,0-1.507-1.465a6.146,6.146,0,0,1-.186-1.589q0-2.322.991-3.123a1.308,1.308,0,0,1,.819-.289Z" transform="translate(-66.449 -17.261)" />
                            <path id="パス_13" data-name="パス 13" d="M266.62,120.554h-.633v-6.879H262.85v.447h.991v5.544c0,.509-.2.8-.605.86a2.2,2.2,0,0,1-.385.028V121h4.182c0-.261-.076-.4-.227-.433A1.569,1.569,0,0,0,266.62,120.554Zm-.475-9.1a1.311,1.311,0,0,0-1.28-1.273,1.189,1.189,0,0,0-1.1.66,1.221,1.221,0,0,0-.158.619,1.142,1.142,0,0,0,.66,1.087,1.372,1.372,0,0,0,.605.144,1.181,1.181,0,0,0,1.1-.619A1.2,1.2,0,0,0,266.145,111.453Z" transform="translate(-70.815 -17.37)" />
                            <path id="パス_14" data-name="パス 14" d="M274.141,120.441h-.86V109.82H269.8v.447h1.321v9.259a.758.758,0,0,1-.557.846,3.259,3.259,0,0,1-.757.069v.447h4.747c0-.261-.069-.4-.213-.433a1.568,1.568,0,0,0-.186-.014Z" transform="translate(-72.984 -17.258)" />
                            <path id="パス_15" data-name="パス 15" d="M281.7,115.333c.722.028,1.094.654,1.1,1.864q0,.8-.475.991a3.02,3.02,0,0,1-1.032.089l-1.087-.055c.089-1.878.578-2.841,1.493-2.882Zm3.185,5.386-.413-.144a2.526,2.526,0,0,1-2.325,1.562c-.908,0-1.5-.578-1.761-1.734a10.284,10.284,0,0,1-.172-1.692l1.575.041c1.823.055,2.882-.227,3.185-.86a1.452,1.452,0,0,0,.1-.53,2.218,2.218,0,0,0-1.493-2.119,4.938,4.938,0,0,0-1.878-.344,3.634,3.634,0,0,0-2.992,1.307,3.943,3.943,0,0,0-.819,2.538,3.549,3.549,0,0,0,1.85,3.44,4.343,4.343,0,0,0,2.009.461,3.123,3.123,0,0,0,2.869-1.4,2.066,2.066,0,0,0,.275-.516Z" transform="translate(-75.512 -18.843)" />
                            <path id="パス_16" data-name="パス 16" d="M87.028,85.526H4.06V3.5H217.475V69.277" transform="translate(9.953 15.924)" fill="none" stroke="#231815" stroke-miterlimit="10" stroke-width="5" />
                        </g>
                    </svg>
                </a>
            </div>
            <nav class="header__nav sp-none">
                <ul class="header__list">
                    <li class="header__item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a>
                    </li>
                    <li class="header__item">
                        <a href="<?php echo esc_url(home_url('/')); ?>about">about</a>
                    </li>
                    <li class="header__item header__item--service js-header__item">
                        <a href="<?php echo esc_url(home_url('/')); ?>service">service</a>
                        <div class="header__item--second service-modal">
                            <h3 class="service-modal__title">Service</h3>
                            <ul class="service-modal__list">
                                <li class="service-modal__item">
                                    <a href="<?php echo esc_url(home_url('/')); ?>service/#support" class="service-modal__item--link">
                                        <img src="<?php echo get_theme_file_uri("/images/top-service-hover-img01.jpg"); ?>" alt="白いベンツのセダンがヘッドライトを光らせている様子" class="service-modal__img">
                                        <div class="service-modal__body">
                                            <p class="service-modal__text">購入サポート</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="service-modal__item">
                                    <a href="<?php echo esc_url(home_url('/')); ?>service/#repair" class="service-modal__item--link">
                                        <img src="<?php echo get_theme_file_uri("/images/top-service-hover-img02.jpg"); ?>" alt="整備士が車のボンネットを開けて点検している様子" class="service-modal__img">
                                        <div class="service-modal__body">
                                            <p class="service-modal__text">修理・整備</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="service-modal__item">
                                    <a href="<?php echo esc_url(home_url('/')); ?>service/#inspection" class="service-modal__item--link">
                                        <img src="<?php echo get_theme_file_uri("/images/top-service-hover-img03.jpg"); ?>" alt="整備士が車検で車のタイヤを点検している様子" class="service-modal__img">
                                        <div class="service-modal__body">
                                            <p class="service-modal__text">車検・点検</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header__item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>works">works</a>
                    </li>
                    <li class="header__item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>news">news</a>
                    </li>
                    <li class="header__item header__contact-btn">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact"><i class="fa-regular fa-envelope header__contact-btn--icon"></i>contact</a>
                    </li>
                </ul>
            </nav>
            <!-- ハンバーガーメニュー -->
            <div class="hamburger js-hamburger sp-show">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="drawer js-drawer">
            <div class="drawer__inner">
                <ul class="drawer__list">
                    <li class="drawer__item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a>
                    </li>
                    <li class="drawer__item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">about</a>
                    </li>
                    <li class="drawer__item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>service">service</a>
                    </li>
                    <li class="drawer__item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>works">works</a>
                    </li>
                    <li class="drawer__item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>news">news</a>
                    </li>
                    <li class="drawer__item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">contact</a>
                    </li>
                    <li class="drawer__item">
                        <a href="#">プライバシーポリシー</a>
                    </li>
                    <li class="drawer__item drawer-sns">
                        <a href="#"><i class="fa-brands fa-facebook drawer-sns__icon"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter drawer-sns__icon"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram drawer-sns__icon"></i></a>
                    </li>
                </ul>
            </div>
            <div class="circle-bg js-circle-bg"></div>
        </div>
        <span class="mask js-mask"></span>
    </header>