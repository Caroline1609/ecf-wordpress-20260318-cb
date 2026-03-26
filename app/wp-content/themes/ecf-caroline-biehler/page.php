
<?php
get_header();
?>

<section class="flex">

    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
    ?>

            <article id="article-page">
                <header>
                    <h2><?php the_title(); ?></h2>
                    <?php the_author_link(); ?>
                    <?php the_date(); ?>
                </header>

                <div class="article-content">`
                    <?php the_content(); ?>
                </div>

                <footer>
                    <?php the_category(); ?>
                </footer>
            </article>

    <?php
        endwhile;
    else:
        echo 'Aucun contenu';
    endif;
    ?>

</section>


<?php
get_footer();
?>
