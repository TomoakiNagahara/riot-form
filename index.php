<?php
/**
 * cctokyo:/admin/cms/plan/make/riot/form/sindex.php
 *
 * @creation  2017-04-08
 * @version   1.0
 * @package   cctokyo
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $this CCTokyo */

//	...
$this->SetMime('text/plain');

//	...
$list = array('text','textarea','radio','checkbox','select','pre');
foreach($list as $path){
	include("{$path}.riot");
	echo PHP_EOL;
}
