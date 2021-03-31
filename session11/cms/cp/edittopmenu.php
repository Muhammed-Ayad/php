<?php
include_once("includes/header.php");
?>
<br />
<?php

			//  الخطوة الاولي لو المستخدم ضغط علي الزرار  احفظ التعديلات اللي دخلت 
			// ولو مضغطش اعرض الفورمة فيها المقالة اللي عاوزها عن طريق اي دي
if(isset($_POST['submit'])){
	$name=clean_text($_POST['name']);
	$title=clean_text($_POST['title']);
    $link=(int)$_POST['link'];
	$active=(int)$_POST['active'];
	$id=$_POST['id'];
	$q="UPDATE  topmenu SET
		name='".$name."',
		title='".$title."',
        link=".$link.",
		active=".$active."
		WHERE id=".$id;	
	$reuslt=$db->query($q) or die($db->error);
	if($reuslt){
		echo "<br /><br /><br /><br />";
		echo "تم التعديل بنجاح";
		echo "<br />";
	}else{

		echo 'error';
	}
	//المعلومات اللي جاية من الاي دي  وبعدها نحط البيانات في الامكان بتعتها 
	//العمود الخاص بالمنيو ......
}else{
$menuid=(isset($_GET['id']))?(int)$_GET['id']:0;	
	$q="SELECT * FROM topmenu WHERE id=".$menuid;
	$reusltmenu=$db->query($q) or die($db->error);
	if($reusltmenu->num_rows==1){
	$rowmenu=$reusltmenu->fetch_object();
?>
	
<br />
<form action="" method="post">
<table id="addarticle" width="600px">

	<tr>
		<td id="addarticle">الاسم :</td>

		<td id="addarticle"><input type="text" name="name" value="<?php echo $rowmenu->name;?> "></td>
	</tr>

	<tr>
		<td id="addarticle">العنوان :</td>

		<td id="addarticle"><input type="text" name="title" value="<?php echo $rowmenu->title;?> "></td>

	</tr>
	<tr>
    <td id="addarticle">الصفحة :</td>

		<td id="addarticle"><select name="pages">
<?php

// وبعدها اعمل تكرار للصفحات 
$q="select id,title from pages where active=1 ";
$reuslt=$db->query($q) or die($db->error);
if($reuslt){
  while($row=$reuslt->fetch_object()){
?>
<option value="<?php echo $row->id ;?>"<?php if($rowmenu->link ==$row->id){echo "selected='selected'";} ?>><?php echo $row->title ;?></option>
<?php
  } 
}else {
  echo "this psge is not here";  

  }

?>
 </select>
	<tr>
		<td id="addarticle">مفعلة :</td>

		<td id="addarticle">نعم : <input type="radio" name="active" value="1" <?php if($rowmenu->active==1) {echo "checked='checked'";} ?> >
		&nbsp;&nbsp;&nbsp;&nbsp; لا: <input type="radio" name="active"
			value="0" <?php if($rowmenu->active==0) {echo "checked='checked'";} ?>>
			
			<input type="hidden" name="id" value="<?php echo $rowmenu->id;?>">
			</td>
	</tr>
	<tr>
		<td id="addarticle"></td>
		<td id="addarticle"><input type="submit" name="submit"
			value="حفظ التعديلات"></td>
	</tr>


</table>

</form>
<?php 
	
}else{
	echo "الصفحة التي تريدها غير موجودة";
}
?>


	<?php
}
?>

<? include_once("includes/footer.php");?>