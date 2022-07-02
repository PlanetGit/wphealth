<?php

/**
 * Template part for page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage wphealth
 * @since wphealth 1.0
 */

?>

<section>
    <div class="relative">
        <?php if (isset($args['brochure_owner']) && ($args['brochure_owner'] === "format" || $args['brochure_owner'] === "bulk" || $args['brochure_owner'] === "private")) : ?>
        <div class="absolute top-0 w-full">
            <div class="relative float-right bg-red w-11/12 h-[25px] z-10 bottom-3"></div>
        </div>
        <div class="clear-both"></div>
        <?php endif; ?>
        
        <?php if (isset($args['brochure_owner']) && $args['brochure_owner'] === "portal") : ?>
        <div class="absolute md:hidden top-0 w-full">
            <div class="relative float-right bg-red w-11/12 h-[25px] z-10 bottom-3"></div>
        </div>
        <div class="clear-both"></div>
        <?php endif; ?>
        <div class="w-full mx-auto">
            <div class="md:flex justify-between">
                <div class="md:w-3/5">
                    <img class="w-full" src="<?php the_field('brochure_image'); ?>" alt="Brochure">
                </div>
                <div class="md:w-2/5 relative px-3 py-10 md:px-32 md:pt-20" style="background: <?php the_field('brochure_background_color'); ?>;">
                    <span>
                        <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M54.1353 26.723C57.928 26.723 61.0025 23.6011 61.0025 19.7501C61.0025 15.8991 57.928 12.7772 54.1353 12.7772C50.3426 12.7772 47.2681 15.8991 47.2681 19.7501C47.2681 23.6011 50.3426 26.723 54.1353 26.723Z" fill="#FE4A4D" />
                            <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8383 20.7641 26.8743C24.7151 26.9636 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7065 20.9217 12.7065C19.2394 12.7065 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.7549 7.13589 12.7189C3.18488 12.6321 -0.06854 15.9219 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2838 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#FE4A4D" />
                            <path d="M39.6206 4.93053L29.9106 14.7899C27.2287 17.513 27.2285 21.9277 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6501L49.3315 14.7908C52.0133 12.0677 52.0135 7.65292 49.3319 4.93009C46.6503 2.20726 42.3024 2.20746 39.6206 4.93053Z" fill="#FE4A4D" />
                        </svg>
                    </span>
                    <h1 class="htcH2Title mt-4"><?php the_field('brochure_title'); ?></h1>
                    <button class="px-10 py-1 mt-8 rounded-full border border-black uppercase hover:text-white bg-white hover:bg-black">Download</button>
                </div>
            </div>
        </div>
        
        <?php if (isset($args['brochure_owner']) && ($args['brochure_owner'] === "portal" || $args['brochure_owner'] === "bespoke")) : ?>
        <div class="absolute hidden md:block bottom-0 w-full">
            <div class="relative bg-red w-11/12 h-[25px] z-10 -bottom-3"></div>
        </div>
        <div class="clear-both"></div>
        <?php endif; ?>
    </div>
</section>