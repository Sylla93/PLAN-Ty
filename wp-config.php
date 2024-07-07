<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Plan-ty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Sylla' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Kaka20112015@' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'p4kaXGIUaL3r,j]t?T<>@jea+]on2C4=Th<}YhNuLy)uD!Uu>@j-y@i.:OiS^D#,' );
define( 'SECURE_AUTH_KEY',  '1?pfHFKDFTKQcw>{[d7d+*:x]1?-Q~sYtdD-d%RPo2.+s|@)6|?rAZAVe{u3.*T)' );
define( 'LOGGED_IN_KEY',    ']qlzVX!ZFzHK5fgq}0Xm_H[X+Or/nL lxgHiOU7#>wU=4?G_0BjS?6vVuX@;|xsZ' );
define( 'NONCE_KEY',        '2BJ61u`CW9x/xl&nE@%MTtM@8Urw(rkjh[Hf.o/)B525/uRbV+oWy?gi|,v.U`nN' );
define( 'AUTH_SALT',        'R%F641>!!!o}^%%z=$ct)?`^R-;VvY=E5]dklo>-]/Ld@{xAg3`x9Mkr7CZCH+ab' );
define( 'SECURE_AUTH_SALT', ')F+#`*]NLnIF6j9.@b4{wJJNz<7CEGJ&nQi3!:X_.7gP$D.rT3a!54?2BPK-@:TQ' );
define( 'LOGGED_IN_SALT',   'he|g0?=G@@`UWRpss0}hU@EH1|W9v?.DI^yWJ-qSzFU,|Dx3zcnC V|:6E $`r8i' );
define( 'NONCE_SALT',       '_y588z6+BvV$W(9&vC9ce{tbF@rr!2_88Y3il:&8i/jjRlROoPI=K!6Po3K0npZV' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
