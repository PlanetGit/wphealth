<?php

/**
 * Template part for Portal page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage wphealth
 * @since wphealth 1.0
 */

$image = get_field('gummies_background');

?>

<section>
    <div class="relative">
        <div class="relative home_intro" style="background-image: url(<?= $image; ?>);">
            <div class="w-full mx-auto px-3">
                <div class="relative float-right mt-8 md:mr-8">
                    <p class="uppercase text-white">Gummies</p>
                </div>
                <div class="relative top-32 md:top-50 max-w-md lg:mr-14 md:pl-20">
                    <span>
                        <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M54.1353 26.723C57.928 26.723 61.0025 23.6011 61.0025 19.7501C61.0025 15.8991 57.928 12.7772 54.1353 12.7772C50.3426 12.7772 47.2681 15.8991 47.2681 19.7501C47.2681 23.6011 50.3426 26.723 54.1353 26.723Z" fill="#34C5F7" />
                            <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8383 20.7641 26.8743C24.7151 26.9636 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7065 20.9217 12.7065C19.2394 12.7065 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.7549 7.13589 12.7189C3.18488 12.6321 -0.06854 15.9219 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2838 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#34C5F7" />
                            <path d="M39.6206 4.93053L29.9106 14.7899C27.2287 17.513 27.2285 21.9277 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6501L49.3315 14.7908C52.0133 12.0677 52.0135 7.65292 49.3319 4.93009C46.6503 2.20726 42.3024 2.20746 39.6206 4.93053Z" fill="#34C5F7" />
                        </svg>
                    </span>
                    <h1 class="htcH1Title text-black"><?php the_field('gummies_title'); ?></h1>
                    <div class="htcBodyFont mt-4 text-black">
                        <?php the_field('gummies_description'); ?>
                    </div>
                    <?php if (get_field('gummies_button_text')): ?>
                    <button class="mt-8 learn_more">
                        <?php the_field('gummies_button_text'); ?>
                    </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 w-full">
            <div class="relative float-right bg-htcBlue-light w-11/12 h-[25px] z-10 -bottom-3"></div>
        </div>
    </div>
</section>
<div class="clear-both"></div>