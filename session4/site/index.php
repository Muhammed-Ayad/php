<?php
include_once 'functions.php';
include_once 'header.php';
$page=$_GET['p'];
switch($page){
	case 'home':
	
		include_files('home.php');
		break;
	case 'blog':
		include_files('blog.php');
		break;
	case 'about':
		include_files('about.php');
		break;
	case 'contact':
		include_files('contact.php');
		break;
	default:
		include_once 'home.php';
}
include_once 'footer.php';