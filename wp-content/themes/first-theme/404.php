<?php get_header();

 ?>
<div id="wrapper">
    <main>
        <h2><?php _e("This is embarrassing, isn't it?");?></h2>
        <p><?php _e("It looks like nothing was found at this location. Maybe try another search?",'site1');?></p>
        <?php get_search_form();?>
    </main>
    <aside>This is the 404 Page</aside>
</div>
<?php get_footer();?>