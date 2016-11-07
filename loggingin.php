<?php
	$email=isset($_POST['email']) ? $_POST['email'] : '';
	$pass=isset($_POST['pass']) ? $_POST['pass'] : '';
	$errors=array();

	session_start();
	$con = mysqli_connect('localhost', 'root', '','user_data');
	if($con == false)
	{
			//die('could not connect: '.mysqli_error());
		die('There seems to be some problem connecting.Please check again later');
	}
	$scheck="SELECT * FROM user_details WHERE email='$email'";
	$result=mysqli_query($con,$scheck);
	$num_rows=mysqli_num_rows($result);
	echo($num_rows);
	if($num_rows==1){
		$query="SELECT * FROM user_details WHERE email='$email' AND password='$pass'";
		$result=mysqli_query($con,$query);
		$num_rows=mysqli_num_rows($result);
		if($num_rows==0){
			$errors[]="The password and email do not match!";
			$_SESSION['errors']=$errors;
			header('Location: login.php');
		}
		else{
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$_SESSION['name']=$row['username'];
			$_SESSION['email']=$row['email'];
			header('Location: profilepage.php');
		}
	}
	else{
		$errors[]="The account does not exist ";
		$_SESSION['errors']=$errors;
		header('Location: login.php');

	}
	//print $errors[0];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>