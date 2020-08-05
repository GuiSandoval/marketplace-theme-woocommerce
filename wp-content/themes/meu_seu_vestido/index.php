<?php get_header(); ?>
<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <div><?php the_content(); ?></div>
                            </article>

                        <?php endwhile;
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