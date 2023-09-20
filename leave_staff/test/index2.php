<div class="mobile-menu-overlay"></div>

<div class="main-container"  style="background-color: #DCD7C9;">
	<div class="pd-ltr-20">

		<!--@Greetings-->
		<div class="card-box pd-20 height-100-p mb-30 col-md-3">
			<div class="row align-items-center">
				<div class="col-md-12">

					<?php $query= mysqli_query($conn,"select * from tblemployees where empID = '$session_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
					?>

					<h4 class="font-20 weight-500 mb-10 text-capitalize">
						Welcome back, <div class="weight-600 font-30 text-blue"><?php echo $row['firstName']. " " .$row['lastName']; ?></div>
					</h4>
				</div>
			</div>
		</div>
		<!--#Greetings-->

		<!--@Page Title-->	
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">DASHBOARD</h2>
			</div>
			<hr style="border-width: 2px;">
		<!--#Page Title-->	

		<!--@Leave Type-->
		<ul class="nav nav-tabs customtab mb-20" role="tablist">
			<li class="pl-3 pr-3 bg-secondary nav-item col-xl-3 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
				<a class="nav-link active p-0" data-toggle="tab" href="#" role="tab"><h5 class=" h3 m-0 p-1">My Leave</h4></a>
			</li>
			<li class="pl-3 pr-3 bg-secondary nav-item col-xl-3 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
				<!--<a class="nav-link p-0" data-toggle="tab" href="#" role="tab"></a>-->
			</li>
			<li class="pl-3 pr-3 bg-secondary nav-item col-xl-3 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
				<!--<a class="nav-link p-0" data-toggle="tab" href="#" role="tab"></a>-->
			</li>
			<li class="pl-3 pr-3 bg-secondary nav-item col-xl-3 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
				<!--<a class="nav-link p-0" data-toggle="tab" href="#" role="tab"></a>-->
			</li>
		</ul>
		<!--#Leave Type-->

		<!--@Leave Count-->
		<div class="row pb-10 pl-3 pr-3">
			
			<!--@All-->
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
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
						<div class="widget-data bg-white">
							<div class="weight-700 font-24 text-dark"><?php echo htmlentities($leavecount); ?></div>
							<div class="font-14 weight-500 text-secondary"><b>All</b></div>
						</div>
						
					</div>
				</div>
			</div>
			<!--#All-->

			<!--@Approved-->
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<?php
					$sql = "SELECT leaveID from tblleaves where empID='$session_id' and gmStatus=1";
					$query = $dbh -> prepare($sql);
					
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$leavecount=$query->rowCount();
					?>        

					<div class="d-flex flex-wrap">
						<div class="widget-icon bg-dark">
							<div class="icon"><span style="color: white;" class="icon-copy dw dw-file-31"></span></div>
						</div>
						<div class="widget-data bg-white">
							<div class="weight-700 font-24 text-dark"><?php echo htmlentities($leavecount); ?></div>
							<div class="font-14 weight-500" data-color="green"><b>Approved</b></div>
						</div>
						
					</div>
				</div>
			</div>
			<!--#Approved-->

			<!--@Pending-->
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<?php
					
					$sql = "SELECT leaveID from tblleaves where empID='$session_id' and gmStatus=0";
					$query = $dbh -> prepare($sql);
					
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$leavecount=$query->rowCount();
					?>        

					<div class="d-flex flex-wrap">
						<div class="widget-icon bg-dark">
							<div class="icon"><span style="color: white;" class="icon-copy dw dw-file-11"></span></div>
						</div>
						<div class="widget-data bg-white">
							<div class="weight-700 font-24 text-dark"><?php echo($leavecount); ?></div>
							<div class="font-14 weight-500" data-color="blue"><b>Pending</b></div>
						</div>
						
					</div>
				</div>
			</div>
			<!--#Pending-->

			<!--@Rejected-->
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<?php
					$sql = "SELECT leaveID from tblleaves where empID='$session_id' and (hrStatus=2 or hodStatus=2 or gmStatus=2)";
					$query = $dbh -> prepare($sql);
					
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$leavecount=$query->rowCount();
					?>  

					<div class="d-flex flex-wrap">
						<div class="widget-icon bg-dark">
							<div class="icon" data-color="white"><span style="color: white;" class="icon-copy dw dw-file-21" aria-hidden="true"></span></div>
						</div>
						<div class="widget-data bg-white">
							<div class="weight-700 font-24 text-dark"><?php echo($leavecount); ?></div>
							<div class="font-14 weight-500" data-color="red"><b>Rejected</b></div>
						</div>
						
					</div>
				</div>
			</div>
			<!--#Rejected-->

		</div>
		<!--#Leave Count-->

		<!--@Table-->
		<ul class="nav nav-tabs customtab" role="tablist">
			<li class="pl-3 pr-3 bg-secondary nav-item col-xl-3 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
				<a class="nav-link active" data-toggle="tab" href="#all" role="tab">All</a>
			</li>
			<li class="pl-3 pr-3 bg-secondary nav-item col-xl-3 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
				<a class="nav-link" data-toggle="tab" href="#approved" role="tab">Approved</a>
			</li>
			<li class="pl-3 pr-3 bg-secondary nav-item col-xl-3 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
				<a class="nav-link" data-toggle="tab" href="#pending" role="tab">Pending</a>
			</li>
			<li class="pl-3 pr-3 bg-secondary nav-item col-xl-3 col-lg-3 col-md-6 mb-20 p-1" style="text-align: center; border-radius: 0px;">
				<a class="nav-link" data-toggle="tab" href="#rejected" role="tab">Rejected</a>
			</li>
		</ul>
		<div class="tab-content">

		<!--start all leave-->
			<div class="tab-pane fade show active" id="all" role="tabpanel">
				<div class="card-box mb-30" style="border-radius: 0px;">
					<div class="pb-20">
						<table class="table stripe hover nowrap">
							<thead>
								<tr>
									<th>APPLIED DATE</th>
									<th>STAFF NAME</th>
									<th>LEAVE TYPE</th>
									<th>HR STATUS</th>
									<th>HOD STATUS</th>
									<th>GM STATUS</th>
									<th class="datatable-nosort">VIEW</th>
								</tr>
							</thead>
							<tbody>
								<tr>

									<?php 
						
									$sql = "SELECT * from tblleaves where empID='$session_id' order by leaveID desc limit 5";
										$query = mysqli_query($conn, $sql) or die(mysqli_error());
										while ($row = mysqli_fetch_array($query)) {
										  $cnt=1;
									 ?>  

									<td><?php echo $row['appliedDate']; ?></td>
									<td class="table-plus">
										<div class="name-avatar d-flex align-items-center">
											<div class="txt">
												<div class="weight-600"><?php echo $row['empName'];?></div>
											</div>
										</div>
									</td>
									<td><?php echo $row['leaveType']; ?></td>
		                            <td><?php $stats=$row['hrStatus'];
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
									<td><?php $stats=$row['hodStatus'];
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
		                            <td><?php $stats=$row['gmStatus'];
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
									<td>
										<div>
											<a class="dropdown-item" href="leave_details.php?leaveid=<?php echo $row['leaveID']; ?>"><i class="dw dw-eye"></i></a>
										</div>
									</td>
								</tr>
								<?php $cnt++; }?>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><a href="my_leave.php" data-color="blue">More</a></td>
								</tr>
							</tbody>
						</table>
				   </div>
				</div>
			</div>
		<!--end all leave-->

		<!--start approved leave-->
			<div class="tab-pane fade" id="approved" role="tabpanel">
				<div class="card-box mb-30" style="border-radius: 0px;">
					<div class="pb-20">
						<table class="table stripe hover nowrap">
							<thead>
								<tr>
									<th>APPLIED DATE</th>
									<th>STAFF NAME</th>
									<th>LEAVE TYPE</th>
									<th>HR STATUS</th>
									<th>HOD STATUS</th>
									<th>GM STATUS</th>
									<th class="datatable-nosort">VIEW</th>
								</tr>
							</thead>
							<tbody>
								<tr>

									<?php 
						
									$sql = "SELECT * from tblleaves where empID='$session_id'and gmStatus=1 order by leaveID desc limit 5";
										$query = mysqli_query($conn, $sql) or die(mysqli_error());
										while ($row = mysqli_fetch_array($query)) {
										  $cnt=1;
									 ?>  

									<td><?php echo $row['appliedDate']; ?></td>
									<td class="table-plus">
										<div class="name-avatar d-flex align-items-center">
											<div class="txt">
												<div class="weight-600"><?php echo $row['empName'];?></div>
											</div>
										</div>
									</td>
									<td><?php echo $row['leaveType']; ?></td>
		                            <td><?php $stats=$row['hrStatus'];
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
									<td><?php $stats=$row['hodStatus'];
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
		                            <td><?php $stats=$row['gmStatus'];
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
									<td>
										<div>
											<a class="dropdown-item" href="leave_details.php?leaveid=<?php echo $row['leaveID']; ?>"><i class="dw dw-eye"></i></a>
										</div>
									</td>
								</tr>
								<?php $cnt++; }?>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><a href="my_leave.php" data-color="blue">More</a></td>
								</tr>
							</tbody>
						</table>
				   </div>
				</div>
			</div>
		<!--end approved leave-->

		<!--start pending leave-->
			<div class="tab-pane fade" id="pending" role="tabpanel">
				<div class="card-box mb-30" style="border-radius: 0px;">
					<div class="pb-20">
						<table class="table stripe hover nowrap">
							<thead>
								<tr>
									<th>APPLIED DATE</th>
									<th>STAFF NAME</th>
									<th>LEAVE TYPE</th>
									<th>HR STATUS</th>
									<th>HOD STATUS</th>
									<th>GM STATUS</th>
									<th class="datatable-nosort">VIEW</th>
								</tr>
							</thead>
							<tbody>
								<tr>

									<?php 
						
									$sql = "SELECT * from tblleaves where empID='$session_id' and gmStatus=0 order by leaveID desc limit 5";
										$query = mysqli_query($conn, $sql) or die(mysqli_error());
										while ($row = mysqli_fetch_array($query)) {
										  $cnt=1;
									 ?>  

									<td><?php echo $row['appliedDate']; ?></td>
									<td class="table-plus">
										<div class="name-avatar d-flex align-items-center">
											<div class="txt">
												<div class="weight-600"><?php echo $row['empName'];?></div>
											</div>
										</div>
									</td>
									<td><?php echo $row['leaveType']; ?></td>
		                            <td><?php $stats=$row['hrStatus'];
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
									<td><?php $stats=$row['hodStatus'];
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
		                            <td><?php $stats=$row['gmStatus'];
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
									<td>
										<div>
											<a class="dropdown-item" href="leave_details.php?leaveid=<?php echo $row['leaveID']; ?>"><i class="dw dw-eye"></i></a>
										</div>
									</td>
								</tr>
								<?php $cnt++; }?>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><a href="my_leave.php" data-color="blue">More</a></td>
								</tr>
							</tbody>
						</table>
				   </div>
				</div>
			</div>
		<!--end pending leave-->

		<!--start rejected leave-->
			<div class="tab-pane fade" id="rejected" role="tabpanel">
				<div class="card-box mb-30" style="border-radius: 0px;">
					<div class="pb-20">
						<table class="table stripe hover nowrap">
							<thead>
								<tr>
									<th>APPLIED DATE</th>
									<th>STAFF NAME</th>
									<th>LEAVE TYPE</th>
									<th>HR STATUS</th>
									<th>HOD STATUS</th>
									<th>GM STATUS</th>
									<th class="datatable-nosort">VIEW</th>
								</tr>
							</thead>
							<tbody>
								<tr>

									<?php 
						
									$sql = "SELECT * from tblleaves where empID='$session_id' and (hrStatus=2 or hodStatus=2 or gmStatus=2) order by leaveID desc limit 5";
										$query = mysqli_query($conn, $sql) or die(mysqli_error());
										while ($row = mysqli_fetch_array($query)) {
										  $cnt=1;
									 ?>  

									<td><?php echo $row['appliedDate']; ?></td>
									<td class="table-plus">
										<div class="name-avatar d-flex align-items-center">
											<div class="txt">
												<div class="weight-600"><?php echo $row['empName'];?></div>
											</div>
										</div>
									</td>
									<td><?php echo $row['leaveType']; ?></td>
		                            <td><?php $stats=$row['hrStatus'];
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
									<td><?php $stats=$row['hodStatus'];
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
		                            <td><?php $stats=$row['gmStatus'];
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
									<td>
										<div>
											<a class="dropdown-item" href="leave_details.php?leaveid=<?php echo $row['leaveID']; ?>"><i class="dw dw-eye"></i></a>
										</div>
									</td>
								</tr>
								<?php $cnt++; }?>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><a href="my_leave.php" data-color="blue">More</a></td>
								</tr>
							</tbody>
						</table>
				   </div>
				</div>
			</div>
		<!--end rejected leave-->
		
		</div>
		<!--#Table-->

		<?php include('footer.php'); ?>
	</div>
</div>