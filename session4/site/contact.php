<?php
// error_reporting(E_ALL & ~E_NOTICE);
if(isset($_POST['submit'])){
	$name=trim($_POST['username']);
	$email=trim($_POST['email']);
	$subject=trim($_POST['subject']);
	$content=trim($_POST['content']);
	$content.="\n email:{$email}";
	$content.="\n{$subject}";
	$to="mohamedabdo333334@gmail.com";
	$header = "From: ". $name . " <" . $email . ">\r\n";
	if(empty($name)){
		echo "please enter your name";
		$result=FALSE;
	}
	
$testmail=filter_var($email,FILTER_VALIDATE_EMAIL);
	if($testmail==FALSE){
		echo "please enter vaild email";
	}
$result=FALSE;
$result=mail($to, $subject, $content,$header);
if($result){
	?>
	<table border="10">
	<tr>
	<td>
	شكراً لك على  على الرد
	</td>
	</tr>
	</table>
<?php 


}

}else{
?>
<form action="" method="post">الإسم: <input type="text" name="username"
	value="" size="50"> <br />
البريد الإلكتروني: <input type="text" name="email" value="" size="50"> <br />
العنوان: <input type="text" name="subject" value="" size="50"> <br />
<textarea rows="10" cols="30" name="content"></textarea> <br />
<input type="submit" name="submit" value="أرسل البيانات"> <input
	type="reset" name="reset" value="إمسح البيانات"></form>
<br />
<?php
}
?>