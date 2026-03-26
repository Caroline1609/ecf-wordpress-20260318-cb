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
        <?php the_category(', '); ?>
    </header>
    <section>
        <?php the_post_thumbnail('large'); ?>
        Écrit par <?php the_author(); ?>,
        Le <?php the_date(); ?>
        <?php the_content(); ?>
    </section>
</article>

<nav class="post-navigation">
    <div class="nav-previous">
        <?php previous_post_link('← Article précédent'); ?>
    </div>
    <div class="nav-next">
        <?php next_post_link('Article suivant →'); ?>
    </div>
</nav>

<?php
    endwhile;
endif;



get_footer();