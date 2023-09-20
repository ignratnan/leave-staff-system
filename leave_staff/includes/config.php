<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','leave_staff');

$conn = mysqli_connect('localhost','root','','leave_staff') or die(mysqli_error());

// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}


//@-----EXPIRED LEAVE-----

//@ take now date and change to time 
$dateNow = date('d-m-Y h:i:s');
$dateNowTime = strtotime("$dateNow");
//# take now date and change to time

//@ take leave date from datebase
$sql = "SELECT * FROM tblleaves WHERE leaveStatus=0";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
//# take leave date from database

//@ loop for expired leave 
while ($row = mysqli_fetch_array($query)) {
	$leaveID = $row['leaveID'];
	$dateLeave = $row['fromDate'];
	$dateLeaveTime = strtotime("$dateLeave");
	$diffDate = $dateLeaveTime - $dateNowTime;

	$empID = $row['empID'];
	$numberDays = $row['numberDays'];
	$hrStatus = $row['hrStatus'];
	$hodStatus = $row['hodStatus'];
	$gmStatus = $row['gmStatus'];

	if ($diffDate <= 0){
		$sql2 = "UPDATE tblleaves SET leaveStatus=4 WHERE leaveID='$leaveID'";
		$query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

		$sql3 = "SELECT * FROM tblemployees WHERE empID='$empID'";
		$query3 = mysqli_query($conn, $sql3);
		$row3 = mysqli_fetch_array($query3);
		$avLeave = $row3['avLeave'];
		$avLeaveNew = $avLeave + $numberDays;

		$sql4 = "UPDATE tblemployees SET avLeave='$avLeaveNew' WHERE empID='$empID'";
		$query4 = mysqli_query($conn, $sql4);

		if($hrStatus==0){
			$sql5 = "UPDATE tblleaves SET hrStatus=6 WHERE leaveID='$leaveID'";
			$query5 = mysqli_query($conn, $sql5);
		}

		if($hodStatus==0){
			$sql5 = "UPDATE tblleaves SET hodStatus=6 WHERE leaveID='$leaveID'";
			$query5 = mysqli_query($conn, $sql5);
		}

		if($gmStatus==0){
			$sql5 = "UPDATE tblleaves SET gmStatus=6 WHERE leaveID='$leaveID'";
			$query5 = mysqli_query($conn, $sql5);
		}
	}
}
//# loop for expired leave

//#-----EXPIRED LEAVE-----



?>
