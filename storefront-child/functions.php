<?php

				//StorefrontChildTheme Child Theme

				add_action( 'wp_enqueue_scripts', 'load_child_theme_enqueue_scripts' );


				function load_child_theme_enqueue_scripts(){


					//StorefrontChildTheme child theme stylesheet css file

					wp_enqueue_style('child-theme-css', get_stylesheet_uri());


					//StorefrontChildTheme child theme javascript js file

					wp_enqueue_script('child-theme-js', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ), '1.0', true );

				}


				/* CUSTOM PHP CODE GOES HERE */


				