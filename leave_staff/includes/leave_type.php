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
				
				<div class="col-lg-12 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 pt-10 height-100-p">
						<div class="pb-20">
							<table class="table stripe hover nowrap">
								<thead>
								<tr>
									<th class="table-plus">LEAVE TYPE</th>
									<th class="table-plus">DESCRIPTION</th>
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
									</tr>

									<?php $cnt++;} }?>  

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--#Table-->

		</div>
		<?php include('includes/footer.php'); ?>
	</div>
</div>