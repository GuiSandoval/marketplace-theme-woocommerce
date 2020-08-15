<?php

get_header(); ?>

<div id="primary" class="content-area">
    <div id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">

                    <?php
                    while (have_posts()) : the_post();
                    ?>
                        <article id="post <?php the_ID(); ?>" <?php post_class(); ?>>
                            <header>
                                <h1><?php the_title(); ?></h1>
                                <div class="meta">
                                    <p>Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?> <br>
                                        Categoria: <span><?php the_category(' '); ?></span><br>
                                    </p>
                                </div>
                                <div class="post-thumbnail">
                                    <?php
                                    if (has_post_thumbnail()) :
                                        the_post_thumbnail(array("class" => 'img-fluid'));
                                    endif;
                                    ?>
                                </div>
                            </header>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                        </article>
                    <?php
                    if(comments_open() || get_comments_number() ):
                        comments_template();
                    endif;
                    endwhile;
                    ?>
                </div>
                <aside class="col-lg-3 col-md-4 col-12 h-100">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
?>