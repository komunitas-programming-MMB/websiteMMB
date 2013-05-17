<?php
//FUNGSI INI UNTUK MENDUKUNG WIDGET DAN POST. YAHYA ADI STYAWAN
	add_theme_support( 'post-thumbnails' );

	register_nav_menu( 'progamStudi','Progam Studi');
	register_nav_menu( 'perkuliahan','Perkuliahan');
	register_nav_menu( 'laboratorium','Laboratorium');
	register_nav_menu( 'galeri','Galeri');
	register_nav_menu( 'komunitas','Komunitas');


register_sidebar( array(
		'name' => __( 'FOOTER', 'footer' ),
		'id' => 'footer-1',
		'description' => __( 'Tambahkan maka akan muncul disebelahnya. Edit pake kode HTML', 'footer' ),
		'before_widget' => '<li class="category">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
	) );
	
	
register_sidebar( array(
		'name' => __( 'SIDEBAR', 'sidebar' ),
		'id' => 'sidebar-1',
		'description' => __( 'Tambahkan maka akan muncul disebelah post', 'sidebar' ),
		'before_widget' => '',
		'after_widget' => '<div class="clearnew"></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

?>