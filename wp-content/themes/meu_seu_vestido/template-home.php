<?php
/*
Template Name: Home Page
 */
?>
<?php get_header(); ?>
<div class="content-area">
    <main>
        <section class="slider">
            <!-- Place somewhere in the <body> of your page -->
            <div class="flexslider">
                <ul class="slides">
                    <?php
                    for ($i = 1; $i < 4; $i++) {
                        $slider_page[$i]        = get_theme_mod('set_slider_page' . $i);
                        $slider_button_text[$i] = get_theme_mod('set_slider_button_text' . $i);
                        $slider_button_url[$i]  = get_theme_mod('set_slider_button_url' . $i);
                        $slider_type[$i]        = get_theme_mod('set_select_slider' . $i);
                    }

                    $args = array(
                        'post_type'     => 'page',
                        'post_per_page' =>  '3',
                        'post__in'      => $slider_page,
                        'order_by'      => 'post__in'
                    );

                    $slider_loop = new WP_Query($args);


                    $c = 1;

                    if ($slider_loop->have_posts()) :
                        while ($slider_loop->have_posts()) :
                            $slider_loop->the_post();

                    ?>
                            <li>
                                <?php
                                $imageSlid =  get_the_post_thumbnail_url();
                                $string = str_replace("-scaled", "", $imageSlid);

                                if ($slider_type[$c] =='image'):
                                ?>

                                <img src="<?php echo $string; ?>" class="img-fluid wp-post-image" alt="">

                                <?php elseif ($slider_type[$c]== 'image_btn'):?>

                                    <img src="<?php echo $string; ?>" class="img-fluid wp-post-image" alt="">
                                    <div class="container">
                                        <div class="slider-details-container">
                                            <div class="slider-description">
                                                <a href="<?php echo $slider_button_url[$c]; ?>" class="link"><?php echo $slider_button_text[$c]; ?></a>
                                            </div>
                                        </div>

                                <?php else:?>
                                    <img src="<?php echo $string; ?>" class="img-fluid wp-post-image" alt="">
                                    <div class="container">
                                    <div class="slider-details-container">
                                        <div class="slider-title">
                                            <h1><?php the_title(); ?></h1>
                                        </div>
                                        <div class="slider-description">
                                            <div class="subtitle"><?php the_content(); ?></div>
                                            <a href="<?php echo $slider_button_url[$c]; ?>" class="link"><?php echo $slider_button_text[$c]; ?></a>
                                        </div>

                                    </div>
                                </div>
                                <?php endif;?>
                                
                                

                            </li>
                    <?php
                            $c++;
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>
        </section>
        <section class="novos-produtos">
            <div class="container">
                <div class="row">Novos Produtos</div>
            </div>
        </section>
        <section class="destaque-produtos">
            <div class="container">s
                <div class="row">Produtos em Destaque</div>
            </div>
        </section>
        <section class="popular-products">
            <div class="container">
                <div class="row">
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
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>