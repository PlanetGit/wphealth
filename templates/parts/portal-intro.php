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

<div class="relative md:flex justify-between">
    <div>
        <?php 
        $image = get_field('portal_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image); ?>" alt="Home block image" width="570" height="573"/>
        <?php endif; ?>
    </div>
    <div class="mt-10 max-w-md lg:mr-14 md:ml-4">
        <?php 
        $image = get_field('portal_title_image');
        if( !empty( $image ) ): ?>
            <img class="mb-2" src="<?php echo esc_url($image); ?>" alt="Home title image" width="60" height="30"/>
        <?php endif; ?>
        <h1 class="htcH1Title"><?php the_field('portal_title'); ?></h1>
        <h3 class="htcH3SubTitle mt-12"><?php the_field('portal_sub_title'); ?></h3>
        <div class="htcBodyFont mt-4">
            <?php the_field('portal_description'); ?>
        </div>
    </div>
</div>