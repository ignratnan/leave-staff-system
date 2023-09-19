<div class="mobile-menu-overlay"></div>

<div class="main-container" style="background-color: #DCD7C9;">
	<div class="pd-ltr-20">
		<div class="min-height-200px">
			
			<!--@Map Head-->
			<div class="page-header">
				<div class="row">
						<div class="col-md-6 col-sm-12">
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="my_leave.php">All Employee</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Employee</li>
								</ol>
							</nav>
						</div>
				</div>
			</div>
			<!--#Map Head-->

			<!--@Page Title-->
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">Add Employee</h2>
			</div>
			<hr style="border-width: 2px;">
			<!--#Page Title-->

			<!--@New Employee Details-->
			<div class="pd-20 card-box mb-0">

				<!--@Form Title-->
				<div class="clearfix">
					<div class="p-2" style="text-align: center;">
						<h4 class="text-black h4"><b>NEW EMPLOYEE DETAILS</b></h4>
						<p class="m-0"></p>
					</div>
				</div>
				<!--#Form Title-->

				<form method="post" action="">

					  

					<!--@Employee Details-->
					<div class="col-md-2 col-sm-12 p-0 mb-1">

					</div>
				
					<hr class="m-0" style="border-width: 2px;">
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>First Name</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="firstName" class="selectpicker form-control" data-style="btn-outline-primary" required="true" autocomplete="off">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Last Name</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="lastName" class="selectpicker form-control" data-style="btn-outline-primary" required="true" autocomplete="off">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Full Name</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="fullName" class="selectpicker form-control" data-style="btn-outline-primary" required="true" autocomplete="off">
						</div>
					</div>

					<hr class="m-0" style="border-width: 2px;">
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Date of Birth</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="date" name="dateBirth" class="selectpicker form-control" data-style="btn-outline-info">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Religion</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<select name="religion" class="custom-select form-control" required="true" autocomplete="off">
								<option value="">Select Religion</option>
								<option value="Islam">Islam</option>
								<option value="Protestan">Protestan</option>
								<option value="Katolik">Katolik</option>
								<option value="Hindu">Hindu</option>
								<option value="Buddha">Buddha</option>
								<option value="Khonghucu">Khonghucu</option>
							</select>
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Gender</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<select name="gender" class="custom-select form-control" required="true" autocomplete="off">
								<option value="">Select Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Phone Number</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input name="phoneNumber" type="text" class="form-control" required="true" autocomplete="off">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Address</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="address" class="selectpicker form-control" data-style="btn-outline-info" autocomplete="off">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Department</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<select name="depID" class="custom-select form-control" required="true" autocomplete="off">
								<option value="">Select Department</option>
									<?php
									$query = mysqli_query($conn,"select * from tbldepartments");
									while($row = mysqli_fetch_array($query)){
									?>
									<option value="<?php echo $row['id']; ?>"><?php echo $row['departmentName']; ?></option>
									<?php } ?>
							</select>
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Staff Leave Days</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input name="leaveDays" type="number" class="form-control" required="true" autocomplete="off">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Email</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="email" name="email" class="selectpicker form-control" data-style="btn-outline-primary" required="true" autocomplete="off">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Set Password</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input name="password" type="text" class="form-control" required="true" autocomplete="off">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					<hr class="m-0 mt-1" style="border-width: 2px;">
					<!--#Employee Details-->

					<div class="row">
						<div class="col-md-12 col-sm-12 p-3 pl-4" style="text-align: center;">
							<input type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary" name="presubmit" id="presubmit" value="Add Employee">
						</div>
					</div>

					<div id="id01" class="modal">						
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content" style="">
									<div class="modal-body text-center font-18">
										<h4 class="mb-20">Add Employee</h4>
									</div>
									<div class="modal-footer justify-content-center">
										<p class="">
											Are you sure want to add this employee?
										</p>
										<p class="mt-3">
											<input type="submit" class="btn btn-primary mr-3" name="addEmployee" value="Add" style="background-color: #1A5D1A;">
											<input type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-primary ml-3" name="cancel" id="cancel" value="Cancel" style="background-color: #B70404;">
										</p>
									</div>
								</div>
							</div>	
					</div>

				</form>
			</div>
			<!--#New Employee Details-->

		</div>
			
		<?php include('includes/footer.php')?>

	</div>
</div>