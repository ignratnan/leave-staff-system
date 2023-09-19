<div class="mobile-menu-overlay"></div>

<div class="main-container" style="background-color: #DCD7C9;">
	<div class="pd-ltr-20">
		<div class="min-height-200px">

			<!--Start Tampilan Leave Details-->
			
			<!--@Map Head-->
			<div class="page-header">
				<div class="row">
						<div class="col-md-6 col-sm-12">
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="all_leave.php">All Leave</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Leave</li>
								</ol>
							</nav>
						</div>
				</div>
			</div>
			<!--#Map Head-->

			<!--@Page Title-->
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">VIEW LEAVE</h2>
			</div>
			<hr style="border-width: 2px;">
			<!--#Page Title-->

			<!--@Leave Application-->
			<div class="pd-20 card-box mb-0">

				<!--@Form Title-->
				<div class="clearfix">
					<div class="p-2" style="text-align: center;">
						<p style="text-align: right; font-size: 12px; font-style: italic;">
							<?php 
								$id=intval($_GET['leaveid']);
								echo "id: ".$id;
							?>
						</p>
						<h4 class="text-black h4"><b>LEAVE APPLICATION</b></h4>
						<p class="m-0"></p>
					</div>
				</div>
				<!--#Form Title-->

				<form method="post" action="">

					<!--@Pemanggilan Database MySQL--> 
					<?php 
					if(!isset($_GET['leaveid']) && empty($_GET['leaveid'])){
						header('Location: index.php');
					}
					else {
						$lid=intval($_GET['leaveid']);
						$sql= "SELECT * FROM tblleaves WHERE leaveID='$lid'";
						$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
						$row= mysqli_fetch_array($query);

						$empName= $row['empName'];
						$department= $row['department'];
						$role= $row['role'];
						$numberDays= $row['numberDays'];
						$leaveType= $row['leaveType'];
						$leaveReason= $row['leaveReason'];
						$hrRemark= $row['hrRemark'];
						$hrStatus= $row['hrStatus'];
						$hrName= $row['hrName'];
						$hodRemark= $row['hodRemark'];
						$hodStatus= $row['hodStatus'];
						$hodName= $row['hodName'];
						$gmRemark= $row['gmRemark'];
						$gmStatus= $row['gmStatus'];
						$gmName= $row['gmName'];
						$leaveStatus= $row['leaveStatus'];
						
							$dateFormat='d-m-Y';
						$fromDate= date($dateFormat, strtotime($row['fromDate']));
						$toDate= date($dateFormat,strtotime($row['toDate']));
						$appliedDate= date($dateFormat,strtotime($row['appliedDate']));
						$hrDate= date($dateFormat,strtotime($row['hrDate']));
						$hodDate= date($dateFormat,strtotime($row['hodDate']));
						$gmDate= date($dateFormat,strtotime($row['gmDate']));
					?>
					<!--#Pemanggilan Database MySQL-->   

					<!--@Leave Details-->
					<div class="col-md-2 col-sm-12 p-0 mb-1">
						<h5 style="font-size:16px; color: #524d7d;"><b>LEAVE DETAILS</b></h5>
						<hr class="m-0" style="border-width: 2px;">
					</div>
				
					<hr class="m-0" style="border-width: 2px;">
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Name</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo $empName; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Department</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" class="selectpicker form-control" data-style="btn-outline-info" readonly value="<?php echo $department; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Role</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" class="selectpicker form-control" data-style="btn-outline-info" readonly value="<?php echo $role; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					
					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Leave Period</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" class="selectpicker form-control" data-style="btn-outline-info" readonly value="From <?php echo $fromDate; ?> to <?php echo $toDate; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Number of Days</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="number" class="selectpicker form-control" data-style="btn-outline-info" readonly name="num_days" value="<?php echo $numberDays; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Leave Type</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" class="selectpicker form-control" data-style="btn-outline-info" readonly value="<?php echo $leaveType; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Leave Reason</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<textarea name=""class="form-control text_area" readonly type="text"><?php echo $leaveReason; ?></textarea>
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">

					<div class="row">
						<div class="col-md-2 col-sm-12 p-3 pl-4">
							<h5 style="font-size:16px;"><b>Applied Date</b></h5>
						</div>
						<div class="col-md-10 col-sm-12">
							<input type="text" class="selectpicker form-control" data-style="btn-outline-success" readonly value="<?php echo $appliedDate; ?>">
						</div>
					</div>
					<hr class="m-0" style="border-width: 2px;">
					<hr class="m-0 mt-1" style="border-width: 2px;">
					<!--#Leave Details-->
					
					<!--@Leave Approval-->
					<div class="col-md-2 col-sm-12 p-0 mb-1 mt-3">
						<h5 style="font-size:16px; color: #524d7d;"><b>LEAVE APPROVAL</b></h5>
						<hr class="m-0" style="border-width: 2px;">
					</div>
					<hr class="m-0 mb-1" style="border-width: 2px;">
					
					<!--@HR Approval-->
					<div class="clearfix pl-2">
						<label style="font-size:17px"><b>Human Resources</b></label>
					</div>

					<!--@HR Remarks-->
					<div class="form-group row pl-2">
							<label style="font-size:16px;" class="col-sm-12 col-md-2 col-form-label"><b>- Remarks</b></label>
							<div class="col-sm-12 col-md-10">
								<?php 
								if ($leaveStatus==4){ ?>
								  	<input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly style="color: gray; font-style: italic;"  value="<?php echo "-"; ?>">
								  	<?php }else{ ?>
									<?php								
									if ($hrRemark==""): ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Waiting for Approval"; ?>">
									<?php else: ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo $hrRemark; ?>">
									<?php endif ?>
								<?php } ?>
							</div>
					</div>
					<!--#HR Remarks-->

					<!--@HR Status-->
					<div class="form-group row pl-2">
						<label style="font-size:16px;" class="col-sm-12 col-md-2 col-form-label"><b>- Status</b></label>
						<div class="col-md-3">

							<!--@Status Option-->
							<div class="form-group">
								<?php $hr_stats=$hrStatus;?>
								<?php
								if ($hr_stats==0): ?>
								  <input type="text" style="color: blue; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Pending"; ?>">
								  <?php
								 elseif ($hr_stats==1): ?>
								  <input type="text" style="color: green; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Approved"; ?>">
								  <?php
								 elseif ($hr_stats==2): ?>
								  <input type="text" style="color: red; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Rejected"; ?>">
								  <?php
								 elseif ($hr_stats==3): ?>
								  <input type="text" style="color: orange; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Read"; ?>">
								  <?php
								 elseif ($hr_stats==4): ?>
								  <input type="text" style="color: gray; font-size: 16px; font-style: italic;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Not Available"; ?>">
								  <?php
								 elseif ($hr_stats==5): ?>
								  <input type="text" style="color: purple; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Recorded"; ?>">
								  <?php
								 elseif ($hr_stats==6): ?>
								  <input type="text" style="color: gray; font-size: 16px; font-style: italic;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Expired"; ?>">
								  <?php
								else: ?>
								  <input type="text" style="color: black; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Error"; ?>">
								<?php endif ?>
							</div>
							<!--@Status Option-->

							<!--@Approver Name-->
							<label style="font-size:14px; margin-top: 0px" class=""><b>
									<?php echo "( ".$hrName." )"; ?>
								</b></label>
							<!--#Approver Name-->

						</div>
						<label style="font-size:16px; text-align: right;" class="col-sm-12 col-md-2 col-form-label"><b>Date</b></label>
							<div class="col-md-3">
								
								<!--@Approval Date-->
								<div class="form-group">
									<?php
									if ($row['hrDate']==""): ?>
									  <input type="text" class="selectpicker form-control font-italic" data-style="btn-outline-primary" readonly value="<?php echo "-"; ?>">
									<?php else: ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo $hrDate; ?>">
									<?php endif ?>
								</div>
								<!--@Approval Date-->

							</div>
					</div>
					<!--#HR Status-->
					<!--#HR Approval-->

					<hr class="mt-1 mb-1" style="border-width: 2px;">

				<?php
					if ($role == 'Staff') {
				?>

					<!--@HOD Approval-->
					<div class="clearfix pl-2">
						<label style="font-size:17px"><b>Head of Department</b></label>
					</div>

					<!--@HOD Remarks-->
					<div class="form-group row pl-2">
							<label style="font-size:16px;" class="col-sm-12 col-md-2 col-form-label"><b>- Remarks</b></label>
							<div class="col-sm-12 col-md-10">
								<?php 
								if ($leaveStatus==4){ ?>
								  	<input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly style="color: gray; font-style: italic;"  value="<?php echo "-"; ?>">
								  	<?php }else{ ?>
									<?php
									if ($hodRemark=="" and $hodStatus==0): ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Waiting for Approval"; ?>">
									<?php elseif ($hrStatus==2): ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "-"; ?>">
									<?php else: ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo $hodRemark; ?>">
									<?php endif ?>
								<?php } ?>
							</div>
					</div>
					<!--#HOD Remarks-->

					<!--@HOD Status-->
					<div class="form-group row pl-2">
							<label style="font-size:16px;" class="col-sm-12 col-md-2 col-form-label"><b>- Status</b></label>
							<div class="col-md-3">

								<!--@Status Option-->
								<div class="form-group">
									<?php $hod_stats=$hodStatus;?>
									<?php
									if ($hod_stats==0): ?>
									  <input type="text" style="color: blue; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Pending"; ?>">
									  <?php
									 elseif ($hod_stats==1): ?>
									  <input type="text" style="color: green; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Approved"; ?>">
									  <?php
									 elseif ($hod_stats==2): ?>
									  <input type="text" style="color: red; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Rejected"; ?>">
									  <?php
									 elseif ($hod_stats==3): ?>
									  <input type="text" style="color: orange; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Read"; ?>">
									  <?php
									 elseif ($hod_stats==4): ?>
									  <input type="text" style="color: gray; font-size: 16px; font-style: italic;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Not Available"; ?>">
									  <?php
									 elseif ($hod_stats==6): ?>
									  <input type="text" style="color: gray; font-size: 16px; font-style: italic;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Expired"; ?>">
									  <?php
									else: ?>
									  <input type="text" style="color: black; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Error"; ?>">
									<?php endif ?>
								</div>
								<!--#Status Option-->

								<!--@Approval Name-->
								<label style="font-size:14px; margin-top: 0px" class=""><b>
									<?php echo "( ".$hodName." )"; ?>
								</b></label>
								<!--#Approval Name-->

							</div>
							<label style="font-size:16px; text-align: right;" class="col-sm-12 col-md-2 col-form-label"><b>Date</b></label>
							<div class="col-md-3">

								<!--@Approval Date-->
								<div class="form-group">
									<?php
									if ($row['hodDate']==""): ?>
									  <input type="text" class="selectpicker form-control font-italic" data-style="btn-outline-primary" readonly value="<?php echo "-"; ?>">
									<?php else: ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo $hodDate; ?>">
									<?php endif ?>
								</div>
								<!--#Approval Date-->

							</div>
					</div>
					<!--#HOD Status-->
					<!--#HOD Approval-->

					<hr class="mt-1 mb-1" style="border-width: 2px;">

				<?php
					}
				?>

					<!--@GM Approval-->
					<div class="clearfix pl-2">
						<label style="font-size:17px"><b>General Manager</b></label>
					</div>

					<!--@GM Remarks-->
					<div class="form-group row pl-2">
							<label style="font-size:16px;" class="col-sm-12 col-md-2 col-form-label"><b>- Remarks</b></label>
							<div class="col-sm-12 col-md-10">
								<?php 
								if ($leaveStatus==4){ ?>
								  	<input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly style="color: gray; font-style: italic;"  value="<?php echo "-"; ?>">
								  	<?php }else{ ?>
									<?php
									if ($gmRemark=="" and $gmStatus==0): ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Waiting for Approval"; ?>">
									<?php elseif ($hrStatus==2 or $hodStatus==2 or $leaveStatus==4): ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "-"; ?>">
									<?php else: ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo $gmRemark; ?>">
									<?php endif ?>
								<?php } ?>
							</div>
					</div>
					<!--#GM Remarks-->

					<!--@GM Status-->
					<div class="form-group row pl-2">
							<label style="font-size:16px;" class="col-sm-12 col-md-2 col-form-label"><b>- Status</b></label>
							<div class="col-md-3">

								<!--@Status Option-->
								<div class="form-group">
									<?php $gm_stats=$gmStatus;?>
									<?php
									if ($gm_stats==0): ?>
									  <input type="text" style="color: blue; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Pending"; ?>">
									  <?php
									 elseif ($gm_stats==1): ?>
									  <input type="text" style="color: green; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Approved"; ?>">
									  <?php
									 elseif ($gm_stats==2): ?>
									  <input type="text" style="color: red; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Rejected"; ?>">
									  <?php
									 elseif ($gm_stats==3): ?>
									  <input type="text" style="color: orange; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Read"; ?>">
									  <?php
									 elseif ($gm_stats==4): ?>
									  <input type="text" style="color: gray; font-size: 16px; font-style: italic;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Not Available"; ?>">
									  <?php
									 elseif ($gm_stats==6): ?>
									  <input type="text" style="color: gray; font-size: 16px; font-style: italic;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Expired"; ?>">
									  <?php
									else: ?>
									  <input type="text" style="color: black; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo "Error"; ?>">
									<?php endif ?>
								</div>
								<!--#Status Option-->

								<!--@Approval Name-->
								<label style="font-size:14px; margin-top: 0px" class=""><b>
									<?php echo "( ".$gmName." )"; ?>
								</b></label>
								<!--@Approval Name-->

							</div>
							<label style="font-size:16px; text-align: right;" class="col-sm-12 col-md-2 col-form-label"><b>Date</b></label>
							<div class="col-md-3">

								<!--@Approval Date-->
								<div class="form-group">
									<?php
									if ($row['gmDate']==""): ?>
									  <input type="text" class="selectpicker form-control font-italic" data-style="btn-outline-primary" readonly value="<?php echo "-"; ?>">
									<?php else: ?>
									  <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="<?php echo $gmDate; ?>">
									<?php endif ?>
								</div>
								<!--#Approval Date-->

							</div>
					</div>
					<!--#GM Status-->
					<!--#GM Approval-->

					<hr class="m-0" style="border-width: 2px;">
					<hr class="m-0 mt-1" style="border-width: 2px;">
					<!--#Leave Approval-->

					<!--@Leave Status-->
					<div class="col-md-2 col-sm-12 p-0 mb-1 mt-3">
						<h5 style="font-size:16px; color: #524d7d;"><b>LEAVE STATUS</b></h5>
						<hr class="m-0" style="border-width: 2px;">
					</div>
					<hr class="m-0 mt-1 mb-1" style="border-width: 2px;">

					<!--@Leave Status Approved-->
					<div class="row">
						<?php if ($leaveStatus==1){ ?>
						<div class="col-md-2 pl-4 pt-1 mb-2">
							<input type="text" style="color: green;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="Approved">
						</div>
						<div class="col-md-12">
							<label style="font-size:16px;">To: <?php echo $empName; ?></label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label style="font-size:16px;">Please note that your leave has been approved.</label>
						</div>
					</div>
					<!--#Leave Status Approved-->

					<!--@Leave Status Rejected-->
					<div class="row">
						<?php } elseif ($leaveStatus==2){ ?>
						<div class="col-md-2 pl-4 pt-1 mb-2">
							<input type="text" style="color: red;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="Rejected">
						</div>
						<div class="col-md-12">
						   <label style="font-size:16px;">To: <?php echo $empName; ?></label>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-12">
							<label style="font-size:16px;">Please note that your leave has been rejected.</label>
						</div>
					</div>
					<!--#Leave Status Rejected-->

					<!--@Leave Status Expired-->
					<div class="row">
						<?php } elseif ($leaveStatus==4){ ?>
						<div class="col-md-2 pl-4 pt-1 mb-2">
							<input type="text" style="color: gray;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="Expired">
						</div>
						<div class="col-md-12">
						   <label style="font-size:16px;">To: <?php echo $empName; ?></label>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-12">
							<label style="font-size:16px;">Sorry, your leave application has been expired.</label>
						</div>
					</div>
					<!--#Leave Status Expired-->

					<!--@Leave Status Pending-->
					<div class="row">
						<?php } elseif ($leaveStatus==0){ ?>
						<div class="col-md-2 pl-4 pt-1">
							<input type="text" style="color: blue;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="Pending">
						</div>
					</div>
					<!--#Leave Status Pending-->

					<!--@Leave Status Error-->
					<div class="row">
						<?php } else{ ?>
						<div class="col-md-2 pl-4">
							<input type="text" style="color: black;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="Error">
						</div>
					</div>
						<?php } ?>
					<!--#Leave Status Error-->

					<?php } ?>
				</form>
			</div>
			<!--#Leave Application-->

			<!--End Tampilan Leave Details-->

		</div>
			
		<?php include('includes/footer.php')?>

	</div>
</div>