<!-- progress(start)-->

<div class="progress content-item">
    <div class="progress__title">
        <h2>Общий прогресс обучения</h2>
        <div class="btn-arrow">
            <svg width="21" height="11" viewBox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="19.0858" y1="10" x2="10.5" y2="1.41422" stroke="#A5A5BB" stroke-width="2"
                      stroke-linecap="round"/>
                <line x1="10.5" y1="1.41421" x2="1.91422" y2="10" stroke="#A5A5BB" stroke-width="2"
                      stroke-linecap="round"/>
            </svg>
        </div>
    </div>
    <div class="progress__body">
        <small class="text-grey">Уровень знаний в профессии</small>
        <div class="progress__box">
            <div class="text">		
                <h3 class="text__name">Начальный уровень</h3>
                <h3 class="text__percent"><?php the_field('account_percent') ?> %</h3>
            </div>
            <div class="progress__bar">
                <div class="bar__grey"></div>
                <div style="width: <?php the_field('account_percent') ?>%" class="bar__green"></div>
            </div>
        </div>
        <div class="progress__categories">
            <div class="tools">
                <h3>Инструменты</h3>
                <div class="tools__item">
                    <div class="tools__title">
                        <small class="tools__name text-grey">Figma</small>
                        <small class="tools__percent text-grey"><?php the_field('skills_percent_figma') ?> %</small>
                    </div>
                    <div class="tools__bar">
                        <div class="bar__grey"></div>
                        <div style="width: <?php the_field('skills_percent_figma') ?>%" class="bar__green"></div>
                    </div>
                </div>
                <div class="tools__item">
                    <div class="tools__title">
                        <small class="tools__name text-grey">Photoshop</small>
                        <small class="tools__percent text-grey"><?php the_field('skills_percent_photoshop') ?> %</small>
                    </div>
                    <div class="tools__bar">
                        <div class="bar__grey"></div>
                        <div style="width: <?php the_field('skills_percent_photoshop') ?>%" class="bar__green"></div>
                    </div>
                </div>
                <div class="tools__item">
                    <div class="tools__title">
                        <small class="tools__name text-grey">Illustrator</small>
                        <small class="tools__percent text-grey"><?php the_field('skills_percent_illustrator') ?> %</small>
                    </div>
                    <div class="tools__bar">
                        <div class="bar__grey"></div>
                        <div style="width: <?php the_field('skills_percent_illustrator') ?>%" class="bar__green"></div>
                    </div>
                </div>
                <div class="tools__item">
                    <div class="tools__title">
                        <small class="tools__name text-grey">Animate</small>
                        <small class="tools__percent text-grey"><?php the_field('skills_percent_animate') ?> %</small>
                    </div>
                    <div class="tools__bar">
                        <div class="bar__grey"></div>
                        <div style="width: <?php the_field('skills_percent_animate') ?>%" class="bar__green"></div>
                    </div>
                </div>
            </div>
            <div class="tools">
                <h3>Навыки</h3>
                <div class="tools__item">
                    <div class="tools__title">
                        <small class="tools__name text-grey">Уровень нормы</small>
                        <small class="tools__percent text-grey"><?php the_field('skills_percent_norm_level') ?> %</small>
                    </div>
                    <div class="tools__bar">
                        <div class="bar__grey"></div>
                        <div style="width: <?php the_field('skills_percent_norm_level') ?>%" class="bar__green"></div>
                    </div>
                </div>
                <div class="tools__item">
                    <div class="tools__title">
                        <small class="tools__name text-grey">Технический дизайн</small>
                        <small class="tools__percent text-grey"><?php the_field('skills_percent_technic_design') ?> %</small>
                    </div>
                    <div class="tools__bar">
                        <div class="bar__grey"></div>
                        <div style="width: <?php the_field('skills_percent_technic_design') ?>%"
                             class="bar__green"></div>
                    </div>
                </div>
                <div class="tools__item">
                    <div class="tools__title">
                        <small class="tools__name text-grey">UX/UI</small>
                        <small class="tools__percent text-grey"><?php the_field('skills_percent_ux_ui') ?> %</small>
                    </div>
                    <div class="tools__bar">
                        <div class="bar__grey"></div>
                        <div style="width: <?php the_field('skills_percent_ux_ui') ?>%" class="bar__green"></div>
                    </div>
                </div>
                <div class="tools__item">
                    <div class="tools__title">
                        <small class="tools__name text-grey">Моушн-дизайн</small>
                        <small class="tools__percent text-grey"><?php the_field('skills_percent_motion_design') ?> %</small>
                    </div>
                    <div class="tools__bar">
                        <div class="bar__grey"></div>
                        <div style="width: <?php the_field('skills_percent_motion_design') ?>%"
                             class="bar__green"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- progress(end) -->

<!-- theory(start) -->

<? showVideos() ?>

<!-- theory(end) -->

<!-- homework(start)-->


<!-- homework(end)-->

<!-- materials(start)-->

<?php showMaterials() ?>

<!-- materials(end)-->

<!-- checking-hw(start)-->

<?php if (get_field('type_course') === 'hw') {?>

<div class="checking-hw content-item">
    <h2>Отправить домашнее задание на проверку</h2>
    <div class="checking-hw__avatars">
        <div class="avatars-item"><img src="<?= get_template_directory_uri() ?>/assets/img/1.png" alt="dima"></div>
        <div class="avatars-item"><img src="<?= get_template_directory_uri() ?>/assets/img/2.png" alt="lika"></div>
        <div class="avatars-item"><img src="<?= get_template_directory_uri() ?>/assets/img/3.png" alt="lesha"></div>
    </div>
    <div class="checking-hw__criterion">
        <p class="text-grey">Проверка домашних заданий будет доступна при покупке основного курса «Профессия
            веб-дизайнер»</p>
        <a href="https://yodizschool.ru/online" target="_blank" class="btn buy-course__btn checking-hw__buy-course">
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

<?php } ?>

<!-- checking-hw(end)-->

<a class="next-lesson content-item">
    Перейти к следующему уроку
    <svg width="41" height="15" viewBox="0 0 41 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M40.7071 8.16634C41.0976 7.77581 41.0976 7.14265 40.7071 6.75213L34.3431 0.388164C33.9526 -0.00236071 33.3195 -0.00236077 32.9289 0.388164C32.5384 0.778688 32.5384 1.41185 32.9289 1.80238L38.5858 7.45923L32.9289 13.1161C32.5384 13.5066 32.5384 14.1398 32.9289 14.5303C33.3195 14.9208 33.9526 14.9208 34.3431 14.5303L40.7071 8.16634ZM-8.74228e-08 8.45923L40 8.45923L40 6.45923L8.74228e-08 6.45923L-8.74228e-08 8.45923Z"
              fill="black"/>
    </svg>
</a>