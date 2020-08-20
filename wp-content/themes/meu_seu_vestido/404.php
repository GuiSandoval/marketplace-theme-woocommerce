<?php get_header(); ?>
<?php 
$post_id = 10; /*ID da página a ser redirecionada */
?>
<div class="container">
    <div id="page" class="p-3 rounded" style="background-color:white;">
        <h1>Página não encontrada</h1>
        <p>Pedimos desculpa, mas a página que está querendo acessar não está mais disponível ou não existe!</p>
        <p>Já verificou na barra de endereço do seu browser de internet se o URL está correto?.</p>
        <p>Se estiver tudo OK, por que não tentar fazer uma pesquisa em nosso site pelo conteúdo que está procurando?</p>
        <?php get_search_form(); ?> 
        <p>Se desejar, poderá também saltar para a nossa <a href="<?php bloginfo('url'); ?>">home</a>!</p>
        <p>Se desejar reportar esse erro, <a href="<?php echo get_permalink($post_id); ?>">contate-nos</a>, para que o possamos resolver. Obrigado! </p>
    </div>
</div>
<?php get_footer(); ?>