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
    .known-background {
        background-image: url('<?php the_field('known_background'); ?>');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
    }

    .known-area {
        height: 670px;
    }
</style>

<section>
    <div class="known-background">
        <div class="w-full mx-auto">
            <div class="relative flex justify-between px-3 md:px-8 known-area">
                <div class="max-w-sm flex items-center">
                    <div>
                        <span></span>
                        <h1 class="htcH1Title"><?php the_field('known_title'); ?></h1>
                        <p class="mt-4"><?php the_field('known_description'); ?></p>

                        <?php if (!empty(get_field('known_btn_text'))) : ?>
                            <button class="mt-6 learn_more"><?php the_field('known_btn_text'); ?></button>
                        <?php endif; ?>
                    </div>
                </div>
                <p class="uppercase text-white mt-10"><?php the_field('known_module_title'); ?></p>
            </div>
        </div>
    </div>
</section>