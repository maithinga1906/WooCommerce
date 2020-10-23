<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'woocommerce' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|R(b*opj}&Yz3F(_+T6>1-]jcFDLd)4~R__VXMfXpz2~S4nq$zy[cGS?@N$App5 ' );
define( 'SECURE_AUTH_KEY',  '3<LfbM?5*uL?p?&xVV,d.XW6Syz6!j-A_zy.-k0lF:g|;S2%ltah*;HYI[O8Nj3W' );
define( 'LOGGED_IN_KEY',    ';YX8Wc)=*0/!e Et;0MWBM4En(54p1Go6p/K0QlOunJ>UV)>2JVGi*4^zI!t%go|' );
define( 'NONCE_KEY',        'LPaF[d/aMi/+{F)IPf_HeD>;=8JZ:,60[Q7Xztb1@v)9] ajd?i-2F%o4U941QGy' );
define( 'AUTH_SALT',        '6-@&X>v[$N_0$S|baq?Uc.{UzQxK2f:g*FPy|wMUX>yUqix|RRr|}gFqR?`uTLcQ' );
define( 'SECURE_AUTH_SALT', 'l~lr5~+PauJ])s;>Ao13-x8xX`3 d[}H$,>qZs}K%<V:DH]QTK/%?:(k<?4t_X|E' );
define( 'LOGGED_IN_SALT',   'QbG^+;my2=6sQE#RLm-7ev=-#zq(vkHCh84;ZNP:=Uw?Hj`gypE@6M3F6sz7RSPe' );
define( 'NONCE_SALT',       '<9>i4Kc8HsFL[`H_P{Zhk ]0$(mUC.CgxDE:zXmOw,D+uQ3noURPK47Nme3 $.Au' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
