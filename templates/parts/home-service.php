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

?>
<style>
    .service_background {
        height: 740px;
        background-position: center;
        background-size: cover;
    }

    .service-full {
        min-width: 350px;
    }

    @media (min-width: 640px) {
        .service-full {
            min-width: 380px;
        }
    }
</style>
<section class="my-28">
    <div class="w-full mx-auto">
        <div class="relative flex justify-between px-3 md:px-8">
            <p class="uppercase"><?php the_field('service_title'); ?></p>
            <span class="mb-2">
                <svg width="62" height="31" viewBox="0 0 62 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M54.1353 27.3825C57.928 27.3825 61.0025 24.2606 61.0025 20.4096C61.0025 16.5586 57.928 13.4368 54.1353 13.4368C50.3426 13.4368 47.2681 16.5586 47.2681 20.4096C47.2681 24.2606 50.3426 27.3825 54.1353 27.3825Z" fill="<?php the_field('services_icon_color'); ?>" />
                    <path d="M16.5247 25.9522C17.6866 26.9111 19.1587 27.4979 20.7641 27.5339C24.7151 27.6232 27.9685 24.3321 27.8976 20.3203C27.8292 16.4673 24.7322 13.3661 20.9217 13.3661C19.2394 13.3661 17.6976 13.9702 16.493 14.9763C15.0074 16.2168 12.8682 16.192 11.3752 14.9601C10.2134 14.0012 8.74121 13.4145 7.13589 13.3785C3.18488 13.2917 -0.06854 16.5815 0.00109753 20.5933C0.0695133 24.4463 3.16655 27.5475 6.97706 27.5475C8.65936 27.5475 10.2024 26.9434 11.407 25.9361C12.8914 24.6956 15.0318 24.7204 16.5235 25.9522H16.5247Z" fill="<?php the_field('services_icon_color'); ?>" />
                    <path d="M39.6206 5.59008L29.9106 15.4494C27.2287 18.1725 27.2285 22.5873 29.9101 25.3101C32.5917 28.033 36.9396 28.0328 39.6214 25.3097L49.3315 15.4503C52.0133 12.7272 52.0135 8.31247 49.3319 5.58964C46.6503 2.86681 42.3024 2.867 39.6206 5.59008Z" fill="<?php the_field('services_icon_color'); ?>" />
                </svg>
            </span>
        </div>
        <div class="relative">
            <div class="absolute z-10">
                <?php if (have_rows('service_items')) : ?>
                    <?php $i = 0; while (have_rows('service_items')) : the_row(); ?>
                        <div class="max-w-md pr-6 md:pr-0  top-5 md:top-0">
                            <div data-index="<?= $i; ?>" class="service_action rounded-r-full <?php echo strlen(get_sub_field('services_label')) < 5 ? "w-52" : "service-full"; ?> border-y border-white border-r md:mt-10 mt-4 hover:bg-white hover:cursor-pointer">
                                <div>
                                    <h1 class="flex justify-between htcH1Title text-white text-left hover:text-black pl-4 md:pl-10 pr-6 py-3 md:py-4">
                                        <?php the_sub_field('services_label'); ?>
                                        <span class="flex items-center">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12.3516" r="11.5" fill="white" stroke="black" />
                                                <path d="M11.5713 4.63733V20.0659" stroke="black" />
                                                <path d="M19.7144 12.3516L4.28578 12.3516" stroke="black" />
                                            </svg>
                                        </span>
                                        <span class="flex items-center hidden">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12.3516" r="11.5" fill="white" stroke="black" />
                                                <path d="M6.24219 7.19958L17.1518 18.1092" stroke="black" />
                                                <path d="M17.4546 6.89661L6.54494 17.8063" stroke="black" />
                                            </svg>
                                        </span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    <?php $i += 1; endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="swiper servicesSwiper">
            <div class="swiper-wrapper">
                <?php if (have_rows('service_items')) : ?>
                    <?php while (have_rows('service_items')) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="service_background md:flex" style="background-image: url('<?= the_sub_field('services_background'); ?>');">
                                <div class="relative max-w-md pr-6 md:pr-0  top-5 md:top-0">

                                </div>
                                <div class="container">
                                    <div class="mt-2 float-right">
                                        <div class="max-w-md md:mt-[186px] px-6">
                                            <h3 class="htcH2Title text-white mt-80 md:mt-12" 
                                                style="color: <?php the_sub_field('services_font_color') ? the_sub_field('services_font_color'): ''; ?>" >
                                                <?php the_sub_field('services_title'); ?>
                                            </h3>
                                            <div class="htcBodyFont text-white mt-4"
                                                style="color: <?php the_sub_field('services_font_color') ? the_sub_field('services_font_color'): ''; ?>">
                                                <?php the_sub_field('services_description'); ?>
                                            </div>
                                            <div class="mt-10">
                                                <a class="learn_more" href="/<?php the_sub_field('button_link'); ?>" target="_blank">
                                                    <?php the_sub_field('button_text'); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="service-pagination"></div>
        </div>
    </div>
    <div class="relative bg-yellow w-11/12 float-right bottom-3 h-[25px] z-10"></div>
</section>
<div class="clear-both"></div>

<script>
    var serviceSwiper = new Swiper(".servicesSwiper", {
        pagination: {
            el: '.service-pagination',
            clickable: true,
            renderBullet: function(index, className) {
                return `<span class="dot swiper-pagination-bullet hidden service-${index}"></span>`;
            },
        },
        allowTouchMove: false,
    });
    // Next/Prev action customized
    $('.service_action').on('click', function() {
        const idx = $(this).data('index');
        $(`.service-${idx}`).trigger('click');
    });
</script>