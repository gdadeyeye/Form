<?php 
$conn = mysqli_connect('localhost','root','','test');
 
if(!$conn)
{
	die(mysqli_error());
}
 
if(isset($_POST['submit']))
{
	$textareaValue = trim($_POST['msg']);
	$postFirst 	= $_POST['text'];
	$postLast	= $_POST['text1'];
	$postNumber	= $_POST['number1'];
	$postEmail	= $_POST['email'];
	
	$sql = "insert into persons (FirstName,LastName,PhoneNumber,EmailAddress,Message) values ('".$postFirst."','".$postLast."','".$postNumber."','".$postEmail."','".$textareaValue."')";
	$rs = mysqli_query($conn, $sql);
	$affectedRows = mysqli_affected_rows($conn);
	
	if($affectedRows == 1)
	{
		$successMsg = "Record has been saved successfully";
	}
	
}
?>