<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage wphealth
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="photography-demo-3">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<title>HTC Health</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						transparent: 'transparent',
						current: 'currentColor',
						black: '#000000',
						green: '#56BE69',
						yellow: '#FABD03',
						red: '#FE4A4D',
						white: '#FFFFFF',
						purple: '#973280',
						'htcGrey': {
							DEFAULT: '#F9F9F9',
							light: '#c4c4c4',
							dark: '#b7b7b7',
						},
						'htcBlue': {
							light: '#34C5F7',
							dark: '#04449D',
						},
						'htcTurquoise': {
							DEFAULT: '#01C9B7'
						},
						'htcOrange': {
							light: '#F7931E',
							dark: '#F4643D',
						},
						'lightBlueTint': {
							DEFAULT: '#ebf9fe'
						},
						'greenTint': {
							DEFAULT: '#eef8f0'
						}
					},
					margin: {
						'186px': '186px',
					},
					height: {
						'25px': '25px',
					},
					fontSize: {
						lg: ['21px', '23px'],
					}
				}
			}
		}
	</script>
	<style type="text/tailwindcss">
		@layer utilities {
			.content-auto {
				content-visibility: auto;
			}
		}
	</style>

	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<!-- Swiper Css -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site body">
		<?php get_template_part('templates/header/site-header'); ?>

		<div class="main relative center pt-10" role="main">