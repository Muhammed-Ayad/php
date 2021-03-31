<?php
include_once("includes/header.php");
include_once("includes/functions.php");

?>

<table id="addarticle" width="600px">

<tr>
		<td id="addarticle" width="5%"> الرقم </td>
		<td id="addarticle"width="55%"> الصنف </td>
		<td id="addarticle"width="20%"> حذف  </td>
		<td id="addarticle"width="20%"> تعديل </td>
 
</tr>
<?php
$q="select * from products where active=1 ";
$reuslt=$db->query($q) or die($db->error);
if($reuslt){
    while($row=$reuslt->fetch_object()){
?>
<tr>
		<td id="addarticle" width="5%"> 
        <?php echo $row->product_id; ?>  
        </td>
		<td id="addarticle"width="55%"> 
		<?php echo $row->title; ?>  
          </td>
          <td id="addarticle" width="20%"> 
        <a href="deleteproduct.php?id=<?php echo $row->product_id; ?>"> حذف</a>
        </td>
		<td id="addarticle" width="20%"> 
        <a href="editproduct.php?id=<?php echo $row->product_id; ?>"> تعديل</a>
        </td>
		
 
</tr>


<?php
    }
?>

<?php

        }else{
            echo"لا توجد صفحات مفعلة";
        }
?>
  </table>



<? include_once("includes/footer.php");?>