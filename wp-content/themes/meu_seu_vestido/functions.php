<?php 

	require_once get_template_directory() . '/inc/customizer.php';


function meu_seu_vestido_scripts(){
    // Scripts
    wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array('jquery'), '2.7.2', true);
    wp_enqueue_script('jquery-flexslider-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array('jquery'), '2.7.2', true);
    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/inc/font-awesome.min.js', array(), '5.14.0', true);
    wp_enqueue_script('bootstrap-bundle-js', get_template_directory_uri() . '/inc/bootstrap.bundle.min.js', array(), '4.5.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery'), '4.5.0', true);

    // CSS
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/inc/flexslider/flexslider.css',array(),'2.7.2','all');
    wp_enqueue_style('icons-font-awesome', get_template_directory_uri() . '/inc/font-awesome.min.css',array(),'5.14.0','all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.5.0', 'all');
    wp_enqueue_style('meu-seu-vestido-style', get_stylesheet_uri(), array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'meu_seu_vestido_scripts');

# Menus
function meu_seu_vestido_config(){
    register_nav_menus(
        array(
            'meu_seu_vestido_menu' =>  'Meu Seu Vestido Menu',
            'meu_seu_vestido_menu_footer' => 'Menu Footer'
        )
    );
    // Acionar Suporte com WooCommerce
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width'    => 255,
        'product_grid' => array(
                'default_rows'      => 10,
                'min_rows'          => 5,
                'max_rows'          => 10,
                'default_collumns'  => 1,
                'min_collumns'      => 1,
                'max_collumns'      => 1
        )
    ));
    
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    // Adicionar campo de logo
    add_theme_support('custom-logo',array(
        'height' => 143,
        'width' => 240,
        'flex_height' => true,
        'flex_width' => true
    ));

    if( ! isset($content_width)){
        $content_width = 600;
    }
    // Menus dropdown com Bootstrap 
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    add_image_size( 'meu-seu-vestido-slider',2560,800,array( 'center', 'center'));

}
add_action('after_setup_theme', 'meu_seu_vestido_config',0);

// Paginação Com Bootstrap

function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
    if ( null === $wp_query ) {
        global $wp_query;
    }
    $add_args = [];
    $pages = paginate_links( array_merge( [
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'format'       => '?paged=%#%',
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'total'        => $wp_query->max_num_pages,
        'type'         => 'array',
        'show_all'     => false,
        'end_size'     => 3,
        'mid_size'     => 1,
        'prev_next'    => true,
        'prev_text'    => __( '« Anterior' ),
        'next_text'    => __( 'Próximo »' ),
        'add_args'     => $add_args,
        'add_fragment' => ''
    ], $params )
);

if ( is_array( $pages ) ) {
    //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
    $pagination = '<div class="pagination"><ul class="pagination">';

    foreach ( $pages as $page ) {
        $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
    }

    $pagination .= '</ul></div>';

    if ( $echo ) {
        echo $pagination;
    } else {
        return $pagination;
    }
}

return null;
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'meu_seu_vestido_woocommerce_header_add_to_cart_fragment' );

function meu_seu_vestido_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
    <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

add_action('widgets_init', 'meu_seu_vestido_sidebars');

function meu_seu_vestido_sidebars(){
    register_sidebar(array(
        'name'          => 'Sidebar Principal',
        'id'            => 'meu-seu-vestido-sidebar-1',
        'description'   => 'Arraste e solte os widgets aqui',
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',

    ));
    register_sidebar(array(
        'name'          => 'Sidebar Loja',
        'id'            => 'meu-seu-vestido-sidebar-shop',
        'description'   => 'Arraste e solte os widgets aqui para a página de loja',
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',

    ));

}