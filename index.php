<?php
ini_set('display_errors', 'On');
error_reporting(error_reporting() & ~E_NOTICE);

if (!session_id()) session_start();

require_once 'app/init.php';

$app = new App;
