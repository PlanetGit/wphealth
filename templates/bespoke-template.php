<?php /* Template Name: Bespoke Template */ ?>
<?php get_header(); ?>
<?php

$layout = array(
    "intro"         => "intro_block",
    "module"        => "module_block",
    "step"          => "step_block",
    "clients"       => "clients_slider",
    "map"           => "map_block",
    "getintouch"    => "getintouch",
    "brochure"      => "brochure",
    "nutrition"     => "nutrition_block",
    "partial"       => "partial_descblock",
);

foreach ($layout as $section => $content) {
    get_template_part('templates/module/content', $content, array(
        "step_owner" => 'bespoke',
        "getin_bottom" => false,
    ));

    if (str_contains($section, "parts"))
        get_template_part('templates/parts/bespoke', $content);
}
?>
<?php get_footer(); ?>
