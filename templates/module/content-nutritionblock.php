<?php

/**
 * Template part for home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage wphealth
 * @since wphealth 1.0
 */

global $property;

?>
<style>
    .nutrition_background {
        background-image: url('<?= the_field('nutrition_background'); ?>');
        background-size: cover;
        background-repeat: no-repeat;
        height: 800px;
    }

    .accordion {
        width: 100%;
        height: 690px;
        overflow: hidden;
    }

    .accordion ul {
        width: 100%;
        display: table;
        table-layout: fixed;
        margin: 0;
        padding: 0;
    }

    .accordion ul li {
        display: table-cell;
        vertical-align: bottom;
        position: relative;
        width: 18%;
        height: 690px;
        background-repeat: no-repeat;
        background-position: center center;
        transition: all 500ms ease;
        border-right: solid 1px black;
    }

    .accordion ul li div {
        /* display: block; */
        overflow: hidden;
        width: 100%;
    }

    .accordion ul:hover li {
        width: 18%;
    }

    .accordion ul:hover li:hover,
    .accordion .selected {
        width: 30%;
    }

    .accordion ul:hover li:hover a {
        background: rgba(0, 0, 0, 0.4);
    }

    .accordion ul:hover li:hover a * {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }

    @media screen and (max-width: 640px) {
        .accordion {
            height: auto;
        }

        .accordion ul li,
        .accordion ul li:hover,
        .accordion ul:hover li,
        .accordion ul:hover li:hover {
            position: relative;
            display: table;
            table-layout: fixed;
            width: 100%;
            -webkit-transition: none;
            transition: none;
            height: fit-content;
        }

        .accordion .show {
            max-height: 300px;
        }
    }
</style>

<section>
    <div class="relative">
        <?php if (isset($property['nutrition_owner']) && ($property['nutrition_owner'] === "portal")) : ?>
            <div class="absolute top-0 w-full">
                <div class="relative bg-yellow w-11/12 h-[25px] z-10 bottom-3"></div>
            </div>
        <?php endif; ?>
        <div class="accordion">
            <ul>
                <?php if (have_rows('nutrition_slider')) : ?>
                    <?php $i = 0; while (have_rows('nutrition_slider')) : the_row(); ?>
                        <li class="nutrition_accordion <?= $i == 0 ? "selected" : ""; ?>">
                            <div class="p-4 md:p-10 h-full <?= $i == 0 ? "hidden" : ""; ?>">
                                <span class="flex justify-between md:justify-center">
                                    <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M55.024 26.723C58.8166 26.723 61.8912 23.6011 61.8912 19.7501C61.8912 15.8991 58.8166 12.7772 55.024 12.7772C51.2313 12.7772 48.1567 15.8991 48.1567 19.7501C48.1567 23.6011 51.2313 26.723 55.024 26.723Z" fill="black" />
                                        <path d="M17.4134 25.2927C18.5753 26.2516 20.0474 26.8383 21.6527 26.8743C25.6038 26.9636 28.8572 23.6726 28.7863 19.6608C28.7179 15.8078 25.6209 12.7065 21.8103 12.7065C20.128 12.7065 18.5862 13.3107 17.3816 14.3167C15.896 15.5572 13.7568 15.5324 12.2639 14.3006C11.102 13.3417 9.62989 12.7549 8.02456 12.7189C4.07355 12.6321 0.820132 15.9219 0.889769 19.9337C0.958185 23.7867 4.05522 26.888 7.86574 26.888C9.54803 26.888 11.0911 26.2838 12.2957 25.2766C13.78 24.0361 15.9205 24.0609 17.4122 25.2927H17.4134Z" fill="black" />
                                        <path d="M40.5092 4.93053L30.7992 14.7899C28.1174 17.513 28.1172 21.9277 30.7988 24.6506C33.4804 27.3734 37.8283 27.3732 40.5101 24.6501L50.2201 14.7908C52.9019 12.0677 52.9021 7.65292 50.2206 4.93009C47.539 2.20726 43.1911 2.20746 40.5092 4.93053Z" fill="black" />
                                    </svg>
                                    <img class="relative top-6 md:hidden" src="<?= get_template_directory_uri() . '/assets/images/plus.svg' ?>" alt="plus" width="25" height="25px">
                                </span>
                                <p class="htcH4Title md:text-center pt-4 md:pt-0 md:absolute md:bottom-8"><?php the_sub_field('nutrition_title'); ?></p>
                            </div>
                            <div class="h-full relative show <?= $i !== 0 ? "hidden" : ""; ?>">
                                <div class="absolute z-10">
                                    <span class="flex justify-center mt-10">
                                        <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M54.1353 26.723C57.928 26.723 61.0025 23.6011 61.0025 19.7501C61.0025 15.8991 57.928 12.7772 54.1353 12.7772C50.3426 12.7772 47.2681 15.8991 47.2681 19.7501C47.2681 23.6011 50.3426 26.723 54.1353 26.723Z" fill="white" />
                                            <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8383 20.7641 26.8743C24.7151 26.9636 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7065 20.9217 12.7065C19.2394 12.7065 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.7549 7.13589 12.7189C3.18488 12.6321 -0.06854 15.9219 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2838 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="white" />
                                            <path d="M39.6206 4.93053L29.9106 14.7899C27.2287 17.513 27.2285 21.9277 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6501L49.3315 14.7908C52.0133 12.0677 52.0135 7.65292 49.3319 4.93009C46.6503 2.20726 42.3024 2.20746 39.6206 4.93053Z" fill="white" />
                                        </svg>
                                    </span>
                                    <h1 class="htcH1Mobile md:htcH1Title text-white pt-4 md:mt-8 text-center w-80 mx-auto px-4" ><?php the_sub_field('nutrition_title'); ?></h1>
                                    <span class="flex justify-center mt-4">
                                        <img class="relative md:hidden" src="<?= get_template_directory_uri() . '/assets/images/plus-cross.svg' ?>" alt="plus cross" >
                                    </span>
                                </div>
                                <img class="h-full w-full" src="<?php the_sub_field('nutrition_image'); ?>" alt="Nutrition">
                            </div>
                        </li>
                    <?php $i += 1; endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>


<script>
    $('.nutrition_accordion').hover(
        function() {
            if (!$(this).hasClass('selected')) {
                $(this).parents('ul').find('li').removeClass('selected');
                $(this).addClass('selected');

                // All li element 
                $(this).parents('ul').find('li > div:first-child').removeClass('hidden');
                $(this).parents('ul').find('li > .show').addClass('hidden');

                // Hidden firt child
                $(this).children('div:first-child').addClass('hidden');
                $(this).children('.show').removeClass('hidden');
            }
        },
        function() {
            // if (!$(this).hasClass('selected')) {
            //     $(this).parents('ul').find('li > div:first-child').removeClass('hidden');
            //     $(this).parents('ul').find('li > .show').addClass('hidden');
            // }
        }
    );
</script>