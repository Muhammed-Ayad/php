<?php
include_once("includes/header.php");
include_once("includes/functions.php");



if(isset($_POST['submit'])){

  $title =clean_text($_POST['title']);
  $img =$_POST['img'];
  $details =clean_text($_POST['details']);
  $shortdesc =clean_text($_POST['shortdesc']);
  $price =$_POST['price'];
  $active =$_POST['active'];
  $date =$_POST['date'];
  $viewnum =$_POST['viewnum'];

  $q="INSERT INTO products (title,img,details,shortdesc,price,active,date,viewnum)
   VALUES 
   ('".$title."','".$img."','".$details."','".$shortdesc."',".$price.",".$active.",".$date.",".$viewnum.") ";
  $reuslt=$db->query($q) or die($db->error);
  if($reuslt){
    echo "تم اضافة المنتج";
  }

}else{
?>

<form action="" method="post">
<table id="addarticle" width="600px">

<tr>
		<td id="addarticle">
 الاسم :
		</td>

    <td id="addarticle">
 <input type="text" name="title">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 الصورة :
		</td>

    <td id="addarticle">
 <input type="text" name="img">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 الوصفة :
		</td>

    <td id="addarticle">
 <input type="text" name="details">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 الصنف :
		</td>

    <td id="addarticle">
 <input type="text" name="shortdesc">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 السعر :
		</td>

    <td id="addarticle">
 <input type="text" name="price">
		</td>
	</tr>
  </br>
  <tr>
		<td id="addarticle">
 التاريخ :
		</td>

    <td id="addarticle">
 <input type="text" name="date">
		</td>
	</tr>
  </br>
  
  <tr>
		<td id="addarticle">
 عدد المشاهدات :
		</td>

    <td id="addarticle">
 <input type="text" name="viewnum">
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
  <tr>
		<td id="addarticle"></td>
		<td id="addarticle"><input type="submit" name="submit"
			value="اضافة منتج جديد "></td>
	</tr>

  </table>
</form>
<?php
}
?>


<? include_once("includes/footer.php");?>