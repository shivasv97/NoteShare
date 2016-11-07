<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="profilepage.css">
</head>
<body>
	<ul>
  <li><a href="index1.php" target="iframe_a">Upload</a></li>
  <li class="dropdown" style="float: right;">
    <a href="#" class="dropbtn">Profile</a>
    <div class="dropdown-content">
      <a href="#">Settings</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>

<div class="sidebar">
	<a href="dashboard.php" target="iframe_a">Dashboard</a>
	<a href="index1.php" target="iframe_a">Upload</a>
	<a href="view.php" target="iframe_a">Notes</a>
  <a href="viewuploads.php" target="iframe_a">Upload History</a>
	<a href="discussion.html" target="iframe_a">Discussion</a>
	
	
</div>
<iframe class="ifr" height="100%" width="84%" src="dashboard.php" name="iframe_a"></iframe> 
</body>


</html>

