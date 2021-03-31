<?php
include_once 'config.php';
$q="update * from ahmed";
$reusit=$db->query($q);

while($row=$reusit->fetch_object()){
    echo "id: ".$row->id." ";
	echo "name: ".$row->name." ";
	echo "age: ".$row->age." ";
	echo '<br />';
}

