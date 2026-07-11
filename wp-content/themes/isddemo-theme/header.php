<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="theme-color" content="#111111">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/preloader' ); ?>

<a href="#content" class="skip-link sr-only"><?php esc_html_e( 'Skip to content', 'isddemo-theme' ); ?></a>

<?php get_template_part( 'template-parts/navigation/navbar' ); ?>

<main id="content" class="isd-main" role="main">
