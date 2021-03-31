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
  $id=$_POST['product_id'];

  $q="UPDATE products SET
        title='".$title."',
		img='".$img."',
        details='".$details."',
		shortdesc='".$shortdesc."',
        price=".$price.",
        active=".$active.",
        date=".$date.",
        viewnum=".$viewnum.",
		WHERE product_id=".$id;	
  
  $reuslt=$db->query($q) or die($db->error);
  if($reuslt){
    echo "تم تعديل المنتج";
  }else{
      echo "error";
  }

}else{
    $id=(isset($_GET['product_id']))?(int)$_GET['product_id']:0;	
	$q="SELECT * FROM products  WHERE product_id=".$id;
	$reusltmenu=$db->query($q) or die($db->error);
	if($reusltmenu->num_rows==1){
	$rowmenu=$reusltmenu->fetch_object();
?>


<form action="" method="post">
<table id="addarticle" width="600px">

<tr>
		<td id="addarticle">الاسم :</td>

		<td id="addarticle"><input type="text" name="name" value="<?php echo $row->title;?> "></td>
	</tr>

<tr>
		<td id="addarticle">الصورة :	</td>

		<td id="addarticle"><input type="text" name="name" value="<?php echo $row->img;?> "></td>
	</tr>

    <tr>
		<td id="addarticle">الوصفة :	</td>

		<td id="addarticle"><input type="text" name="name" value="<?php echo $row->details;?> "></td>
	</tr>
    <tr>
		<td id="addarticle">الصنف :	</td>

		<td id="addarticle"><input type="text" name="name" value="<?php echo $row->shortdesc;?> "></td>
	</tr>
    <tr>
		<td id="addarticle">السعر :	</td>

		<td id="addarticle"><input type="text" name="name" value="<?php echo $row->price;?> "></td>
	</tr>
    <tr>
		<td id="addarticle">التاريخ :	:</td>

		<td id="addarticle"><input type="text" name="name" value="<?php echo $row->date;?> "></td>
	</tr>
    <tr>
		<td id="addarticle">عدد المشاهدات :	</td>

		<td id="addarticle"><input type="text" name="name" value="<?php echo $row->viewnum;?> "></td>
	</tr>



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

    <tr>
		<td id="addarticle">مفعلة :</td>

		<td id="addarticle">نعم : <input type="radio" name="active" value="1" <?php if($row->active==1) {echo "checked='checked'";} ?> >
		&nbsp;&nbsp;&nbsp;&nbsp; لا: <input type="radio" name="active"
			value="0" <?php if($row->active==0) {echo "checked='checked'";} ?>>
			
			<input type="hidden" name="product_id" value="<?php echo $row->product_id;?>">
			</td>
	</tr>
  </table>
</form>
<?php
    }else{
        echo"خطا";
    }
    ?>

<?

  <?php include_once("includes/footer.php");?>