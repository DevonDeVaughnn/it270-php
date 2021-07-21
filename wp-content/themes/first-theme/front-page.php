<?php get_header();
/* Template Name: Front Page*/
 ?>

<div id="wrapper">
    <?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail(); ?>
    <?php endif;?>

    <?php while(have_posts()) : the_post() ;?>
    <h2><?php the_title() ; ?></h2>
    <?php the_content() ; ?>
    <?php endwhile; ?>

</div>
<?php get_footer(); ?>
<!--end wrapper-->