<?php
	$host="localhost";
	$user="root";
	$password="";
	$dbname="products";
	$db= new mysqli($host,$user,$password,$dbname)or die('can not conenct') ;
	$db->set_charset("utf8");
?>