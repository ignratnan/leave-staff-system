<div class="mobile-menu-overlay"></div>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Staff Portal</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Staff Details</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Staff Details</h4>
							<p class="mb-20"></p>
						</div>
					</div>
					<div class="wizard-content">
						<form method="post" action="">
							<section>
								<?php
									$query = mysqli_query($conn,"select * from tblemployees where emp_id = '$get_id' ")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
									?>

								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label >First Name :</label>
											<input name="firstname" type="text" class="form-control wizard-required" readonly required="true" autocomplete="off" value="<?php echo $row['FirstName']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label >Last Name :</label>
											<input name="lastname" type="text" class="form-control" readonly required="true" autocomplete="off" value="<?php echo $row['LastName']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Email Address :</label>
											<input name="email" type="email" class="form-control" readonly required="true" autocomplete="off" value="<?php echo $row['EmailId']; ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Password :</label>
											<input name="password" type="password" placeholder="**********" class="form-control" readonly required="true" autocomplete="off" value="<?php echo $row['Password']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Gender :</label>
											<input name="gender" type="text" class="form-control" readonly required="true" autocomplete="off" value="<?php echo $row['Gender']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Phone Number :</label>
											<input name="phonenumber" type="text" class="form-control" readonly required="true" autocomplete="off"value="<?php echo $row['Phonenumber']; ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Date Of Birth :</label>
											<input name="dob" type="text" class="form-control" readonly required="true" autocomplete="off"value="<?php echo $row['Dob']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Address :</label>
											<input name="address" type="text" class="form-control" readonly required="true" autocomplete="off"value="<?php echo $row['Address']; ?>">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Department :</label>
											<?php
												$query_staff = mysqli_query($conn,"select * from tblemployees join tbldepartments on tblemployees.Department=tbldepartments.DepartmentShortName where emp_id = '$get_id'")or die(mysqli_error());
												$row_staff = mysqli_fetch_array($query_staff);
											 ?>
											 <input name="department" type="text" class="form-control" readonly required="true" autocomplete="off"value="<?php echo $row_staff['DepartmentName']; ?>">												
										</div>
									</div>
								</div>

								<?php
									$query = mysqli_query($conn,"select * from tblemployees where emp_id = '$get_id' ")or die(mysqli_error());
									$new_row = mysqli_fetch_array($query);
									?>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Staff Leave Days :</label>
											<input name="leave_days" type="text" class="form-control" readonly required="true" autocomplete="off"value="<?php echo $new_row['Av_leave']; ?>">
										</div>
									</div>
									
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Department Role :</label>
											<input name="department_role" type="text" class="form-control" readonly required="true" autocomplete="off"value="<?php echo $new_row['role']; ?>">
										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>User Role :</label>
											<input name="user_role" type="text" class="form-control" readonly required="true" autocomplete="off"value="<?php if($new_row['Admin']==1){
														echo 'Super Admin';
													} elseif($new_row['Admin']==2){
														echo 'Admin';
													} elseif($new_row['Admin']==3){
														echo 'User';
													}
													 ?>">
										</div>
									</div>
								</div>
							</section>
						</form>
					</div>
				</div>
			</div>
		<?php include('footer.php'); ?>
	</div>
</div>
