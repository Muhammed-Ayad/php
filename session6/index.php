<?php

function salam($name){
	echo "Al Salam Alikom {$name}";
}

salam('Ibrahim');

function sayhello($name){
	$var2="Welcome {$name}!";
	echo trim($var2);
}

$name='Mohamed';
sayhello($name);