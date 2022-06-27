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

$image = get_field('intro_background_image');
?>

<section>
    <div class="relative home_intro" style="background-image: url(<?= $image; ?>);">
        <div class="max-w-screen-xl mx-auto px-3">
            <div class="relative float-right top-60 max-w-md lg:mr-14 md:ml-4">
                <h1 class="htcH1Title"><?php the_field('intro_title'); ?></h1>
                <div class="htcBodyFont mt-4">
                    <?php the_field('intro_description'); ?>
                </div>
                <button class="mt-5 learn_more">
                    Learn more
                </button>
            </div>
        </div>
    </div>
    <div class="relative bg-purple w-11/12 h-[25px] z-10" style="bottom: 142px;"></div>
</section>