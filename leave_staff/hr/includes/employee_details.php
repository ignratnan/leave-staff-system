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
									<li class="breadcrumb-item active" aria-current="page">Employee Details</li>
								</ol>
							</nav>
						</div>
				</div>
			</div>
			<!--#Map Head-->

			<!--@Page Title-->
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">Employee Details</h2>
			</div>
			<hr style="border-width: 2px;">
			<!--#Page Title-->

			<!--@Employee Details-->
			<div class="pd-20 card-box mb-0">

				<!--@Form Title-->
				<div class="clearfix">
					<div class="p-2" style="text-align: center;">
						<h4 class="text-black h4"><b>EMPLOYEE DETAILS</b></h4>
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
							<input type="text" name="firstName" class="selectpicker form-control" data-style="btn-outline-primary" required="true" readonly value="<?php echo $row['firstName']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Last Name</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="lastName" class="selectpicker form-control" data-style="btn-outline-primary" required="true" readonly value="<?php echo $row['lastName']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Full Name</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="fullName" class="selectpicker form-control" data-style="btn-outline-primary" required="true" readonly value="<?php echo $row['fullName']; ?>">
						</div>
					</div>

					<hr class="m-0" style="border-width: 2px;">
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Date of Birth</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="dateBirth" class="selectpicker form-control" data-style="btn-outline-info" readonly value="<?php echo $row['dateBirth']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Religion</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="religion" class="selectpicker form-control" data-style="btn-outline-info" readonly value="<?php echo $row['religion']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Gender</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="gender" class="selectpicker form-control" data-style="btn-outline-info" readonly value="<?php echo $row['gender']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Phone Number</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input name="phoneNumber" type="text" class="form-control" required="true" autocomplete="off" readonly value="<?php echo $row['phoneNumber']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Address</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="address" class="selectpicker form-control" data-style="btn-outline-info" readonly value="<?php echo $row['address']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Department</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="department" class="selectpicker form-control" data-style="btn-outline-info" readonly value="<?php echo $row['departmentName']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Department Role</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="departmentRole" class="selectpicker form-control" data-style="btn-outline-info" readonly value="<?php echo $row['role']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Available Leave</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input name="leaveDays" type="number" class="form-control" required="true" autocomplete="off" readonly value="<?php echo $row['avLeave']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Email</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="email" class="selectpicker form-control" data-style="btn-outline-primary" required="true" readonly value="<?php echo $row['emailID']; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					<hr class="m-0 mt-1" style="border-width: 2px;">
					<!--#Employee Details-->

				</form>
			</div>
			<!--#Employee Details-->

		</div>
			
		<?php include('includes/footer.php')?>

	</div>
</div>