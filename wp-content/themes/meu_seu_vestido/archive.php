<?php get_header(); ?>
<div class="content-area mt-5">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <?php
                    the_archive_title( '<h1 class="archive-title">','</h1>');
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <article class="bloco-posts" <?php post_class(); ?>>
                                <h2>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <hr>
                                <div class="post-thumbail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('meu-seu-vestido-slider', array('class' => 'img-fluid mb-3')); ?>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="meta">
                                    <p><b>Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?></b><br>
                                        <?php if (has_category()) : ?>
                                            <b>Categorias:<span><?php echo the_category(' '); ?></span></b><br>
                                        <?php endif; ?>
                                        <?php if (has_tag()) : ?>
                                            <b>Tags:<span><?php the_tags('', ', '); ?></span></b></p>
                                <?php endif; ?>
                                </div>
                                <div><?php the_excerpt(); ?></div>
                                <div class="text-right"><a href="<?php the_permalink();?>">Ler mais(+)</a></div>
                            </article>

                        <?php endwhile;
                        the_posts_pagination(array(
                            'prev_text'     => 'Anterior',
                            'next_text'     => 'Próximo'
                        ));
                    else :
                        ?>
                        <p>Nada a mostrar</p>

                    <?php endif; ?>
                </div>
                <aside class="col-lg-3 col-md-4 col-12 h-100">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>