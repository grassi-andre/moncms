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
define( 'DB_NAME', 'moncms' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':9F&LR0?cM;}&(:Oj:~uU=FdHrBLv]/Ho).WFZ#&f*kMMbYf?q>>hfLjv!r {22r' );
define( 'SECURE_AUTH_KEY',  ',?_iXAX{Q_V(#)5skDpcZhd;*e-}>.}D]B_dlBytnvK%>o6F.%OEUz4Z{9?t$i4;' );
define( 'LOGGED_IN_KEY',    'rnyELRn-LlZmq5f[f-S$9$-}P#}.)Hh[K2%g:iTMYT{WN_u{%#_[6qb!r!fdwWR(' );
define( 'NONCE_KEY',        '7o#yQ9Syh#4>Eu`?l*&j#E^y]B#~hb5]O^gk,Fj} GB?da;v9O-z@wC vq{5yE*w' );
define( 'AUTH_SALT',        '`Pg@=N0t,ym*3u#SU3>~B;pZf94mpIIh2v3zpzurCT=p+^T #uFkGV3ZF1O*k0}/' );
define( 'SECURE_AUTH_SALT', '^Z^Jo->u<u58mk5Oo{0mS%GaZ;F6*a+LdN9awHnF?)).*D[`fIUL%!aT?E{?Pl-k' );
define( 'LOGGED_IN_SALT',   'X2e!.TP:Vly1q-|^lZlD*)bQ!Sm|&<(k>j~SCa5~dM`4[6Keb}7r_O0hC6A<Gz{L' );
define( 'NONCE_SALT',       '@;~b/}N4XvyYT{[c]Pde)(-nPON-LIO(!4J9F.2tAw&$II_C[W7b/@D[`A(H}dpy' );
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
