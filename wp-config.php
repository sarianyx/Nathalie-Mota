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
define( 'DB_NAME', 'mota' );

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
define( 'AUTH_KEY',         'n^]5}vpe9>s48ky9BtkLo`DtL$?G@5O42,8)RlMYJvy=}ttcW6X2QIKaseob@INa' );
define( 'SECURE_AUTH_KEY',  'Y[r#}*N)<-waR>5-ybdI}c*lZ%>F@nsh l-$W7wR`%bYv?zbyLoda|[(%ok~#NVq' );
define( 'LOGGED_IN_KEY',    'c%T><3Hm2+HR}%sm^upDvQB,1jIe{N~oSwmPw,`A3(]L7S6^SNA({d:Iy&6v}R5 ' );
define( 'NONCE_KEY',        'T`qv}l/JHC7Cej*@;1wcQDZR}0AnM%FyYfwnO/UhfGnHifG2[8ve8I.OfXzwQy,-' );
define( 'AUTH_SALT',        '9c$g2[/k:yTmzl13-.qwdsQ,m,RbFt=lwlf1_~xLU_4&dsTY;2{O[]C#g Jn/G=F' );
define( 'SECURE_AUTH_SALT', 'T~:pY<=Cv;InRL:J8t|DO#KE.k>WXW9VG7!+f*aUdL)>*qvhTva$@3c@csm v++T' );
define( 'LOGGED_IN_SALT',   'r8E[?7R*>@BZ{~!OH2b[:o3Rj{3!n}O8MXip~ttXtNgkA.M}+eO0R~c-`EA33w@=' );
define( 'NONCE_SALT',       'i{8u7+3V]TMoPq]j>Vf=Fm<.+C[aYD1-j|QhT%yJdN&yE,)qUbnG|Ph(U!f{ML`=' );
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
