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
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#!8RAPMG]D1v2IHxa@GW:n,uyHG1F|]g@4LFJKC+g<T(*.|^uEQa@Z1C _K;3>Xx' );
define( 'SECURE_AUTH_KEY',  'WUv5lU]S6sy#cxzaj8{=cv6;:.hf (]ifGY<d`2sS@pp.*S99c*v1`)2%&ER@f=:' );
define( 'LOGGED_IN_KEY',    '- %+zc<B2k??vp>ONHr AKv&TaR[8pPD*HAz4{4P.H8Zp%}*PL-G/}`GR$59OyW}' );
define( 'NONCE_KEY',        '4kN(AhXUyj<_yl^8$nb}SF?VN ZifVfx+r%aAHae8C&GHc=/P>wSmEts:%T^j*{V' );
define( 'AUTH_SALT',        '7S+2N$d>GlZ%K5j#h*fY5yKMF^3y8?Q1t8N8v_]&pcc?PiY=F-[3@uJ4]O5ko]#s' );
define( 'SECURE_AUTH_SALT', 'uJQJV2.-E,?ueLK9u?Ce.:i^W%0gTUa|u-w7[W6c#LCO6p:6;^)2~0.LTm-|h/`G' );
define( 'LOGGED_IN_SALT',   '-cpg {^}V%q6kz-@oV#Qk;w{TYS=;G;}$keb;=ooQ,5NR^%szJfL)I#7^PZ`<^!C' );
define( 'NONCE_SALT',       '!yS/XfgWV_Bk~U6FM:2YMY:zp}z)o/;Np?22;I&WBy0to#rluVU-rlgh&>8E*}/^' );
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
