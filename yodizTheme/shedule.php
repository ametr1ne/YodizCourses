<?php
/**
 * Template Name: Расписание платного курса *
 */
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/shedule.css"/>
    <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri() ?>/assets/img/favicon.svg">
    <script defer src="<?= get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
    <script defer src="<?= get_template_directory_uri() ?>/assets/js/shedule.js"></script>
    <title>Расписание занятий</title>
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
    <div class="content">
        <div class="content__wrapper">
            <p class="breadcrumbs text-grey"><?php the_field( 'lesson_num' ) ?></p>
            <h1><?php the_field( 'title_name' ) ?></h1>

            <div class="shedule__body">
                <div class="course-free">
                    <div class="progress content-item">
                        <div class="progress__title">
                            <h2>Веб-дизайн, быстрый старт</h2>
                            <div class="btn-arrow">
                                <svg width="21" height="11" viewBox="0 0 21 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <line x1="19.0858" y1="10" x2="10.5" y2="1.41422" stroke="#A5A5BB" stroke-width="2"
                                          stroke-linecap="round"/>
                                    <line x1="10.5" y1="1.41421" x2="1.91422" y2="10" stroke="#A5A5BB" stroke-width="2"
                                          stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="progress__body">
                            <div class="progress__categories">
                                <div class="course__progress">
                                    <ul class="lessons-list free-lessons">
                                        <li class="list-item <?php $course = get_field('free_course');
                                        $courseItem = $course['free_intro']; if ($courseItem['available']) {
	                                        echo 'available';
                                        } ?>">
                                            <a class="link" <?php
	                                        if ( $courseItem['available'] ) {
		                                        ?>
                                                href="<?php echo $courseItem['link'] ?>"
		                                        <?php
	                                        }
	                                        ?>>
                                                <p class="title-text">
                                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                                    </svg>
                                                    Введение
                                                </p>
                                            </a>
                                        </li>
                                        <li class="list-item <?php $courseItem = $course['free_1']; if ($courseItem['available']) {
	                                        echo 'available';
                                        } ?>">
                                            <a class="link" <?php
	                                        if ( $courseItem['available'] ) {
		                                        ?>
                                                href="<?php echo $courseItem['link'] ?>"
		                                        <?php
	                                        }
	                                        ?>>
                                                <span class="number">1</span>
                                                <p class="title-text">
                                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                                    </svg>
                                                    Инструменты и навыки веб-дизайнера
                                                </p>
                                            </a>
                                        </li>
                                        <li class="list-item <?php $courseItem = $course['free_2']; if ($courseItem['available']) {
	                                        echo 'available';
                                        } ?>">
                                            <a class="link" <?php
	                                        if ( $courseItem['available'] ) {
		                                        ?>
                                                href="<?php echo $courseItem['link'] ?>"
		                                        <?php
	                                        }
	                                        ?>>
                                                <span class="number">2</span>
                                                <p class="title-text">
                                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                                    </svg>
                                                    Статичный баннер в Figma
                                                </p>
                                            </a>
                                        </li>
                                        <li class="list-item <?php $courseItem = $course['free_3']; if ($courseItem['available']) {
	                                        echo 'available';
                                        } ?>">
                                            <a class="link" <?php
	                                        if ( $courseItem['available'] ) {
		                                        ?>
                                                href="<?php echo $courseItem['link'] ?>"
		                                        <?php
	                                        }
	                                        ?>>
                                                <span class="number">3</span>
                                                <p class="title-text">
                                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                                    </svg>
                                                    Видео баннер в Photoshop? Легко!
                                                </p>
                                            </a>
                                        </li>
                                        <li class="list-item <?php $courseItem = $course['free_4']; if ($courseItem['available']) {
	                                        echo 'available';
                                        } ?>">
                                            <a class="link" <?php
	                                        if ( $courseItem['available'] ) {
		                                        ?>
                                                href="<?php echo $courseItem['link'] ?>"
		                                        <?php
	                                        }
	                                        ?>>
                                                <span class="number">4</span>
                                                <p class="title-text">
                                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                                    </svg>
                                                    Основы моушн-дизайна
                                                </p>
                                            </a>
                                        </li>
                                        <li class="list-item <?php $courseItem = $course['free_5']; if ($courseItem['available']) {
	                                        echo 'available';
                                        } ?>">
                                            <a class="link" <?php
	                                        if ( $courseItem['available'] ) {
		                                        ?>
                                                href="<?php echo $courseItem['link'] ?>"
		                                        <?php
	                                        }
	                                        ?>>
                                                <span class="number">5</span>
                                                <p class="title-text">
                                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                                    </svg>
                                                    Бонусный урок
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shedule__body shedule__paid">
                <div class="course-main">
                    <div class="course__header">
                        <h2>Профессия веб-дизайнер, 4 месяца</h2>
                    </div>
                    <div class="course__progress">
                        <ul class="lessons-list paid-lessons">
                            <li class="list-item <?php $course = get_field( 'paid_course' );
                            $courseItem = $course['paid_intro'];
                            if ($courseItem['available']) {
                            echo 'available';
                            } ?>">
                                <a class="link" <?php
								if ( $courseItem['available'] ) {
									?>
                                        href="<?php echo $courseItem['link'] ?>"
									<?php
								}
								?>>
                                    <div class="li__title">
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Введение
                                        </p>
                                    </div>
                                    <p class="date">11 мая, 20:00 мск</p>
                                </a>
                            </li>
                            <li class="list-block">
                                <p class="course__block text-grey">Блок 1. Технический дизайн</p>
                            </li>
                            <li class="list-item <?php $courseItem = $course['paid_1']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">1</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Основы тех. дизайна в Photoshop
                                        </p>
                                    </div>
                                    <p class="date">11 мая, 20:00 мск</p>
                                </a>
                            </li>
                            <li class="list-item <?php $courseItem = $course['paid_2']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">45</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Тех. дизайн сложных объектов
                                        </p>
                                    </div>
                                    <p class="date">16 мая, 20:00 мск</p>
                                </a>
                            </li>
                            <li class="list-item <?php $courseItem = $course['paid_3']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">3</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Изометрия
                                        </p>
                                    </div>
                                    <p class="date">21 мая, 20:00 мск</p>
                                </a>
                            </li>

                            <li class="list-block">
                                <p class="course__block text-grey">Блок 2. Баннеры</p>
                            </li>
                            <li class="list-item <?php $courseItem = $course['paid_4']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">4</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Компоновки и построение блоков
                                        </p>
                                    </div>
                                    <p class="date">26 мая, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_5']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">5</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Баннеры для продажи товаров
                                        </p>
                                    </div>
                                    <p class="date">31 мая, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_6']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">6</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Баннеры для продажи услуг
                                        </p>
                                    </div>
                                    <p class="date">5 июня, 20:00 мск</p>

                                </a></li>

                            <li class="list-block">
                                <p class="course__block text-grey">Блок 3. Моушн-дизайн</p>
                            </li>

                            <li class="list-item <?php $courseItem = $course['paid_7']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">7</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Анимация текста в Animate
                                        </p>
                                    </div>
                                    <p class="date">10 июня, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_8']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">8</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Анимация объектов
                                        </p>
                                    </div>
                                    <p class="date">15 июня, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_9']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">9</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Анимированный баннер
                                        </p>
                                    </div>
                                    <p class="date">20 июня, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_10']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">10</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Параллакс эффект
                                        </p>
                                    </div>
                                    <p class="date">25 июня, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_11']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">11</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Анимация персонажа
                                        </p>
                                    </div>
                                    <p class="date">30 июня, 20:00 мск</p>

                                </a></li>

                            <li class="list-block">
                                <p class="course__block text-grey">Блок 4. Векторная графика</p>
                            </li>

                            <li class="list-item <?php $courseItem = $course['paid_12']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">12</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Рисуем иконки в Illustrator
                                        </p>
                                    </div>
                                    <p class="date">5 июля, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_13']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">13</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Векторные изображения
                                        </p>
                                    </div>
                                    <p class="date">10 июля, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_14']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">14</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Разработка логотипа
                                        </p>
                                    </div>
                                    <p class="date">15 июля, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_15']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">15</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Айдентика
                                        </p>
                                    </div>
                                    <p class="date">20 июля, 20:00 мск</p>

                                </a></li>

                            <li class="list-block">
                                <p class="course__block text-grey">Блок 5. UX</p>
                            </li>

                            <li class="list-item <?php $courseItem = $course['paid_16']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">16</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Анализ целевой аудитории
                                        </p>
                                    </div>
                                    <p class="date">25 июля, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_17']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">17</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Прототипирование веб-проектов
                                        </p>
                                    </div>
                                    <p class="date">30 июля, 20:00 мск</p>

                                </a></li>

                            <li class="list-block">
                                <p class="course__block text-grey">Блок 6. UI</p>
                            </li>

                            <li class="list-item <?php $courseItem = $course['paid_18']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">18</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Виды сайтов
                                        </p>
                                    </div>
                                    <p class="date">4 августа, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_19']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">19</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Favicon
                                        </p>
                                    </div>
                                    <p class="date">9 августа, 20:00 мск</p>

                                </a></li>
                            <li class="list-item <?php $courseItem = $course['paid_20']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">20</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Главный экран
                                        </p>
                                    </div>
                                    <p class="date">14 августа, 20:00 мск</p>
                                </a>
                            </li>
                            <li class="list-item <?php $courseItem = $course['paid_21']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">21</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Основные блоки сайта
                                        </p>
                                    </div>
                                    <p class="date">19 августа, 20:00 мск</p>
                                </a>
                            </li>
                            <li class="list-item <?php $courseItem = $course['paid_22']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">22</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Собираем лендинг в Figma
                                        </p>
                                    </div>
                                    <p class="date">24 августа, 20:00 мск</p>
                                </a>
                            </li>
                            <li class="list-item <?php $courseItem = $course['paid_23']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">23</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Адаптивный дизайн
                                        </p>
                                    </div>
                                    <p class="date">29 августа, 20:00 мск</p>
                                </a>
                            </li>

                            <li class="list-block">
                                <p class="course__block text-grey">Блок 7. Портфолио и кейс</p>
                            </li>

                            <li class="list-item <?php $courseItem = $course['paid_24']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">24</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Формируем пул работ в портфолио
                                        </p>
                                    </div>
                                    <p class="date">3 сентября, 20:00 мск</p>
                                </a>
                            </li>
                            <li class="list-item <?php $courseItem = $course['paid_25']; if ($courseItem['available']) {
	                            echo 'available';
                            } ?>">
                                <a class="link" <?php
	                            if ( $courseItem['available'] ) {
		                            ?>
                                    href="<?php echo $courseItem['link'] ?>"
		                            <?php
	                            }
	                            ?>>
                                    <div class="li__title">
                                        <span class="number">25</span>
                                        <p class="title-text">
                                            <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                            </svg>
                                            Собираем кейс
                                        </p>
                                    </div>
                                    <p class="date">8 сентября, 20:00 мск</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

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
</main>
</body>
</html>