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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '$zq9-f7A!H!c:ZPS2f.{O`&i#~Tx+/C7GO%[E:Tt*k[I)c#ifGj4*7~OE6n+4.Vb' );
define( 'SECURE_AUTH_KEY',  'Op*L3F$<M7v/J/O=Qr1K?Eu<s%WuVpl->Alyyz?;|JN N1(e:Z`;ai1#OmoE*c29' );
define( 'LOGGED_IN_KEY',    'ofnkg*J;rIum>y249nE3V#=GJ79NXIvxd;ETZOIwS#@W&Iuo1#z/MBw40:}.M$Zy' );
define( 'NONCE_KEY',        'R@.*_bZ4wg!Cd%E1M5=+S%A)j+1ecE@#s|pzXPdYu*J5SRHK}9@y<FaOeV>fJ?;1' );
define( 'AUTH_SALT',        'q#+2yjpq~xTNwO%wf}-^;&KdC(&D3#fSOq<*.V!VHpmb*z/.IwsD(}=-kL:>u, 5' );
define( 'SECURE_AUTH_SALT', ' CFX(}>aT0sQzsRD[#;o;..t{QDhr#rDL8+?ZGFpA%<XALSj? am5];,)91d]+Kx' );
define( 'LOGGED_IN_SALT',   'QL@@9?g[`X!TZMA3ND8go$z#K73sC<Jn~xS,9n`(7Er&1A:C_E6;A~GF5~cke[nG' );
define( 'NONCE_SALT',       '<lkMk;$A.|D+K9)Fc`7}oL[T*URqF1l U1os7J$J9]<EbbV>sYYC5^43v6i*.hSC' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_ahmed';

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
