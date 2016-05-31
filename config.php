<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
$home = __DIR__;
$route = __DIR__;
$homeurl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = $homeurl.'/../../';