<?php
define( 'DB_NAME', '$DB_NAME' );
define( 'DB_USER', '$DB_USER' );
define( 'DB_PASSWORD', '$DB_PASSWORD' );
define( 'DB_HOST', '$DB_HOST' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define( 'WP_ALLOW_REPAIR', true );
define('AUTH_KEY',         'i]bUWxhPZkGIM#:VLDpbtii+]R8`)I77`>$S7pQ(Pl8}FR/+m^zROH[;H-mkcE,y');
define('SECURE_AUTH_KEY',  ')P]BsS=bHPcHgrdga)U99=M>/X,3;$6o};M!W0H%ovu(jAC}u|Nlz5K~u0_L^1>`');
define('LOGGED_IN_KEY',    't(DG;~3bK%]P8^XjVm- *VE6d<[PCG`ms/31IF,t]TuQQl5}q}b.qaEFbozW||%:');
define('NONCE_KEY',        'x?5oEFFj;.m@:[0,_v;;+OzKZI8%}HX4%xKQn$2!3rg/IRQ <mr,wq@a>;>a@`wv');
define('AUTH_SALT',        '3eN46588nHr%n-F%_ NooYpVOH7E-9x*K2t{-Y24Nq~Hy<22?JPL<CnxLtR_v8|u');
define('SECURE_AUTH_SALT', '8.H!~3 rfb|G[KI88FHUL%@,w/&QkjP6./gn*4b-C_lhg{+E1YP6+Pr+djFa7GuU');
define('LOGGED_IN_SALT',   ':bUH1^m3V9E~M;4-fR`;3c-]I%z<}8,&/|-|Us!FU*cpyDHhR*$V~>eNG:aQdBWd');
define('NONCE_SALT',       'reN)}+_iE9rksY0sakETSG}NJOO/RtG@!*?1s+k~n#*);]rx~Rew*KdPkYdBvbcW');
$table_prefix = 'wp_';
define( 'WP_DEBUG', true );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
?>