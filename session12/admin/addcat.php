<?php include_once ("includes/header.php"); ?>

<?php 
if(isset($_POST['submit'])){

	$cat_name =$_POST['cat_name'];
  $cat_des =$_POST['cat_des'];
  $cat_img =$_POST['cat_img'];
  $cat_active =$_POST['cat_active'];

  $q="INSERT INTO cats (cat_name,cat_des,cat_img,cat_active) 
  VALUES ('".$cat_name."','".$cat_des."','".$cat_img."',".$cat_active.") ";
  $reuslt=$db->query($q) or die($db->error);
  if($reuslt){
    echo "تم اضافة القسم";
  }


}else{
?>
<div id="box">
                	<h3 id="adduser">إضافة قسم جديد</h3>
                    <form id="form" action="" method="post">
                      <fieldset id="personal">
                        <legend>بيانات القسم</legend>
                        <label for="catname">الإسم : </label> 
                        <input name="cat_name" id="catname" type="text" tabindex="1" />
                        <br />
                        <label for="catdesc"> الوصف</label>
                        <textarea name="cat_des" rows="5" cols="10"></textarea>
                       
                        <br />
                        <label for="imagepath">مسار الصورة </label>
                        <input name="cat_img" id="imagepath" type="text" 
                        tabindex="2" size="50" />
<br />
		<label for="active">مفعلة :</label>

		<label for="yes"> :نعم <input type="radio" name="cat_active" value="1">
		 لا: <input type="radio" name="cat_active"  value="0"></label>

                      </fieldset>
                    
                      <div align="center">
                      <input id="button1" type="submit" name="submit" value="أضف القسم" /> 
                      <input id="button2" type="reset" />
                      </div>
                    </form>
					</div>
					
<?php }?>
<?php include_once ("includes/footer.php"); ?>