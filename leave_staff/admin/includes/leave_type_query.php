<!--@Add Leave Type-->
<?php
	if (isset($_POST['add'])){
		$leaveType = $_POST['leaveType'];
		$description = $_POST['description'];

		$sql = "INSERT INTO tblleavetype(leaveType, description) VALUES('$leaveType', '$description')";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if ($query){
?>
			<script type="text/javascript">
				alert("New leave type successfuly added.")
			</script>
<?php
		} else{
?>
			<script type="text/javascript">
				alert("Error Occured")
			</script>
<?php
		}
	}
?>
<!--#Add Leave Type-->

<!--@Edit Leave Type-->
<?php
	if (isset($_POST['edit'])){
		$did = $_POST['edit'];
		$leaveType = $_POST['leaveType'];
		$description = $_POST['description'];

		$sql = "UPDATE tblleavetype SET leaveType='$leaveType', description='$description' WHERE id='$did'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if ($query){
?>
			<script type="text/javascript">
				alert("Leave type successfuly edited.")
			</script>
<?php
		} else{
?>
			<script type="text/javascript">
				alert("Error Occured")
			</script>
<?php
		}
	}
?>
<!--#Edit Leave Type-->

<!--@Delete Leave Type-->
<?php
	if (isset($_POST['delete'])){
		$did = $_POST['delete'];

		$sql = "DELETE FROM tblleavetype WHERE id='$did'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if ($query){
?>
			<script type="text/javascript">
				alert("Leave type successfuly deleted.")
			</script>
<?php
		} else{
?>
			<script type="text/javascript">
				alert("Error Occured")
			</script>
<?php
		}
	}
?>
<!--#Delete Leave Type-->