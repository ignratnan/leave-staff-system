<div class="mobile-menu-overlay"></div>

<div class="main-container" style="background-color: #DCD7C9;">
	<div class="pd-ltr-20">
		
		<!--@Map Head-->
		<div class="page-header">
			<div class="row">
					<div class="col-md-6 col-sm-12">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">All Employees</li>
							</ol>
						</nav>
					</div>
			</div>
		</div>
		<!--#Map Head-->

		<div class="row mb-1 pb-0 ml-1 mr-1">
			<!--@Page Title-->	
			<div class="col-md-6 col-sm-12 pd-20 pb-0">
				<h2 class="text-blue h4">ALL EMPLOYEES</h2>
			</div>
			<!--#Page Title-->
		</div>

		<hr class="m-0 mb-2" style="border-width: 2px;">

		<div class="p-2 pt-3 pb-3 mb-3" style="background-color: #F0F0F0;">
		<!--@Employees Count-->
		<div class="row pb-10 pl-3 pr-3">

			<!--@Total Employees-->
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">

					<?php
					$sql = "SELECT empID FROM tblemployees";
					$query = $dbh -> prepare($sql);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$empcount=$query->rowCount();
					?>

					<div class="d-flex flex-wrap">

						<div class="widget-data p-0" style="width: 100%; text-align: center;">
							<div class="weight-700 font-24 bg-dark text-white p-1"><?php echo($empcount);?></div>
							<div class="font-14 text-dark weight-500 pt-2"><b>Total Employees</b></div>
						</div>
						
					</div>
				</div>
			</div>
			<!--#Total Employees-->

			<!--@General Manager-->
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<?php 
					 $query_reg_admin = mysqli_query($conn,"SELECT * FROM tblemployees JOIN tbldepartments ON tblemployees.depID = tbldepartments.id WHERE departmentShortName='GM'")or die(mysqli_error());
					 $count_reg_admin = mysqli_num_rows($query_reg_admin);
					 ?>

					<div class="d-flex flex-wrap">

						<div class="widget-data p-0" style="width: 100%; text-align: center;">
							<div class="weight-700 font-24 bg-dark text-white p-1"><?php echo($count_reg_admin); ?></div>
							<div class="font-14 text-dark weight-500 p-2"><b>General Manager</b></div>
						</div>
						
					</div>
				</div>
			</div>
			<!--#General Manager-->

			<!--@Head of Department-->
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">

					<?php 
					 $query_reg_hod = mysqli_query($conn,"SELECT * FROM tblemployees JOIN tbldepartments ON tblemployees.depID = tbldepartments.id WHERE role = 'HOD' and departmentShortName!='GM' ")or die(mysqli_error());
					 $count_reg_hod = mysqli_num_rows($query_reg_hod);
					 ?>

					<div class="d-flex flex-wrap">

						<div class="widget-data p-0" style="width: 100%; text-align: center;">
							<div class="weight-700 font-24 bg-dark text-white p-1" ><?php echo($count_reg_hod); ?></div>
							<div class="font-14 text-dark weight-500 pt-2"><b>Head of Department</b></div>
						</div>
						
					</div>
				</div>
			</div>
			<!--#Head of Department-->

			<!--@Staff-->
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">

					<?php 
					 $query_reg_staff = mysqli_query($conn,"select * from tblemployees where role = 'Staff' ")or die(mysqli_error());
					 $count_reg_staff = mysqli_num_rows($query_reg_staff);
					 ?>

					<div class="d-flex flex-wrap">
						
						<div class="widget-data p-0" style="width: 100%; text-align: center;">
							<div class="weight-700 font-24 bg-dark text-white p-1"><?php echo htmlentities($count_reg_staff); ?></div>
							<div class="font-14 text-dark weight-500 pt-2"><b>Staffs</b></div>
						</div>
						
					</div>
				</div>
			</div>
			<!--#Staff-->

		</div>
		<!--#Employees Count-->

		<div class="row">
			<div class="col-xl-12 col-lg-3 col-md-12 mb-0" style="text-align: right;">

				<!--@Search Fitur-->
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." class="p-2" style="border-radius: 10px; border-width: 1px; width: 180px;">
				<!--#Search Fitur-->

				<!--@Add Employee Button-->
				<a href="add_employee.php">
					<button class="icon-copy fa fa-user-plus" style="width: 40px; height: 40px; border-radius: 10px;" title="Add Employee" id="addEmployee"></button>
				</a>
				<!--#Add Employee Button-->

			</div>
		</div>

		<hr class="mb-10 mt-1">

		<!--@Table-->
		<div class="pb-20" style="background: #F8F8F8;">
			<table class="table stripe hover nowrap" id="myTable" style="border-width: 1px;">
				<thead>
					<tr>
						<th style="text-align: center;">NO</th>
						<th>FULL NAME</th>
						<th>DEPARTMENT</th>
						<th style="text-align: center;">POSITION</th>
						<th>EMAIL</th>
						<th class="" style="text-align: center; min-width: 120px;">ACTION</th>
					</tr>
				</thead>
				<tbody>

					<?php
						$number = 0;
                         $query = mysqli_query($conn,"SELECT * FROM tblemployees JOIN tbldepartments ON tblemployees.depID = tbldepartments.id WHERE departmentShortName='GM'") or die(mysqli_error());
                         while ($row2 = mysqli_fetch_array($query)) {
                         $number++;
                         $id = $row2['empID'];
                    ?>
					<tr>
						<td style="text-align: center;"><?php echo "1"; ?></td>
						<td><?php echo $row2['fullName']; ?></td>
                        <td><?php echo $row2['departmentName']; ?></td>
						<td style="text-align: center;"><?php echo $row2['role']; ?></td>
						<td><?php echo $row2['emailID']; ?></td>
						<td style="text-align: center;">
							<div>
								<a href="employee_details.php?details= <?php echo $id; ?>">
									<span class="dw dw-eye" title="Details"></span>
								</a>
								<a href="edit_employee.php?edit= <?php echo $id; ?>">
									<span class="dw dw-edit2 ml-3 mr-3" title="Edit"></span>
								</a>
								<a href="#" class="dropdown">
									<span class="no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-delete-3"></i>
									</span>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<p class="p-1 mb-0">Are you sure want to delete <b><?php echo $row2['firstName']; ?></b>?</p>
										<form class="p-1" style="text-align: center;">
											<button class="pl-1 pr-1" type="submit" name="delete" value="<?php echo $id; ?>" style="background-color: #B70404; color: white;">Delete</button>
										</form>
									</div>
								</a>
							</div>
						</td>
					</tr>
					<?php } ?>


					<?php
						 $number++;
                         $teacher_query = mysqli_query($conn,"SELECT * FROM tblemployees ORDER BY fullName") or die(mysqli_error());
                         while ($row = mysqli_fetch_array($teacher_query)) {
                         $id = $row['empID'];
                         $depID = $row['depID'];

                         $sql = "SELECT * FROM tbldepartments WHERE id='$depID'";
                         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                         $row3 = mysqli_fetch_array($query);
                         $count = mysqli_num_rows($query);

                         if($count == 0){
                         	$departmentName = 'Not Available';
                    ?>
                         	<tr>
								<td style="text-align: center;"><?php echo $number; ?></td>
								<td><?php echo $row['fullName']; ?></td>
		                        <td><?php echo $departmentName; ?></td>
								<td style="text-align: center;"><?php echo $row['role']; ?></td>
								<td><?php echo $row['emailID']; ?></td>
								<td style="text-align: center;">
									<div>
										<a href="employee_details.php?details= <?php echo $id; ?>">
											<span class="dw dw-eye" title="Details"></span>
										</a>
										<a href="edit_employee.php?edit= <?php echo $id; ?>">
											<span class="dw dw-edit2 ml-3 mr-3" title="Edit"></span>
										</a>
										<a href="#" class="dropdown">
											<span class="no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-delete-3"></i>
											</span>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<p class="p-1 mb-0">Are you sure want to delete <b><?php echo $row['firstName']; ?></b>?</p>
												<form class="p-1" style="text-align: center;">
													<button class="pl-1 pr-1" type="submit" name="delete" value="<?php echo $id; ?>" style="background-color: #B70404; color: white;">Delete</button>
												</form>
											</div>
										</a>
									</div>
								</td>
							</tr>
					<?php
						 $number++;
                         }else{
                         	if($row3['departmentShortName'] != 'GM'){
                         		$departmentName = $row3['departmentName'];
                    ?>
                    			<tr>
									<td style="text-align: center;"><?php echo $number; ?></td>
									<td><?php echo $row['fullName']; ?></td>
			                        <td><?php echo $departmentName; ?></td>
									<td style="text-align: center;"><?php echo $row['role']; ?></td>
									<td><?php echo $row['emailID']; ?></td>
									<td style="text-align: center;">
										<div>
											<a href="employee_details.php?details= <?php echo $id; ?>">
												<span class="dw dw-eye" title="Details"></span>
											</a>
											<a href="edit_employee.php?edit= <?php echo $id; ?>">
												<span class="dw dw-edit2 ml-3 mr-3" title="Edit"></span>
											</a>
											<a href="#" class="dropdown">
												<span class="no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<i class="dw dw-delete-3"></i>
												</span>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													<p class="p-1 mb-0">Are you sure want to delete <b><?php echo $row['firstName']; ?></b>?</p>
													<form class="p-1" style="text-align: center;">
														<button class="pl-1 pr-1" type="submit" name="delete" value="<?php echo $id; ?>" style="background-color: #B70404; color: white;">Delete</button>
													</form>
												</div>
											</a>
										</div>
									</td>
								</tr>
					<?php
							$number++;
                         	}
                         } 
                	}
                    ?>
					
				</tbody>
			</table>
	   </div>
	   <!--#Table-->
	</div>
	   
		<?php include('footer.php'); ?>
	</div>
</div>
