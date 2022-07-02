<?php /* Template Name: Bespoke Template */ ?>
<?php get_header(); ?>
<?php

$layout = array(
    "intro"         => "intro_block",
    "module"        => "module_block",
    "step"          => "step_block",
    "clients"       => "clients_slider",
    "map"           => "map_block",
    "grid"          => "grid_items",
    "getintouch"    => "getintouch",
    "brochure"      => "brochure",
    "nutrition"     => "nutrition_block",
    "partial"       => "partial_descblock",
);

foreach ($layout as $section => $content) {
    get_template_part('templates/module/content', $content, array(
        "module_owner" => 'bespoke',
        "step_owner" => 'bespoke',
        "getin_owner" => 'bespoke',
        "brochure_owner" => 'bespoke',
    ));

    if (str_contains($section, "parts"))
        get_template_part('templates/parts/bespoke', $content);
}
?>
<?php get_footer(); ?>
