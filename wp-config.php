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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1k,z{6n/OMEJ&AHL(ouMM-(}WA`Jw[%&3eEza;P /uKg?F@R}IT#f~<kj?x )Q-w' );
define( 'SECURE_AUTH_KEY',  '$/9ufQEXw(%)cFId~B.3;*_<>Hl}v1a@@IBMAZGQQ8==^A9u*9LxvEvm@K?=-8d*' );
define( 'LOGGED_IN_KEY',    'V:1+G6^m=R8n&C|zOS-*ck#]w]!h/T:U/?yh?BU+(j+3Ix$dAMZ9%^C1-tE}i{?$' );
define( 'NONCE_KEY',        'jc(y#j[FE^Cz@!)V/)2=pv0:l!NGbKuyvFt@$`,7Lg)pLu.{$-Px2eGAy( *WGaA' );
define( 'AUTH_SALT',        'cBE%1XhEN%}s)ir=>=%X,-<QWE|TYNP}AE-78.Wv]<KMR?1_;?n^C4Fu-BxJy5O(' );
define( 'SECURE_AUTH_SALT', 'xXR&@b]v+aya. 4%k5CcgfA;T<->Lq{|!d:X?O}fLk2I3Oy{QP-7Vo5J+Iy]E-2S' );
define( 'LOGGED_IN_SALT',   'srZZa(_VS3A9g36os/BHH@G3Sx:DZZ&T13nWkOkiI)_splhB/mTr/RGei#kbSa,.' );
define( 'NONCE_SALT',       'OGsYrtwEuYKdnN809_Zh|.xV%W2h<5[Nae+O4K<~7(X#0*uHQ-=_c$zc}f%GCGw.' );
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
