<?php
/**
 * riot-form:/css/index.php
 *
 * @creation  2017-05-24
 * @version   1.0
 * @package   riot-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$theme = 'theme-'.isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING']: 'default';

//	...
$extension = 'css';

//	...
$files = array('riot', $theme);

//	...
include(__DIR__.'/../webpack.php');
