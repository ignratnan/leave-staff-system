<?php
	if(isset($_POST['update'])){
		$did=intval($_GET['leaveid']);
		$status= $_POST['status'];
		$remark= $_POST['description'];
		$date=date('Y-m-d H:i:s');

		if($status==1){
			$sql="UPDATE tblleaves SET hrRemark='$remark', hrStatus='$status', hrDate='$date' WHERE leaveID='$did'";
			$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
			if($query){
				echo "<script>alert('Leave updated successfully');</script>";
			}else{
				echo "<script>alert('An error occurred');</script>";
			}
		}elseif($status==2){
			$sql="UPDATE tblleaves SET hrRemark='$remark', hrStatus='$status', hrDate='$date', hodStatus=4, gmStatus=4, leaveStatus=2 WHERE leaveID='$did'";
			$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
			if($query){
				echo "<script>alert('Leave updated successfully');</script>";
			}else{
				echo "<script>alert('An error occurred');</script>";
			}
		}
	}
?>