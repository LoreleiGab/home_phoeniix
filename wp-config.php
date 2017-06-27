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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'homephoe_homephoeniix');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'homephoe_user');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '62816584');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'M+[ hiKV1#^?R0%Na8bk5@h);S~:[F P8M}tt+altNM+Z-%H6=RWI%d[SI@OS,=~');
define('SECURE_AUTH_KEY',  'XyeP#R_0C=E7z;hA?j-4#[>(=Fz39q z`dGz-k,ov;pB*-ywjK3!?P@9GIbTv1o,');
define('LOGGED_IN_KEY',    '3[H@B39[k`!lmo)O5>oViYve~v]WlnY9Q H51+ s{_5`k&>C]BVxga0?AtFugnL}');
define('NONCE_KEY',        'NKcr/Ranb9RD3gBSJt S5XLG3tXL}rRY;02nd@Ef$=MIpg;c/9I9;Nxeyz+~e_yH');
define('AUTH_SALT',        'L?!DrdxifU%3xtg*_%Yf}nXHHLvI2KQ!#Z-Ha$yh=AQxVcBo;uvunn~S$8DXuICj');
define('SECURE_AUTH_SALT', '93{3ryBye%y56pjlBi5 2Wg $SCPa)G Tw{_Ej:{IR8_[D)u1I?@q}8g2!fD*ujg');
define('LOGGED_IN_SALT',   'n0m*Ay$suXMUQ_+xn4bP?rl#KG8l##U[79W4DC|ENNaOgWBy|*_|%h)0{)cqJk@j');
define('NONCE_SALT',       'Rg[TnZ$x0N|mIP}=n7l${_P#7$G<wx5?bn9{I?nnCn5Tx6w_%>hD-<o;Aw f35?x');

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
