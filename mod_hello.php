<?php 
defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';
$output = myoutput::helloout($params);
require JModuleHelper::getLayoutPath('mod_hello');
?>