<?php

if (isset($_POST["update_image"])) {

	$image = $_FILES['image']['name'];

	if(!empty($image)){
		move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/'.$image);
		$location = $image;	
	}
	else {
		echo "<script>alert('Please Select Picture to Update');</script>";
	}

    $result = mysqli_query($conn,"UPDATE tblemployees SET location='$location' WHERE empID='$session_id'         
		")or die(mysqli_error());
    if ($result) {
     	echo "<script>alert('Profile Picture Updated');</script>";
     	echo "<script type='text/javascript'> document.location = 'my_profile.php'; </script>";
	} else{
	  die(mysqli_error());
   }
}
?>


<div class="mobile-menu-overlay"></div>

<div class="main-container" style="background-color: #DCD7C9;">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">


			<!--@Map Head-->
			<div class="page-header">
				<div class="row">
						<div class="col-md-6 col-sm-12">
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
						</div>
				</div>
			</div>
			<!--#Map Head-->

			<!--@Page Title-->	
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">PROFILE</h2>
			</div>
			<hr style="border-width: 2px;">
			<!--#Page Title-->

			<!--@Profile-->
			<div class="row">
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 mb-30">
					<div class="pd-20 card-box height-100-p">

						<?php $query= mysqli_query($conn,"SELECT * FROM tblemployees JOIN tbldepartments ON tblemployees.depID = tbldepartments.id WHERE empID = '$session_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
						?>

						<div class="profile-photo">
							<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
							<img src="<?php echo (!empty($row['location'])) ? '../uploads/'.$row['location'] : '../uploads/NO-IMAGE-AVAILABLE.jpg'; ?>" alt="" class="avatar-photo" style="width: 160px; height: 160px;">
							<form method="post" enctype="multipart/form-data">
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="weight-500 col-md-12 pd-5">
												<div class="form-group">
													<div class="custom-file">
														<input name="image" id="file" type="file" class="custom-file-input" accept="image/*" onchange="validateImage('file')">
														<label class="custom-file-label" for="file" id="selector">Choose file</label>		
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<input type="submit" name="update_image" value="Update" class="btn btn-primary">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<h5 class="text-center h5 mb-0"><?php echo $row['fullName']; ?></h5>
						<div class="profile-info">
							<h5 class="mb-20 h5 text-blue">Personal Information</h5>
							<div class="row">
							<div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
								<ul>
									<li>
										<span>Department:</span>
										<?php echo $row['departmentName']; ?>
									</li>
									<li>
										<span>Role:</span>
										<?php echo $row['role']; ?>
									</li>
									<li>
										<span>Email:</span>
										<?php echo $row['emailID']; ?>
									</li>
									<li>
										<span>Phone Number:</span>
										<?php echo $row['phoneNumber']; ?>
									</li>
								</ul>
							</div>
							<div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
								<ul>
									<li>
										<span>Date of Birth:</span>
										<?php echo $row['dateBirth']; ?>
									</li>
									<li>
										<span>Gender:</span>
										<?php echo $row['gender']; ?>
									</li>
									<li>
										<span>Address:</span>
										<?php echo $row['address']; ?>
									</li>
									<li>
										<span>Available Leave:</span>
										<?php echo $row['avLeave']; ?>
									</li>
								</ul>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--#Profile-->

		<?php include('footer.php'); ?>
		</div>
	</div>
</div>