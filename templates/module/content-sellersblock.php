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

global $property;

?>

<section>
    <?php if (isset($property['seller_owner']) && $property['seller_owner'] === 'format') : ?>
        <div class="w-full mx-auto pt-32">
    <?php elseif (isset($property['seller_owner']) && $property['seller_owner'] === 'portal') : ?>
        <div class="w-full mx-auto pt-24">
    <?php else: ?>
        <div class="w-full mx-auto py-24">
    <?php endif; ?>

        <?php if (!isset($property['seller_owner']) || (isset($property['seller_owner']) && $property['seller_owner'] === 'portal')) : ?>
            <div class="relative flex justify-between px-3 md:px-8 mb-2.5">
                <p class="uppercase">Best Sellers</p>
                <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M54.1353 26.723C57.928 26.723 61.0025 23.6011 61.0025 19.7501C61.0025 15.8991 57.928 12.7772 54.1353 12.7772C50.3426 12.7772 47.2681 15.8991 47.2681 19.7501C47.2681 23.6011 50.3426 26.723 54.1353 26.723Z" fill="#F4643D" />
                    <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8383 20.7641 26.8743C24.7151 26.9636 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7065 20.9217 12.7065C19.2394 12.7065 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.7549 7.13589 12.7189C3.18488 12.6321 -0.06854 15.9219 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2838 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#F4643D" />
                    <path d="M39.6206 4.93053L29.9106 14.7899C27.2287 17.513 27.2285 21.9277 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6501L49.3315 14.7908C52.0133 12.0677 52.0135 7.65292 49.3319 4.93009C46.6503 2.20726 42.3024 2.20746 39.6206 4.93053Z" fill="#F4643D" />
                </svg>
            </div>
        <?php elseif (isset($property['seller_owner']) && $property['seller_owner'] === 'bulk') : ?>
            <div class="relative px-3 md:px-8 mb-8">
                <span class="flex justify-center">
                    <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M54.1353 26.723C57.928 26.723 61.0025 23.6011 61.0025 19.7501C61.0025 15.8991 57.928 12.7772 54.1353 12.7772C50.3426 12.7772 47.2681 15.8991 47.2681 19.7501C47.2681 23.6011 50.3426 26.723 54.1353 26.723Z" fill="#F4643D" />
                        <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8383 20.7641 26.8743C24.7151 26.9636 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7065 20.9217 12.7065C19.2394 12.7065 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.7549 7.13589 12.7189C3.18488 12.6321 -0.06854 15.9219 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2838 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#F4643D" />
                        <path d="M39.6206 4.93053L29.9106 14.7899C27.2287 17.513 27.2285 21.9277 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6501L49.3315 14.7908C52.0133 12.0677 52.0135 7.65292 49.3319 4.93009C46.6503 2.20726 42.3024 2.20746 39.6206 4.93053Z" fill="#F4643D" />
                    </svg>
                </span>
                <h1 class="max-w-3xl mx-auto mt-4 htcH1Title text-center"><?php the_field('seller_title'); ?></h1>
            </div>
        <?php elseif (isset($property['seller_owner']) && $property['seller_owner'] === 'format') : ?>
            <div class="relative flex justify-between px-3 md:px-8 mb-2.5">
                <p class="uppercase">Featured Products</p>
                <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M54.1348 26.723C57.9275 26.723 61.002 23.6011 61.002 19.7501C61.002 15.8991 57.9275 12.7773 54.1348 12.7773C50.3421 12.7773 47.2676 15.8991 47.2676 19.7501C47.2676 23.6011 50.3421 26.723 54.1348 26.723Z" fill="#56BE69" />
                    <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8384 20.7641 26.8743C24.7151 26.9637 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7066 20.9217 12.7066C19.2394 12.7066 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.755 7.13589 12.719C3.18488 12.6321 -0.06854 15.922 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2839 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#56BE69" />
                    <path d="M39.6206 4.93056L29.9106 14.7899C27.2287 17.513 27.2285 21.9278 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6502L49.3315 14.7908C52.0133 12.0677 52.0135 7.65295 49.3319 4.93012C46.6503 2.20729 42.3024 2.20749 39.6206 4.93056Z" fill="#56BE69" />
                </svg>
            </div>
        <?php endif; ?>

        <div class="px-3 md:px-8">
            <?php if (isset($property['seller_owner']) && $property['seller_owner'] === 'format') : ?>
                <div class="md:flex justify-between md:space-x-4">
                    <button class="w-full product-things-btn active">Active Nutrition</button>
                    <button class="w-full product-things-btn">Beauty Within</button>
                    <button class="w-full product-things-btn">Kids Formula</button>
                    <button class="w-full product-things-btn">Mind & Mood</button>
                    <button class="w-full product-things-btn">Wellbeing & Immunity</button>
                </div>
            <?php else : ?>
                <div class="md:flex justify-between md:space-x-4">
                    <button class="w-full seller-things-btn active">Gummies</button>
                    <button class="w-full seller-things-btn">Soft Gels</button>
                    <button class="w-full seller-things-btn">Tablets</button>
                    <button class="w-full seller-things-btn">Capsules</button>
                    <button class="w-full seller-things-btn">Empty Capsules</button>
                </div>
            <?php endif; ?>

            <?php if (have_rows('seller_items')) : ?>
                <?php $i = 0;
                while (have_rows('seller_items')) : the_row(); ?>
                    <div class="md:grid grid-cols-3 mt-14 <?php echo $i != 0 ? "hidden" : ""; ?>">
                        <div class="max-w-sm pr-20">
                            <h1 class="htcH1Title"><?php the_sub_field('item_title'); ?></h1>
                            <div class="mt-4">
                                <div class="border border-black px-2 py-2 font-semibold">Flavour</div>
                                <div class="border border-black px-2 py-2">Orange</div>
                            </div>
                        </div>
                        <div class="max-w-sm">
                            <div class="swiper sellerSwiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    $products = get_sub_field('products_slider');
                                    $count = isset($products) ? count($products) : 0;
                                    $i = 1;

                                    if (have_rows('products_slider')) :
                                    ?>
                                        <?php while (have_rows('products_slider')) : the_row(); ?>
                                            <div class="swiper-slide seller-slide">
                                                <div>
                                                    <img src="<?php the_sub_field('product_image'); ?>" alt="Product image">
                                                    <?php if (isset($property['seller_owner']) && $property['seller_owner'] === 'format') : ?>
                                                        <p class="<?php echo (get_sub_field('product_stock_status')) ? "" : "invisible"; ?> relative bottom-6 uppercase bg-green text-white rounded-full text-center w-40 mx-auto py-4 ">In Stock!</p>
                                                    <?php else : ?>
                                                        <p class="<?php echo (get_sub_field('product_stock_status')) ? "" : "invisible"; ?> relative bottom-6 uppercase bg-htcOrange-dark text-white rounded-full text-center w-40 mx-auto py-4 ">In Stock!</p>
                                                    <?php endif; ?>
                                                    <p class="text-center"><?php echo sprintf("%02d", $i) . '/' . sprintf("%02d", $count); ?></p>
                                                </div>
                                            </div>
                                        <?php
                                            $i += 1;
                                        endwhile;
                                        ?>
                                    <?php endif; ?>
                                </div>
                                <div class="swiper-button-next seller-button-next" style="background-image: url('<?= get_template_directory_uri() . '/assets/images/next.svg'; ?>')" data-initial="<?= get_template_directory_uri() . '/assets/images/next.svg'; ?>" data-hover="<?= get_template_directory_uri() . '/assets/images/next-hover.svg'; ?>"></div>
                                <div class="swiper-button-prev seller-button-prev" style="background-image: url('<?= get_template_directory_uri() . '/assets/images/previous.svg'; ?>')" data-initial="<?= get_template_directory_uri() . '/assets/images/previous.svg'; ?>" data-hover="<?= get_template_directory_uri() . '/assets/images/prev-hover.svg'; ?>"></div>
                            </div>
                        </div>
                        <div class="md:pl-20 mt-8 md:mt-60">
                            <h3 class="htcH3SubTitle"><?php the_sub_field('item_sub_title'); ?></h3>
                            <p class="mt-4 mb-6"><?php the_sub_field('item_description'); ?></p>
                            <a class="learn_more" href="#"><?php the_sub_field('button_text'); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="clear-both"></div>

<!-- Seller Swiper -->
<script>
    var swiper = new Swiper(".sellerSwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: ".seller-button-next",
            prevEl: ".seller-button-prev",
        },
    });
</script>