<?php
add_action( 'wp_enqueue_scripts', 'sample_child_styles', 11);

function sample_child_styles() {
  wp_dequeue_style('sampletheme-style');

  wp_enqueue_style( 'sampletheme-parent-style', get_template_directory_uri() . '/style.css', [], wp_get_theme()->get( 'Version' ) );

  wp_enqueue_style( 'sampletheme-child-style', get_stylesheet_uri(),['sampletheme-parent-style'], wp_get_theme()->get( 'Version' ));
}

// サイト表示ボタン
if (is_admin()) {
function mycustom_admin_bar_add_siteview_button() {
global $wp_admin_bar;
$wp_admin_bar->add_menu( array(
'id' => 'check',
'title' => 'サイト表示！',
'href' => '/',
'meta' => array('target' => '_blank')
));
}
add_action( 'wp_before_admin_bar_render', 'mycustom_admin_bar_add_siteview_button' );
}
//子テーマ内のJS読み込み
function link_scripts() {
  wp_enqueue_script( 'test', get_stylesheet_directory_uri() . '/js/hamburger.js', '', '', true );
  }
  add_action('wp_enqueue_scripts', 'link_scripts' );
?>