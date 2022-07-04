<?php /* Template Name: Private Label Template */ ?>
<?php get_header(); ?>

<?php
global $property;
$property = array(
    "introblock_owner" => 'private',
    "clients_slider_bottom" => true,
    "brochure_owner" => 'private',
    "step_owner" => 'private',
);
?>

<div class="main relative center" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>