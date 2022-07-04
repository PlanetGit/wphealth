<?php /* Template Name: Bulk Template */ ?>
<?php get_header(); ?>

<?php
global $property;
$property = array(
    "introblock_owner" => 'bulk',
    "module_owner" => 'bulk',
    "step_owner" => 'bulk',
    "map_owner" => 'bulk',
    "seller_owner" => 'bulk',
    "vertical_owner" => 'bulk',
    "brochure_owner" => 'bulk',
    "intro_bottom" => 'bulk',
    "getin_owner" => 'bulk',
);
?>

<div class="main relative center" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>
