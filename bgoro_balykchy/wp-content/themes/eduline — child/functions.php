<?php
function true_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}
 
add_action( 'wp_enqueue_scripts', 'true_enqueue_styles' );

register_sidebar(
		array(
			'name'          => esc_html__( 'Top bar', '' ),
			'id'            => 'top',
			'description'   => esc_html__( 'вывод виджета в топ', '' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	
register_sidebar(
		array(
			'name'          => esc_html__( 'Side bar', '' ),
			'id'            => 'sidebarnew',
			'description'   => esc_html__( 'вывод виджета в топ', '' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);