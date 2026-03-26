<?php get_header(); ?>

<div class="voyage">
    <div>
        <h3>Mes voyages</h3>
    </div>
    <div>
        <hr>
    </div>
</div>


<div class="card">

    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>


            <article class="index-conteneur">
                <header>
                    <div class="conteneur_img">

                        <?php if (has_post_thumbnail()) {

                            the_post_thumbnail('thumbnail');
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/no-image.jpg" />';
                        }

                        ?>

                        <span>
                            <?php echo get_the_date(); ?>
                        </span>

                    </div>
                </header>
                <section>
                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <p><?php the_excerpt(); ?></p>
                </section>

            </article>


            <?php
        endwhile;
    else:
        echo 'Aucun contenu';
    endif;
    ?>

</div>

<?php get_footer();