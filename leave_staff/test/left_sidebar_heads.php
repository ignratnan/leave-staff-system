<div class="left-side-bar">
		<div class="brand-logo" style="background-color: #ffffff;">
			<a href="index.php" style="margin-left: 20px">
				<img src="../vendors/images/Logo-ICS.png" height="50px" width="80px" alt="" class="dark-logo">
				<img src="../vendors/images/Logo-ICS.png" height="50px" width="80px" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="index.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
						</a>
						
					</li>
					<li>
						<a href="department.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-building"></span><span class="mtext">Department</span>
						</a>
					</li>
					<li>
						<a href="leave_type.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-map-1"></span><span class="mtext">Leave Type</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-user"></span><span class="mtext">Staff</span>
						</a>
						<ul class="submenu">
							<!--
							<li><a href="add_staff.php"><span class="micon dw dw-add-user"></span><span class="mtext"> Add Staff </span></a></li>
							-->
							<li><a href="staff.php"><span class="micon dw dw-user1"></span><span class="mtext"> All Staff </span></a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-file-3"></span><span class="mtext">Leave</span>
								<!--Start Info Fitur-->
								<?php 
									$sql2 = "SELECT * from tblemployees where emp_id='$session_id'";
										$query2 = mysqli_query($conn, $sql2) or die(mysqli_error());
										while ($row2 = mysqli_fetch_array($query2)) {
										$department = $row2['Department'];
									}
								?>

								<?php
								$sql = "SELECT tbl_leaves.id,tblemployees.FirstName,tblemployees.LastName,tblemployees.Department,tblemployees.location,tblemployees.emp_id,tbl_leaves.LeaveType,tbl_leaves.PostingDate,tbl_leaves.HOD_Status,tbl_leaves.HR_Status,tbl_leaves.GM_Status from tbl_leaves join tblemployees on tbl_leaves.empid=tblemployees.emp_id where (tbl_leaves.HOD_Status=0 or tbl_leaves.HOD_Status=3) and tblemployees.department='$department'";
								$query = mysqli_query($conn, $sql) or die(mysqli_error());
								$data = array();
								while (($row = mysqli_fetch_array($query)) != null) {
									$data[] = $row;
								}
								$count =count($data);
								if ($count>0) { ?>        
								<span class="ml-2 bg-light text-dark pt-1 pb-1 pl-2 pr-2" style="border-radius: 3px"><?php echo($count); ?></span>
								<?php } ?>
								<!--End Info Fitur-->
						</a>
						<ul class="submenu">
							
							<li><a href="apply_leave.php"><span class="micon ti ti-file"></span><span class="mtext"> Apply Leave </span></a></li>
							<li><a href="my_leave.php"><span class="micon dw dw-file-4"></span><span class="mtext"> My Leave </span></a></li>
							<li><a href="department_leave.php"><span class="micon dw dw-file-4"></span><span class="mtext"> Department Leave </span>
								<!--Start Info Fitur-->
								<?php 
									$sql2 = "SELECT * from tblemployees where emp_id='$session_id'";
										$query2 = mysqli_query($conn, $sql2) or die(mysqli_error());
										while ($row2 = mysqli_fetch_array($query2)) {
										$department = $row2['Department'];
									}
								?>

								<?php
								$sql = "SELECT tbl_leaves.id,tblemployees.FirstName,tblemployees.LastName,tblemployees.Department,tblemployees.location,tblemployees.emp_id,tbl_leaves.LeaveType,tbl_leaves.PostingDate,tbl_leaves.HOD_Status,tbl_leaves.HR_Status,tbl_leaves.GM_Status from tbl_leaves join tblemployees on tbl_leaves.empid=tblemployees.emp_id where (tbl_leaves.HOD_Status=0 or tbl_leaves.HOD_Status=3) and tblemployees.department='$department'";
								$query = mysqli_query($conn, $sql) or die(mysqli_error());
								$data = array();
								while (($row = mysqli_fetch_array($query)) != null) {
									$data[] = $row;
								}
								$count =count($data);
								if ($count>0) { ?>        
								<span class="ml-2 bg-light text-dark pt-1 pb-1 pl-2 pr-2" style="border-radius: 3px"><?php echo($count); ?></span>
								<?php } ?>
								<!--End Info Fitur-->
								</a></li>
							<li><a href="leaves.php"><span class="micon dw dw-file-6"></span><span class="mtext"> All Leave </span></a></li>
							<li><a href="approved_leave.php"><span class="micon dw dw-file-2"></span><span class="mtext"> Approved Leave </span></a></li>
							<li><a href="pending_leave.php"><span class="micon dw dw-file-16"></span><span class="mtext"> Pending Leave </span></a></li>
							<li><a href="rejected_leave.php"><span class="micon dw dw-file-5"></span><span class="mtext"> Rejected Leave </span></a></li>
							
						</ul>
					</li>

					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a href="https://icstravelgroup.com" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Visit Us</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>