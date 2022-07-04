<?php /* Template Name: Products Template */ ?>
<?php get_header(); ?>

<?php 
    global $property;
    $property = array(
        "introblock_owner" => "products",
        "newsletter_owner" => 'products'
    );
?>

<div class="main relative center" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>
