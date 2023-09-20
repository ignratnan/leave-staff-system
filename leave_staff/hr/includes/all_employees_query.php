<?php
if (isset($_GET['delete'])) {
	$empID = $_GET['delete'];
	$sql = "DELETE FROM tblemployees where empID = ".$empID;
	$result = mysqli_query($conn, $sql);
	if ($result) {
			echo "<script>alert('Employee deleted Successfully');</script>";
	     	echo "<script type='text/javascript'> document.location = 'staff.php'; </script>";
	}
	
}

?>