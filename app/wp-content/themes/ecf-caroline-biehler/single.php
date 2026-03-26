<?php 

get_header(); ?>

<h1>single</h1>


<?php
if(have_posts()) :
    while(have_posts()):
        the_post();
?>

<article class="index">
    <header>
        <h1><?php the_title(); ?></h1>
    </header>
    <section>
        <?php the_post_thumbnail('large'); ?>
        Écrit par <?php the_author(); ?>,
        Le <?php the_date(); ?>
        <?php the_content(); ?>
    </section>
    <footer>
        <?php the_category(', '); ?>
    </footer>
</article>

<?php
    endwhile;
endif;



get_footer();