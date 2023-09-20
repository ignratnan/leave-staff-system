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

			<!--@Table-->
			<div class="row">
					
				<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 pt-10 height-100-p">
						<div class="pb-20">
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


				<div class="col-lg-6 col-md-6 col-sm-12 mb-30 bg-white pt-3 pb-3" style="border-radius: 10px;">

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
			<!--#Table-->

		</div>
		<?php include('includes/footer.php'); ?>
	</div>
</div>