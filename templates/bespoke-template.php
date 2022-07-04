<?php /* Template Name: Bespoke Template */ ?>
<?php get_header(); ?>

<?php
global $property;
$property = array(
    "introblock_owner" => 'bespoke',
    "module_owner" => 'bespoke',
    "step_owner" => 'bespoke',
    "getin_owner" => 'bespoke',
    "brochure_owner" => 'bespoke',
);
?>

<div class="main relative center" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>