<?php
/*
* Plugin Name: Zoomable
* Description: Plugin per inserire immagini zoommabili all'interno del sito.
* Version: 1.0
* Author: Giacomo Brochin
*/

function zoomable_function($atts) {
    return <<<HTML
        <figure>
            <iframe src="/zoomable/viewer.php?id={$atts['id']}" width="{$atts['width']}" height="{$atts['height']}" frameborder="0" allowfullscreen=""></iframe>
        </figure>
    HTML;
}

add_shortcode('zoomable', 'zoomable_function');
?>