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

?>

<style>
    .vertical-slide img {
        display: block;
        width: auto;
        max-height: 450px;
        object-fit: cover;
    }

    .vertical-slider {
        height: 360px;
    }

    @media (min-width: 780px) {
        .vertical-slider {
            height: 611px;
        }
    }
</style>

<section class="mt-24">
    <div class="max-w-screen-xl mx-auto grid grid-cols-2 vertical-slider">
        <div thumbsSlider="" class="swiper verticalSwiper">
            <div class="swiper-wrapper">
                <?php if (have_rows('slider_items')) : ?>
                    <?php while (have_rows('slider_items')) : the_row(); ?>
                        <div class="swiper-slide vertical-slide">
                            <span class="flex justify-center py-24 px-6">
                                <img src="<?php the_sub_field('item_image'); ?>" />
                            </span>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper verticalSwiper2 md:pl-10">
            <div class="swiper-wrapper">
                <?php if (have_rows('slider_items')) : ?>
                    <?php while (have_rows('slider_items')) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="cursor-pointer">
                                <span>
                                    <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M55.024 26.723C58.8166 26.723 61.8912 23.6011 61.8912 19.7501C61.8912 15.8991 58.8166 12.7772 55.024 12.7772C51.2313 12.7772 48.1567 15.8991 48.1567 19.7501C48.1567 23.6011 51.2313 26.723 55.024 26.723Z" fill="black" />
                                        <path d="M17.4134 25.2927C18.5753 26.2516 20.0474 26.8383 21.6527 26.8743C25.6038 26.9636 28.8572 23.6726 28.7863 19.6608C28.7179 15.8078 25.6209 12.7065 21.8103 12.7065C20.128 12.7065 18.5862 13.3107 17.3816 14.3167C15.896 15.5572 13.7568 15.5324 12.2639 14.3006C11.102 13.3417 9.62989 12.7549 8.02456 12.7189C4.07355 12.6321 0.820132 15.9219 0.889769 19.9337C0.958185 23.7867 4.05522 26.888 7.86574 26.888C9.54803 26.888 11.0911 26.2838 12.2957 25.2766C13.78 24.0361 15.9205 24.0609 17.4122 25.2927H17.4134Z" fill="black" />
                                        <path d="M40.5092 4.93053L30.7992 14.7899C28.1174 17.513 28.1172 21.9277 30.7988 24.6506C33.4804 27.3734 37.8283 27.3732 40.5101 24.6501L50.2201 14.7908C52.9019 12.0677 52.9021 7.65292 50.2206 4.93009C47.539 2.20726 43.1911 2.20746 40.5092 4.93053Z" fill="black" />
                                    </svg>
                                </span>
                                <h1 class="htcH2Mobile md:htcH1Title mt-4">
                                    <?php the_sub_field('thumb_title'); ?>
                                </h1>
                                <div class="htcModuleTitle text-left mt-12 md:mt-20">
                                    <?php the_sub_field('thumb_number'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="vertical-button-next"></div>
            <div class="vertical-button-prev"></div>
        </div>


    </div>
</section>

<script>
    var vertical = new Swiper(".verticalSwiper2", {
        direction: "vertical",
        loop: true,
        spaceBetween: 10,
        slidesPerView: 2,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var vertical2 = new Swiper(".verticalSwiper", {
        direction: "vertical",
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".vertical-button-next",
            prevEl: ".vertical-button-prev",
        },
        thumbs: {
            swiper: vertical,
        },
    });
</script>