<?php
defined('IN_TS') or die('Access Denied.');
/*
 *包含数据库配置文件
 */
require_once THINKDATA."/config.inc.php";

$skin = 'default';

$TS_APP['appname'] = '文章';

/*
 * APP独立数据库配置
 */
/*
$tsAppDb['sql']='mysqli';
$tsAppDb['host']='localhost';
$tsAppDb['port']='3306';
$tsAppDb['user']='thinksaas';
$tsAppDb['pwd']='123456';
$tsAppDb['name']='thinksaas';
$tsAppDb['pre']='ts_';
*/