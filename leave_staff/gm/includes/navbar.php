<div class="header">
	<div class="header-left">
		<div class="menu-icon dw dw-menu"></div>
	</div>
	<div class="header-right">
		<div class="user-info-dropdown">
			<div class="dropdown">

				<?php $query= mysqli_query($conn,"SELECT * FROM tblemployees WHERE empID = '$session_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
					?>

				<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="user-icon" style="width: 50px; height: 50px;">
						<img src="<?php echo (!empty($row['location'])) ? '../uploads/'.$row['location'] : '../uploads/NO-IMAGE-AVAILABLE.jpg'; ?>" alt="" style="width: 50px; height: 50px;">
					</span>
					<span class="user-name"><?php echo $row['fullName']; ?></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
					<a class="dropdown-item" href="my_profile.php"><i class="dw dw-user1"></i> Profile</a>
					<a class="dropdown-item" href="change_password.php"><i class="dw dw-help"></i> Reset Password</a>
					<a class="dropdown-item" href="../logout.php"><i class="dw dw-logout"></i> Log Out</a>
				</div>
			</div>
		</div>
		
	</div>
</div>