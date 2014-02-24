<?php
/**
 * Created by PhpStorm.
 * User: Hotell
 * Date: 24.2.2014
 * Time: 22:57
 */


function year_shortcode() {
    $year = date('Y');
    return $year;
}
add_shortcode('year', 'year_shortcode');