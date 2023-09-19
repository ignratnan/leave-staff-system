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
								<li class="breadcrumb-item active" aria-current="page">Department</li>
							</ol>
						</nav>
					</div>
			</div>
		</div>
		<!--#Map Head-->

		<div class="">

			<!--@Page Title-->
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">DEPARTMENT</h2>
			</div>
			<hr style="border-width: 2px;">
			<!--#Page Title-->

			<div class="row p-2 pt-3 pb-3 mb-3" style="background-color: #F0F0F0;">
			<!--@Table-->
				<div class="col-lg-12">
					<h5 class="pt-2 m-0 mb-2" style="text-align: left;">Department Info</h5>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 p-1">
					<div class="card-box pt-10 height-100-p">
						<div class="">
							<table class="table stripe hover nowrap">
								<thead>
								<tr>
									<th class="" style="width: 20px; text-align: center;">No</th>
									<th class="" style="width: 300px;">DEPARTMENT</th>
									<th class="" style="width: 60px; text-align: center;">SHORT NAME</th>
									<th class="" style="width: 300px; text-align: center;">ACTION</th>
								</tr>
								</thead>
								<tbody>

									<?php $sql = "SELECT * FROM tbldepartments WHERE departmentShortName='GM'";
									$query = $dbh -> prepare($sql);
									$query->execute();
									$results2=$query->fetchAll(PDO::FETCH_OBJ);
									$cnt=1;
									if($query->rowCount() > 0)
									{
									foreach($results2 as $result2)
									{               ?>  

									<tr class="p-0">
										<td class=""><?php echo htmlentities($cnt);?></td>
                                        <td style=""><?php echo htmlentities($result2->departmentName);?></td>
                                        <td style="width: 30px; text-align: center;"><?php echo htmlentities($result2->departmentShortName);?></td>
                                        <td style="text-align: center;">
                                        	
                                        	<?php 
                                        		$sql = "SELECT * FROM tbldepartments WHERE departmentShortName!='GM' AND id!=0"; 
                                        		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        	?>

                                        	<button class="pl-1 pr-1 m-0" id="showGM" onclick="
                                        	document.getElementById('GM').style.display='inline';
                                        	document.getElementById('showGM').style.backgroundColor='#1A5D1A';

                                        	<?php 
                                        		while ($row = mysqli_fetch_array($query)) {
                                        			echo "document.getElementById('".$row['departmentShortName']."').style.display='none';";
                                        			echo "document.getElementById('show".$row['departmentShortName']."').style.backgroundColor='#ffffff';";
                                        			echo "document.getElementById('noDepartment').style.display='none';";
                                        			echo "document.getElementById('showNot').style.backgroundColor='#ffffff';";
                                        		}
                                        	?> 
                                        	 
                                        	
                                        	" style="background: #1A5D1A;">Show</button>
                  
                                        </td>
									</tr>

									<?php $cnt++;} }?>

									<?php $sql = "SELECT * from tbldepartments WHERE departmentShortName!='GM' AND id != 0";
									$query = $dbh -> prepare($sql);
									$query->execute();
									$results=$query->fetchAll(PDO::FETCH_OBJ);
									$cnt=2;
									if($query->rowCount() > 1)
									{
									foreach($results as $result)
									{               ?>  

									<tr class="p-0">
										<td><?php echo htmlentities($cnt);?></td>
                                        <td><?php echo htmlentities($result->departmentName);?></td>
                                        <td style="width: 30px; text-align: center;"><?php echo htmlentities($result->departmentShortName);?></td>
                                        <td style="text-align: center;">

                                        	<?php 
                                        		$sql = "SELECT * FROM tbldepartments WHERE departmentShortName!='GM' AND departmentShortName!='$result->departmentShortName' AND id != 0"; 
                                        		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        	?>

                                        	<button class="pl-1 pr-1 m-0" id="<?php echo 'show'.htmlentities($result->departmentShortName); ?>" onclick="
                                        	document.getElementById('<?php echo htmlentities($result->departmentShortName); ?>').style.display='inline';
                                        	document.getElementById('<?php echo 'show'.htmlentities($result->departmentShortName); ?>').style.backgroundColor='#1A5D1A';

                                        	<?php 
                                        		while ($row = mysqli_fetch_array($query)) {
                                        			echo "document.getElementById('".$row['departmentShortName']."').style.display='none';";
                                        			echo "document.getElementById('show".$row['departmentShortName']."').style.backgroundColor='#ffffff';";
                                        			echo "document.getElementById('noDepartment').style.display='none';";
                                        			echo "document.getElementById('showNot').style.backgroundColor='#ffffff';";
                                        			echo "document.getElementById('GM').style.display='none';";
                                        			echo "document.getElementById('showGM').style.backgroundColor='#ffffff';";
                                        		}
                                        	?> 
                                        	 
                                        	
                                        	">Show</button>
                  
                                        </td>	
									</tr>
									<?php $cnt++;} }?>

									<tr>

									<?php
										$sql3 = "SELECT * FROM tbldepartments WHERE departmentShortName!='GM' AND id!=0"; 
                                        $query3 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));

									?>
										<td colspan="3" style="text-align: center;">No Department</td>
										<td style="text-align: center;">
											<button class="pl-1 pr-1 m-0" id="showNot" onclick="
                                        	document.getElementById('noDepartment').style.display='inline';
                                        	document.getElementById('showNot').style.backgroundColor='#1A5D1A';
		                                    <?php while ($row3 = mysqli_fetch_array($query3)) { ?>			                      					
		                      					document.getElementById('<?php echo $row3['departmentShortName']; ?>').style.display='none'; 
		                      					document.getElementById('<?php echo 'show'.$row3['departmentShortName']; ?>').style.backgroundColor='#ffffff';
		                      					document.getElementById('GM').style.display='none';
                                        		document.getElementById('showGM').style.backgroundColor='#ffffff';
			                      			<?php } ?>
                                        	">Show</button>
										</td>
									<tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-12 col-sm-12 p-1">
					<div class="card-box pt-10 height-100-p">
						<div class="">

							<?php
								$sql = "SELECT * FROM tblemployees JOIN tbldepartments ON tblemployees.depID = tbldepartments.id WHERE departmentShortName='GM'";
								$query = mysqli_query($conn, $sql);
								$count = mysqli_num_rows($query);
								while($row = mysqli_fetch_array($query)) {
							?>

							<div id="GM" class="" style="background: none; display: inline;">
								<div class="" style="font-family: tahoma; padding-left: 30px; padding-right: 30px;">
									<h6 class="pt-2 m-0 mb-2" style="text-align: center;">General Manager</h6>
									<hr style="border-width: 2px;" />
									<p class="ml-3"><?php echo $row['fullName']; ?></p>
								</div>
							</div>

							<?php } ?>

							<?php
								$sql5 = "SELECT * FROM tbldepartments WHERE departmentShortName!='GM'";
								$query5 = mysqli_query($conn, $sql5);
								while($row5 = mysqli_fetch_array($query5)){
								$depID = $row5['id'];
								$departmentName = $row5['departmentName'];
								$departmentShortName = $row5['departmentShortName'];
								$departmentHead = $row5['idHOD'];
							?>

							<div id="<?php echo $departmentShortName; ?>" class="card-box height-100-p" style="display: none; background: none;">
								<div class="pb-20" style="font-family: tahoma; padding-left: 30px; padding-right: 30px;">

									<h6 class="pt-2 m-0 mb-2" style="text-align: center;"><?php echo $departmentName; ?></h6>
									<hr style="border-width: 2px;" />
									<?php
										$sql = "SELECT * FROM tblemployees WHERE depID='$depID'";
										$query = mysqli_query($conn, $sql);
										$count = mysqli_num_rows($query);
									?>
									<p><b>Total: <?php echo $count; ?></b></p>

									<?php
										if ($departmentHead < 0) {
											$head = "Not Available Yet";
										} else {
											$sql = "SELECT * FROM tblemployees WHERE empID='$departmentHead'";
											$query = mysqli_query($conn, $sql);
											$row = mysqli_fetch_array($query);
											$head = $row['fullName'];
										}
									?>
									<div style=""><b>HOD:</b></div>
									<p class="ml-3"><?php echo $head; ?></p>

									<?php
										$sql = "SELECT * FROM tblemployees WHERE depID='$depID' AND role='Staff'";
										$query = mysqli_query($conn, $sql);
										$num = 1;
									?>
									<div><b>Staff:</b></div>
									<?php
										while ($row = mysqli_fetch_array($query)) {
									?>
									<p class="ml-3"><?php echo $num.". ".$row['fullName']; ?></p>
									<?php $num++; } ?>

								</div>
							</div>

							<?php } ?>

							<?php

							?>

							<div id="noDepartment" class="card-box height-100-p" style="display: none; background: none;">
								<div class="pb-20" style="font-family: tahoma; padding-left: 30px; padding-right: 30px;">

									<h6 class="pt-2 m-0 mb-2" style="text-align: center;">Don't have department yet</h6>
									<hr style="border-width: 2px;" />
									<?php
										$sql = "SELECT * FROM tblemployees WHERE depID='0'";
										$query = mysqli_query($conn, $sql);
										$count = mysqli_num_rows($query);
									?>
									<p><b>Total: <?php echo $count; ?></b></p>
									<div><b>Staff:</b></div>
									<?php
										$num = 1;
										while ($row = mysqli_fetch_array($query)) {
									?>
									<p class="ml-3"><?php echo $num.". ".$row['fullName']; ?></p>
									<?php $num++; } ?>

								</div>
							</div>

						</div>
					</div>
				</div>

			<!--#Table-->
			</div>

			<!--@Table-->
			<div class="row p-2 pt-3 pb-3 mb-3" style="background-color: #F0F0F0;">
				<div class="col-lg-12">
					<h5 class="pt-2 m-0 mb-2" style="text-align: left;">Edit Department</h5>
				</div>

				<div class="col-lg-12">
					<div class="card-box pt-10 height-100-p">
						<div class="">
							<table class="table stripe hover nowrap">
								<thead>
								<tr>
									<th style="text-align: center;">NO.</th>
									<th style="text-align: center;">DEPARTMENT</th>
									<th style="text-align: center;">SHORT NAME</th>
									<th style="text-align: center;">HOD</th>
									<th style="text-align: center;">ACTION</th>
								</tr>
								</thead>
								<tbody>

									<?php
									$sql = "SELECT * from tbldepartments WHERE id>0";
									$query = $dbh -> prepare($sql);
									$query->execute();
									$results=$query->fetchAll(PDO::FETCH_OBJ);
									$cnt=1;
									if($query->rowCount() > 0)
									{
									foreach($results as $result)
									{               
										$depID = htmlentities($result->id);
										$idHOD = htmlentities($result->idHOD);
										$departmentName = htmlentities($result->departmentName);
										$departmentShortName = htmlentities($result->departmentShortName);

									?>  

									<tr>
										<td><?php echo htmlentities($cnt);?></td>
                                        <td><?php echo $departmentName;?></td>
                                        <td style="text-align: center;"><?php echo $departmentShortName;?></td>
                                        <?php
                                        	if($idHOD>=0){
												$sql = "SELECT * FROM tblemployees WHERE empID='$idHOD'";
												$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
												$row = mysqli_fetch_array($query);
												$fullName = $row['fullName'];
											}else{
												$fullName = "Not Available";
											}
										?>
										<td><?php echo $fullName;?></td>
                                        <td style="text-align: center;">
                                        	<?php if($idHOD > 1) { ?>
											<div>
												<a class="dropdown">
													<span class="no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
														<button class="dw dw-edit2 mr-3" style="box-shadow: none; border: none;"></button>
													</span>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
														<div id="edit" class="p-2 bg-dark">
															<form method="post">
																<h6 style="text-align: center; color: white;">Edit Department</h6>
																<hr style="border-width: 1px; border-color: white;" class="m-0 mt-1 mb-1" />
																<label class="m-0" style="font-size: 12px; color: white;">Department Name:</label><br/>
																<input class="m-0 mr-0 ml-0 pl-1 pr-1 mb-3" autocomplete="off" require type="text" name="departmentName" value="<?php echo $departmentName;?>" style="width: 175px; font-size: 12px;" /><br/>
																<label class="m-0" style="font-size: 12px; color: white;">Department Short Name:</label><br/>
																<input class="m-0 mr-0 ml-0 pl-1 pr-1 mb-3" autocomplete="off" type="text" name="departmentShortName" value="<?php echo $departmentShortName;?>" style="width: 175px; font-size: 12px;" /><br/>
																<label class="m-0" style="font-size: 12px; color: white;">Head of Department:</label><br/>
																<select class="m-0 mr-0 ml-0 pl-1 pr-1 mb-3" name="headOf" autocomplete="off" style="width: 175px; font-size: 12px;">
																	<?php
																		$sql = "SELECT * FROM tblemployees WHERE empID='$idHOD'";
																		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
																		$row = mysqli_fetch_array($query);
																		$count = mysqli_num_rows($query);

																		if ($count > 0) {
																	?>
																	
																	<option value="<?php echo $row['empID']; ?>"><?php echo $row['fullName']; ?></option>

																	<?php
																		} else {
																	?>

																	<option value="-1">Not Available</option>

																	<?php
																		}
																	?>

																	<?php
																		$sql = "SELECT * FROM tblemployees WHERE depID='$depID' AND empID!='$idHOD'";
																		$query = mysqli_query($conn, $sql);
																		
																		while ($row = mysqli_fetch_array($query)) {
																	?>

																	<option value="<?php echo $row['empID']; ?>"><?php echo $row['fullName']; ?></option>

																	<?php } ?>

																</select>

																<p style="width: 175px; text-align: center;">
																	<button class="pl-1 pr-1" type="submit" name="edit" value="<?php echo htmlentities($result->id); ?>" style="">Save</button>
																</p>
															</form>
														</div>
													</div>
												</a>

												<a class="dropdown">
													<span class="no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
														<button class="dw dw-delete-3" style="box-shadow: none; border: none;"></button>
													</span>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
														<div id="delete" class="p-2 bg-dark" style="min-width: 180px;">
															<form method="post" class="p-1" style="text-align: center;">
																<h6 style="text-align: center; color: white;">Delete Department</h6>
																<hr style="border-width: 1px; border-color: white;" class="m-0 mt-1 mb-1" />
																<p class="p-1 mb-0" style="color: white; font-size: 14px;">Are you sure want to delete <b><?php echo htmlentities($result->departmentName); ?></b> department?</p>
																<button class="pl-1 pr-1" type="submit" name="delete" value="<?php echo htmlentities($result->id); ?>" style="background-color: #B70404; color: white;">Delete</button>
															</form>
														</div>
													</div>
												</a>
											</div>
											<?php } ?>
										</td>
									</tr>

									<?php $cnt++;} }?>  

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--#Table-->

			<!--@Add New Department-->
			<div class="row p-2 pt-3 pb-3 mb-3" style="background-color: #F0F0F0;">
				<div class="col-lg-12">
					<h5 class="p-2 pt-2 m-0 mb-2" style="text-align: left;">Add New Department</h5>
				</div>

				<div class="col-lg-12">
					<div class="card-box height-100-p p-2">
						<form method="post">
							<hr style="border-width: 1px;" class="m-0 mt-1 mb-1" />
							<table class="m-0">
								<tr>
									<th style="text-align: center;"><label class="m-0" style="font-size: 12px;">Department Name:</label></th>
									<th style="text-align: center;"><label class="m-0" style="font-size: 12px;">Department Short Name:</label></th>
									<th></th>
								</tr>
								<tr>
									<td class="">
										<p>
											<input class="pl-1 pr-1" type="text" autocomplete="off" name="departmentName" required style="width: 180px; font-size: 12px;" />
										</p>
									</td>
									<td class="pl-3 pr-3">
										<p>
											<input class="pl-1 pr-1" type="text" autocomplete="off" name="departmentShortName" required style="width: 180px; font-size: 12px;" />
										</p>
									</td class="">

									<td class="">
										<p style="width: 200px; text-align: center;">
											<input class="pl-1 pr-1" style="border-radius: 5px; width: 80px;" type="submit" name="add" value="Add" />
										</p>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<!--#Add New Department-->

		</div>
		<?php include('includes/footer.php'); ?>
	</div>
</div>