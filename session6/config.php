<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$host='localhost';
$username='root';
$password='';
$dbname='test';
$db= new mysqli($host,$username,$password,$dbname) or die('can not connect to the database');
