<?php

/**
 * Template part 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage wphealth
 * @since wphealth 1.0
 */

$image = get_field('contact_us_background');

?>

<section>
    <div class="w-full mx-auto">
        <div class="md:grid grid-cols-2">
            <div class="py-12 md:py-24 md:pl-24 pr-6 bg-greenTint">
                <div class="px-3 md:px-0">
                    <span>
                        <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M54.1353 26.7231C57.928 26.7231 61.0025 23.6012 61.0025 19.7502C61.0025 15.8992 57.928 12.7773 54.1353 12.7773C50.3426 12.7773 47.2681 15.8992 47.2681 19.7502C47.2681 23.6012 50.3426 26.7231 54.1353 26.7231Z" fill="#56BE69" />
                            <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8383 20.7641 26.8743C24.7151 26.9636 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7065 20.9217 12.7065C19.2394 12.7065 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.7549 7.13589 12.7189C3.18488 12.6321 -0.06854 15.9219 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2838 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#56BE69" />
                            <path d="M39.6206 4.93053L29.9106 14.7899C27.2287 17.513 27.2285 21.9277 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6501L49.3315 14.7908C52.0133 12.0677 52.0135 7.65292 49.3319 4.93009C46.6503 2.20726 42.3024 2.20746 39.6206 4.93053Z" fill="#56BE69" />
                        </svg>
                    </span>
                    <h1 class="htcH1Title mt-2"><?php the_field('contact_title'); ?></h1>
                    <p class="htcBodyFont mt-4"><?php the_field('contact_description'); ?></p>
                    <button class="htcH4Title mt-8 rounded-full border border-black px-10 py-2 uppercase">Contact Us</button>
                </div>
            </div>
            <div>
                <?php if (!empty($image)) : ?>
                    <img class="w-full" src="<?= $image; ?>" alt="Contact Us">
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="relative bg-green w-11/12 float-right bottom-3 h-[25px]"></div>
</section>