<?php
/**
 * riot-form:/webpack.php
 *
 * @creation  2017-05-24
 * @version   1.0
 * @package   riot-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
$charset = isset($charset) ? $charset: 'utf-8';

//	...
$extension = isset($extension) ? $extension: '';

//	...
switch( $extension ){
	case 'js':
		$mime = 'text/javascript';
		break;

	case 'css':
		$mime = 'text/css';
		break;

	default:
		$mime = 'text/plain';
}

//	...
if( isset($this) ){
	//	...
	if( method_exists($this, 'SetMime') ){
		//	...
		$this->SetMime($mime);
	}
}else{
	header("Content-type: {$mime}; charset={$charset}");
}

//	...
foreach($files as $file){
	$path = "{$file}.{$extension}";
	if( file_exists($path) ){
		include($path);
	}else{
		echo "/* Does not exists this file. ($path) */";
	}
	echo PHP_EOL;
}
