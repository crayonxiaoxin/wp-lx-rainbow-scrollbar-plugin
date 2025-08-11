<?php
/*
 * Plugin Name: LX Rainbow Scrollbar
 * Description: 在页面顶部添加一个动态渐变彩虹滚动进度条。
 * Version: 1.0
 * Author:            crayonxiaoxin
 * Author URI:        https://rmb.ee/about
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Plugin URI:        https://github.com/crayonxiaoxin/wp-lx-rainbow-scrollbar-plugin
 */

function lx_enqueue_rainbow_assets()
{
    wp_enqueue_style('lx-rainbow-style', plugin_dir_url(__FILE__) . 'assets/rainbow-scrollbar.css', [], '1.0.5');
    wp_enqueue_script('lx-rainbow-script', plugin_dir_url(__FILE__) . 'assets/rainbow-scrollbar.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'lx_enqueue_rainbow_assets');

function lx_insert_rainbow_html()
{
    echo '<div class="lx-rainbow-progress-bar"><div class="lx-rainbow-indicator"></div></div>';
}
add_action('wp_head', 'lx_insert_rainbow_html');
