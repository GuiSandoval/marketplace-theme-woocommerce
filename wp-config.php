<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_meu_seu_vestido' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'veras036' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g<z@!.?k>O)w 4+@0O@8KEYs->U)GiM>;0Uz[e:uED7F8DYs9](24KpBdq%)j24(' );
define( 'SECURE_AUTH_KEY',  'B[;mp!vya8xsZBE(9=V6D@IQOU_Fuc})UuIX=MixGMoHuy%.n$JCruaI8^9:r4Ge' );
define( 'LOGGED_IN_KEY',    'PEa&KM^RRA5mQui?x_ZD6j9*vs:D{AfVS ?Ce*^}]bK:S=q9lzWsknecW$Gx=#y`' );
define( 'NONCE_KEY',        'z/r|0+0IE0f)Rv2/ Z^4^FRHu)g;ju6iigE3@$h+egG|D=K|F;/ItRt4*#XGv8Z_' );
define( 'AUTH_SALT',        '8W#vNR{h38Q0}yX@5sKL~W,W0oTGM<55}:5YEy`-%f/iX+@]qfsx#wO:8%WT__!=' );
define( 'SECURE_AUTH_SALT', 'lgP*kEwkbd5Ud)U>W|Nf1=|ea`8;[85DO8P%PLl[&ZQo-iTwb NZ8tO{j[X1[ jC' );
define( 'LOGGED_IN_SALT',   ',,!a8qvpZ#_q;P}*8(RRD)Uh[!t2MoO|odn[+@^sz3(&)]SX`vPR0H.rV4i6L@Cc' );
define( 'NONCE_SALT',       'KZ%P4/;,W@PH1zop(EL?u | 9L%K^BxjVDmHosumk1d_]=GS@BA9j7y_1HT.ZSH3' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wcc_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
