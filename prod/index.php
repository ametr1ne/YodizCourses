<?php
/**
 * Template Name: Главная страница *
 */

get_header();
?>
<!-- main(start)-->

<?php include 'header.php' ?>

<main class="main">

    <!-- aside(start) -->

    <aside class="aside">
        <!--        <div class="empty"></div>-->
        <div class="aside__wrap" data-simplebar>
            <div class="aside__close-btn">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.15631 1.03132L8.15619 8.0312L15.1563 1.03113" stroke="#A5A5BB" stroke-width="2"
                          stroke-linecap="round"/>
                    <path d="M15.1562 15.0311L8.15628 8.03118L1.15621 15.0313" stroke="#A5A5BB" stroke-width="2"
                          stroke-linecap="round"/>
                </svg>
            </div>
            <div class="aside__courses">
                <div class="course">
                    <div class="course__header">
                        <h2>Веб-дизайн, быстрый старт</h2>
                        <div>
                            <p class="price text-grey">Бесплатно</p>
                            <p class="students text-grey"><?= freeRandom() ?> — ученика проходит курс</p>
                        </div>
                    </div>
                    <div class="course__progress">
                        <ul class="lessons-list free-lessons">
                            <li class="<?php selectingPage($post->post_name, 'intro1') ?> free-item">
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Введение
                                </a>
                            </li>
                            <li class="<?php selectingPage($post->post_name, '1-1') ?> free-item"><span class="number">1</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Инструменты и навыки веб-дизайнера
                                </a>
                            </li>
                            <li class="<?php selectingPage($post->post_name, '1-2') ?> free-item"><span class="number">2</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Статичный баннер в Figma
                                </a>
                            </li>
                            <li class="<?php selectingPage($post->post_name, '1-3') ?> free-item"><span class="number">3</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Видео баннер в Photoshop? Легко!
                                </a>
                            </li>
                            <li class="<?php selectingPage($post->post_name, '1-4') ?> free-item"><span class="number">4</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Основы моушн-дизайна
                                </a>
                            </li>
                            <li class="<?php selectingPage($post->post_name, '1-5') ?> free-item"><span class="number">5</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Бонусный урок
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="course">
                    <div class="course__header">
                        <h2>Профессия веб-дизайнер</h2>
                        <div>
                            <a href="https://yodizschool.ru/online" target="_blank" class="price">Купить курс</a>
                            <p class="students text-grey"><?= paidRandom() ?> — ученика проходит курс</p>
                        </div>
                    </div>
                    <div class="course__progress">
                        <ul class="lessons-list paid-lessons">
                            <li>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Введение
                                </a>
                            </li>
                            <p class="course__block text-grey">Блок 1. Технический дизайн</p>
                            <li><span class="number">6</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Основы тех. дизайна в Photoshop
                                </a>
                            </li>
                            <li><span class="number">7</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Тех. дизайн сложных объектов
                                </a>
                            </li>
                            <li><span class="number">8</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Изометрия
                                </a>
                            </li>

                            <p class="course__block text-grey">Блок 2. Баннеры</p>

                            <li><span class="number">9</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Компоновки и построение блоков
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Баннеры для продажи товаров
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Баннеры для продажи услугу
                                </a>
                            </li>

                            <p class="course__block text-grey">Блок 3. Моушн-дизайн</p>

                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Анимация текста в Animate
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Анимация объектов
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Анимированный баннер
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Параллакс эффект
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Анимация персонажа
                                </a>
                            </li>

                            <p class="course__block text-grey">Блок 4. Векторная графика</p>

                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Рисуем иконки в Illustrator
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Векторные изображения
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Разработка логотипа
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Айдентика
                                </a>
                            </li>

                            <p class="course__block text-grey">Блок 5. UX</p>

                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Анализ целевой аудитории
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Прототипирование веб-проектов
                                </a>
                            </li>

                            <p class="course__block text-grey">Блок 6. UI</p>

                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Виды сайтов
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Favicon
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Главный экран
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Основные блоки сайта
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Собираем лендинг в Figma
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Адаптивный дизайн
                                </a>
                            </li>

                            <p class="course__block text-grey">Блок 7. Портфолио и кейс</p>

                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Формируем пул работ в портфолио
                                </a>
                            </li>
                            <li><span class="number">10</span>
                                <a>
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    Собираем кейс
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <a href="https://yodizschool.ru/online" class="btn buy-course__btn">
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
            </div>
        </div>
    </aside>

    <!-- aside(end) -->

    <!-- content(start) -->

    <div class="content">
        <div class="content__wrapper">

            <p class="breadcrumbs text-grey">Веб-дизайн, быстрый старт / Урок 1</p>
            <h1><?php the_field('title_name') ?></h1>

            <?php include 'assets/componets/free_lesson1.php' ?>

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
                    <a href="https://yodizschool.ru/privacy.pdf" target="_blank" class="text-grey">Политика конфиденциальности</a>
                </div>
            </div>

            <!-- footer(end)-->

        </div>
    </div>

    <!-- content(end) -->
</main>

<div class="popup free-popup">
    <svg class="close" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1.50019L7.99988 8.50007L14.9999 1.5" stroke="#9090A9" stroke-width="2" stroke-linecap="round"/>
        <path d="M15 15.5L8.00012 8.50011L1.00005 15.5002" stroke="#9090A9" stroke-width="2" stroke-linecap="round"/>
    </svg>
    <div class="popup__content">
        <p class="free">Следи за расписанием следующих занятий курса
            «Веб-дизайн, быстрый старт» в телеграм боте Yodiz School</p>
        <a href="https://t.me/Yodiz_School_Bot" class="btn popup__btn" target="_blank">Открыть бота</a>
    </div>
</div>

<div class="popup paid-popup">
    <svg class="close" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1.50019L7.99988 8.50007L14.9999 1.5" stroke="#9090A9" stroke-width="2" stroke-linecap="round"/>
        <path d="M15 15.5L8.00012 8.50011L1.00005 15.5002" stroke="#9090A9" stroke-width="2" stroke-linecap="round"/>
    </svg>
    <div class="popup__content">
        <svg class="lock" width="28" height="35" viewBox="0 0 28 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_677_749)">
                <path d="M15.6887 21H12.3105V28H15.6887V21Z" fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M27.5 17.5C27.5 17.4481 27.5 17.3963 27.5 17.3444V14H24.1219H22.4328V8.76296C22.4328 3.91481 18.6573 0 13.9876 0C9.31785 0 5.54232 3.91481 5.54232 8.76296V10.5259H8.94526V8.76296C8.94526 5.85926 11.2056 3.5 14.0124 3.5C16.8192 3.5 19.0796 5.85926 19.0796 8.76296V14H16.8937H11.8017H11.0814H8.94526H5.56716H4.5736H3.87811H0.5V17.3444C0.5 17.3963 0.5 17.4481 0.5 17.5V31.5C0.5 31.5519 0.5 31.6037 0.5 31.6556V34.9741H3.48068C3.60488 35 3.72907 35 3.87811 35H24.1219C24.2461 35 24.3951 35 24.5193 34.9741H27.5V31.6556C27.5 31.6037 27.5 31.5519 27.5 31.5V17.5V17.5ZM3.87811 31.5V17.5H24.1219V31.5H16.8937H11.1063H3.87811Z"
                      fill="black"/>
            </g>
            <defs>
                <clipPath id="clip0_677_749">
                    <rect x="0.5" width="27" height="35" fill="white"/>
                </clipPath>
            </defs>
        </svg>
        <h2>Регистрация на курс «Профессия веб-дизайнер»</h2>
        <p class="text-grey paid">Под руководством практикующих, опытных наставников ты пройдешь путь становления в профессии веб-дизайнер. С
            еженедельной обратной связью освоишь до «уровня про» программы: Figma, Photoshop и Illustrator. Освоишь
            моушн-дизайн в программе Adobe Animate. На основе реальных клиентов разработаешь более 12 коммерчески
            обоснованных проектов в портфолио. И, самое важное, подготовишь серьёзную базу для дальнейшего поиска
            стажировки, работы или заказов на фриланс.</p>
        <a href="https://yodizschool.ru/online" target="_blank" class="btn popup__btn">Зарегистрироваться на курс</a>
    </div>
</div>

<div class="dark-popup"></div>

<!-- main(end) -->

<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/simplebar.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/script.min.js"></script>

</body>
</html>