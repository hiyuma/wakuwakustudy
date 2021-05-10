<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'developershirai_wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'developershirai_wordpress' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '080Marlboro' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rW,po$LkdT`(:]Qk:P*!aZYJqtdvVGj-2[{Jk4%*lhxquAtm5%,65(fW=W(HX##G' );
define( 'SECURE_AUTH_KEY',  'aRA|G]q9AvOGOvk36?j&}0|l3koEE8e6B+Tt*cH|}iD>T8f{}P|D-2ME9<8V/&Y<' );
define( 'LOGGED_IN_KEY',    '4+d^B>w[4=:Cgjbp@ M3}IMQ4r_vZh-0pNoPysO<#7V#KCv$#8xOe;)NF@I+,QrZ' );
define( 'NONCE_KEY',        'jR[mH_icDrPk*0o+@3{Z@Og_v{91k)b-b*b;_Z <ZP,kG@x7Q1uQwAkzA_W#MD=h' );
define( 'AUTH_SALT',        'Px)FMl;Ev_pcw)g7t7&xad>yzni`d TA:Nb%_:y5u$QJP,g(iAO/XR]bHt7;)+5i' );
define( 'SECURE_AUTH_SALT', '#o;>T I068Lb;|n=qoN/4Qj#uK+&a.;0YI@q-,pwtH{YHMZbis=PmS42[X&yKSzJ' );
define( 'LOGGED_IN_SALT',   'j&0Z-F(VeKww4,`C[3rl:.n7c`WsP&G]Wz@h.ay4?95XK^]Bs$TTw=?UE58Sh.!}' );
define( 'NONCE_SALT',       'k,p9Z_a7PFnhBkmRED}&hh8)*wp%aXKFQ0GZhRJ_b)$Th2S4DK=i`z .)]C]YXi=' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
