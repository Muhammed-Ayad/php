<?php
include_once("includes/header.php");
include_once("includes/functions.php");


//  الخطوة الاخيرة بنخزن البيانات اللي المستخدم دخلها في النموذج في متغيرات
//   ونتاكد لو هي صح لو صح نعمل اضافة في قاعدة البيانات الخاصة بجدول القائمة العلوية 
if(isset($_POST['submit'])){

  $name =clean_text($_POST['name']);
  $title =clean_text($_POST['title']);
  $link =(int)$_POST['pages'];
  $active =(int)$_POST['active'];

  $q="INSERT INTO topmenu (name,title,link,active) VALUES ('".$name."','".$title."',".$link.",".$active.") ";
  $reuslt=$db->query($q) or die($db->error);
  if($reuslt){
    echo "تم اضافة القائمة";
  }

}else{

               // <!-- الخطوة الاولي عمل نموذج بداخله جدول ليكتب فيه المستخدم -->
  ?>
<form action="" method="post">
<table id="addarticle" width="600px">

<tr>
		<td id="addarticle">
 الاسم :
		</td>

    <td id="addarticle">
 <input type="text" name="name">
		</td>
	</tr>
  </br>
  <tr> 
		<td id="addarticle">
 العنوان :
		</td>

    <td id="addarticle">
 <input type="text" name="title">
		</td>
	</tr>
  </br>
  <tr> 
		<td id="addarticle">
 الصفحة :
		</td>

    <td id="addarticle">

                 <!-- الخطوة الثانية القائمة المسدلة ودي بتيجي من جدول الصفحة  -->
 <select name="pages">
<?php
$q="select id,title from pages where active=1 ";
$reuslt=$db->query($q) or die($db->error);
if($reuslt){
  while($row=$reuslt->fetch_object()){
?>
<option value="<?php echo $row->id ;?>"><?php echo $row->title ;?></option>
<?php
  } 
}else {
  echo "this psge is not here";

  }

?>
 </select>
		</td>
	</tr>
  </br>
  <tr> 
		<td id="addarticle">
 مفعلة :
		</td>

    <td id="addarticle">
    نعم :
 <input type="radio" name="active" value="1">
 &nbsp; &nbsp; &nbsp;
 لا :
 <input type="radio" name="active" value="0">
		</td>
	</tr>
  <rt>
  <td id="addarticle">
    
   
       </td>
  <td id="addarticle">
    
 <input type="submit" name="submit" value="اضف قائمة">

		</td>
	</tr>

  </table>
</form>
<?php
}
?>


<? include_once("includes/footer.php");?>