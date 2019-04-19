<?php
/*/*
 Template Name: Проекты
  */
//
//get_header(); */?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="projects-page">

    <header id="header">
        <?php

        $latest_news="";
        $latest_vacation="";
        $latest_service="";

        $args = array(
            'numberposts'      => 1,
            'category'         => 3
        );

        $result = wp_get_recent_posts( $args );
        foreach( $result as $post ){
            $latest_vacation = get_permalink($post["ID"]);
        }

        $args2 = array(
            'numberposts'      => 1,
            'category'         => 2
        );

        $result = wp_get_recent_posts( $args2 );
        foreach( $result as $post ){
            $latest_news = get_permalink($post["ID"]);
        }

        $args3 = array(
            'numberposts'      => 1,
            'category'         => 5
        );

        $result = wp_get_recent_posts( $args3 );
        foreach( $result as $post ){
            $latest_service = get_permalink($post["ID"]);
        }
        ?>

        <?php if (is_front_page()) : ?>
<!--            <img class="logo-main logo-second-size" src="/images/davinchi-logo-yellow.svg" alt="Логотип DaVinchi Group">-->
            <svg class="logo-main logo-second-size logo-yellow" version="1.0" xmlns="http://www.w3.org/2000/svg"
                 width="2092.000000pt" height="186.000000pt" viewBox="0 0 2092.000000 186.000000"
                 preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,186.000000) scale(0.100000,-0.100000)"
                   fill="#000000" stroke="none">
                    <path d="M9475 1853 c-210 -33 -389 -121 -540 -264 -345 -328 -380 -871 -79
-1247 198 -247 460 -354 836 -339 210 8 360 42 536 122 l72 34 0 191 c0 150
-3 190 -12 184 -7 -4 -38 -23 -67 -42 -257 -164 -569 -219 -811 -143 -189 59
-351 228 -395 412 -19 83 -19 248 0 323 36 137 126 262 249 344 244 163 599
143 946 -53 34 -19 64 -35 66 -35 2 0 4 83 4 184 l0 185 -77 29 c-106 41 -223
77 -313 97 -74 16 -351 29 -415 18z"/>
                    <path d="M12534 1843 c4 -10 176 -421 384 -913 l378 -895 172 -3 c95 -1 172 0
172 3 0 3 -172 415 -381 916 l-382 909 -174 0 c-162 0 -174 -1 -169 -17z"/>
                    <path d="M13220 1853 c0 -5 173 -415 383 -913 l382 -905 3468 -3 3467 -2 0
915 0 915 -3850 0 c-2117 0 -3850 -3 -3850 -7z m1476 -598 c19 -8 47 -24 61
-35 35 -27 43 -25 43 10 l0 30 71 0 70 0 -3 -332 c-3 -371 -2 -363 -76 -441
-52 -53 -122 -77 -231 -77 -100 0 -165 16 -223 56 -37 26 -88 97 -88 122 0 8
25 12 76 12 60 0 82 -4 104 -20 39 -28 114 -40 172 -30 83 16 109 45 122 133
5 40 -3 47 -25 20 -48 -57 -198 -72 -286 -27 -61 30 -117 89 -146 153 -15 34
-21 68 -21 131 -1 77 2 92 32 152 34 69 80 115 144 143 43 19 159 19 204 0z
m749 5 c3 -5 -3 -36 -15 -67 -21 -58 -21 -58 -62 -58 -37 0 -44 -4 -62 -35
-19 -32 -21 -54 -24 -242 l-3 -208 -75 0 -74 0 0 305 0 305 65 0 65 0 0 -34 0
-34 39 39 c35 35 44 39 89 39 28 0 54 -4 57 -10z m555 -9 c208 -79 272 -345
124 -510 -26 -29 -69 -62 -102 -78 -49 -24 -69 -28 -142 -28 -102 1 -161 26
-229 100 -62 67 -84 124 -85 215 0 130 63 233 176 290 52 25 73 30 134 30 49
0 91 -7 124 -19z m1618 -7 c57 -28 101 -73 134 -137 17 -32 23 -64 26 -139 4
-87 2 -102 -21 -151 -80 -176 -274 -239 -417 -136 l-40 29 0 -145 0 -145 -75
0 -75 0 0 420 0 420 75 0 75 0 0 -37 0 -36 23 20 c74 68 200 84 295 37z
m-1068 -179 c0 -218 7 -253 59 -279 38 -20 74 -20 112 0 52 26 59 61 59 279
l0 195 76 0 76 0 -4 -222 c-3 -215 -4 -225 -28 -272 -49 -95 -146 -144 -267
-133 -98 10 -167 54 -208 137 -20 39 -33 187 -34 378 l-1 112 80 0 80 0 0
-195z"/>
                    <path d="M14542 1110 c-68 -41 -98 -136 -67 -215 52 -136 239 -152 306 -25 44
81 10 208 -65 244 -48 23 -133 21 -174 -4z"/>
                    <path d="M15815 1120 c-11 -4 -34 -23 -52 -41 -98 -104 -41 -288 95 -306 91
-12 174 48 190 138 22 122 -51 220 -162 218 -28 0 -60 -4 -71 -9z"/>
                    <path d="M17405 1125 c-133 -48 -152 -240 -33 -328 35 -26 114 -33 159 -14 20
8 49 32 65 52 23 31 29 50 32 106 4 56 0 74 -19 109 -41 73 -125 104 -204 75z"/>
                    <path d="M2075 943 c-214 -500 -390 -911 -392 -915 -2 -5 74 -8 169 -8 l173 0
214 498 c118 273 242 563 275 644 34 81 65 147 69 145 5 -1 138 -291 295 -645
l287 -642 173 0 c95 0 171 3 169 8 -2 4 -185 415 -408 914 l-404 908 -116 0
-117 0 -387 -907z"/>
                    <path d="M0 929 l0 -911 453 4 c423 4 457 6 527 26 292 82 508 259 621 507 60
134 74 204 73 380 0 144 -3 169 -27 248 -100 325 -320 538 -640 616 -135 33
-258 41 -642 41 l-365 0 0 -911z m935 567 c237 -82 377 -256 400 -496 14 -149
-23 -297 -101 -413 -59 -86 -119 -139 -208 -182 -124 -61 -164 -67 -443 -72
l-253 -5 0 602 0 602 263 -4 c255 -4 264 -5 342 -32z"/>
                    <path d="M3962 1831 c2 -5 178 -417 393 -915 l389 -906 57 0 57 0 71 168 c39
92 212 502 385 912 l314 745 -166 3 c-91 1 -169 -1 -173 -5 -4 -5 -114 -258
-244 -563 -130 -305 -240 -559 -244 -563 -5 -5 -118 248 -252 562 l-244 571
-173 0 c-98 0 -172 -4 -170 -9z"/>
                    <path d="M5644 930 c-210 -500 -379 -912 -376 -915 3 -3 79 -5 168 -5 119 0
165 3 171 13 4 6 179 418 389 915 l381 902 -176 0 -176 0 -381 -910z"/>
                    <path d="M6610 930 l0 -910 160 0 160 0 2 628 3 628 545 -628 545 -627 143 -1
142 0 0 910 0 910 -165 0 -165 0 -2 -633 -3 -633 -550 633 -550 633 -132 0
-133 0 0 -910z"/>
                    <path d="M10650 930 l0 -910 170 0 170 0 0 375 0 375 440 0 440 0 0 -375 0
-375 170 0 170 0 0 910 0 910 -170 0 -170 0 0 -375 0 -375 -440 0 -440 0 0
375 0 375 -170 0 -170 0 0 -910z"/>
                </g>
            </svg>
        <?php else :?>
            <a href="<?php echo get_home_url(); ?>" class="logo">
<!--                <img class="logo-main logo-second-size" src="/images/davinchi-logo-yellow.svg" alt="Логотип DaVinchi Group">-->
                <svg class="logo-main logo-second-size logo-yellow" version="1.0" xmlns="http://www.w3.org/2000/svg"
                     width="2092.000000pt" height="186.000000pt" viewBox="0 0 2092.000000 186.000000"
                     preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,186.000000) scale(0.100000,-0.100000)"
                       fill="#000000" stroke="none">
                        <path d="M9475 1853 c-210 -33 -389 -121 -540 -264 -345 -328 -380 -871 -79
-1247 198 -247 460 -354 836 -339 210 8 360 42 536 122 l72 34 0 191 c0 150
-3 190 -12 184 -7 -4 -38 -23 -67 -42 -257 -164 -569 -219 -811 -143 -189 59
-351 228 -395 412 -19 83 -19 248 0 323 36 137 126 262 249 344 244 163 599
143 946 -53 34 -19 64 -35 66 -35 2 0 4 83 4 184 l0 185 -77 29 c-106 41 -223
77 -313 97 -74 16 -351 29 -415 18z"/>
                        <path d="M12534 1843 c4 -10 176 -421 384 -913 l378 -895 172 -3 c95 -1 172 0
172 3 0 3 -172 415 -381 916 l-382 909 -174 0 c-162 0 -174 -1 -169 -17z"/>
                        <path d="M13220 1853 c0 -5 173 -415 383 -913 l382 -905 3468 -3 3467 -2 0
915 0 915 -3850 0 c-2117 0 -3850 -3 -3850 -7z m1476 -598 c19 -8 47 -24 61
-35 35 -27 43 -25 43 10 l0 30 71 0 70 0 -3 -332 c-3 -371 -2 -363 -76 -441
-52 -53 -122 -77 -231 -77 -100 0 -165 16 -223 56 -37 26 -88 97 -88 122 0 8
25 12 76 12 60 0 82 -4 104 -20 39 -28 114 -40 172 -30 83 16 109 45 122 133
5 40 -3 47 -25 20 -48 -57 -198 -72 -286 -27 -61 30 -117 89 -146 153 -15 34
-21 68 -21 131 -1 77 2 92 32 152 34 69 80 115 144 143 43 19 159 19 204 0z
m749 5 c3 -5 -3 -36 -15 -67 -21 -58 -21 -58 -62 -58 -37 0 -44 -4 -62 -35
-19 -32 -21 -54 -24 -242 l-3 -208 -75 0 -74 0 0 305 0 305 65 0 65 0 0 -34 0
-34 39 39 c35 35 44 39 89 39 28 0 54 -4 57 -10z m555 -9 c208 -79 272 -345
124 -510 -26 -29 -69 -62 -102 -78 -49 -24 -69 -28 -142 -28 -102 1 -161 26
-229 100 -62 67 -84 124 -85 215 0 130 63 233 176 290 52 25 73 30 134 30 49
0 91 -7 124 -19z m1618 -7 c57 -28 101 -73 134 -137 17 -32 23 -64 26 -139 4
-87 2 -102 -21 -151 -80 -176 -274 -239 -417 -136 l-40 29 0 -145 0 -145 -75
0 -75 0 0 420 0 420 75 0 75 0 0 -37 0 -36 23 20 c74 68 200 84 295 37z
m-1068 -179 c0 -218 7 -253 59 -279 38 -20 74 -20 112 0 52 26 59 61 59 279
l0 195 76 0 76 0 -4 -222 c-3 -215 -4 -225 -28 -272 -49 -95 -146 -144 -267
-133 -98 10 -167 54 -208 137 -20 39 -33 187 -34 378 l-1 112 80 0 80 0 0
-195z"/>
                        <path d="M14542 1110 c-68 -41 -98 -136 -67 -215 52 -136 239 -152 306 -25 44
81 10 208 -65 244 -48 23 -133 21 -174 -4z"/>
                        <path d="M15815 1120 c-11 -4 -34 -23 -52 -41 -98 -104 -41 -288 95 -306 91
-12 174 48 190 138 22 122 -51 220 -162 218 -28 0 -60 -4 -71 -9z"/>
                        <path d="M17405 1125 c-133 -48 -152 -240 -33 -328 35 -26 114 -33 159 -14 20
8 49 32 65 52 23 31 29 50 32 106 4 56 0 74 -19 109 -41 73 -125 104 -204 75z"/>
                        <path d="M2075 943 c-214 -500 -390 -911 -392 -915 -2 -5 74 -8 169 -8 l173 0
214 498 c118 273 242 563 275 644 34 81 65 147 69 145 5 -1 138 -291 295 -645
l287 -642 173 0 c95 0 171 3 169 8 -2 4 -185 415 -408 914 l-404 908 -116 0
-117 0 -387 -907z"/>
                        <path d="M0 929 l0 -911 453 4 c423 4 457 6 527 26 292 82 508 259 621 507 60
134 74 204 73 380 0 144 -3 169 -27 248 -100 325 -320 538 -640 616 -135 33
-258 41 -642 41 l-365 0 0 -911z m935 567 c237 -82 377 -256 400 -496 14 -149
-23 -297 -101 -413 -59 -86 -119 -139 -208 -182 -124 -61 -164 -67 -443 -72
l-253 -5 0 602 0 602 263 -4 c255 -4 264 -5 342 -32z"/>
                        <path d="M3962 1831 c2 -5 178 -417 393 -915 l389 -906 57 0 57 0 71 168 c39
92 212 502 385 912 l314 745 -166 3 c-91 1 -169 -1 -173 -5 -4 -5 -114 -258
-244 -563 -130 -305 -240 -559 -244 -563 -5 -5 -118 248 -252 562 l-244 571
-173 0 c-98 0 -172 -4 -170 -9z"/>
                        <path d="M5644 930 c-210 -500 -379 -912 -376 -915 3 -3 79 -5 168 -5 119 0
165 3 171 13 4 6 179 418 389 915 l381 902 -176 0 -176 0 -381 -910z"/>
                        <path d="M6610 930 l0 -910 160 0 160 0 2 628 3 628 545 -628 545 -627 143 -1
142 0 0 910 0 910 -165 0 -165 0 -2 -633 -3 -633 -550 633 -550 633 -132 0
-133 0 0 -910z"/>
                        <path d="M10650 930 l0 -910 170 0 170 0 0 375 0 375 440 0 440 0 0 -375 0
-375 170 0 170 0 0 910 0 910 -170 0 -170 0 0 -375 0 -375 -440 0 -440 0 0
375 0 375 -170 0 -170 0 0 -910z"/>
                    </g>
                </svg>
            </a>
        <?php endif; ?>

        <div class="menu-burger">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
            <div class="line line4"></div>
        </div>


        <div class="menu-wrapper <?php if (is_front_page()) echo 'opened'; ?>">
            <div class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 63.55">
                    <defs>
                        <style>.cls-1{fill:#414141;}</style>
                    </defs>
                    <path class="cls-1"
                          d="M28.94,31.79.61,60.11A2,2,0,1,0,3.46,63L32,34.42,60.54,63a2,2,0,0,0,2.85-2.85L35.06,31.79,63.41,3.44A2,2,0,0,0,60.56.59L32,29.15,3.44.59A2,2,0,0,0,.59,3.44Z"
                          transform="translate(0 0)"/>
                </svg>Закрыть</div>
            <img src="/images/davinchi-logo-gray.svg" alt="Логотип <?php bloginfo('name'); ?>" class="menu-logo">
            <ul class="nav">
                <?php if (is_front_page()) : ?>
                    <li>Главная</li>
                <?php else :?>
                    <li><a href="/">Главная</a></li>
                <?php endif; ?>
                <li><a href="/o-nas.html">О нас</a></li>
                <li><a href="/projects.html">Наши проекты</a></li>
                <li><a href="<?= $latest_service; ?>">Услуги</a></li>
                <li><a href="<?= $latest_vacation; ?>">Вакансии</a></li>
                <li><a href="<?= $latest_news; ?>">Новости</a></li>
                <li><a href="/kontakty.html">Контакты</a></li>
            </ul>

            <div class="menu-bottom">
                <a class="phone bottom-contact" href="tel:+380674142233">+38 (067) 414-22-33</a>
                <a class="mail bottom-contact" href="mailto:info@davinchi.com.ua">info@davinchi.com.ua</a>
                <div class="social">
                    <a class="instagram social-link" href="https://www.instagram.com/davinchigroup/"></a>
                    <a class="facebook social-link" href="https://www.facebook.com/davinchigroup/"></a>
                    <a class="pinterest social-link" href="https://ru.pinterest.com/mdvinchi/"></a>
                    <a class="twitter social-link" href="https://twitter.com/Da_VinchiGroup"></a>
                    <a class="youtube social-link" href="https://www.youtube.com/channel/UCQhSfQm74_HmcwG_QfFN7oQ"></a>
                </div>
                <p class="copy">"Davinchigroup" &copy; 2014-<?php echo date('Y'); ?></p>
            </div>
        </div>
    </header>

    <div class="bckg-wrp">
        <img src="/images/projects-back.png" data-bg="0" alt="Визуализация проекта" class="bckg active">
        <img src="/images/TownHouse/th-2.jpg" data-bg="1" alt="Визуализация проекта" class="bckg hide">
        <img src="/images/conceptPodol/cp-1.jpg" data-bg="2" alt="Визуализация проекта" class="bckg hide">
        <img src="/wp-content/uploads/2018/02/top-min.jpg" data-bg="3" alt="Визуализация проекта" class="bckg hide">
        <img src="/images/henesi/main-img.jpg" data-bg="4" alt="Визуализация проекта" class="bckg hide">
        <img src="/wp-content/uploads/2018/04/1080-praga-2-TOP.jpg" data-bg="5" alt="" class="bckg hide">
        <img src="/wp-content/uploads/2018/06/Montazhnaya-oblast-1-kopiya-3.png" data-bg="6" alt="Визуализация проекта" class="bckg hide">
        <img src="/wp-content/uploads/2018/02/top.jpg" data-bg="7" alt="Визуализация проекта" class="bckg hide">
        <img src="/images/orange/main-img.jpeg" data-bg="8" alt="Визуализация проекта" class="bckg hide">
        <img src="/images/Praga/main-img.jpg" data-bg="9" alt="Визуализация проекта" class="bckg hide">
        <img src="/wp-content/uploads/2018/01/2.jpg" data-bg="10" alt="Визуализация проекта" class="bckg hide">
        <img src="/wp-content/uploads/2017/04/8.jpg" data-bg="11" alt="Визуализация проекта" class="bckg hide">
        <img src="/wp-content/uploads/2018/06/Montazhnaya-oblast-1-kopiya-3-1.png" data-bg="12" alt="Визуализация проекта" class="bckg hide">
        <img src="/wp-content/uploads/2017/10/1.jpg" data-bg="13" alt="Визуализация проекта" class="bckg hide">
        <img src="/wp-content/uploads/2019/03/Logo.jpg" data-bg="14" alt="Визуализация проекта" class="bckg hide">
        <img src="/wp-content/uploads/2018/02/korch-00.jpg" data-bg="15" alt="" class="bckg hide">
        <img src="/wp-content/uploads/2018/10/Z-_DLYA-MARKETOLOGA_YAroslaviv-Val_1920_Val6.jpg" data-bg="16" alt="" class="bckg hide">
        <img src="/wp-content/uploads/2019/03/3-2.jpg" data-bg="17" alt="" class="bckg hide">
        <img src="/wp-content/uploads/2019/03/17.jpg" data-bg="18" alt="" class="bckg hide">
    </div>

    <div class="projects">
        <div class="content-table">
            <div class="row">

                <a href="/" class="cell"></a>

                <a href="/townhouse.html" class="cell" data-id="1" data-proj="/images/TownHouse/th-2.jpg">

                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Town House</p>
                            <p class="city">г.Киев</p></div>
                    </div>
                </a>

                <a href="/concept-p.html" class="cell cell-podol" data-id="2" data-proj="/images/conceptPodol/cp-1.jpg">

                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Concept P</p>
                            <p class="city">г.Киев</p></div>
                    </div>
                </a>

            </div>

            <div class="row">

                <a href="/da-vinchi-group-praga-2.html" class="cell" data-id="17" data-proj="/wp-content/uploads/2019/03/3-2.jpg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Praga 2</p>
                            <p class="city">г.Киев</p>
                        </div>
                    </div>
                </a>

                <a href="/henesi-house.html" class="cell" data-id="4" data-proj="/images/henesi/main-img.jpg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Henesi House</p>
                            <p class="city">г.Киев</p>
                        </div>
                    </div>
                </a>

<!--                <a href="#" class="cell">-->
<!---->
<!--                </a>-->

                <a href="/da-vinchi-group-aura-apart.html" class="cell" data-id="14" data-proj="/wp-content/uploads/2019/03/Logo.jpg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">AURA Apart</p>
                            <p class="city">г.Одесса</p>
                        </div>
                    </div>
                </a>



                <a href="/da-vinchi-group-concept-kvartal-k.html" class="cell" data-id="18" data-proj="/wp-content/uploads/2019/03/17.jpg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Concept Kvartal K</p>
                            <p class="city">г.Киев</p>
                        </div>
                    </div>
                </a>

            </div>

            <div class="row">
                <a href="/proekt-nyvky-plaza.html" class="cell" data-id="7" data-proj="/wp-content/uploads/2018/02/top.jpg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Nyvky Plaza</p>
                            <p class="city">г.Киев</p>
                        </div>
                    </div>
                </a>

                <a href="/orange-house.html" class="cell" data-id="8" data-proj="/images/orange/main-img.jpeg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Orange Park</p>
                            <p class="city">с. Крюковщина</p>
                        </div>
                    </div>
                </a>

                <a href="/klubnyj-dom-praga.html" class="cell" data-id="9" data-proj="/images/Praga/main-img.jpg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Praga House</p>
                            <p class="city">г.Киев</p>
                        </div>
                    </div>
                </a>

                <a href="/project-primorskiy.html" class="cell" data-id="10" data-proj="/wp-content/uploads/2018/01/2.jpg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Primorskiy</p>
                            <p class="city">г.Одесса</p>
                        </div>
                    </div>
                </a>

            </div>

            <div class="row">

                <a href="/manhattan-house.html" class="cell" data-id="11" data-proj="/wp-content/uploads/2017/04/8.jpg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Manhattan</p>
                            <p class="city">г.Одесса</p>
                        </div>
                    </div>
                </a>

                <a href="/da-vinchi-group-concept-aparthotel.html" class="cell" data-id="16" data-proj="/wp-content/uploads/2018/10/Z-_DLYA-MARKETOLOGA_YAroslaviv-Val_1920_Val6.jpg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Concept ApartHotel</p>
                            <p class="city">г.Киев</p>
                        </div>
                    </div>
                </a>

                <a href="/concept-m.html" class="cell" data-id="13" data-proj="/images/Concept/main-img.jpg">
                    <div class="logo-table">
                        <div class="text-cell">
                            <p class="name">Concept M</p>
                            <p class="city">г.Киев</p>
                        </div>
                    </div>
                </a>

                <a href="/proekty-2.html" class="cell next">
                    <div class="content-wrapper">
                        <div class="text-wrapper">
                            <p class="first-line">Следующие</p>
                            <p class="last-line">ПРОЕКТЫ</p>
                        </div>
                        <div class="button-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <defs>
                                    <style>.cls-1{fill:#414141;}</style>
                                </defs>
                                <polygon class="cls-1"
                                         points="27.85 49.71 45 32.71 45 31.29 27.85 14.29 26.36 15.71 42.62 32 26.38 48.29 27.85 49.71"/>
                                <path class="cls-1"
                                      d="M32,64h0A32,32,0,0,0,54.63,9.37,31.79,31.79,0,0,0,32,0h0A32,32,0,0,0,9.37,54.63,31.79,31.79,0,0,0,32,64ZM10.79,10.79A29.8,29.8,0,0,1,32,2h0A30,30,0,0,1,53.21,53.21,29.8,29.8,0,0,1,32,62h0A30,30,0,0,1,10.79,10.79Z"
                                      transform="translate(0 0)"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
