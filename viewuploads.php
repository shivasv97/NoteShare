<?php
include_once 'config.php';
session_start();
$name='';
if(isset($_SESSION['name']))
    $name=$_SESSION['name'];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Notes</title>
<link rel="stylesheet" href="upload.css" type="text/css" />
</head>
<body>
<div id="header">
<label>Notes and resources</label>
</div>

    <?php
	$sql="SELECT * FROM tbl_uploads WHERE username='$name'";
	$result_set=mysqli_query($conn,$sql);
    $num_rows=mysqli_num_rows($result_set);
    if($num_rows==0){
        ?>
        <div>No Uploads!</div>
        <?php

    }
        
    else{
        ?>
<div id="body">
    <table width="80%" border="1">
    <tr>
    <th colspan="5">Your uploads...<label><a href="index1.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>User Name</td>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>


        <?php
	while($row=mysqli_fetch_array($result_set,MYSQLI_ASSOC))
	{
		?>
        <tr>
        <td><?php echo $row['username']?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'];?>" target="_blank">view file</a></td>
        </tr>
		
        <?php
		
		
	}
}
	?>
    </table>
    
</div>
</body>
</html>