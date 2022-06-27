<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>
<?php

$layout = array(
    "intro"         => "intro_home",
    "step"          => "step_block",
    "parts_service" => "service",
    "format"        => "formats_slider",
    "map"           => "map_block",
    "parts_work"    => "ourwork",
    "nutrition"     => "nutrition_block",
    "clients"       => "clients_slider",
    "vertical"      => "vertical_slider",
    "contact"       => "contactus",
);

foreach ($layout as $section => $content) {
    get_template_part('templates/module/content', $content);

    if (str_contains($section, "parts"))
        get_template_part('templates/parts/home', $content);
}
?>
<?php get_footer(); ?>
