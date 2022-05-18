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

<div class="sale-card">
	<?php $dateFinish = '2022-05-11 20:00:00';

$dateEnd = date("U", strtotime($dateFinish));

if ($dateEnd < date("U")) {
    $dateEnd = strtotime("+3 days", $dateEnd);
    while ($dateEnd < date("U")) {
        $dateEnd = strtotime("+3 days", $dateEnd);
    }
} ?>
    <div class="tape">
        <div class="tape-item">
            <p class="tape-text">Скидка — 8 000 руб.*</p>
        </div>
        <div class="tape-item"></div>
        <div class="tape-item"></div>
    </div>
    <p class="sale-correction">*Скидка 8 000 руб. действует ограниченное количество времени для участников курса
        «Веб-дизайн, быстрый старт»</p>
    <div class="sale-title">
        <p class="title-text">Профессия веб-дизайнер</p>
        <div class="title-teachers">
            <img src="<?= get_template_directory_uri() ?>/assets/img/4_dima_ava.png" alt="dima">
            <img src="<?= get_template_directory_uri() ?>/assets/img/1_lika_ava%201.png" alt="dima">
            <img src="<?= get_template_directory_uri() ?>/assets/img/1_lecha_ava.png" alt="dima">
        </div>
    </div>
	<?php
	if ( date( 'U' ) < $dateEnd ) {
		$diff = $dateEnd - date( "U" );
		echo "<p data-diff=" . date($diff) . " class='sale-text' id='h1'>Успей записаться на основной курс
        со скидкой, страница закроется через —
        <span><span class='timer__days'>00</span> <span class='timer__text'></span>, <span class='timer__hours'>00</span>:<span
                            class='timer__minutes'>00</span>:<span class='timer__seconds'>00</span></span></p>";
	} else {
		echo "<p class='sale-text' style='margin: 0 auto'>Акция завершена</p>";
	} ?>
    <a href="https://yodizschool.ru/online/sales" target="_blank" class="sale-bnt">Записаться со скидкой</a>
</div>