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

$image = get_field('intro_background_image');

?>

<section>
    <div class="relative">
        <div class="relative home_intro" style="background-image: url(<?= $image; ?>);">
            <div class="w-full mx-auto px-3">
                <div class="relative top-32 md:top-60 max-w-md lg:mr-14 md:pl-20">
                    <h1 class="htcH1Title text-black"><?php the_field('intro_title'); ?></h1>
                    <div class="htcBodyFont mt-4 text-black">
                        <?php the_field('intro_description'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 w-full">
            <?php if (isset($args['intro_bottom']) && !empty($args['intro_bottom'])): ?>
            <div class="relative bg-htcOrange-light w-11/12 h-[25px] z-10 -bottom-3"></div>
            <?php else: ?>
            <div class="relative float-right bg-red w-11/12 h-[25px] z-10 -bottom-3"></div>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="clear-both"></div>