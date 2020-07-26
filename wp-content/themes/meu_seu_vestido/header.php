<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site pt-5">
        <header>
            <!-- CAIXA DE PESQUISA E CONTA -->
            <section class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12 search d-flex justify-content-center justify-content-md-start">
                            <?php get_search_form();?>
                        </div>
                        <div class="col-md-6 col-sm-12 d-flex justify-content-end ">
                            <div class="account p-1 icon-topo">
                                <?php 
                                $current_user = wp_get_current_user(); 
                                $firstName = $current_user->first_name; 
                                $lastName = $current_user->last_name;  
                                $nomeUsuario = $firstName .' '. $lastName;
                                ?>
                                <?php if(is_user_logged_in()): ?>
                            <div class="dropdown">
                                <a  type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id')));?>"><i class="fas fa-user"></i> <?php echo $nomeUsuario;?></a>
                                    <a class="dropdown-item" href="<?php echo esc_url( wc_get_account_endpoint_url( 'edit-account' ) ); ?>"><i class="fas fa-edit"></i> Alterar Dados</a>
                                    <a class="dropdown-item" href="<?php echo esc_url(wp_logout_url(get_permalink(get_option('woocommerce_myaccount_page_id'))));?>"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Sair</a>
                                </div>
                            </div>
                            <?php else:?>  
                                <a class="dropdown-item" href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id')));?>">Entrar | Registrar</a>
                            <?php endif; ?>                         
                            </div>
                            <div class="user-favorite p-1 icon-topo"><i class="fas fa-heart " aria-hidden="true"></i></div>
                            <div class="cart-topo text-center p-1 icon-topo">
                                <a href="<?php echo wc_get_cart_url(); ?>" class="link-cart btn btn-dark btn-custom">
                                    <span class="cart-icon"><i class="fas fa-shopping-cart icon-topo" aria-hidden="true"></i></span> 
                                    <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- LOGO -->
            <section class="logo">
                <div class="container text-center">
                    <a href="<?php echo home_url('/'); ?>">
                        <?php the_custom_logo();?>
                    </a>
                </div>
            </section>
            <!-- MENU -->
            <section class="menu-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location'    => 'meu_seu_vestido_menu',
                                    'depth'             => 3,
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse',
                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                    'menu_class'        => 'nav navbar-nav ml-auto mx-auto',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ));
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
        </header>