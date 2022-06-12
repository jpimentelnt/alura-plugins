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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura' );

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
define( 'AUTH_KEY',         'Smpc^L1=U( 6,!5/|*LbP]Fic-@K/?T)EeC*z{?oT|Y?Z?cg-y=%N^#Vi#2{2.,b' );
define( 'SECURE_AUTH_KEY',  'JOddo`9<KJ4ju>7a<tk`x]r <DlJsFZ1-dG?7y@fJlXny=&@<;KADqh};KSut~;{' );
define( 'LOGGED_IN_KEY',    'C+&J4at[*dbQ5z-&W#fTgXGe*y=TBcOB*}ZVKEP^=VI5SeOo7dU_ToG@D$$$hlU(' );
define( 'NONCE_KEY',        '#yK0BAq?P]1a@*ZU/|%7u6M:-1ZZLw5mtX9,Fh~-A0Z>CmFN(7G&t.-Tm.CMe/T^' );
define( 'AUTH_SALT',        ']i>-Pt4Dv[:Vxu}w3@2AIhPGj~mo}%0.Vw8bkYyZxd3Oc)MA_z4B?~i59m9vvxLu' );
define( 'SECURE_AUTH_SALT', '1(Ku}%xUfo vWq3?JW&]M#,7N{PWV4MZciib)S7ktdVC!G@A]O2(.]FC |cY-]A<' );
define( 'LOGGED_IN_SALT',   'm5T55*gLu|a8{[98 ZiI~9W1Q9o^&?zA;q2Kb@#Y3!=26P&O}y~acKlK}.,E<c@;' );
define( 'NONCE_SALT',       '<L:S,t, Qflb&nPa$ShK9.X.6E5{6b(3I/lBNt)un|p@fiAAbZM4A&JY(TAjO/lm' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
