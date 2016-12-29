<?php

add_action('wp_footer', 'evotox_test');

function evotox_test(){
    echo '<style>.evo-footer{position: fixed; bottom: 10px; right: 10px;}</style>';
    echo '<h1 class="evo-footer">Hello World! - Functions Gose Here...</h1>';
}
?>