<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/scss/lesson1.css');
    wp_enqueue_style('style', 'https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css');
});


function SelectingPage($post, $link) {
	if($post == $link)
		echo 'selected';
}

function fillArray() {
	foreach (SCF::get('timecodes') as $item) {
		echo '<li>
            <a class="timecode timecode-theory" data-timecode="'.$item['time'].'">
                <svg width="8" height="8" viewBox="0 0 9 8" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4.71875" cy="4" r="4" fill="#D0D0E1"/>
                </svg>
				'. $item['name'].'
            </a>
        </li>';
	}
}
	
?>