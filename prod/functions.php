<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/lesson1.min.css');
});

function selectingPage($post, $link)
{
    if ($post == $link)
        echo 'selected';
}


global $wpdb;

$bd_date = $wpdb->get_results("SELECT datetime FROM randomizer_bd WHERE `name` = 'free_random'");

$current_date = date('U');

if (($bd_date[0]->datetime + 86400) < $current_date) {

    $wpdb->update('randomizer_bd',
        ['datetime' => date('U')],
        ['name' => 'free_random']
    );

    $wpdb->update('randomizer_bd',
        ['datetime' => date('U')],
        ['name' => 'paid_random']
    );

    $wpdb->update('randomizer_bd',
        ['value' => rand(463, 485)],
        ['name' => 'free_random']
    );

    $wpdb->update('randomizer_bd',
        ['value' => rand(45, 59)],
        ['name' => 'paid_random']
    );
}

function freeRandom()
{
    global $wpdb;

    $users_count = $wpdb->get_results("SELECT value FROM randomizer_bd WHERE `name` = 'free_random'");

    echo $users_count[0]->value;
}

function paidRandom()
{
    global $wpdb;

    $users_count = $wpdb->get_results("SELECT value FROM randomizer_bd WHERE `name` = 'paid_random'");

    echo $users_count[0]->value;
}

function showVideos()
{

    $listTheory = fillVideosArray();

    if ($listTheory != null) {

        foreach ($listTheory as $index => $post_item) {

            $videoTitle = get_post_meta((int)SCF::get('theory')[0][$index])['video_title'];?>
            <div class="theory content-item video-block">
                <h2><?= $videoTitle[0] ?></h2>
                <div class="video" data-videohref="<?= $post_item['video_link'] ?>">
                    <div class="video_player" id="theory_player<?= $index ?>"></div>
                </div>
                <ul>
                    <?
                    if ($post_item['timecodes']['name'][0] != null)
                        for ($i = 0; $i < count($post_item['timecodes']['time']); $i++) { ?>
                            <li>
                                <a class="timecode timecode-theory"
                                   data-timecode="<?= $post_item['timecodes']['time'][$i] ?>"
                                   data-index="<?= $index ?>">
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    <?= $post_item['timecodes']['name'][$i] ?>
                                </a>
                            </li>
                        <? } ?>

                </ul>
            </div>
            <?php
        }
    }

    $listPractice = fillArrayPractice();

    if ($listPractice != null) {

        foreach ($listPractice as $index => $post_item) {
            $videoTitle = get_post_meta((int)SCF::get('practice')[0][$index])['video_title'];?>
            <div class="homework content-item video-block">
                <h2><?= $videoTitle[0] ?></h2>
                <div class="video" data-videohref="<?= $post_item['video_link'] ?>">
                    <div class="video_player" id="practice_player<?= $index ?>"></div>
                </div>
                <ul>
                    <?
                    if ($post_item['timecodes']['name'][0] != null)
                        for ($i = 0; $i < count($post_item['timecodes']['time']); $i++) { ?>
                            <li>
                                <a class="timecode timecode-theory"
                                   data-timecode="<?= $post_item['timecodes']['time'][$i] ?>"
                                   data-index="<?= $index ?>">
                                    <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                                    </svg>
                                    <?= $post_item['timecodes']['name'][$i] ?>
                                </a>
                            </li>
                        <? } ?>
                </ul>
            </div>
        <?php }
    }
}

function fillArrayTheory()
{

    $theory_timecodes = [];

    if (sizeof(SCF::get('theory')) > 0) {

        $theory = SCF::get('theory')[0];

        for ($i = 0; $i < sizeof($theory); $i++) {

            $full_meta = get_post_meta((int)$theory[$i]);

            $theory_lessons = $full_meta['name'];
            $theory_times = $full_meta['time'];
            $theory_timecodes[$i]['video_link'] = $full_meta['video_link'][0];

            for ($j = 0; $j < count($theory_lessons); $j++) {
                $theory_timecodes[$i]['timecodes']['name'][$j] = $theory_lessons[$j];
                $theory_timecodes[$i]['timecodes']['time'][$j] = $theory_times[$j];
            }
        }
        return $theory_timecodes;
    }
}

function fillArrayPractice()
{

    $practice_timecodes = [];

    if (sizeof(SCF::get('practice')) > 0) {

        $practice = SCF::get('practice')[0];

        if (sizeof($practice) > 0) {

            for ($i = 0; $i < sizeof($practice); $i++) {

                $full_meta = get_post_meta((int)$practice[$i]);

                $practice_lessons = $full_meta['name'];
                $practice_times = $full_meta['time'];
                $practice_timecodes[$i]['video_link'] = $full_meta['video_link'][0];

                for ($j = 0; $j < count($practice_lessons); $j++) {
                    $practice_timecodes[$i]['timecodes']['name'][$j] = $practice_lessons[$j];
                    $practice_timecodes[$i]['timecodes']['time'][$j] = $practice_times[$j];
                }
            }
        }
        return $practice_timecodes;
    }
}

function showMaterials()
{

    if (SCF::get('materials_post')[0]['materials'] != null) {

        $materials_list = get_post_meta((int)SCF::get('materials_post')[0]['materials'][0]);

        if ($materials_list != null) {

            ?>
            <div class="materials content-item">
                <h2>Материалы</h2>
                <? for ($i = 0; $i < count($materials_list['materials_link']); $i++) { ?>
                    <a href="<?= $materials_list['materials_link'][$i] ?>"
                       target="_blank"><?= $materials_list['name_link'][$i] ?></a>

                <? } ?>
            </div>
            <?php
        }
    }
}

?>