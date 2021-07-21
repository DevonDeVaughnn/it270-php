<?php get_header(); ?>

<div id="wrapper">
    <main>
        <!--if we have posts... show me the posts, if not, we don't have them-->

        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ;?>
        <article class="posts">
            <h1><a href="<?php the_permalink() ;?>"><?php the_title() ; ?></a></h1>
            <div class="meta">
                <span><b>Posted by:</b> <?php the_author(); ?></span>
                <span><b>Posted on:</b> <?php the_time('F j, Y g:i a'); ?></span>
            </div>
            <!-- end meta div-->
            <div class="thumbnail">
                <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                <?php endif;?>
            </div>
            <!--end thumbnail-->
            <?php the_excerpt() ; ?>
            <span class="block"> <a href="<?php the_permalink();?>">Read More about <?php the_title();?></a></span>

        </article>
        <?php endwhile; ?>
</div>
<?php else : ?>
<?php echo '<h2>Search Results:</h2>
<p>Sorry, but nothing matched your search terms. <br>
    Would you like to search again with different keywords</p>'; ?>
<?php get_search_form(); ?>
<?php endif; ?>
<!-- REMEMBER, search results originally working off of the index.php page -->
</main>
<aside>This is the index page</aside>
</div>
<?php get_footer(); ?>
<!--end wrapper-->
<?php error_reporting(E_ALL); ?>