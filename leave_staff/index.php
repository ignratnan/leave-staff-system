<?php
session_start();
include('includes/config.php');

// @first login
$sql = "SELECT * FROM tblrole";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($query);
if($count == 0) {
	$pAdmin = md5('admin');
	$pHR = md5('hr');
	
	$sqlRole = "INSERT INTO tblrole(role, password) VALUES('admin','$pAdmin'),('hr','$pHR')";
	$queryRole = mysqli_query($conn, $sqlRole) or die(mysqli_error($conn));
}

$sql = "SELECT * FROM tbldepartments";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($query);
if($count == 0) {
	$sqlDep = "INSERT INTO tbldepartments(id, departmentName, departmentShortName, idHOD) VALUES(0,'Not Available','Not Available',-1)";
	$queryDep = mysqli_query($conn, $sqlDep) or die(mysqli_error($conn));
}

// #first login

if(isset($_POST['signin']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$sql = "SELECT * FROM tblrole WHERE role ='$username' AND password ='$password'";
	$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$count = mysqli_num_rows($query);
	
	$sql2 ="SELECT * FROM tblemployees WHERE emailID ='$username' AND password ='$password'";
	$query2= mysqli_query($conn, $sql2);
	$count2 = mysqli_num_rows($query2);
	
		if($count > 0){
			while($row = mysqli_fetch_assoc($query)){
				if($row['role'] == 'admin'){
					$_SESSION['alogin'] = -1;
					$_SESSION['arole']= $row['role'];
					echo "<script type='text/javascript'> document.location = 'admin/index.php'; </script>";
				}elseif($row['role'] == 'hr'){
					$_SESSION['alogin'] = -2;
					$_SESSION['arole']= $row['role'];
					echo "<script type='text/javascript'> document.location = 'hr/index.php'; </script>";
				}elseif($row['role'] == 'random'){
					$_SESSION['alogin'] = -3;
					$_SESSION['arole']= $row['role'];
					echo "<script type='text/javascript'> document.location = 'random/index.php'; </script>";
				}else{
					echo "<script>alert('Invalid Details 3');</script>";
				}
			}
		}elseif($count2 > 0){
			while($row2 = mysqli_fetch_assoc($query2)){
				$depID = $row2['depID'];
				$sql3 = "SELECT * FROM tbldepartments WHERE id='$depID'";
				$query3 = mysqli_query($conn, $sql3);
				$count3 = mysqli_num_rows($query3);
				$row3 = mysqli_fetch_array($query3);

				if($count3 > 0) {
					if($row3['departmentShortName'] == 'GM') {
				    	$_SESSION['alogin']=$row2['empID'];
				    	$_SESSION['arole']=$row2['depID'];
					 	echo "<script type='text/javascript'> document.location = 'gm/index.php'; </script>";
				    }elseif($row2['role'] == 'HOD' and $row3['departmentShortName'] != 'GM') {
				    	$_SESSION['alogin']=$row2['empID'];
				    	$_SESSION['arole']=$row2['depID'];
					 	echo "<script type='text/javascript'> document.location = 'heads/index.php'; </script>";
				    }else {
					 	$_SESSION['alogin']=$row2['empID'];
				    	$_SESSION['arole']=$row2['depID'];
					 	echo "<script type='text/javascript'> document.location = 'staff/index.php'; </script>";
				    }
				}else {
					$_SESSION['alogin']=$row2['empID'];
			    	$_SESSION['arole']=$row2['depID'];
				 	echo "<script type='text/javascript'> document.location = 'staff/index.php'; </script>";
				}
			}
		}else{
			echo "<script>alert('Invalid Details 1');</script>";
		}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Leave Manager</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x108" href="vendors/images/Logo-ICS.png">
	<link rel="icon" type="image/png" sizes="32x20" href="vendors/images/Logo-ICS.png">
	<link rel="icon" type="image/png" sizes="16x10" href="vendors/images/Logo-ICS.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page" style="background-color: #DCD7C9;">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="index.php">
					<img src="vendors/images/Logo-ICS.png" height="50px" width="80px" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center bg-secondary">
		<div class="container">
			<div class="login-box bg-white box-shadow border-radius-10">
				<div class="login-title">
					<h2 class="text-center text-primary">Welcome To ICS Leave Portal</h2>
				</div>
				<form name="signin" method="post">
				
					<div class="input-group custom">
						<input type="text" class="form-control form-control-lg" placeholder="Email ID" name="username" id="username">
						<div class="input-group-append custom">
							<span class="input-group-text"><i class="icon-copy fa fa-envelope-o" aria-hidden="true"></i></span>
						</div>
					</div>
					<div class="input-group custom">
						<input type="password" class="form-control form-control-lg" placeholder="**********"name="password" id="password">
						<div class="input-group-append custom">
							<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-0">
							   <input class="btn btn-primary btn-lg btn-block" name="signin" id="signin" type="submit" value="Sign In">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>