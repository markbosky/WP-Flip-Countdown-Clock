<?php
/**
* Plugin Name: WP Flip Countdown Clock (FlipClock.js)
* Description: This plugin displays a FlipClock.js countdown. E.g. (&lt;div class="clock"&gt;&lt;/div&gt;)
* Version: 0.101 (03212019)
* Author: Mark Bosky
* License: GPL2 or later
*/

/**
* This Plugin displays a FlipClock Counter wherever 'clock' class is included.
*/

function wp_flip_countdown(){
    wp_register_script( 'flip-countdown-script', plugins_url( '/js/flipclock.min.js', __FILE__ ), array('jquery') );
    wp_register_script( 'flip-countdown-intial-script', plugins_url( '/js/countdown.min.js', __FILE__ ), array('jquery') );
    wp_enqueue_style( 'flip-countdown-styles', plugins_url( '/css/flipclock.min.css', __FILE__ ), array(), '20190321');
    wp_enqueue_script( 'flip-countdown-script' );
    wp_enqueue_script( 'flip-countdown-intial-script' );
}
add_action( 'wp_enqueue_scripts', 'wp_flip_countdown' );
?>
