<?php

/**
 * Template part for Portal page
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
        <div class="w-full mx-auto">
            <div class="relative">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <?php
                        $items = get_field('grid_items');
                        $count = isset($items) ? count($items) : 0;
                        $flag = 1;
                        $i = 1;
                    ?>
                    <?php if (have_rows('grid_items')): ?>
                    <?php while( have_rows('grid_items') ): the_row(); ?>
                    <?php if ($i % 2 == 0) $flag = $flag == 1 ? 2 : 1; ?>
                    <div class="testimonial">
                        <div class="hidden content relative py-4 px-4 h-48 md:h-72">
                            <h3 class="htcH3SubTitle mt-2"><?php the_sub_field('item_title'); ?></h3>
                            <p class="mt-4"><?php the_sub_field('item_description'); ?></p>
                            <p class="absolute bottom-0 pb-4"><?= sprintf('%02d', $i) . '/' . sprintf('%02d', $count); ?></p>
                        </div>
                        <div class="flex">
                            <?php if ($flag == 1): ?>
                            <div class="w-1/2 bg-htcGrey-dark h-48 md:h-72"></div>
                            <div class="w-1/2 relative py-4 px-4">
                                <h3 class="htcH3SubTitle mt-2"><?php the_sub_field('item_title'); ?></h3>
                                <p class="absolute bottom-0 pb-4"><?= sprintf('%02d', $i) . '/' . sprintf('%02d', $count); ?></p>
                            </div>
                            <?php else: ?>
                            <div class="w-1/2 relative py-4 px-4">
                                <h3 class="htcH3SubTitle mt-2"><?php the_sub_field('item_title'); ?></h3>
                                <p class="absolute bottom-0 pb-4"><?= sprintf('%02d', $i) . '/' . sprintf('%02d', $count); ?></p>
                            </div>
                            <div class="w-1/2 bg-htcGrey-dark h-48 md:h-72"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <?php $i += 1; endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>