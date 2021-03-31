<?php
include_once("includes/header.php");
?>
<br />
<?php
if(isset($_POST['submit'])){
	$name=clean_text($_POST['name']);
	$title=nl2br($_POST['title']);
    $link=nl2br($_POST['link']);
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
		
	}
}else{
$id=(isset($_GET['id']))?(int)$_GET['id']:0;	
	$q="SELECT * FROM topmenu WHERE id=".$id;
	$reuslt=$db->query($q) or die($db->error);
	if($reuslt->num_rows==1){
		while($row=$reuslt->fetch_object()){
?>
	
<br />
<form action="" method="post">
<table id="addarticle" width="600px">

	<tr>
		<td id="addarticle">الاسم :</td>

		<td id="addarticle"><input type="text" name="name" value="<?php echo $row->name;?> "></td>
	</tr>

	<tr>
		<td id="addarticle">العنوان :</td>

		<td id="addarticle"><input type="text" name="title" value="<?php echo $row->title;?> "></td>
		</td>
	</tr>
    <tr>
		<td id="addarticle">الصفحة المتصل بها</td>

		<td id="addarticle"><input type="text" name="link" value="<?php echo $row->link;?> "></td>
		</td>
	</tr>
	<tr>
		<td id="addarticle">مفعلة :</td>

		<td id="addarticle">نعم : <input type="radio" name="active" value="1" <?php if($row->active==1) {echo "checked='checked'";} ?> >
		&nbsp;&nbsp;&nbsp;&nbsp; لا: <input type="radio" name="active"
			value="0" <?php if($row->active==0) {echo "checked='checked'";} ?>>
			
			<input type="hidden" name="id" value="<?php echo $row->id;?>">
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
}
}else{
	echo "الصفحة التي تريدها غير موجودة";
}
?>


	<?php
}
?>

<? include_once("includes/footer.php");?>