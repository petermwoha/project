<?php
if (isset ($_POST['email']) && !empty($_POST['email']))
{
  $email = $_POST['email'];
$pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i";
	//Input Validations
		
	if (!preg_match($pattern,$email)){
	$e = "Invalid Email Address";	
}
}
?>
<form action="validate.php" method="POST">
 <input type="email">
 <input type="submit">
</form>