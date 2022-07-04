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
<section>
    <div class="w-full mx-auto">
        <div class="py-24 bg-htcGrey px-8">
            <?php if (isset($property['map_owner']) && $property['map_owner'] === 'bulk') : ?>
                <div class="md:pb-12">
                    <span>
                        <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M54.1353 26.723C57.928 26.723 61.0025 23.6011 61.0025 19.7501C61.0025 15.8991 57.928 12.7773 54.1353 12.7773C50.3426 12.7773 47.2681 15.8991 47.2681 19.7501C47.2681 23.6011 50.3426 26.723 54.1353 26.723Z" fill="#01C9B7" />
                            <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8384 20.7641 26.8744C24.7151 26.9637 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7066 20.9217 12.7066C19.2394 12.7066 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.755 7.13589 12.719C3.18488 12.6321 -0.06854 15.922 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2839 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#01C9B7" />
                            <path d="M39.6206 4.93056L29.9106 14.7899C27.2287 17.513 27.2285 21.9278 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6502L49.3315 14.7908C52.0133 12.0677 52.0135 7.65296 49.3319 4.93012C46.6503 2.20729 42.3024 2.20749 39.6206 4.93056Z" fill="#01C9B7" />
                        </svg>
                    </span>
                    <div class="mt-4 md:grid md:grid-cols-2">
                        <div>
                            <h1 class="htcH1Title max-w-lg">Long Standing Relationships with high quality suppliers</h1>
                        </div>
                        <div class="relative" style="height: 160px;">
                            <p class="align-text-bottom">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate quidem quae, eligendi, dolorem aperiam dolor fugit consequuntur quasi neque dolores odit necessitatibus numquam fuga est nulla exercitationem? Nostrum, porro aut?</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="md:flex justify-between">
                <div class="relative">
                    <p class="uppercase mb-3">Map</p>
                    <div style="width: 100%; height: 100%;">
                        <img src="<?= get_template_directory_uri() . '/assets/images/map.png' ?>" alt="Map">
                    </div>
                </div>
                <?php if (!isset($property['map_owner'])) : ?>
                    <div class="pt-32 max-w-sm px-6">
                        <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M54.1353 26.723C57.928 26.723 61.0025 23.6011 61.0025 19.7501C61.0025 15.8991 57.928 12.7773 54.1353 12.7773C50.3426 12.7773 47.2681 15.8991 47.2681 19.7501C47.2681 23.6011 50.3426 26.723 54.1353 26.723Z" fill="#01C9B7" />
                            <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8384 20.7641 26.8744C24.7151 26.9637 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7066 20.9217 12.7066C19.2394 12.7066 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.755 7.13589 12.719C3.18488 12.6321 -0.06854 15.922 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2839 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#01C9B7" />
                            <path d="M39.6206 4.93056L29.9106 14.7899C27.2287 17.513 27.2285 21.9278 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6502L49.3315 14.7908C52.0133 12.0677 52.0135 7.65296 49.3319 4.93012C46.6503 2.20729 42.3024 2.20749 39.6206 4.93056Z" fill="#01C9B7" />
                        </svg>
                        <h1 class="htcH1Title mt-3">Global Supplier</h1>
                        <div class="max-w-md md:mt-32">
                            <p class="uppercase">EU</p>
                            <h3 class="htcH3SubTitle mt-4">Factory - 01</h3>
                            <div class="htcBodyFont mt-4 mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <a href="#" class="underline text-lg">Learn more</a>
                        </div>
                    </div>
                <?php elseif (isset($property['map_owner']) && $property['map_owner'] === 'bulk') : ?>
                    <div class="pt-32 max-w-sm px-6">
                        <div class="max-w-md md:mt-32">
                            <p class="uppercase">Bangladesh</p>
                            <div>
                                <h3 class="htcH3SubTitle mt-4">Ingredient - 01</h3>
                                <!-- <img src="" alt="" srcset=""> -->
                                <div class="htcBodyFont mt-4 mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                                <a href="#" class="underline text-lg">Learn more</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php if (isset($property['map_owner']) && $property['map_owner'] === 'bulk') : ?>
                <div class="pt-24">
                    <span>
                        <svg width="62" height="30" viewBox="0 0 62 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M54.1353 26.723C57.928 26.723 61.0025 23.6011 61.0025 19.7501C61.0025 15.8991 57.928 12.7773 54.1353 12.7773C50.3426 12.7773 47.2681 15.8991 47.2681 19.7501C47.2681 23.6011 50.3426 26.723 54.1353 26.723Z" fill="#01C9B7" />
                            <path d="M16.5247 25.2927C17.6866 26.2516 19.1587 26.8384 20.7641 26.8744C24.7151 26.9637 27.9685 23.6726 27.8976 19.6608C27.8292 15.8078 24.7322 12.7066 20.9217 12.7066C19.2394 12.7066 17.6976 13.3107 16.493 14.3167C15.0074 15.5572 12.8682 15.5324 11.3752 14.3006C10.2134 13.3417 8.74121 12.755 7.13589 12.719C3.18488 12.6321 -0.06854 15.922 0.00109753 19.9337C0.0695133 23.7867 3.16655 26.888 6.97706 26.888C8.65936 26.888 10.2024 26.2839 11.407 25.2766C12.8914 24.0361 15.0318 24.0609 16.5235 25.2927H16.5247Z" fill="#01C9B7" />
                            <path d="M39.6206 4.93056L29.9106 14.7899C27.2287 17.513 27.2285 21.9278 29.9101 24.6506C32.5917 27.3734 36.9396 27.3732 39.6214 24.6502L49.3315 14.7908C52.0133 12.0677 52.0135 7.65296 49.3319 4.93012C46.6503 2.20729 42.3024 2.20749 39.6206 4.93056Z" fill="#01C9B7" />
                        </svg>
                    </span>
                    <div class="md:flex space-x-4 mt-4">
                        <h1 class="htcH1Title max-w-sm">UK & EU Warehouses</h1>
                        <div class="relative">
                            <div>
                                <h3 class="htcH3SubTitle mt-4">Warehouse 01</h3>
                                <!-- <img src="" alt="" srcset=""> -->
                                <div class="htcBodyFont mt-4 mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                                <a href="#" class="underline text-lg">Learn more</a>
                            </div>
                            <div>
                                <h3 class="htcH3SubTitle mt-4">Warehouse 02</h3>
                                <!-- <img src="" alt="" srcset=""> -->
                                <!-- <div class="htcBodyFont mt-4 mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <a href="#" class="underline text-lg">Learn more</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>