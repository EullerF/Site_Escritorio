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
define( 'DB_NAME', 'escritorio' );

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
define( 'AUTH_KEY',         'BtrFj]~t5}SYgA0$dkXj,Mm;6bW:_KH_buo>P4cv(p^detCFF=S3Dv*o3WZL!7B3' );
define( 'SECURE_AUTH_KEY',  ',5_A51]P F2WFt|sCKa01)5A-%73-L<91?eit(_J{40D/pA/3wmZCk6NWP 7eF-t' );
define( 'LOGGED_IN_KEY',    'j^AB3bo|t7|kBP=ORSxq1)!!pm~|9{v^f+7xq}@p:g-%leTF82$^~s!F  OK,A)L' );
define( 'NONCE_KEY',        'L3VAKG&_71k#u63Z4x-oG(</2anN.[8JppUy{~%[4:G1lMKx@?TU}_B70b!JgflH' );
define( 'AUTH_SALT',        'Hr.;-I;<KAW)3zFuuisi,fAX^CPW7#%dT+$e3v0#Ne@>}(!oQ[tMdVbwnx5HV?J,' );
define( 'SECURE_AUTH_SALT', 'gy Ei%r#e]=fQ8VpP7Sk,:/Mz&2l|+eVm>usqo:@7kO3*f>j*pfHr-NiRYv=mp>/' );
define( 'LOGGED_IN_SALT',   'v_Yg+c9i0xEd8Q.N/@>r5)Zj.L1h3/X?ZaT]H a7tsV@ c(6xT,nHn)&5Y*R/l#B' );
define( 'NONCE_SALT',       '?_or=Bo,zFT @-+vGa0E,6Sy<@S6dqn85%:S|Bu+ mV{FhIPz=?tAVwf` 8L+lpJ' );

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
