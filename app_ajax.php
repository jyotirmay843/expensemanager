<?php
require_once 'app_ang_library.php';
$action = $_GET['action'];//echo 'coming';
//$actions = $_GET['action'];
switch ($action) {
	case 'get' :  echo get_all_expenses();
	break;
}