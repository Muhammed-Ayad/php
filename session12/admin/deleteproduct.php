<?php
include_once("includes/header.php");

//لو في بيانات في جيت 
$id=(isset($_GET['product_id'])) ? (int)$_GET['product_id']:0;
if($id==0){
    // var_dump($id);
    // die();
 	echo "error";
}else{
    
	$q="SELECT product_id FROM products WHERE product_id=".$id;
	$reuslt=$db->query($q) or die($db->error);
	if($reuslt->num_rows ==1){
	$q="DELETE FROM products WHERE product_id=".$id;
	$reuslt=$db->query($q) or die($db->error);
	if($reuslt){
	
		echo "تم حذف القائمة بنجاح";
		echo "<br />";
		
	}else{
	echo "لم يتم حذف القائمة";
}

	}else{
		echo "القائمة غير موجودة";
	}
}

?>




<?php include_once("includes/footer.php");?>