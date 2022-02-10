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
define( 'DB_NAME', 'projeto1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aK:)co% }K%* !dj)J-$?$yzGKhB|F,)Xy;(3yy875pMlcpFe&F)QbzC%i$9Q25R' );
define( 'SECURE_AUTH_KEY',  'o-wuM,pHQ=MiF;>(4/WQ5GZs17Mq?:uoC WpDs_WTymrXzN (qL>jvNdnASkr0lM' );
define( 'LOGGED_IN_KEY',    '/0omfI(fg<}`FX@n0WF#_v0j$P=3?#q!m0 LBMkGlp78-S@O*Wvl_dkeF3&w(v`8' );
define( 'NONCE_KEY',        '(kZtW,m8a<Kfay:nJ7#l3m1~h Q));&}(f0e7q9F#ev.8o-. ;G+_^L1jue|Yal:' );
define( 'AUTH_SALT',        'e,le^6K,yv]6%QO*~4q^~ln^)F}Hl8z`:lX^5)(U+?igM_E=R[)A=4Zckud~Z/66' );
define( 'SECURE_AUTH_SALT', 'KyH:Z5g?_pb#DCQ<Pfgi(rt##[+x!Z8rao-K-COd{UD2p_X,7C~yEJ{2e-6S8DOu' );
define( 'LOGGED_IN_SALT',   ',`wq!K},u54N4/9v$1k&0>26T]Kh|/V,1=tA]`Yp_itF<D|njxOQtmd.TU`DvTL/' );
define( 'NONCE_SALT',       '4o%_9en7:(&vJ/<P?jTo4Fo]YIF-5Dh8LU3ouMU^5l@&9[e4>t#cfmv gxd9UmBv' );

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
