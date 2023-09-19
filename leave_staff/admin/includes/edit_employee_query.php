
<!--@Edit Employee-->
<?php
	if(isset($_POST['confirmUpdate'])){
		$getID= $_GET['edit'];
		$firstName= $_POST['firstName'];
		$lastName= $_POST['lastName'];
		$fullName= $_POST['fullName'];
		$dateBirth= date('d-M-Y', strtotime($_POST['dateBirth']));
		$religion= $_POST['religion'];
		$gender= $_POST['gender'];
		$phoneNumber= $_POST['phoneNumber'];
		$address= $_POST['address'];
		$depID= $_POST['depID'];
		$leaveDays= $_POST['leaveDays'];
		$email= $_POST['email'];


		$sql= "UPDATE tblemployees SET firstName='$firstName', lastName='$lastName', fullName='$fullName', dateBirth='$dateBirth', religion='$religion', gender='$gender', phoneNumber='$phoneNumber', address='$address', depID='$depID', avLeave='$leaveDays', emailID='$email' WHERE empID='$getID'";
		$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if($query){
?>
			<script type="text/javascript">
				alert("The employee successfully edited");
			</script>
			<script type="text/javascript">
				window.location= "staff.php";
			</script>
<?php
		}else
?>
			<script type="text/javascript">
				alert("Error ocured");
			</script>
<?php
	}elseif(isset($_POST['cancel'])){
?>
		<script type="text/javascript">
			window.location= "staff.php";
		</script>
<?php
	}
?>
<!--#Edit Employee-->

<!--@Reset Password-->
<?php
	if(isset($_POST['yesReset'])){
		$getID= $_GET['edit'];
		$newPassword= md5($_POST['newPassword']);

		$sql= "UPDATE tblemployees SET password='$newPassword' WHERE empID='$getID'";
		$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if($query){
?>
			<script type="text/javascript">
				alert("The password successfully changed.");
			</script>
			<script type="text/javascript">
				window.location= "staff.php";
			</script>
<?php
		}else
?>
			<script type="text/javascript">
				alert("Error ocured");
			</script>
<?php
	}elseif(isset($_POST['cancel'])){
?>
		<script type="text/javascript">
			window.location= "staff.php";
		</script>
<?php
	}
?>
<!--#Reset Password-->


