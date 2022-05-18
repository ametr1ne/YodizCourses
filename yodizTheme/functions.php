<?php

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

    $videoList = fillVideosArray();

    if ($videoList != null) {

        foreach ($videoList as $index => $post_item) {

            $videoTitle = get_post_meta((int)SCF::get('videos')[0][$index])['video_title']; ?>
            <div class="theory content-item video-block">
                <h2><?= $videoTitle[0] ?></h2>
                <div class="video">
                        <iframe src="https://player.vimeo.com/video/<?= $post_item['video_link'] ?>"
                                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                                width="100%" height="100%"></iframe>
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
}

function fillVideosArray()
{

    $video_timecodes = [];

    if (sizeof(SCF::get('videos')) > 0) {

        $videos = SCF::get('videos')[0];

        for ($i = 0; $i < sizeof($videos); $i++) {

            $full_meta = get_post_meta((int)$videos[$i]);

            $video_lessons = $full_meta['name'];
            $video_times = $full_meta['time'];
            $video_timecodes[$i]['video_link'] = $full_meta['video_link'][0];

            for ($j = 0; $j < count($video_lessons); $j++) {
                $video_timecodes[$i]['timecodes']['name'][$j] = $video_lessons[$j];
                $video_timecodes[$i]['timecodes']['time'][$j] = $video_times[$j];
            }
        }
        return $video_timecodes;
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