<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pb-20">
				<h4 class="h3 mb-0 card-box p-3">ICS Indonesia</h4>
		</div>
		<div class="pd-ltr-20">

			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">

						<?php
						$sql = "SELECT emp_id from tblemployees";
						$query = $dbh -> prepare($sql);
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						$empcount=$query->rowCount();
						?>

						<div class="d-flex flex-wrap">
							<div class="widget-icon bg-dark">
								<div class="icon" data-color="white"><i class="icon-copy dw dw-user1"></i></div>
							</div>
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?php echo($empcount);?></div>
								<div class="font-14 text-secondary weight-500"><b>Total Staffs</b></div>
							</div>
							
						</div>
					</div>
			</div>			
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
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
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">

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
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">

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

			<hr class="mb-10">
			<div class="row pb-10">
				<div class="col-lg-4 col-md-6">
					
					<div class="col-lg-12 col-md-6 bg-secondary" style="padding-left:0px; padding-right:0px; border-radius:10px;">
						<label class="h5 pl-3 pt-2 text-light">Indonesia</label>
						<div class="card-box pd-20 mb-20">
							<div class="row pb-10 pl-3">
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
												<div class="font-12 weight-500" data-color="#17a2b8"><?php echo $row['Phonenumber']; ?></div>
											</div>
										</div>
										<div>
											<a class="weight-500" data-color="#17a2b8" href="staff_details.php?details=<?php echo $row['emp_id'];?>"><i class="dw dw-eye" title="View"></i></a>
										</div>
									</li>
									<?php }?>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-8 col-md-6 mb-20">
					<?php
					$query_2 = mysqli_query($conn,"select distinct tblemployees.Department, tbldepartments.DepartmentName from tblemployees join tbldepartments on tblemployees.Department=tbldepartments.DepartmentShortName where tblemployees.Department!='GM' ORDER BY emp_id") or die(mysqli_error());
					while ($row_2 = mysqli_fetch_array($query_2)) {
					$department = $row_2['Department'];
					$departmentname = $row_2['DepartmentName'];

					?>
					<div class="col-lg-12 bg-secondary"  style="padding-left:0px; padding-right:0px; border-radius:10px;">
					<label class="h5 pl-3 pt-2 text-light"><?php echo $departmentname ?></label>
					<div class="row mb-20 bg-light" style="margin-left: 0px; margin-right: 0px; border-radius:10px;">
						<div class="col-lg-6 col-md-6">
							<div class="card-box height-100-p pd-20 min-height-200px">
								<div class="row pb-10 pl-3">
									<div class="h5 mb-0">Head of Department</div>
								</div>
								<hr class="m-0" style="border-width: 2px; background-color: grey;">
								<div class="user-list">
									<ul>
										<?php
				                         $query = mysqli_query($conn,"select * from tblemployees where role='HOD' and Department='$department' ORDER BY tblemployees.emp_id") or die(mysqli_error());
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
													<div class="font-12 weight-500" data-color="#17a2b8"><?php echo $row['Phonenumber']; ?></div>
												</div>
											</div>
											<div>
												<a class="weight-500" data-color="#17a2b8" href="staff_details.php?details=<?php echo $row['emp_id'];?>"><i class="dw dw-eye" title="View"></i></a>
											</div>
										</li>
										<?php }?>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<div class="card-box height-100-p pd-20 min-height-200px">
								<div class="row pb-10 pl-3">
									<div class="h5 mb-0">Staff</div>
								</div>
								<hr class="m-0" style="border-width: 2px; background-color: grey;">
								<div class="user-list">
									<ul>
										<?php
				                         $query = mysqli_query($conn,"select * from tblemployees where role = 'Staff' and Department='$department' ORDER BY tblemployees.emp_id") or die(mysqli_error());
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
													<div class="font-12 weight-500" data-color="#17a2b8"><?php echo $row['Phonenumber']; ?></div>
												</div>
											</div>
											<div>
												<a class="weight-500" data-color="#17a2b8" href="staff_details.php?details=<?php echo $row['emp_id'];?>"><i class="dw dw-eye" title="View"></i></a>
											</div>
										</li>
										<?php }?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					</div>
					<?php } ?>
				</div>

			</div>
			
			<?php include('footer.php'); ?>
		</div>
	</div>
