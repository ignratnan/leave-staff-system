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
								<li class="breadcrumb-item active" aria-current="page">Leave Type</li>
							</ol>
						</nav>
					</div>
			</div>
		</div>
		<!--#Map Head-->

		<div class="">

			<!--@Page Title-->
			<div class="pd-20 pb-0">
				<h2 class="text-blue h4">LEAVE TYPE</h2>
			</div>
			<hr style="border-width: 2px;">
			<!--#Page Title-->

			<!--@Table-->
			<div class="row">
				
				<div class="col-lg-8 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 pt-10 height-100-p">
						<div class="pb-20">
							<table class="table stripe hover nowrap">
								<thead>
								<tr>
									<th class="table-plus">LEAVE TYPE</th>
									<th class="table-plus">DESCRIPTION</th>
									<th style="text-align: center;">ACTION</th>
								</tr>
								</thead>
								<tbody>

									<?php $sql = "SELECT * from tblleavetype";
									$query = $dbh -> prepare($sql);
									$query->execute();
									$results=$query->fetchAll(PDO::FETCH_OBJ);
									$cnt=1;
									if($query->rowCount() > 0)
									{
									foreach($results as $result)
									{               ?>  

									<tr>
										<td> <?php echo htmlentities($result->leaveType);?></td>
                                        <td><?php echo htmlentities($result->description);?></td>
                                        <td style="text-align: center;">
											<div>
												<a class="dropdown">
													<span class="no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
														<button class="dw dw-edit2 mr-3" style="box-shadow: none; border: none;"></button>
													</span>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
														<div id="edit" class="p-2 bg-dark">
															<form method="post">
																<h6 style="text-align: center; color: white;">Edit Leave Type</h6>
																<hr style="border-width: 1px; border-color: white;" class="m-0 mt-1 mb-1" />
																<label class="m-0" style="font-size: 12px; color: white;">Leave Type:</label><br/>
																<input class="m-0 mr-0 ml-0 pl-1 pr-1 mb-3" required type="text" name="leaveType" value="<?php echo htmlentities($result->leaveType);?>" style="width: 175px; font-size: 12px;" /><br/>
																<label class="m-0" style="font-size: 12px; color: white;">Description:</label><br/>
																<textarea class="m-0 mr-0 ml-0 pl-1 pr-1 mb-3" required type="text" name="description" value="" style="width: 175px; font-size: 12px;"><?php echo htmlentities($result->description);?></textarea><br/>
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
																<h6 style="text-align: center; color: white;">Delete Leave Type</h6>
																<hr style="border-width: 1px; border-color: white;" class="m-0 mt-1 mb-1" />
																<p class="p-1 mb-0" style="color: white; font-size: 14px;">Are you sure want to delete <b><?php echo htmlentities($result->leaveType); ?></b>?</p>
																<button class="pl-1 pr-1" type="submit" name="delete" value="<?php echo htmlentities($result->id); ?>" style="background-color: #B70404; color: white;">Delete</button>
															</form>
														</div>
													</div>
												</a>
											</div>
										</td>
									</tr>

									<?php $cnt++;} }?>  

								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 pt-10 height-100-p">
						<form method="post">
							<h6 style="text-align: center;">Add Leave Type</h6>
							<hr/>
							<label class="m-0" style="font-size: 12px;">Leave Type:</label><br/>
							<input class="m-0 mr-0 ml-0 pl-1 pr-1 mb-3" required type="text" name="leaveType" style="width: 250px; font-size: 12px;" /><br/>
							<label class="m-0" style="font-size: 12px;">Description:</label><br/>
							<textarea class="m-0 mr-0 ml-0 pl-1 pr-1 mb-3" required name="description" style="width: 250px; font-size: 12px;"></textarea><br/>
							<p style="text-align: center;">
								<button class="pl-1 pr-1" type="button" onclick="document.getElementById('bg-confirm').style.display='block'; document.getElementById('confirm').style.display='block';">Add</button>
							</p>

							<!--@Confirmation-->
							<div id="bg-confirm" style="position: fixed; left: 0px; right: 0px; top: 0px; bottom: 0px; background-color: black; display: none; opacity: 50%;"></div>
							<div id="confirm" style="position: fixed;left: 35%; right: 35%; top: 50%; bottom: 0px; display: none;">
									<div class="m-0" style="background-color: #ffffff; padding: 10px; width: 400px; text-align: center; border-radius: 12px;" >
										<p>Are you sure want to add this leave type ?</p>
										<p>
											<button class="p-1 mr-3" type="submit" name="add" id="confirmUpdate" value="update" style="width: 90px; background-color: #1A5D1A; color: white;">Yes</button>
											<button class="p-1 ml-3" type="button" onclick="document.getElementById('bg-confirm').style.display='none'; document.getElementById('confirm').style.display='none';" name="confirmCancel" id="confirmCancel" value="cancel" style="width: 90px; background-color: #B70404; color: white">No</button>

										</p>
									</div>
							</div>
							<!--#Confirmation-->
						</form>
					</div>
				</div>

			</div>
			<!--#Table-->

		</div>
		<?php include('includes/footer.php'); ?>
	</div>
</div>