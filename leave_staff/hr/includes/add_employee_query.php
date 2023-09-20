<?php
	if(isset($_POST['addEmployee'])){
		$firstName= $_POST['firstName'];
		$lastName= $_POST['lastName'];
		$fullName= $_POST['fullName'];
		$dateBirth= date('d-M-Y', strtotime($_POST['dateBirth']));
		$religion= $_POST['religion'];
		$gender= $_POST['gender'];
		$phoneNumber= $_POST['phoneNumber'];
		$address= $_POST['address'];
		$depID= $_POST['depID'];
		$departmentRole= 'Staff';
		$leaveDays= $_POST['leaveDays'];
		$email= $_POST['email'];
		$password= md5($_POST['password']);
		$regDate= date('Y-m-d H:i:s');

		$sql= "SELECT * from tblemployees WHERE emailID='$email'";
		$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
		$count= mysqli_num_rows($query);

		if($count > 0){ 
?>
			<script type="text/javascript">
				alert("The email has been used by another user, please change the email!");
			</script>
<?php 
		}else{
			$sql= "INSERT INTO tblemployees(firstName, lastName, fullName, emailID, password, gender, dateBirth, religion, depID, address, avLeave, phoneNumber, regDate, role, location) VALUES('$firstName', '$lastName', '$fullName', '$email', '$password', '$gender', '$dateBirth', '$religion', '$depID', '$address', '$leaveDays', '$phoneNumber', '$regDate', '$departmentRole', 'NO-IMAGE-AVAILABLE.jpg')";
			$query= mysqli_query($conn, $sql) or die(mysqliJ_error($conn));
?>
		<script type="text/javascript">
			alert("New employee successfully added");
		</script>
		<script type="text/javascript">
			window.location= "staff.php";
		</script>
<?php
		}
	}
?>