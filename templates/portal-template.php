<?php /* Template Name: Portal Template */ ?>
<?php get_header(); ?>
<?php
    
$layout = array(
    "parts_intro"   => "intro",
    "format"        => "formats_slider",
    "nutrition"     => "nutrition_block",
    "parts_gummies" => "gummies",
    "seller"        => "sellers_block",
    "clients"       => "clients_slider",
    "known"         => "known_block",
    "grid"          => "grid_items",
    "parts_testimonial" => "testimonial",
    "getintouch"    => "getintouch",
    "brochure"      => "brochure",
    "partial"       => "partial_descblock",
);

foreach ($layout as $section => $content) {
    get_template_part('templates/module/content', $content, array(
        "intro_owner" => 'portal',
        "step_owner" => 'portal',
        "nutrition_owner" => 'portal',
        "brochure_owner" => 'portal',
        "seller_owner" => 'portal',
    ));

    if (str_contains($section, "parts"))
        get_template_part('templates/parts/portal', $content);
}
?>
<?php get_footer(); ?>
