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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'developer');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '+HP|Hf3BF^-<#s+!L-5EkK-ol_FKMd$Vr^fm$+z%H5]FS*wQ3P)%(^-D<(n_AJhb');
define('SECURE_AUTH_KEY',  'z`C~]N#O{mo3jmb,Tc+`3Z[CO4>-<dgZIP.#n7xzWh!k!3Z)x#!A0dd yaj7avIn');
define('LOGGED_IN_KEY',    '==4^d[/-mJ%h3Kz-jbUJ-QPrcU[NpqmD/)z9sY%E>V1r#TLK|o{2(UP=.j0ai1YU');
define('NONCE_KEY',        'aq@9Gzx$Zt2q:6kJ;TE.&aEPHJ5w-e*E5s.vof*=n5y3jv>kr|6sIntA7uS]qqW=');
define('AUTH_SALT',        'q4&;#B$JeTn!<fLi7h1,Kl68XOea6%Q+|oE`<chZk859Q(vb9,%NM,JT>-13+GIa');
define('SECURE_AUTH_SALT', 'vX%X W!&MDHv@3S1GHr.VG+O-;O[Eo!q]ozYC?n L(L{Sc[$ER~a~I|tG `|,CK;');
define('LOGGED_IN_SALT',   '#FmLdvO&JC65v@yc~csw(%>|89T?wLu=EdC.k-k;WyBhjV%Y?DbBABm]`1)Rg~G=');
define('NONCE_SALT',       '//8]]&`)hXp ktQ6Wl#!G[Ta/V$6S_<SN-7vE s|U$7H16=L{w<BP#7M$oYatp3!');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
