<?php
/**
 * Template Name: Оплаченный шаблон главной *
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/paid_lesson.css"/>
    <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri() ?>/assets/img/favicon.svg">
    <title><?php the_field( 'head_title' ) ?></title>
	<?php wp_head(); ?>
</head>
<body>

<header class="header">
    <div class="header__wrapper">
        <svg class="header__logo" width="66" height="50" viewBox="0 0 66 50" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M48.6918 0H16.7627L0 16.9355L32.7273 50L65.4545 16.9355L48.6918 0ZM37.4687 24.2097V36.2903H27.9858V24.2097L16.7627 12.8548L22.3024 7.25806L32.7273 17.7903L43.1521 7.25806L48.6918 12.8548L37.4687 24.2097Z"
                  fill="white"/>
        </svg>
    </div>
</header>

<main class="main">

    <!-- content(start) -->

    <div class="content">
        <div class="content__wrapper">

            <p class="breadcrumbs text-grey"><a href="<?php if (getenv("HTTP_REFERER") === 'https://lk.yodizschool.ru/designer2/') echo 'https://lk.yodizschool.ru/designer2/'; else if (getenv("HTTP_REFERER") === 'https://lk.yodizschool.ru/designer3/') echo 'https://lk.yodizschool.ru/designer3/'; else echo 'https://lk.yodizschool.ru/designer/';?>">
                    <svg width="15" version="1.1" xmlns="http://www.w3.org/2000/svg" height="15" viewBox="0 0 64 64"
                         xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 64 64">
                        <g>
                            <path fill="#0500ff"
                                  d="M22.154,54.727c0.394,0.393,0.907,0.59,1.422,0.59s1.029-0.197,1.422-0.59c0.785-0.785,0.785-2.058,0-2.843   L7.193,34.078h54.781c1.111,0,2.011-0.9,2.011-2.01c0-1.11-0.899-2.011-2.011-2.011H7.193L24.998,12.25   c0.785-0.785,0.785-2.058,0-2.843s-2.058-0.786-2.844,0L0.917,30.646c-0.785,0.786-0.785,2.058,0,2.843L22.154,54.727z"/>
                        </g>
                    </svg>
                    Расписание занятий</a> / <?php the_field( 'lesson_num' ) ?></p>
            <h1><?php the_field( 'title_name' ) ?></h1>

			<?php include 'assets/componets/paid_lesson.php' ?>

            <!-- footer(start)-->

            <div class="footer">
                <div class="top">
                    <p class="text-grey">ООО «Диджитал Продакшн»</p>
                    <div class="messengers">
                        <a target="_blank" href="https://vk.com/yodiz" class="text-grey">Вконтакте</a>
                        <a target="_blank" href="https://www.facebook.com/yodizstudio" class="text-grey">Facebook</a>
                        <a target="_blank" href="https://www.instagram.com/yodizstudio/" class="text-grey">Instagram</a>
                        <a target="_blank" href="https://dribbble.com/yodiz" class="text-grey">Dribbble</a>
                        <a target="_blank" href="https://www.behance.net/yodiz" class="text-grey">Behance</a>
                    </div>
                </div>
                <div class="bottom">
                    <div class="footer-left">
                        <a href="https://t.me/yodizstudio" target="_blank" class="text-grey">Написать в Telegram</a>
                        <a href="https://wa.me/79225105500" target="_blank" class="text-grey">Написать в WhatsApp</a>
                        <a href="tel:+79225105500" class="text-grey">+ 7 922 510 55 00</a>
                    </div>
                    <a href="https://yodizschool.ru/privacy.pdf" target="_blank" class="text-grey">Политика
                        конфиденциальности</a>
                </div>
            </div>

            <!-- footer(end)-->

        </div>
    </div>

    <!-- content(end) -->
</main>

<!-- main(end) -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(88205003, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/88205003" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/player.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/simplebar.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/script.min.js"></script>

</body>
</html>