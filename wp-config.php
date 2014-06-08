<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'wp_h-bs');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', '');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

define("PATH_TO_CHILD_THEME", "http://r-bs.dev/wp-content/themes/r-bs");

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         'qfS{{r~C 7)L{1S3-VXV#I63]{ZlX2`&K9ngYfte0e}*-_S)U2|#(SHGSX+:((^@');
define('SECURE_AUTH_KEY',  '%2J@+ZzO$++.5*YRFZs5!3gq5}=.V@RoA)?mpiglu]y}9J@a0l-hF+r?vMO6!gvL');
define('LOGGED_IN_KEY',    '*b8W{In2Hn&SFj690C8YCnuyS&e>kXGVpn/$p+&qGGdk25D7;%d?kLG0Qymz?=D3');
define('NONCE_KEY',        'J{jJGJCiji1^>cnCvv3(/r9K@zlB)&B M=o/rh|JL@$Y --w{{5Y|+{EoY?s$4*,');
define('AUTH_SALT',        '$(N6) Z[HW@r26[ 4yHLa6Ov7vd6p|x7jFd3TciLKc<9&(1d&sn_8^37~} [x5,b');
define('SECURE_AUTH_SALT', 'PK~cu%P,LBUx9D|E&(Lkaq@#9eLw`, TO?/N|O4uKR2PP|C_k57$iM~Bd@ql3lp+');
define('LOGGED_IN_SALT',   '*8YM+]lZJ?< +JwL2>2:&)aZ%fR;y~KIO1@WN]{j@<9--`Q)-EL u-Q zpy*+@A{');
define('NONCE_SALT',       'v<1-Q:iT|M%vH)954[zzFi/& 1xPunvc@lT-m?L40B,ty2d[(0nF)XZLWPR-_R&X');

// define( 'WP_ALLOW_MULTISITE', true );

// define('MULTISITE', true);
// define('SUBDOMAIN_INSTALL', false);
// define('DOMAIN_CURRENT_SITE', 'r-bs.dev');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts einträgst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');