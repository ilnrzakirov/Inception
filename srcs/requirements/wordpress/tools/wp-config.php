<?php
define( 'DB_NAME', '$DB_NAME' );
define( 'DB_USER', '$DB_USER' );
define( 'DB_PASSWORD', '$DB_PASSWORD' );
define( 'DB_HOST', '$DB_HOST' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define( 'WP_ALLOW_REPAIR', true );
define('AUTH_KEY',         'P+iSzr[UqzX%X?-&LLp>o*+-Pv!Ey7NEbUC8ZpX~QQCZt|T4-wZgIi,y]U}2)9@&');
define('SECURE_AUTH_KEY',  'G;3gcA~z?c-1{M|x]9VH7C)+.j{sApuCVt1p(d4I,C:F>bk(vVtI_C 5+66kyA5k');
define('LOGGED_IN_KEY',    'K6P4*O@Z!; <-|$wPec5k---]vUn}mZc~W`KGPOy&KU;K_mCxzi%|50VZt#)}do[');
define('NONCE_KEY',        '1):.HLGgU285WL,+)E[@r%@_%6Q|c@G|oIN1!:9g.dYZ<Ypr7^:on4}k-E!R1+4=');
define('AUTH_SALT',        'Qerb.20TeXhuIujem3!lyMnqpk~l&a5!O0S~aTo5q~4g-jxsk!ZsRsi&0Zq1#4.|');
define('SECURE_AUTH_SALT', 'r?<V-zG}_1 CC71P9~x=i{I%h<gIsucK-U QBRvtp3+ix.LK>Y;8T0KgS|d|,@_&');
define('LOGGED_IN_SALT',   'G+=B-CeHg[YZwJ.35**{5e8$vgIz2C}q,qScr5RKzmEX2|QP<|e}^CZ48Eb#tY@&');
define('NONCE_SALT',       'ND&oMhI0vS8EN8IJ]tB*1|-i[eafNv?63Xv+Mxw!%n9I+USi*w=0.22<yxKoVuoP');
$table_prefix = 'wp_';
define( 'WP_DEBUG', true );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
?>