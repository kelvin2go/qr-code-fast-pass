<?php
if (!function_exists('url_fb')) {
    function url_fb( $url = 'http://zonmine.com'){
        return 'https://www.facebook.com/sharer/sharer.php?u='. rawurldecode($url);
    }
}
if (!function_exists('url_gp')) {
    function url_gp( $url = 'http://zonmine.com'){
        return 'https://plus.google.com/share?url=?url='. rawurldecode($url);
    }
}
if (!function_exists('get_qr')) {
	function get_qr( $data = 'http://zonmine.com',  $title = 'Zonmine | Dig the Amazon Mine, best pick products for you', $width = 200, $height = 200 ) {
		$base_path = 'https://chart.googleapis.com/chart?';
		$type = 'qr';

		if ( empty($data) ){
			$data = 'http://'.$_SERVER['SERVER_NAME'];
		}
		if ( empty($title) ){
			$title = $_SERVER['SERVER_NAME'];
		}
		$param = array(
				'cht' => $type,
				'chs' => $width.'x'.$height,
				'chl' => $data,
				'choe' => 'UTF-8'
		);

		$url = $base_path.http_build_query($param);
		return '<img src="'.$url.' title= "'.$title.'"/>';
	}
}

if (!function_exists('get_fb_qr')) {
	function get_fb_qr( $url = NULL ){
		return get_qr( $url? url_fb( $url ) : url_fb() );
	}
}
if (!function_exists('get_gp_qr')) {
	function get_gp_qr( $url = NULL ){
		return get_qr( $url? url_gp( $url ) : url_gp() );
	}
}
