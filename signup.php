<html>

<head>

<title>connecting mysql</title>

</head>

<body>

<?php 

		session_start();

		$con = mysqli_connect('localhost', 'root', '','user_data');

		

		$email=isset($_POST['email']) ? $_POST['email'] : '';;

		$pass=isset($_POST['pass']) ? $_POST['pass'] : '';

		$cont=isset($_POST['cnum']) ? $_POST['cnum'] : '';;

		$name=isset($_POST['name']) ? $_POST['name'] : '';;

		if($con == false)

		{

			//die('could not connect: '.mysqli_error());

			die('There seems to be some problem connecting.Please check again later');

		}

		//echo("connected sucessfully <br>");

		$scheck="SELECT * FROM user_details WHERE email='$email'";

		$result=mysqli_query($con,$scheck);

		$num_rows=mysqli_num_rows($result);

		if($num_rows==0){

			$sql= "INSERT INTO user_details VALUES ('','$name','$email','$pass','$cont')";

			$con->query($sql) or die("It seems we can't connect you to the database.We are working on it and regret any inconvenience");

			header('Location: login.php');

		}

		else{

			//$_SESSION['uexist']=0;

			header('Location: signinfail.php');

		}

		/*if($con->query($sql)=== TRUE)

		{

			echo("record created sucessfully");

		}

		else{

			echo("error: ".$sql.$con->error);

		}*/

		//mysqli_query($con,$sql);

		$con->close();

	

	?>

</body>

</html>