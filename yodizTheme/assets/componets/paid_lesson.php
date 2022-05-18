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

<?php showVideos() ?>

<!-- theory(end) -->

<!-- homework(start)-->


<!-- homework(end)-->

<!-- materials(start)-->

<?php showMaterials() ?>

<!-- materials(end)-->

<!-- checking-hw(start)-->

<?php if (get_field('type_course') === 'paid') { ?>

<div class="checking-hw content-item">
    <h2>Отправить домашнее задание на проверку</h2>
    <a href="https://t.me/yodizstudio" target="_blank" class="btn send-hw">
        Отправить
    </a>
</div>

<?php } ?>
<!-- checking-hw(end)-->

<?php if (get_field('next-lesson-link') !== '-') { ?>

<a href="<?php the_field('next-lesson-link') ?>" class="next-lesson content-item">
	Перейти к следующему уроку
	<svg width="41" height="15" viewBox="0 0 41 15" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M40.7071 8.16634C41.0976 7.77581 41.0976 7.14265 40.7071 6.75213L34.3431 0.388164C33.9526 -0.00236071 33.3195 -0.00236077 32.9289 0.388164C32.5384 0.778688 32.5384 1.41185 32.9289 1.80238L38.5858 7.45923L32.9289 13.1161C32.5384 13.5066 32.5384 14.1398 32.9289 14.5303C33.3195 14.9208 33.9526 14.9208 34.3431 14.5303L40.7071 8.16634ZM-8.74228e-08 8.45923L40 8.45923L40 6.45923L8.74228e-08 6.45923L-8.74228e-08 8.45923Z"
		      fill="black"/>
	</svg>
</a> <?php } ?>