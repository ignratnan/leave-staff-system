<?php include('includes/header.php')?>
<?php include('../includes/session.php')?>

<?php
if (isset($_GET['delete'])) {
	$delete = $_GET['delete'];
	$sql = "DELETE FROM tblemployees where emp_id = ".$delete;
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$delete2 = $_GET['delete'];
		$sql2 = "DELETE FROM tbl_leaves where empid = ".$delete2;
		$result2 = mysqli_query($conn, $sql2);
		if ($result2) {
			echo "<script>alert('Staff deleted Successfully');</script>";
	     	echo "<script type='text/javascript'> document.location = 'staff.php'; </script>";
		}
	}
}

?>

<body>
	
	<?php include('../includes/loader.php')?>

	<?php include('includes/navbar.php')?>
	
	<?php include('includes/right_sidebar.php')?>

	<?php include('includes/left_sidebar.php')?>

<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<?php 
							 $query_reg_admin = mysqli_query($conn,"select * from tblemployees where Admin = 1 or Admin = 2 ")or die(mysqli_error());
							 $count_reg_admin = mysqli_num_rows($query_reg_admin);
							 ?>

							<div class="d-flex flex-wrap">
								<div class="widget-icon bg-dark">
									<div class="icon" data-color="white"><i class="icon-copy fa fa-user-secret" aria-hidden="true"></i></div>
								</div>
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo($count_reg_admin); ?></div>
									<div class="font-14 text-secondary weight-500"><b>Administrators</b></div>
								</div>
								
							</div>
						</div>
					</div>
			</div>
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
									<div class="font-14 text-secondary weight-500"><b>Department Heads</b></div>
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
			
			<div class="card-box mb-30">
				<div class="pd-20">
						<h2 class="text-blue h4">ALL EMPLOYEES</h2>
					</div>
				<div class="pb-20">
					<table class="data-table table stripe hover nowrap">
						<thead>
							<tr>
								<th class="table-plus">FULL NAME</th>
								<th>EMAIL</th>
								<th>DEPARTMENT</th>
								<th>POSITION</th>
								<th>AVE. LEAVE</th>
								<th class="datatable-nosort">ACTION</th>
							</tr>
						</thead>
						<tbody>
							<tr>

								 <?php
		                         $teacher_query = mysqli_query($conn,"select * from tblemployees LEFT JOIN tbldepartments ON tblemployees.Department = tbldepartments.DepartmentShortName ORDER BY tblemployees.emp_id") or die(mysqli_error());
		                         while ($row = mysqli_fetch_array($teacher_query)) {
		                         $id = $row['emp_id'];
		                             ?>

								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="<?php echo (!empty($row['location'])) ? '../uploads/'.$row['location'] : '../uploads/NO-IMAGE-AVAILABLE.jpg'; ?>" class="border-radius-100 shadow" width="40" height="40" alt="">
										</div>
										<div class="txt">
											<div class="weight-600"><?php echo $row['FirstName'] . " " . $row['LastName']; ?></div>
										</div>
									</div>
								</td>
								<td><?php echo $row['EmailId']; ?></td>
	                            <td><?php echo $row['DepartmentName']; ?></td>
								<td><?php echo $row['role']; ?></td>
								<td><?php echo $row['Av_leave']; ?></td>
								<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="staff_details.php?details=<?php echo $row['emp_id'];?>"><i class="dw dw-eye"></i> View</a>
												<!--Start edit/delete feature for admin-->
												<?php
												$sql_self="SELECT * from tblemployees where emp_id='$session_id'";
												$query_self=mysqli_query($conn, $sql_self) or die(mysql_error($conn));
												$row_self=mysqli_fetch_array($query_self);
												?>
												<?php
												if($row_self['Admin']==1){	//Super Admin
												?>	
													<a class="dropdown-item" href="edit_staff.php?edit=<?php echo $row['emp_id'];?>"><i class="dw dw-edit2"></i> Edit</a>
													<?php if($row['emp_id']!=$session_id and $row['Admin']!=1){ ?>
													<a class="dropdown-item" href="all_employees.php?delete=<?php echo $row['emp_id'] ?>"><i class="dw dw-delete-3"></i> Delete</a>
													<?php } ?>
												<?php } ?>
												<?php
												if($row_self['Admin']==2){	//Admin
												?>	
													<?php if($row['Admin']!=1 and ($row['Admin']!=2 or $row['emp_id'==$session_id])){ ?>
													<a class="dropdown-item" href="edit_staff.php?edit=<?php echo $row['emp_id'];?>"><i class="dw dw-edit2"></i> Edit</a>
													<?php } ?>
													<?php if($row['emp_id']!=$session_id and $row['Admin']!=1 and $row['Admin']!=2){ ?>
													<a class="dropdown-item" href="all_employees.php?delete=<?php echo $row['emp_id'] ?>"><i class="dw dw-delete-3"></i> Delete</a>
													<?php } ?>
												<?php } ?>
												<!--End edit/delete feature for admin-->
											</div>
										</div>
								</td>
							</tr>
							<?php } ?>  
						</tbody>
					</table>
			   </div>
			</div>

			<?php include('../includes/footer.php'); ?>

		</div>
	</div>

<!-- js -->
<script src="../vendors/scripts/core.js"></script>
<script src="../vendors/scripts/script.min.js"></script>
<script src="../vendors/scripts/process.js"></script>
<script src="../vendors/scripts/layout-settings.js"></script>
<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>

<!-- buttons for Export datatable -->
<script src="../src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="../src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="../src/plugins/datatables/js/vfs_fonts.js"></script>

<script src="../vendors/scripts/datatable-setting.js"></script></body>

</body>
</html>