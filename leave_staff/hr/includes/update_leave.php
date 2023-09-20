<?php
	if(isset($_POST['update'])){
		$did=intval($_GET['leaveid']);
		$status= $_POST['status'];
		$remark= $_POST['description'];
		$date=date('Y-m-d H:i:s');

		$sql2 = "SELECT * FROM tblleaves WHERE leaveID='$did'";
		$query2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_array($query2);
		$hrStatus = $row2['hrStatus'];
		$empID = $row2['empID'];
		$role = $row2['role'];
		$numberDays = $row2['numberDays'];

		if($status==1 AND $hrStatus==0){
			if ($role=='Staff') {
				$sql="UPDATE tblleaves SET hrRemark='$remark', hrStatus='$status', hrDate='$date' WHERE leaveID='$did'";
				$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
				if($query){
					echo "<script>alert('Leave updated successfully');</script>";
				}else{
					echo "<script>alert('An error occurred');</script>";
				}
			}elseif ($role=='HOD') {
				$sql="UPDATE tblleaves SET hrRemark='$remark', hrStatus='$status', hrDate='$date', hodStatus='$status', hodDate='$date' WHERE leaveID='$did'";
				$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
				if($query){
					echo "<script>alert('Leave updated successfully');</script>";
				}else{
					echo "<script>alert('An error occurred');</script>";
				}
			}else {
				echo "<script>alert('An error occurred');</script>";
			}
		}elseif($status==2 AND $hrStatus==0){
			$sql="UPDATE tblleaves SET hrRemark='$remark', hrStatus='$status', hrDate='$date', hodStatus=4, gmStatus=4, leaveStatus=2 WHERE leaveID='$did'";
			$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
			if($query){
				$sql3 = "SELECT * FROM tblemployees WHERE empID='$empID'";
				$query3 = mysqli_query($conn, $sql3);
				$row3 = mysqli_fetch_array($query3);
				$avLeave = $row3['avLeave'];
				$avLeaveNew = $avLeave + $numberDays;

				$sql4 = "UPDATE tblemployees SET avLeave='$avLeaveNew' WHERE empID='$empID'";
				$query4 = mysqli_query($conn, $sql4);
				echo "<script>alert('Leave updated successfully');</script>";
			}else{
				echo "<script>alert('An error occurred');</script>";
			}
		}else{
			echo "<script>alert('You have taken action for this leave');</script>";
		}
	}
?>