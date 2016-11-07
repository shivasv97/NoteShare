<?php
include_once 'config.php';
session_start();
$name='';
if(isset($_SESSION['name']))
	$name=$_SESSION['name'];
if(isset($_POST['btn-upload']))
{    
     
	$file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		
		$sql="INSERT INTO tbl_uploads VALUES('','$name','$final_file','$file_type','$new_size')";
		if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		//mysqli_query($conn,$sql);
		?>
		<script>
		
		//alert('successfully uploaded');
		
        window.location.href='index1.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='index1.php?fail';
        </script>
		<?php
	}
}
?>