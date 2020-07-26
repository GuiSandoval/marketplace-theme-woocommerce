
<footer class="footer_ms_vest p-5"> 
    <div class="container ">
        <div class="row">
            <div class="col-md-4">
                <section class="info">
                <nav class="footer-menu">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'meu_seu_vestido_menu_footer'
                    )
                );
                ?>
            </nav>
                <!-- <ul>
                    <li><a href=""> Ajuda</a></li>
                    <li><a href=""> Como Vender </a></li>
                    <li><a href=""> Como Comprar</a></li>
                    <li><a href=""> Promoções</a></li>
                    <li><a href=""> Convide e Ganhe</a></li>
                    <li><a href=""> Marcas</a></li>
                    <li><a href=""> Mapa do Site</a></li>
                </ul>     -->
                </section>
            </div>
            <div class="col-md-8">
                <h2>Noticias</h2>
                <section class="infoEmail">Email</section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right footerCopyright">
                <p><?php echo get_theme_mod('set_copyright');?></p>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer();?>
</body>
</html>