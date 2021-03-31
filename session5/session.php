<?php
error_reporting(E_ALL);

session_start();

$_SESSION ['mao'] ='101232';
$_SESSION ['ah'] ='554556';


echo $_SESSION['mao'];
echo"<br/>";

print_r($_SESSION);