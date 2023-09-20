

<!--
<?php if(isset($_POST['apply'])){ 

	
		$empid=$session_id;

		$sql= "SELECT tblemployees.firstName,tblemployees.lastName,tblemployees.department,tbldepartments.departmentName FROM tblemployees JOIN tbldepartments ON tblemployees.department = tbldepartments.departmentShortName WHERE tblemployees.empID = '$session_id'";
		$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
		$row= mysqli_fetch_array($query);

		$empID= $session_id;
		$empName= $row['firstName']." ".$row['lastName'];
		$department= $row['department'];
		$departmentName= $row['departmentName'];
		$fromDate= $_POST['date_from'];
		$toDate= $_POST['date_to'];
		
			$tgl1 = strtotime("$fromDate");
			$tgl2 = strtotime("$toDate");
			$jarak = $tgl2 - $tgl1;
			$hari = $jarak / 60 / 60 / 24;

		$numberDays= $hari + 1;
		$leaveType= $_POST['leave_type'];
		$leaveReason= $_POST['description'];
		$appliedDate= date('Y-m-d');
		$leaveStatus= 0;
		
			$sql2= "SELECT * FROM tblemployees WHERE department='HR' AND role='HOD'";
			$query2= mysqli_query($conn, $sql2) or die(mysqli_error($conn));
			$row2= mysqli_fetch_array($query2);
		$hrName= $row2['firstName']." ".$row2['lastName'];
		
			$sql2= "SELECT * FROM tblemployees WHERE department='$department' AND role='HOD'";
			$query2= mysqli_query($conn, $sql2) or die(mysqli_error($conn));
			$row2= mysqli_fetch_array($query2);
		$hodName= $row2['firstName']." ".$row2['lastName'];

			$sql3= "SELECT * FROM tblemployees WHERE department='GM'";
			$query3= mysqli_query($conn, $sql3) or die(mysqli_error($conn));
			$row3= mysqli_fetch_array($query3);
		$gmName= $row3['firstName']." ".$row3['lastName'];

		$hrStatus=0;
		$hodStatus=0;
		$gmStatus=0;

			$sql4= "SELECT * FROM tblemployees WHERE empID='$session_id'";
			$query4= mysqli_query($conn, $sql4) or die(mysqli_error($conn));
			$row4= mysqli_fetch_array($query4);
			$avLeave= $row4['avLeave'];
			$emp_avLeave= $avLeave-$numberDays;


		if($fromDate > $toDate){
		    echo "<script>alert('End Date should be greater than Start Date');</script>";
		}elseif( $emp_avLeave <= 0){
		    echo "<script>alert('YOU HAVE EXCEEDED YOUR LEAVE LIMIT. LEAVE APPLICATION FAILED');</script>";
		
		}else{
			
			$sql="INSERT INTO tblleaves(empID,empName,department,fromDate,toDate,numberDays,leaveType,leaveReason,appliedDate,hrStatus,hrName,hodStatus,hodName,gmStatus,gmName,leaveStatus) VALUES('$empID','$empName','$departmentName','$fromDate','$toDate','$numberDays','$leaveType','$leaveReason','$appliedDate','$harStatus','$hrName','$hodStatus','$hodName','$gmStatus','$gmName','$leaveStatus')";
			$query = mysqli_query($conn, $sql);
			
			if($query)
			{
				echo "<script>alert('Leave Application was successful.');</script>";
				echo "<script type='text/javascript'> document.location = 'my_leave.php'; </script>";
			}
			else 
			{
				echo "<script>alert('Something went wrong. Please try again');</script>";
			}

		}

	}

	?>
-->


<div class="mobile-menu-overlay"></div>

<div class="main-container" style="background-color: #DCD7C9;">
	<div class="pd-ltr-20 xs-pd-20-10">

		<!--@Map Head-->
		<div class="page-header">
			<div class="row">
					<div class="col-md-6 col-sm-12">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Apply Leave</li>
							</ol>
						</nav>
					</div>
			</div>
		</div>
		<!--#Map Head-->

		<div class="">

			<!--@Page Title-->
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">APPLY LEAVE</h2>
			</div>
			<hr style="border-width: 2px;">
			<!--#Page Title-->

			<!--@Leave Application Form-->
			<div class="pd-20 card-box mb-30">
				
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Leave Application Form</h4>
						<p class="mb-20"></p>
					</div>
				</div>

				<div class="wizard-content">
					<form method="post" action="">
						<section>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Leave Type :</label>
										<select name="leave_type" class="custom-select form-control" required="true" autocomplete="off">
										<option value="">Select leave type...</option>
										<?php $sql = "SELECT  leaveType from tblleavetype";
										$query = $dbh -> prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
										foreach($results as $result)
										{   ?>                                            
										<option value="<?php echo htmlentities($result->leaveType);?>"><?php echo htmlentities($result->leaveType);?></option>
										<?php }} ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Start Leave Date :</label>
										<input name="date_from" type="date" class="form-control" required="true" autocomplete="off">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>End Leave Date :</label>
										<input name="date_to" type="date" class="form-control" required="true" autocomplete="off">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Reason For Leave :</label>
										<textarea id="textarea1" name="description" class="form-control" required length="150" maxlength="150" required="true" autocomplete="off"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12" style="text-align: center;">
									<div class="form-group">
										<label style="font-size:16px;"><b></b></label>
										<div>
											<input type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary" name="presubmit" id="presubmit" value="Apply Leave">
										</div>
									</div>
								</div>
							</div>
							<div id="id01" class="modal">						
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content" style="">
											<div class="modal-body text-center font-18">
												<h4 class="mb-20">Apply Leave</h4>
											</div>
											<div class="modal-footer justify-content-center">
												<p class="">
													Are you sure want to apply this leave?
												</p>
												<p class="mt-3">
													<input type="submit" class="btn btn-primary mr-3" name="apply" value="Submit" style="background-color: #1A5D1A;">
													<input type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-primary ml-3" name="cancel" id="cancel" value="Cancel" style="background-color: #B70404;">
												</p>
											</div>
										</div>
									</div>	
							</div>
						</section>
					</form>
				</div>
			</div>
			<!--#Leave Application Form-->

		</div>
		<?php include('includes/footer.php'); ?>
	</div>
</div>