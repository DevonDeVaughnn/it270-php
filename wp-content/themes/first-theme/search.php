<?php get_header(); ?>

<div id="wrapper">
    <main>
        <?php if(have_posts()) : ?>
        <h1 class="page-title"><?php _e('Search results for: ', 'site1'); ?>
            <span class="page-description"><?php echo get_search_query(); ?></span>
        </h1>
        <h2 class="pagetitle">Our findings for <?php
             $allsearch=new WP_Query("s=$s&showposts=-1");
             $key = wp_specialchars($s,1); $count=
             $allsearch->post_count; _e('<span class="search-terms">'); echo $key; _e('</span>')
             ; _e(' &mdash; '); echo $count . ''; _e
             (' articles/pages.'); wp_reset_query();?></h2>

        <?php while(have_posts()) : the_post(); ?>
        <article class="posts">
            <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
            <div class="meta">
                <span><b>Posted by:</b> <?php the_author(); ?></span>
                <span><b>Posted on:</b> <?php the_time('F j, Y g:i a'); ?></span>
            </div>
            <div class="thumbnail">
                <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                <?php endif;?>
            </div>
            <?php the_excerpt() ; ?>
            <span class="block"><a href="<?php the_permalink();?>">Read More about <?php the_title();?></a></span>
        </article>

        <?php endwhile; ?>

        <?php else : ?>
        <h1 class="page-title"><?php _e('No contnet for: ', 'site1') ?>
            <span class="page-description"><?php echo get_search_query(); ?>
        </h1>
        <p>Sorry, but nothing matched your search
            terms.<br>
            Would you like to search again with different keywords</p></span>
        <?php get_search_form();?>
        <?php endif; ?>
        <!-- REMEMBER, search results originally working off of the index.php page -->
    </main>
    <aside>You are on the search page</aside>
</div>
<?php get_footer(); ?>
<!--end wrapper-->
<?php error_reporting(E_ALL); ?>