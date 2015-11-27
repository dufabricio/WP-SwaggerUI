<?
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* e.g., it puts together the home page when no home.php file exists.
*
* Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
*
* @package WordPress
* @subpackage SwaggerUI
* @since SwaggerUI Theme 1.0
*/
?>

<?php get_header(); ?>

<div id="message-bar" class="swagger-ui-wrap" data-sw-translate>&nbsp;</div>
<div id="swagger-ui-container" class="swagger-ui-wrap">

    <?php
    $args = array(
        'posts_per_page' => 100,
        'post_type' => 'API'
    );

    query_posts($args);
    ?>


    <?php if ( have_posts() ) {?>

        <ul class="list-apis">
            <?php while ( have_posts() ) : the_post();?>
            <li><a href="<?php the_permalink()?>"> <?php the_title();?> </a></li>
            <?php endwhile;?>
        </ul>

    <?php }; ?>


</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>