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
									<li class="breadcrumb-item active" aria-current="page">Edit Employee</li>
								</ol>
							</nav>
						</div>
				</div>
			</div>
			<!--#Map Head-->

			<!--@Page Title-->
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">Edit Employee</h2>
			</div>
			<hr style="border-width: 2px;">
			<!--#Page Title-->

			<!--@Connect From Database-->
			<?php
				$getID= $_GET['edit'];

				$sql= "SELECT * FROM tblemployees WHERE empID='$getID'";
				$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
				$row= mysqli_fetch_array($query);

				$firstName= $row['firstName'];
				$lastName= $row['lastName'];
				$fullName= $row['fullName'];
				$dateBirth= date('Y-m-d', strtotime($row['dateBirth']));
				$religion= $row['religion'];
				$gender= $row['gender'];
				$phoneNumber= $row['phoneNumber'];
				$address= $row['address'];
				$depID= $row['depID'];
				$departmentRole= $row['role'];
				$avLeave= $row['avLeave'];
				$email= $row['emailID'];
			?>
			<!--#Connect From Database-->

			<!--@Update Employee Details-->
			<div class="pd-20 card-box mb-0">

				<!--@Form Title-->
				<div class="clearfix">
					<div class="p-2" style="text-align: center;">
						<h4 class="text-black h4"><b>EDIT EMPLOYEE DETAILS</b></h4>
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
							<input type="text" name="firstName" class="selectpicker form-control" data-style="btn-outline-primary" autocomplete="off" required="true" value="<?php echo $firstName; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Last Name</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="lastName" class="selectpicker form-control" data-style="btn-outline-primary" autocomplete="off" required="true" value="<?php echo $lastName; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Full Name</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="fullName" class="selectpicker form-control" data-style="btn-outline-primary" autocomplete="off" required="true" value="<?php echo $fullName; ?>">
						</div>
					</div>

					<hr class="m-0" style="border-width: 2px;">
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Date of Birth</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="date" name="dateBirth" class="selectpicker form-control" data-style="btn-outline-info" value="<?php echo $dateBirth; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Religion</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<select name="religion" class="custom-select form-control" required="true" autocomplete="off">
								<option value="<?php echo $religion; ?>"><?php echo $religion; ?></option>
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
								<option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Phone Number</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input name="phoneNumber" type="text" class="form-control" required="true" autocomplete="off" value="<?php echo $phoneNumber; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Address</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" name="address" class="selectpicker form-control" autocomplete="off" data-style="btn-outline-info" value="<?php echo $address; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Department</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<select name="depID" class="custom-select form-control" required="true" autocomplete="off">
								<option value="<?php echo $depID; ?>">
									<?php
									$query2 = mysqli_query($conn, "SELECT * FROM tbldepartments WHERE id='$depID'") or die(mysqli_error($conn));
									while($row2 = mysqli_fetch_array($query2)){
										echo $row2['departmentName'];
									}
									?>	
								</option>
									<?php
									$query = mysqli_query($conn,"SELECT * FROM tbldepartments WHERE id!='$depID'");
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
							<h5 style="font-size:16px;"><b>Available Leave</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input name="leaveDays" type="number" class="form-control" required="true" autocomplete="off" value="<?php echo $avLeave; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Email</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="email" name="email" class="selectpicker form-control" data-style="btn-outline-primary" autocomplete="off" required="true" value="<?php echo $email; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					<hr class="m-0 mt-1" style="border-width: 2px;">
					<!--#Employee Details-->

					<div class="row">
						<div class="col-md-6 col-sm-12 p-3 pl-4" style="">
							<button class="btn btn-primary ml-4 mr-4" type="button" onclick="document.getElementById('bg-confirm').style.display='block'; document.getElementById('confirm').style.display='block';" id="update" data-toggle="modal" style="background-color: #1A5D1A;">Update</button>
							<button class="btn btn-primary ml-4 mr-4" name="cancel" id="cancel" data-toggle="modal" style="background-color: #B70404;">Cancel</button>
						</div>
					</div>

					<!--@Confirmation-->
					<div id="bg-confirm" style="position: fixed; left: 0px; right: 0px; top: 0px; bottom: 0px; background-color: black; display: none; opacity: 50%;"></div>
					<div id="confirm" style="position: fixed;left: 35%; right: 35%; top: 50%; bottom: 0px; display: none;">
							<div class="m-0" style="background-color: #ffffff; padding: 10px; width: 400px; text-align: center; border-radius: 12px;" >
								<p>Are you sure want to save this update ?</p>
								<p>
									<button class="p-1 mr-3" type="submit" name="confirmUpdate" id="confirmUpdate" value="update" style="width: 90px; background-color: #1A5D1A; color: white;">Yes</button>
									<button class="p-1 ml-3" type="button" onclick="document.getElementById('bg-confirm').style.display='none'; document.getElementById('confirm').style.display='none';" name="confirmCancel" id="confirmCancel" value="cancel" style="width: 90px; background-color: #B70404; color: white">No</button>

								</p>
							</div>
					</div>
					<!--#Confirmation-->

				</form>
			</div>
			<!--#Update Employee Details-->

		</div>

		<div class="card-box mt-2 p-4">
			<form method="post">
				<h4>Reset Password</h4>
				<hr class="m-1" style="border-width: 2px;" />
				<label style="font-size: 12px;">New Password:</label><br/>
				<input type="text" name="newPassword" required autocomplete="off" /><br/>
				<p class="m-0 mt-2 mb-2">
					<button class="btn btn-primary ml-4 mr-4" onclick="document.getElementById('confirmReset').style.display='inline';document.getElementById('reset').style.display='none';" type="button" id="reset" data-toggle="modal" style="background-color: #0E2954;">Reset</button>
				</p>
				<div class="mt-4" id="confirmReset" style="display: none;">
					<hr class="m-1" style="border-width: 2px;" />
					<p>Are you sure want to reset this password?</p>
					<p class="m-0 mt-1">
						<button class="ml-4 mr-4 p-0" name="yesReset" id="yesReset" data-toggle="modal" style="width: 75px; background-color: #1A5D1A; color: white;">Yes</button>
						<button class="ml-4 mr-4 p-0" type="button" onclick="document.getElementById('confirmReset').style.display='none'; document.getElementById('reset').style.display='inline';" id="noReset" data-toggle="modal" style="width: 75px; background-color: #B70404; color: white;">No</button>
					</p>
				</div>
			</form>
		</div>
			
		<?php include('includes/footer.php')?>

	</div>
</div>