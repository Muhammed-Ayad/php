<?php
include_once("includes/header.php");
include_once("includes/functions.php");



if(isset($_POST['submit'])){

 
  $title =clean_text($_POST['title']);
  $content =$_POST['content'];
  $active =(int)$_POST['active'];

  
// print_r($_POST);
// die();

  $q="INSERT INTO pages (title,content,active) VALUES ('".$title."','".$content."',".$active.") ";
  $reuslt=$db->query($q) or die($db->error);
  if($reuslt){
    echo "تم اضافة الصفحة";
  }

}else{
?>

<form action="" method="post">
<table id="addarticle" width="600px">

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
 المحتوي :
		</td>

    <td id="addarticle">
 <textarea name="content" rows="10" cols="30">
 
 </textarea>
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
    
 <input type="submit" name="submit" value="اضف صفحة">

		</td>
	</tr>

  </table>
</form>
<?php
}
?>


<? include_once("includes/footer.php");?>