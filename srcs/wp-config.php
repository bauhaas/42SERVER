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
define( 'DB_USER', 'user42' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'user42' );

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
define( 'AUTH_KEY',         'SSbr>E+{ofoiXV7v7bZ>}c}0)?Yh-B*_IZ=4&&:9fuE(K2~9R]I>O;;#r5/+Tgr!' );
define( 'SECURE_AUTH_KEY',  'Tso3Nx,=c*_%8^[bZ[Jh$)A7LKb,jJ)Y#^s(HiFe$O>^mD0HKx.N$+vc~G(*6gWb' );
define( 'LOGGED_IN_KEY',    'u/5mwcZ8Y[K1B~c)8^F/.T*zjc*r*8)elcS8Z7yAs3^S^}2Nxm(l1Poz*o><=-2X' );
define( 'NONCE_KEY',        'oZ5SEg*g23vK2iwc)MVb!ON.kePA0noP56o=;x5Yz7C3qEac<h}p*yx&mE/?|,)H' );
define( 'AUTH_SALT',        'qn?0Mn([F3<XeO$x]EM`{9Q{RiQ4mco4@30^?ySKowqaA]a_zT!xkp.Rp=;z4ilz' );
define( 'SECURE_AUTH_SALT', '#XcMK&5:%$4fG[WAw[{}QSwseD~Aj&n<fp$/!tqR3t{#{0^KGVzco#K+:9TJdN)0' );
define( 'LOGGED_IN_SALT',   '=Wq6Fk=heZ4H?p5?:V3j=?(4nJJBONf)lfUEp.;=e$3$Jl,.[r#@q`~L7Vs0pu$E' );
define( 'NONCE_SALT',       'UgI[=( Ec)M#kVYRrLu[1C:>CP%}gv/z6cJs61%8LkrGTL}PKjw5gY||B Ve96P,' );
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

