<?php get_header(); ?>
<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <article class="col">
                            <?php if (get_the_ID() != 27) : ?>
                                <h1><?php the_title(); ?></h1>
                            <?php endif; ?>
                            <div><?php the_content(); ?></div>
                        </article>

                    <?php endwhile;
                else :
                    ?>
                    <p>Nada a mostrar</p>

                <?php endif; ?>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>