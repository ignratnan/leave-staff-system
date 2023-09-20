<?php
$getID= $_GET['details'];

$sql= "SELECT * FROM tblemployees JOIN tbldepartments ON tblemployees.depID = tbldepartments.id WHERE empID='$getID'";
$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row= mysqli_fetch_array($query);

?>