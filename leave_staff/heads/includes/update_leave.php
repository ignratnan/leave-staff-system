<?php
	if(isset($_POST['update'])){
		$did=intval($_GET['leaveid']);
		$status= $_POST['status'];
		$remark= $_POST['description'];
		$date=date('Y-m-d H:i:s');

		$sql2 = "SELECT * FROM tblleaves WHERE leaveID='$did'";
		$query2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_array($query2);
		$hodStatus = $row2['hodStatus'];
		$empID = $row2['empID'];
		$numberDays = $row2['numberDays'];

		if($status==1 AND $hodStatus==0){
			$sql="UPDATE tblleaves SET hodRemark='$remark', hodStatus='$status', hodDate='$date' WHERE leaveID='$did'";
			$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
			if($query){
				echo "<script>alert('Leave updated successfully');</script>";
			}else{
				echo "<script>alert('An error occurred');</script>";
			}
		}elseif($status==2 AND $hodStatus==0){
			$sql="UPDATE tblleaves SET hodRemark='$remark', hodStatus='$status', hodDate='$date', gmStatus=4, leaveStatus=2 WHERE leaveID='$did'";
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