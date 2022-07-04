<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'priskbd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U<K]{. I rCo}Dm_Om~5gNv-L1I*R<t]*5=`^VRHQ[K DVHsq_.Zfgc]dTE@a.8I' );
define( 'SECURE_AUTH_KEY',  'DrgY$~2}^@w]]c;{4T7{X$VgamO]mk}wPPmYYj;wa<J%DYZe2(c@3S{_m@-qx/;q' );
define( 'LOGGED_IN_KEY',    ';qlhZCj?,t#=tbo:_O8aKA%M!__StI,2vH;f:+Wjv=4n3SJIisW)F&?>;)#rArbf' );
define( 'NONCE_KEY',        'S^>,vO}o`,g{=<NN;G![FOQ8.o5GjLP`fU>j}YME*4<MBzx(Tt4<g{`9_M^3J!K3' );
define( 'AUTH_SALT',        '<d7FU@e|Q0!H8WNY7hh@7pmV<?[m{xu#bfvd$dov@v :z<~OYYJ#iiriJO*M#LVY' );
define( 'SECURE_AUTH_SALT', '#H95u08#)<BONV6&pk0TBEIC[vaOTqX?1wL.Dz_OULl5K:(Qpn]A0R;tsYOq2e@O' );
define( 'LOGGED_IN_SALT',   'h36yhrK=#PbyBBTBl}9n(Y$C.L2JiUvOIpV^~sy0Ulme){of?E=F4qp%=IB=V~RA' );
define( 'NONCE_SALT',       'VDLWl<W8c ?1i^U/EwHLkTrXX^Vl~{e.jqDWbKueURtRO9_!R64.y7W(JXS952id' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
