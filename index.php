<?php
/*
* Plugin Name: plk popup verden i en kop
* Plugin URI: http://localhost
* Description: This is a popup with a spinning cup with the world in it. The plugin is made with PHP, HTML, CSS and JS
* Version: 0.1
* Author: Malene Storgaard
* Author URI: http://localhost
* License: GPL2
*/

function plk_popup_verden_i_en_kop(){
    $content  = '';
    $content .= '<section id="popup-kaffe-container">';
    $content .= '  <article class="kaffe-popup" id="popup-kaffe">';
    $content .= '    <button type="button" class="popupCloseButton" id="closeBtn" aria-label="Luk">✘</button>';
    $content .= '    <header class="kaffe-header">';
    $content .= '      <h6 class="kaffe-title">EN KOP KAFFE NÆRMERE</h6>';
    $content .= '    </header>';
    $content .= '    <figure class="kaffe-cup-image">';
    $content .= '      <img src="' . plugins_url("img/plk-kaffe.png", __FILE__) . '" alt="Kop kaffe med verden" />';
    $content .= '      <img src="' . plugins_url("img/plk-planeten-i-kop.png", __FILE__) . '" alt="Kop kaffe med verden" />';
    $content .= '    </figure>';
    $content .= '    <footer class="kaffe-personer">';
    $content .= '      <img src="' . plugins_url("img/plk-mennesker.png", __FILE__) . '" alt="tre 2d personer" />';
    $content .= '    </footer>';
    $content .= '  </article>';
    $content .= '</section>';
    error_log( plugins_url("img/plk-kaffe.png", __FILE__) );
    return $content;
}

function register_plugin_assets(){
    wp_enqueue_style('plk_custom_stylesheet', plugins_url('css/style.css', __FILE__));
    wp_enqueue_style('plk_google_fonts', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    wp_enqueue_script('plk_custom_script', plugins_url('js/script.js', __FILE__), array(), null, true);
}

add_shortcode('show-plk-popup-verden-i-en-kop', 'plk_popup_verden_i_en_kop');
add_action('wp_enqueue_scripts', 'register_plugin_assets');