<?php
/*Template Name: Article*/
get_header(); ?>


<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section id="banTitre" class="container-fluid d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row d-flex flex-column justify-content-center">
                
                <h1><?php the_title(); ?></h1>
                    
                
            </div>
        </div>
    </section>

    <!-- ARTICLE -->
    <section id="article">
       
        <div class="container col-md-8">
             <div class="articleTop row">

                <div class="articleAuteur col-md-8">
                            < Réalisé par <a href="<?php echo get_permalink() ;?>"><?php echo get_the_author(); ?></a> />
                </div>

                <div class="articleDate col-md-4">
                    <?php the_time('j F Y') ?>
                 </div>
                        <!-- l'article -->
                <article id="post">
                    <div class="post-thumbnails" style="background-image: url(<?php echo get_the_post_thumbnail_url()?>)">
                    </div>

                    <div class="articleTexte">
                        <?php the_content(); ?>
                    </div>
                </article>

                <?php endwhile; else : ?>
                <article class="post">
                    <p>Il n'y a aucun article dans cette catégorie.</p>
                    <p><a href="<?php bloginfo('url'); ?>">Return in the homepage</a></p>
                </article>

            </div>
        </div>
            

    <?php endif; ?>
    </section>

    <!-- COMMENTAIRES -->
    <section id="commentaires">
        <div class="container col-md-8">
            <hr>
            <?php comments_template(); ?>
        </div>
    </section>
</main>


<?php get_footer(); ?>