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
define( 'DB_NAME', 'wordpress_5' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'UGE{SBD^^T`>TD?fQ`J=6,aDq3TR]^HJsmi_TWHfd0,WJ2DmWW-%XSg~hJVJRq,O' );
define( 'SECURE_AUTH_KEY',  'hkJD]Yx_@%pMT~{dQSQ8+*!&p&MBpY?=f1@)8qG(/nt6y48x:Hk)Z&TPl&$AIGo8' );
define( 'LOGGED_IN_KEY',    'LhCTL^c51I$!O.1,DvW$?8iYFiA{ AkJHLZvJstP+14}][fTw(Dl]-~!AHC:yZcn' );
define( 'NONCE_KEY',        't!6Sz!97!bZl9>p{)`h-^:&ZGI;UA=uch5Ddj6}+iuwxL/L.s}OZSiN?LF~ycpX>' );
define( 'AUTH_SALT',        '9sza*9k$T`M2%s#&n5KZ-3yl.Z{}KpwMu3T(:VvFRXp(t6Uq:]9zed7G>IA,v]rK' );
define( 'SECURE_AUTH_SALT', '~T#0xl%gy.n]V$$ZRZD$/L/?f9!X#1vXyJbY|Vq|X1XukqF.JF:.GDnQ`,XB;;x)' );
define( 'LOGGED_IN_SALT',   'A=RMtmq7ywWJ~prHf!?=l7.@1=YHiK+9sx:w6GVZUN6bCCLhNCXzzenk;cN]5|t;' );
define( 'NONCE_SALT',       'CiRj]tMJ4g/^);/a6,*!35._a{+W-v=]ywV-04q]g2E?5>a:zZFZaH.PyXY]r=uY' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
