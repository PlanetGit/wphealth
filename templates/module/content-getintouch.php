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
    <div class="w-full mx-auto my-20">
        <div class="relative">
            <div class="flex justify-between px-3 md:px-8">
                <span>
                    <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M54.1353 26.723C57.928 26.723 61.0025 23.6011 61.0025 19.7501C61.0025 15.8991 57.928 12.7773 54.1353 12.7773C50.3426 12.7773 47.2681 15.8991 47.2681 19.7501C47.2681 23.6011 50.3426 26.723 54.1353 26.723Z" fill="#56BE69" />
                        <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8384 20.7641 26.8744C24.7151 26.9637 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7066 20.9217 12.7066C19.2394 12.7066 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.755 7.13589 12.719C3.18488 12.6321 -0.06854 15.922 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2839 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#56BE69" />
                        <path d="M39.6206 4.93056L29.9106 14.7899C27.2287 17.513 27.2285 21.9278 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6502L49.3315 14.7908C52.0133 12.0677 52.0135 7.65296 49.3319 4.93012C46.6503 2.20729 42.3024 2.20749 39.6206 4.93056Z" fill="#56BE69" />
                    </svg>
                </span>
                <p class="uppercase">Contact</p>
            </div>
            <div class="md:flex md:justify-start px-3 md:px-8">
                <h1 class="max-w-xs htcH1Title mt-8"><?php the_field('getin_title'); ?></h1>
                <div class="w-full md:pl-40 mt-2 md:mt-0">

                    <?php if (have_rows('getin_items')) : ?>
                        <?php $i = 1; while (have_rows('getin_items')) : the_row(); ?>
                            <div class="flex justify-start py-6 border-t border-black">
                                <p><?= sprintf("%02d", $i); ?> </p>
                                <div class="pl-20">
                                    <h3 class="htcH3SubTitle"><?= the_sub_field('item_title'); ?></h3>
                                    <div class="flex justify-between space-x-4">
                                    <?php if (have_rows('item_fields_property')) : ?>
                                    <?php while (have_rows('item_fields_property')) : the_row(); ?>

                                    <?php if (get_sub_field('item_field_types') == "textarea") : ?>
                                        <textarea name="<?php the_sub_field('item_field_name'); ?>" placeholder="<?= the_sub_field('item_field_place'); ?>" class="focus:outline-none w-full mt-4" rows="4" cols="50"></textarea>
                                    <?php elseif (get_sub_field('item_field_types') !== "checkbox") : ?>
                                        <input type="<?php the_sub_field('item_field_types'); ?>" name="<?php the_sub_field('item_field_name'); ?>" class="mt-2 text-htcGrey-dark focus:outline-none" placeholder="<?= the_sub_field('item_field_place'); ?>" />
                                    <?php else: ?>
                                        <div class="flex items-center pt-2">
                                            <input type="<?php the_sub_field('item_field_types'); ?>" id="<?php the_sub_field('item_field_name'); ?>" name="<?php the_sub_field('item_field_name'); ?>" class="text-htcGrey-dark focus:outline-none" value="<?= the_sub_field('item_field_place'); ?>" />
                                            <label for="<?php the_sub_field('item_field_name'); ?>" class="pl-2 text-htcGrey-dark"><?php the_sub_field('item_field_place'); ?></label>
                                        </div>
                                    <?php endif; ?>

                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                    </div>
                                    <?php if (get_sub_field('item_sub_title')) : ?>
                                    <div class="pt-4"><?php the_sub_field('item_sub_title'); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php $i += 1; endwhile; ?>
                    <?php endif; ?>
                    <div class="border-t border-black">
                        <div class="relative mt-8">
                            <div class="float-left">
                                <div class="flex items-center">
                                    <input type="checkbox" name="news_product" id="news_product">
                                    <label for="news_product" class="pl-2 text-htcGrey-dark"><?php the_field('getin_news_title'); ?></label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" name="terms_conditions" id="terms_conditions">
                                    <label for="terms_conditions" class="pl-2 text-htcGrey-dark"><?php the_field('getin_terms_title'); ?></label>
                                </div>
                            </div>
                            <button class="float-right px-16 py-1 rounded-full border border-black uppercase hover:text-white hover:bg-black">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>