<?php
include_once("includes/header.php");
?>

<?php

//لو في بيانات في جيت 
$id=(isset($_GET['id']))?(int)$_GET['id']:0;
if($id==0){
 	echo "error";
}else{
	
	$q="SELECT id FROM topmenu WHERE id=".$id;
	$reuslt=$db->query($q) or die($db->error);
	if($reuslt->num_rows ==1){
	$q="DELETE FROM topmenu WHERE id=".$id;
	$reuslt=$db->query($q) or die($db->error);
	if($reuslt){
		echo "<br /><br /><br /><br />";
		echo "تم حذف القائمة بنجاح";
		echo "<br />";
		//echo "رقم القائمة التي قمت بإدخالها هو :",$db->insert_id;
	}else{
	echo "لم يتم حذف القائمة";
}

	}else{
		echo "القائمة غير موجودة";
	}
}

?>




<?php include_once("includes/footer.php");?>