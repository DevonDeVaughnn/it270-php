<?php get_header();
/* Template Name: Tours Page*/
 ?>


<div id="wrapper">
    <main>
        <!--if we have posts... show me the posts, if not, we don't have them-->
        <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif;?>

        <?php while(have_posts()) : the_post() ;?>
        <h2><?php the_title() ; ?></h2>
        <?php the_content()?>
        <?php endwhile; ?>



    </main>
    <aside>This is tours page</aside>
</div>
<?php get_footer(); ?>
<!--end wrapper-->
<?php error_reporting(E_ALL); ?>