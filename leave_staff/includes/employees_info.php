		
<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="pd-ltr-20">
		<div class="title pb-20">
			<h2 class="h3 mb-0"></h2>
		</div>
		<div class="pb-20">
			<h4 class="h3 mb-0 card-box pl-3">Employees</h4>
		</div>

		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="card-box widget-style3 mb-20">
					
					<?php 
					 $query_reg_admin = mysqli_query($conn,"SELECT emp_id from tblemployees")or die(mysqli_error());
					 $count_reg_admin = mysqli_num_rows($query_reg_admin);
					 ?>

					<div class="d-flex flex-wrap">
						<div class="widget-icon bg-dark">
							<div class="icon" data-color="white"><i class="icon-copy fa fa-user-circle-o" aria-hidden="true"></i></div>
						</div>
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"><?php echo($count_reg_admin); ?></div>
							<div class="font-14 text-secondary weight-500"><b>Total Employees</b></div>
						</div>	
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="card-box widget-style3 mb-20">
					
					<?php 
					 $query_reg_admin = mysqli_query($conn,"select * from tblemployees where Department='GM'")or die(mysqli_error());
					 $count_reg_admin = mysqli_num_rows($query_reg_admin);
					 ?>

					<div class="d-flex flex-wrap">
						<div class="widget-icon bg-dark">
							<div class="icon" data-color="white"><i class="icon-copy dw dw-user-11" aria-hidden="true"></i></div>
						</div>
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"><?php echo($count_reg_admin); ?></div>
							<div class="font-14 text-secondary weight-500"><b>General Manager</b></div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="card-box widget-style3 mb-20">

					<?php 
					 $query_reg_hod = mysqli_query($conn,"select * from tblemployees where role = 'HOD' and Department!='GM' ")or die(mysqli_error());
					 $count_reg_hod = mysqli_num_rows($query_reg_hod);
					 ?>

					<div class="d-flex flex-wrap">
						<div class="widget-icon bg-dark">
							<div class="icon"><i data-color="white" class="icon-copy fa fa-user" aria-hidden="true"></i></div>
						</div>
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"><?php echo($count_reg_hod); ?></div>
							<div class="font-14 text-secondary weight-500"><b>Head of Department</b></div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="card-box widget-style3 mb-20">

					<?php 
					 $query_reg_staff = mysqli_query($conn,"select * from tblemployees where role = 'Staff' ")or die(mysqli_error());
					 $count_reg_staff = mysqli_num_rows($query_reg_staff);
					 ?>

					<div class="d-flex flex-wrap">
						<div class="widget-icon bg-dark">
							<div class="icon" data-color="white"><span class="icon-copy fa fa-users"></span></div>
						</div>
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"><?php echo htmlentities($count_reg_staff); ?></div>
							<div class="font-14 text-secondary weight-500"><b>Staffs</b></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row pb-10 mb-20">
			<div class="col-xl-4 col-lg-3 col-md-6 mb-20">
				<div class="card-box pd-20 min-height-200px">
					<div class="d-flex justify-content-between pb-10">
						<div class="h5 mb-0">General Manager</div>
					</div>
					<hr class="m-0" style="border-width: 2px; background-color: grey;">
					<div class="user-list">
						<ul>
							<?php
		                     $query = mysqli_query($conn,"select * from tblemployees where Department='GM' ORDER BY tblemployees.emp_id") or die(mysqli_error());
		                     while ($row = mysqli_fetch_array($query)) {
		                     $id = $row['emp_id'];
		                         ?>
							<li class="d-flex align-items-center justify-content-between">
								<div class="name-avatar d-flex align-items-center pr-2">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo (!empty($row['location'])) ? '../uploads/'.$row['location'] : '../uploads/NO-IMAGE-AVAILABLE.jpg'; ?>" class="border-radius-100 box-shadow" width="50" height="50" alt="">
									</div>
									<div class="txt">
										<div class="font-14 weight-600"><?php echo $row['FirstName'] . " " . $row['LastName']; ?></div>
										<div class="font-12 weight-500" data-color="#b2b1b6"><?php echo $row['EmailId']; ?></div>
									</div>
								</div>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-3 col-md-6 mb-20">
				<div class="card-box pd-20 min-height-200px">
					<div class="d-flex justify-content-between pb-10">
						<div class="h5 mb-0">Head of Department</div>
					</div>
					<hr class="m-0" style="border-width: 2px; background-color: grey;">
					<div class="user-list">
						<ul>
							<?php
		                     $query = mysqli_query($conn,"select * from tblemployees where role='HOD' and Department!='GM' ORDER BY tblemployees.emp_id") or die(mysqli_error());
		                     while ($row = mysqli_fetch_array($query)) {
		                     $id = $row['emp_id'];
		                         ?>

							<li class="d-flex align-items-center justify-content-between">
								<div class="name-avatar d-flex align-items-center pr-2">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo (!empty($row['location'])) ? '../uploads/'.$row['location'] : '../uploads/NO-IMAGE-AVAILABLE.jpg'; ?>" class="border-radius-100 box-shadow" width="50" height="50" alt="">
									</div>
									<div class="txt">
										<span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7"><?php echo $row['Department']; ?></span>
										<div class="font-14 weight-600"><?php echo $row['FirstName'] . " " . $row['LastName']; ?></div>
										<div class="font-12 weight-500" data-color="#b2b1b6"><?php echo $row['EmailId']; ?></div>
									</div>
								</div>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-3 col-md-6 mb-20">
				<div class="card-box pd-20 min-height-200px">
					<div class="d-flex justify-content-between pb-10">
						<div class="h5 mb-0">Staff</div>
					</div>
					<hr class="m-0" style="border-width: 2px; background-color: grey;">
					<div class="user-list">
						<ul>
							<?php
		                     $query = mysqli_query($conn,"select * from tblemployees where role = 'Staff' ORDER BY tblemployees.emp_id") or die(mysqli_error());
		                     while ($row = mysqli_fetch_array($query)) {
		                     $id = $row['emp_id'];
		                         ?>

							<li class="d-flex align-items-center justify-content-between">
								<div class="name-avatar d-flex align-items-center pr-2">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo (!empty($row['location'])) ? '../uploads/'.$row['location'] : '../uploads/NO-IMAGE-AVAILABLE.jpg'; ?>" class="border-radius-100 box-shadow" width="50" height="50" alt="">
									</div>
									<div class="txt">
										<span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7"><?php echo $row['Department']; ?></span>
										<div class="font-14 weight-600"><?php echo $row['FirstName'] . " " . $row['LastName']; ?></div>
										<div class="font-12 weight-500" data-color="#b2b1b6"><?php echo $row['EmailId']; ?></div>
									</div>
								</div>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				
			</div>
		</div>
	</div>
</div>