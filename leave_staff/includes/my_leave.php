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
								<li class="breadcrumb-item active" aria-current="page">My Leave</li>
							</ol>
						</nav>
					</div>
			</div>
		</div>
		<!--#Map Head-->

		<div class="">

			<!--@Page Title-->
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">MY LEAVE</h2>
			</div>
			<hr style="border-width: 2px;">
			<!--#Page Title-->

		<div class="p-2 pt-3 pb-3 mb-3" style="background-color: #F0F0F0;">
			<!--@Leave Count-->
			<div class="row pb-10 pl-3 pr-3">

				<div class="col-xl-1 col-lg-3 col-md-6"></div>
				
				<!--@All-->
				<div class="col-xl-2 col-lg-3 col-md-6">
					<div class="card-box height-100-p widget-style3">
						<?php
						$sql = "SELECT leaveID from tblleaves where empID='$session_id'";
						$query = $dbh -> prepare($sql);
						
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						$leavecount=$query->rowCount();
						?>        

						<div class="d-flex flex-wrap">
							<div class="widget-icon bg-dark">
								<div class="icon"><span style="color: white;" class="icon-copy dw dw-file-6"></span></div>
							</div>
							<div class="widget-data bg-white p-0 pt-1 pb-1" style="text-align: center;">
								<div class="weight-700 font-24 text-dark"><?php echo htmlentities($leavecount); ?></div>
								<div class="font-14 weight-500 text-secondary"><b>All</b></div>
							</div>
							
						</div>
					</div>
				</div>
				<!--#All-->

				<!--@Approved-->
				<div class="col-xl-2 col-lg-3 col-md-6">
					<div class="card-box height-100-p widget-style3">
						<?php
						$sql = "SELECT leaveID from tblleaves where empID='$session_id' AND leaveStatus=1";
						$query = $dbh -> prepare($sql);
						
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						$leavecount=$query->rowCount();
						?>        

						<div class="d-flex flex-wrap">
							<div class="widget-icon bg-dark">
								<div class="icon"><span style="color: white;" class="icon-copy dw dw-file-31"></span></div>
							</div>
							<div class="widget-data bg-white p-0 pt-1 pb-1" style="text-align: center;">
								<div class="weight-700 font-24 text-dark"><?php echo htmlentities($leavecount); ?></div>
								<div class="font-14 weight-500" data-color="green"><b>Approved</b></div>
							</div>
							
						</div>
					</div>
				</div>
				<!--#Approved-->

				<!--@Pending-->
				<div class="col-xl-2 col-lg-3 col-md-6">
					<div class="card-box height-100-p widget-style3">
						<?php
						
						$sql = "SELECT leaveID from tblleaves where empID='$session_id' AND leaveStatus=0";
						$query = $dbh -> prepare($sql);
						
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						$leavecount=$query->rowCount();
						?>        

						<div class="d-flex flex-wrap">
							<div class="widget-icon bg-dark">
								<div class="icon"><span style="color: white;" class="icon-copy dw dw-file-11"></span></div>
							</div>
							<div class="widget-data bg-white p-0 pt-1 pb-1" style="text-align: center;">
								<div class="weight-700 font-24 text-dark"><?php echo($leavecount); ?></div>
								<div class="font-14 weight-500" data-color="blue"><b>Pending</b></div>
							</div>
							
						</div>
					</div>
				</div>
				<!--#Pending-->

				<!--@Rejected-->
				<div class="col-xl-2 col-lg-3 col-md-6">
					<div class="card-box height-100-p widget-style3">
						<?php
						$sql = "SELECT leaveID from tblleaves where empID='$session_id' AND leaveStatus=2";
						$query = $dbh -> prepare($sql);
						
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						$leavecount=$query->rowCount();
						?>  

						<div class="d-flex flex-wrap">
							<div class="widget-icon bg-dark">
								<div class="icon" data-color="white"><span style="color: white;" class="icon-copy dw dw-file-21" aria-hidden="true"></span></div>
							</div>
							<div class="widget-data bg-white p-0 pt-1 pb-1" style="text-align: center;">
								<div class="weight-700 font-24 text-dark"><?php echo($leavecount); ?></div>
								<div class="font-14 weight-500" data-color="red"><b>Rejected</b></div>
							</div>
							
						</div>
					</div>
				</div>
				<!--#Rejected-->

				<!--@Expired-->
				<div class="col-xl-2 col-lg-3 col-md-6">
					<div class="card-box height-100-p widget-style3">
						<?php
						$sql = "SELECT leaveID from tblleaves where empID='$session_id' AND leaveStatus=4";
						$query = $dbh -> prepare($sql);
						
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						$leavecount=$query->rowCount();
						?>  

						<div class="d-flex flex-wrap">
							<div class="widget-icon">
								<div class="icon" data-color="white"><span style="color: white;" class="icon-copy dw dw-file2" aria-hidden="true"></span></div>
							</div>
							<div class="widget-data bg-white p-0 pt-1 pb-1" style="text-align: center;">
								<div class="weight-700 font-24 text-dark"><?php echo($leavecount); ?></div>
								<div class="font-14 weight-500" data-color="grey"><b>Expired</b></div>
							</div>
							
						</div>
					</div>
				</div>
				<!--#Expired-->

				<div class="col-xl-1 col-lg-3 col-md-6"></div>

			</div>
			<!--#Leave Count-->

			<!--@Table-->
			<ul class="nav nav-tabs customtab pt-1" role="tablist">
				<li class="pl-3 pr-3 bg-secondary nav-item col-xl-1 col-lg-4 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;"></li>
				<li class="pl-3 pr-3 bg-secondary nav-item col-xl-2 col-lg-4 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
					<a class="nav-link active" data-toggle="tab" href="#all" role="tab">All</a>
				</li>
				<li class="pl-3 pr-3 bg-secondary nav-item col-xl-2 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
					<a class="nav-link" data-toggle="tab" href="#approved" role="tab">Approved</a>
				</li>
				<li class="pl-3 pr-3 bg-secondary nav-item col-xl-2 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
					<a class="nav-link" data-toggle="tab" href="#pending" role="tab">Pending</a>
				</li>
				<li class="pl-3 pr-3 bg-secondary nav-item col-xl-2 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
					<a class="nav-link" data-toggle="tab" href="#rejected" role="tab">Rejected</a>
				</li>
				<li class="pl-3 pr-3 bg-secondary nav-item col-xl-2 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
					<a class="nav-link" data-toggle="tab" href="#expired" role="tab">Expired</a>
				</li>
				<li class="pl-3 pr-3 bg-secondary nav-item col-xl-1 col-lg-4 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;"></li>
			</ul>
			<div class="tab-content">

			<!--start all leave-->
				<div class="tab-pane fade show active" id="all" role="tabpanel">
					<div class="card-box" style="border-radius: 0px;">
						<div class="pb-20" style="min-height: 525px;">
							<table class="table stripe hover nowrap">
								<thead>
									<tr>
										<th>APPLIED DATE</th>
										<th>STAFF NAME</th>
										<th>LEAVE TYPE</th>
										<th>LEAVE STATUS</th>
										<th class="datatable-nosort">VIEW</th>
									</tr>
								</thead>
								<tbody>
									<tr>

										<?php 
							
										$sql = "SELECT * from tblleaves where empID='$session_id' order by leaveID desc";
											$query = mysqli_query($conn, $sql) or die(mysqli_error());
											while ($row = mysqli_fetch_array($query)) {
											  	$date = date('d-m-Y', strtotime($row['appliedDate']));
											  	$cnt=1;
										 ?>  

										<td><?php echo $date; ?></td>
										<td class="table-plus">
											<div class="name-avatar d-flex align-items-center">
												<div class="txt">
													<div class="weight-600"><?php echo $row['empName'];?></div>
												</div>
											</div>
										</td>
										<td><?php echo $row['leaveType']; ?></td>
			                            <td>
			                             <?php $stats=$row['leaveStatus'];
			                             if($stats==1){ ?>
			                             <span data-color="green">Approved</span>
			                             <?php } if($stats==2)  { ?>
			                             <span data-color="red">Rejected</span>
			                             <?php } if($stats==0)  { ?>
			                             <span data-color="blue">Pending</span>
			                             <?php } if($stats==3)  { ?>
			                             <span data-color="orange">Read</span>
			                             <?php } if($stats==4)  { ?>
			                             <span style="color: gray"><i>Expired</i></span>
			                             <?php } ?>
			                            </td>
										<td>
											<div>
												<a class="dropdown-item" href="leave_details.php?leaveid=<?php echo $row['leaveID']; ?>"><i class="dw dw-eye"></i></a>
											</div>
										</td>
									</tr>
									<?php $cnt++; }?>
								</tbody>
							</table>
					   </div>
					</div>
				</div>
			<!--end all leave-->

			<!--start approved leave-->
				<div class="tab-pane fade" id="approved" role="tabpanel">
					<div class="card-box" style="border-radius: 0px;">
						<div class="pb-20" style="min-height: 525px;">
							<table class="table stripe hover nowrap">
								<thead>
									<tr>
										<th>APPLIED DATE</th>
										<th>STAFF NAME</th>
										<th>LEAVE TYPE</th>
										<th>LEAVE STATUS</th>
										<th class="datatable-nosort">VIEW</th>
									</tr>
								</thead>
								<tbody>
									<tr>

										<?php 
							
										$sql = "SELECT * from tblleaves where empID='$session_id' AND leaveStatus=1 order by leaveID desc";
											$query = mysqli_query($conn, $sql) or die(mysqli_error());
											while ($row = mysqli_fetch_array($query)) {
											  	$date = date('d-m-Y', strtotime($row['appliedDate']));
											  	$cnt=1;
										 ?>  

										<td><?php echo $date; ?></td>
										<td class="table-plus">
											<div class="name-avatar d-flex align-items-center">
												<div class="txt">
													<div class="weight-600"><?php echo $row['empName'];?></div>
												</div>
											</div>
										</td>
										<td><?php echo $row['leaveType']; ?></td>
			                            <td>
			                             <?php $stats=$row['leaveStatus'];
			                             if($stats==1){ ?>
			                             <span data-color="green">Approved</span>
			                             <?php } if($stats==2)  { ?>
			                             <span data-color="red">Rejected</span>
			                             <?php } if($stats==0)  { ?>
			                             <span data-color="blue">Pending</span>
			                             <?php } if($stats==3)  { ?>
			                             <span data-color="orange">Read</span>
			                             <?php } if($stats==4)  { ?>
			                             <span style="color: gray"><i>Expired</i></span>
			                             <?php } ?>
			                            </td>
										<td>
											<div>
												<a class="dropdown-item" href="leave_details.php?leaveid=<?php echo $row['leaveID']; ?>"><i class="dw dw-eye"></i></a>
											</div>
										</td>
									</tr>
									<?php $cnt++; }?>
								</tbody>
							</table>
					   </div>
					</div>
				</div>
			<!--end approved leave-->

			<!--start pending leave-->
				<div class="tab-pane fade" id="pending" role="tabpanel">
					<div class="card-box" style="border-radius: 0px;">
						<div class="pb-20" style="min-height: 525px;">
							<table class="table stripe hover nowrap">
								<thead>
									<tr>
										<th>APPLIED DATE</th>
										<th>STAFF NAME</th>
										<th>LEAVE TYPE</th>
										<th>LEAVE STATUS</th>
										<th class="datatable-nosort">VIEW</th>
									</tr>
								</thead>
								<tbody>
									<tr>

										<?php 
							
										$sql = "SELECT * from tblleaves where empID='$session_id' AND leaveStatus=0 order by leaveID desc";
											$query = mysqli_query($conn, $sql) or die(mysqli_error());
											while ($row = mysqli_fetch_array($query)) {
											  	$date = date('d-m-Y', strtotime($row['appliedDate']));
											  	$cnt=1;
										 ?>  

										<td><?php echo $date; ?></td>
										<td class="table-plus">
											<div class="name-avatar d-flex align-items-center">
												<div class="txt">
													<div class="weight-600"><?php echo $row['empName'];?></div>
												</div>
											</div>
										</td>
										<td><?php echo $row['leaveType']; ?></td>
			                            <td>
			                             <?php $stats=$row['leaveStatus'];
			                             if($stats==1){ ?>
			                             <span data-color="green">Approved</span>
			                             <?php } if($stats==2)  { ?>
			                             <span data-color="red">Rejected</span>
			                             <?php } if($stats==0)  { ?>
			                             <span data-color="blue">Pending</span>
			                             <?php } if($stats==3)  { ?>
			                             <span data-color="orange">Read</span>
			                             <?php } if($stats==4)  { ?>
			                             <span style="color: gray"><i>Expired</i></span>
			                             <?php } ?>
			                            </td>
										<td>
											<div>
												<a class="dropdown-item" href="leave_details.php?leaveid=<?php echo $row['leaveID']; ?>"><i class="dw dw-eye"></i></a>
											</div>
										</td>
									</tr>
									<?php $cnt++; }?>
								</tbody>
							</table>
					   </div>
					</div>
				</div>
			<!--end pending leave-->

			<!--start rejected leave-->
				<div class="tab-pane fade" id="rejected" role="tabpanel">
					<div class="card-box" style="border-radius: 0px;">
						<div class="pb-20" style="min-height: 525px;">
							<table class="table stripe hover nowrap">
								<thead>
									<tr>
										<th>APPLIED DATE</th>
										<th>STAFF NAME</th>
										<th>LEAVE TYPE</th>
										<th>LEAVE STATUS</th>
										<th class="datatable-nosort">VIEW</th>
									</tr>
								</thead>
								<tbody>
									<tr>

										<?php 
							
										$sql = "SELECT * from tblleaves where empID='$session_id' AND leaveStatus=2 order by leaveID desc";
											$query = mysqli_query($conn, $sql) or die(mysqli_error());
											while ($row = mysqli_fetch_array($query)) {
											  	$date = date('d-m-Y', strtotime($row['appliedDate']));
											  	$cnt=1;
										 ?>  

										<td><?php echo $date; ?></td>
										<td class="table-plus">
											<div class="name-avatar d-flex align-items-center">
												<div class="txt">
													<div class="weight-600"><?php echo $row['empName'];?></div>
												</div>
											</div>
										</td>
										<td><?php echo $row['leaveType']; ?></td>
			                            <td>
			                             <?php $stats=$row['leaveStatus'];
			                             if($stats==1){ ?>
			                             <span data-color="green">Approved</span>
			                             <?php } if($stats==2)  { ?>
			                             <span data-color="red">Rejected</span>
			                             <?php } if($stats==0)  { ?>
			                             <span data-color="blue">Pending</span>
			                             <?php } if($stats==3)  { ?>
			                             <span data-color="orange">Read</span>
			                             <?php } if($stats==4)  { ?>
			                             <span style="color: gray"><i>Expired</i></span>
			                             <?php } ?>
			                            </td>
										<td>
											<div>
												<a class="dropdown-item" href="leave_details.php?leaveid=<?php echo $row['leaveID']; ?>"><i class="dw dw-eye"></i></a>
											</div>
										</td>
									</tr>
									<?php $cnt++; }?>
								</tbody>
							</table>
					   </div>
					</div>
				</div>
			<!--end rejected leave-->

			<!--start expired leave-->
				<div class="tab-pane fade" id="expired" role="tabpanel">
					<div class="card-box" style="border-radius: 0px;">
						<div class="pb-20" style="min-height: 525px;">
							<table class="table stripe hover nowrap">
								<thead>
									<tr>
										<th>APPLIED DATE</th>
										<th>STAFF NAME</th>
										<th>LEAVE TYPE</th>
										<th>LEAVE STATUS</th>
										<th class="datatable-nosort">VIEW</th>
									</tr>
								</thead>
								<tbody>
									<tr>

										<?php 
							
										$sql = "SELECT * from tblleaves where empID='$session_id' AND leaveStatus=4 order by leaveID desc";
											$query = mysqli_query($conn, $sql) or die(mysqli_error());
											while ($row = mysqli_fetch_array($query)) {
											  	$date = date('d-m-Y', strtotime($row['appliedDate']));
											  	$cnt=1;
										 ?>  

										<td><?php echo $date; ?></td>
										<td class="table-plus">
											<div class="name-avatar d-flex align-items-center">
												<div class="txt">
													<div class="weight-600"><?php echo $row['empName'];?></div>
												</div>
											</div>
										</td>
										<td><?php echo $row['leaveType']; ?></td>
			                            <td>
			                             <?php $stats=$row['leaveStatus'];
			                             if($stats==1){ ?>
			                             <span data-color="green">Approved</span>
			                             <?php } if($stats==2)  { ?>
			                             <span data-color="red">Rejected</span>
			                             <?php } if($stats==0)  { ?>
			                             <span data-color="blue">Pending</span>
			                             <?php } if($stats==3)  { ?>
			                             <span data-color="orange">Read</span>
			                             <?php } if($stats==4)  { ?>
			                             <span style="color: gray"><i>Expired</i></span>
			                             <?php } ?>
			                            </td>
										<td>
											<div>
												<a class="dropdown-item" href="leave_details.php?leaveid=<?php echo $row['leaveID']; ?>"><i class="dw dw-eye"></i></a>
											</div>
										</td>
									</tr>
									<?php $cnt++; }?>
								</tbody>
							</table>
					   </div>
					</div>
				</div>
			<!--end expired leave-->
			
			</div>
			<!--#Table-->
		</div>

		</div>
		<?php include('includes/footer.php'); ?>
	</div>
</div>