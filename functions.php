<?php

function gymfitness_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main menu', 'gymfitness'),
    ));
}

add_action('init', 'gymfitness_menus');

?>