<?php session_start();

require_once "captchar.php";

$captchar=new Captchar();

$code = $captchar->get_and_show_image();

$_SESSION['captchar_code']=$code;