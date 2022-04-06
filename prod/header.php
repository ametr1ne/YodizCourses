<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/simplebar.min.css"/>
    <link rel="icon" type="image/x-icon" href="<?=get_template_directory_uri()?>/assets/img/favicon.svg">
    <title><?php the_field('head_title') ?></title>
    <?php wp_head();?>
</head>
<body>
<div class="dark"></div>
<button type="button" class="header__burger">
    <span class="header__line header__line--1"></span>
    <span class="header__line header__line--2"></span>
    <span class="header__line header__line--3"></span>
</button>
<!-- header(start) -->
<header class="header">
    <div class="header__wrapper">
        <div class="header__logo">
            <svg width="70" height="54" viewBox="0 0 70 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M52.0732 0.263916H17.9268L0 18.3755L35 53.7361L70 18.3755L52.0732 0.263916ZM40.0707 26.1548V39.0744H29.9293V26.1548L17.9268 14.0115L23.8512 8.02601L35 19.2897L46.1488 8.02601L52.0732 14.0115L40.0707 26.1548Z"
                      fill="white"/>
            </svg>
        </div>
        <div class="header__btns">
            <a href="https://yodizschool.ru/online" target="_blank" class="btn buy-course__btn header__buy-course header__btn">
                <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_4_76)">
                        <path d="M9.96582 13.2H7.83887V17.6H9.96582V13.2Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M17.4023 11C17.4023 10.9674 17.4023 10.9348 17.4023 10.9022V8.8H15.2754H14.2119V5.50815C14.2119 2.46074 11.8347 0 8.89452 0C5.95432 0 3.57714 2.46074 3.57714 5.50815V6.6163H5.71973V5.50815C5.71973 3.68296 7.14291 2.2 8.91016 2.2C10.6774 2.2 12.1006 3.68296 12.1006 5.50815V8.8H10.7243H7.51826H7.06472H5.71973H3.59278H2.9672H2.5293H0.402344V10.9022C0.402344 10.9348 0.402344 10.9674 0.402344 11V19.8C0.402344 19.8326 0.402344 19.8652 0.402344 19.8978V21.9837H2.27907C2.35727 22 2.43546 22 2.5293 22H15.2754C15.3536 22 15.4474 22 15.5256 21.9837H17.4023V19.8978C17.4023 19.8652 17.4023 19.8326 17.4023 19.8V11ZM2.5293 19.8V11H15.2754V19.8H10.7243H7.08036H2.5293Z"
                              fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_4_76">
                            <rect x="0.402344" width="17" height="22" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                Купить курс «Профессия веб-дизайнер»
            </a>
            <!--            <a class="btn header__user-btn header__btn">Дима Зубков</a>-->
        </div>
    </div>
</header>

<!-- header(end) -->