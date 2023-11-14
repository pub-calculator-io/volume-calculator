<?php
/*
Plugin Name: Volume Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/volume-calculator/
Description: The online volume calculator performs calculations for 11 different geometric shapes. The tool supports different units of measurement and demonstrates the solution steps.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_volume_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Volume Calculator by Calculator.iO";

function display_ci_volume_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/volume-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Volume Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_volume_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_volume_calculator', 'display_ci_volume_calculator' );