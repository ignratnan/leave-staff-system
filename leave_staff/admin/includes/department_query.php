<!--@Add Department-->
<?php
	if (isset($_POST['add'])){
		$departmentName = $_POST['departmentName'];
		$departmentShortName = $_POST['departmentShortName'];
		$headOf = -1;

		$sql = "INSERT INTO tbldepartments(departmentName, departmentShortName, idHOD) VALUES('$departmentName', '$departmentShortName', '$headOf')";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if ($query){
?>
			<script type="text/javascript">
				alert("New department successfuly added.")
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
<!--#Add Department-->

<!--@Edit Department-->
<?php
	if (isset($_POST['edit'])){
		$did = $_POST['edit'];
		$departmentName = $_POST['departmentName'];
		$departmentShortName = $_POST['departmentShortName'];
		$headOf = $_POST['headOf'];

		$sql3 = "SELECT * FROM tbldepartments WHERE id='$did';";
		$query3 = mysqli_query($conn, $sql3);
		$row3 = mysqli_fetch_array($query3);
		$hid = $row3['idHOD'];

		$sql = "UPDATE tbldepartments SET departmentName='$departmentName', departmentShortName='$departmentShortName', idHOD='$headOf' WHERE id='$did'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		$sql = "UPDATE tblemployees SET role='HOD' WHERE empID='$headOf'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		$sql = " UPDATE tblemployees SET role='Staff' WHERE empID='$hid'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if ($query){
?>
			<script type="text/javascript">
				alert("Department successfuly edited.")
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
<!--#Edit Department-->

<!--@Delete Department-->
<?php
	if (isset($_POST['delete'])){
		$did = $_POST['delete'];

		$sql2 = "SELECT * FROM tblemployees WHERE depID='$did'";
		$query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
		while ($row2 = mysqli_fetch_array($query2)) {
			$empID = $row2['empID'];
			$sql3 = "UPDATE tblemployees SET depID='0', role='Staff' WHERE empID='$empID'";
			$query3 = mysqli_query($conn, $sql3);
		}

		$sql = "DELETE FROM tbldepartments WHERE id='$did'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if ($query){
?>
			<script type="text/javascript">
				alert("Department successfuly deleted.")
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
<!--#Delete Department-->