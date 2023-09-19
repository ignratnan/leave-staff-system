<?php include('includes/header.php')?>
<?php include('../includes/session.php')?>
<body>
	<?php include('../includes/loader.php')?>

	<?php include('includes/navbar.php')?>

	<?php include('includes/right_sidebar.php')?>

	<?php include('includes/left_sidebar.php')?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="page-header">
				<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Leave Portal</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">My Leave</li>
								</ol>
							</nav>
						</div>
				</div>
			</div>
			<div class="card-box mb-30">
				<div class="pd-20">
						<h2 class="text-blue h4">MY LEAVE</h2>
					</div>
				<div class="pb-20">
					<table class="data-table table stripe hover nowrap">
						<thead>
							<tr>
								<th>APPLIED DATE</th>
								<th>STAFF NAME</th>
								<th>LEAVE TYPE</th>
								<th>HOD STATUS</th>
								<th>GM STATUS</th>
								<th>HR STATUS</th>
								<th class="datatable-nosort">ACTION</th>
							</tr>
						</thead>
						<tbody>
							<tr>

								<?php 
								
								$sql = "SELECT tbl_leaves.id as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.location,tblemployees.emp_id,tbl_leaves.LeaveType,tbl_leaves.PostingDate,tbl_leaves.HOD_Status,tbl_leaves.HR_Status,tbl_leaves.GM_Status from tbl_leaves join tblemployees on tbl_leaves.empid=tblemployees.emp_id where tblemployees.emp_id='$session_id' order by lid desc";
									$query = mysqli_query($conn, $sql) or die(mysqli_error());
									while ($row = mysqli_fetch_array($query)) {
									  $cnt=1;
								 ?>  

								<td><?php echo $row['PostingDate']; ?></td>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="txt">
											<div class="weight-600"><?php echo $row['FirstName']." ".$row['LastName'];?></div>
										</div>
									</div>
								</td>
								<td><?php echo $row['LeaveType']; ?></td>
								<td><?php $stats=$row['HOD_Status'];
	                             if($stats==1){ ?>
	                             <span data-color="green">Approved</span>
	                             <?php } if($stats==2)  { ?>
	                             <span data-color="red">Rejected</span>
	                             <?php } if($stats==0)  { ?>
	                             <span data-color="blue">Pending</span>
	                             <?php } if($stats==3)  { ?>
	                             <span data-color="orange">Read</span>
	                             <?php } if($stats==4)  { ?>
	                             <span style="color: gray"><i>Not Available</i></span>
	                             <?php } ?>
	                            </td>
	                            <td><?php $stats=$row['GM_Status'];
	                             if($stats==1){ ?>
	                             <span data-color="green">Approved</span>
	                             <?php } if($stats==2)  { ?>
	                             <span data-color="red">Rejected</span>
	                             <?php } if($stats==0)  { ?>
	                             <span data-color="blue">Pending</span>
	                             <?php } if($stats==3)  { ?>
	                             <span data-color="orange">Read</span>
	                             <?php } if($stats==4)  { ?>
	                             <span style="color: gray"><i>Not Available</i></span>
	                             <?php } ?>
	                            </td>
	                            <td><?php $stats=$row['HR_Status'];
	                             if($stats==1){ ?>
	                             <span data-color="green">Approved</span>
	                             <?php } if($stats==2)  { ?>
	                             <span data-color="red">Rejected</span>
	                             <?php } if($stats==0)  { ?>
	                             <span data-color="blue">Pending</span>
	                             <?php } if($stats==3)  { ?>
	                             <span data-color="orange">Read</span>
	                             <?php } if($stats==4)  { ?>
	                             <span style="color: gray"><i>Not Available</i></span>
	                             <?php } if($stats==5)  { ?>
	                             <span data-color="purple">Recorded</span>
	                             <?php } ?>
	                            </td>
	                            
								<td>
									<div class="dropdown">
										<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											<i class="dw dw-more"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											<a class="dropdown-item" href="leave_details.php?leaveid=<?php echo $row['lid']; ?>"><i class="dw dw-eye"></i> View</a>
											<a class="dropdown-item" href="delete_leave.php?leaveid=<?php echo $row['lid']; ?>"><i class="dw dw-delete-3"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<?php $cnt++; }?>
						</tbody>
					</table>
			   </div>
			</div>

			<?php include('includes/footer.php'); ?>
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