<?php

if(!isset($_GET['typ']))
	$_GET['typ']='rest';

$_REQUEST = $_GET;

//ini_set("display_errors","1");

$gtfw_init_dir = GTFW_BASE_DIR . 'main/init/' . basename(__FILE__, '.php') . '/*.php';

foreach (glob($gtfw_init_dir) as $value) {
	require_once $value;
}

?>
