<?php /* Template Name: Portal Template */ ?>
<?php get_header(); ?>

<?php
global $property;
$property = array(
    "introblock_owner" => 'portal',
    "step_owner" => 'portal',
    "nutrition_owner" => 'portal',
    "brochure_owner" => 'portal',
    "seller_owner" => 'portal',
);
?>

<div class="main relative center" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>