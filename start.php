<?php

elgg_register_event_handler('init', 'system', 'Powered_by');

function Powered_by() {

elgg_unregister_menu_item('footer', 'powered');

elgg_register_menu_item('footer', ElggMenuItem::factory(array(
        'name' => 'powered', // if overriding keep unchanged!!!
        'text' => elgg_echo("© Connect Galaxy"), // either use elgg_echo() with the language string to be displayed included in the language file or enter the text string here
        'href' => 'http://connectgalaxy.com', // where to link to
        'title' => 'Connect Galaxy' . $current_year = date('Y'), // instead of this you can add a string of your own, too. For example the same as for 'text'
        'section' => 'meta',
    )));
	}
