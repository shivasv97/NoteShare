<?php
	session_start();
	include_once 'config.php';
	$name="";
	if(isset($_SESSION['name']))
		$name=$_SESSION['name'];
	$sql="SELECT * FROM tbl_uploads WHERE username='$name'";
	$result_set=mysqli_query($conn,$sql);
    $num_rows=mysqli_num_rows($result_set);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
	<img src="avatar_final.png" width="200px" height="auto">
	<div class="name"><?php print($name);?></div>
		<div>
			Welcome!.<br>
			<h3 class="recent">Recent Activity:<br><hr width="100%"></h3>
			
			<br><?php print "$num_rows  "?>Uploads. 
			
		</div>
		
</body>
</html>