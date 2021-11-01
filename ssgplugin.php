<?php
/**
* Plugin name: SSG plugin
* Description: A plugin for testing how to make plugins.
*/

function beskedfunktion(){
    $mycode = '<section id="mysection">
    <section class="festival_teaser_sec">

    <div class="countdown_sec">
      <h1>STAND UP COMEDY</h1>
      <div class="countdown_container">
          <div class="countdown">
              <div id="day">Dage</div>
              <div id="hour">Timer</div>

          </div>
      </div>
    </section>
    ';  
    return $mycode;
}

function register_styles_plugin (){
    wp_enqueue_style('CustomStylesheet', plugins_url('ssgplugin/css/style.css'));
    wp_enqueue_script('CustomScript', plugins_url('ssgplugin/js/script.js'),array(),null,true);
    }

    add_action('wp_enqueue_scripts', 'register_styles_plugin');
    
    add_shortcode('ssgplugin','beskedfunktion');

?>
