<?php
include_once "includes/config.php";
include_once "includes/header.php";
include_once 'includes/functions.php';


$q="select * from gbook where active=1";
$reuslt=$db->query($q);

while($row=$reuslt->fetch_object()){
    

?>
<table dir="rtl" border="2" width="40%">
<tr>
<td>
الإسم
</td>
<td>
<?php echo clean_text($row->name);?>
</td>
</tr>
<tr>
<td>
الإيميل
</td>
<td>
<?php echo clean_text($row->email);?>
</td>
</tr>
<tr>
<td>
التعليق
</td>
<td>
<?php echo clean_text($row->massage);?>
</td>
</tr>

</table>
<?php
}
?>

<br /><br /><br />
<div id="massage">
<form action="" method="post">
<table dir="rtl">
<tr>
<td>
الإسم: <input type="text" name="name" />
</td>
</tr>
<tr>
<td>
email: <input type="text" name="email" />
</td>
</tr>
<tr>
<td>
التعليق: <textarea name="massage" rows="10" cols="30" >

</textarea>
</td>
</tr>

</table>
<br />
<input type="submit" name="submit" value="أضف التعليق">
</form>
</div>
<?php

if(isset($_POST['submit']) && !empty($_POST['name'])){
	//print_r($_POST);
	//die();
	$name=clean_text($_POST['name']);
	$email=clean_text($_POST['email']);
	$massage=clean_text($_POST['massage']);
	$active=1;
	$query="INSERT INTO gbook (name,email,massage,active) VALUES ('".$name."','".$email."','".$massage."',1)";
	$reuslt=$db->query($query);
	if($reuslt){
		echo "تم إرسال التعليق بنجاح";
	}else{
		echo "هناك خطأ ما";
	}
	
}
?>
<?php
include_once "includes/footer.php";
?>