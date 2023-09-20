<?php
if(isset($_POST['reset'])){
	
		$empid=$session_id;
		$pswd=md5($_POST['pswd']);
		

		$newpswd=md5($_POST['newpswd']);
		$newpswd2=md5($_POST['newpswd2']);

		$sql ="SELECT * FROM tblemployees where empID ='$empid' AND password ='$pswd'";
		$query= mysqli_query($conn, $sql);
		$count = mysqli_num_rows($query);
		if($count > 0)
		{
	    	if($newpswd == $newpswd2){
	    		$result = mysqli_query($conn,"update tblemployees set password='$newpswd' where empID='$session_id'         
				")or die(mysqli_error());
	    		if ($result) {
			     	echo "<script>alert('Your Password Successfully Changed');</script>";
			     	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
				} else{
				  die(mysqli_error());
			   	}
	    	}
	    	else{
	    		echo "<script>alert('Your current password is incorrect or your confirm password is not same with your new password');</script>";
	    	}
	    }
	    else{
	    	echo "<script>alert('Your current password is incorrect or your confirm password is not same with your new password');</script>";
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
									<li class="breadcrumb-item active" aria-current="page">Reset Password</li>
								</ol>
							</nav>
						</div>
				</div>
			</div>
			<!--#Map Head-->

			<!--@Page Title-->	
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">RESET PASSWORD</h2>
			</div>
			<hr style="border-width: 2px;">
			<!--#Page Title-->

			<!--@Reset Password-->
			<div class="row">
				<div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 mb-30">
					<div class="card-box height-100-p overflow-hidden">
						
						<div class="">
								<div class="profile-setting pl-2">
									<form method="POST" enctype="multipart/form-data">
										<div class="profile-edit-list row">

											<?php
											$query = mysqli_query($conn,"select * from tblemployees where empID = '$session_id' ")or die(mysqli_error());
											$row = mysqli_fetch_array($query);
											?>
											
											<div class="weight-500 col-md-12">
												<div class="form-group">
													<label>Enter your current password</label>
													<input name="pswd" class="form-control form-control-lg" type="password" required="true" autocomplete="off" value="">
												</div>
											</div>
												
											<div class="weight-500 col-md-12">
												<div class="form-group">
													<label>Enter your new password</label>
													<input name="newpswd" class="form-control form-control-lg" type="password" placeholder="" required="true" autocomplete="off" value="">
												</div>
											</div>
												
											<div class="weight-500 col-md-12">
												<div class="form-group">
													<label>Enter your new password again to confirm</label>
													<input name="newpswd2" class="form-control form-control-lg" type="password" placeholder="" required="true" autocomplete="off" value="">
												</div>
											</div>
												
											<div class="weight-500 col-md-12">
												<div class="form-group">
													<label></label>
													<div class="">
														<input type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary" name="presubmit" id="presubmit" value="Reset Password">
													</div>
												</div>
											</div>


										</div>
										<div id="id01" class="modal">						
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content" style="">
														<div class="modal-body text-center font-18">
															<h4 class="mb-20">Reset Password</h4>
														</div>
														<div class="modal-footer justify-content-center">
															<p class="">
																Are you sure want to reset your password?
															</p>
															<p class="mt-3">
																<input type="submit" class="btn btn-primary mr-3" name="reset" value="Reset" style="background-color: #1A5D1A;">
																<input type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-primary ml-3" name="cancel" id="cancel" value="Cancel" style="background-color: #B70404;">
															</p>
														</div>
													</div>
												</div>	
										</div>
									</form>
								</div>
						</div>
					</div>
				</div>
			</div>
			<!--#Reset Password-->

		</div>
		<?php include('includes/footer.php'); ?>
	</div>
</div>