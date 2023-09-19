
<?php error_reporting(0);?>
<?php include('includes/header.php')?>
<?php include('../includes/session.php')?>

<?php

	if(isset($_POST['yes_delete']))
	{ 
		$did=intval($_GET['leaveid']);
		$sql = "delete from tbl_leaves where id='$did'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		while ($row = mysqli_fetch_array($query)) {}
?>
		<script>alert('Leave Successfully Deleted');</script>;
		<script>
		window.location = "leaves.php"; 
		</script>
	
	<?php
		
	}
	


	if(isset($_POST['no_delete']))
	{ 
		
?>
		<script>
		window.location = "leaves.php"; 
		</script>
	
	<?php
	
	}
	
	?>

<style>
	input[type="text"]
	{
	    font-size:16px;
	    color: #0f0d1b;
	    font-family: Verdana, Helvetica;
	}

	.btn-outline:hover {
	  color: #fff;
	  background-color: #524d7d;
	  border-color: #524d7d; 
	}

	textarea { 
		font-size:16px;
	    color: #0f0d1b;
	    font-family: Verdana, Helvetica;
	}

	textarea.text_area{
        height: 8em;
        font-size:16px;
	    color: #0f0d1b;
	    font-family: Verdana, Helvetica;
      }

	</style>

<body>
	<?php include('../includes/loader.php')?>

	<?php include('includes/navbar.php')?>

	<?php include('includes/right_sidebar.php')?>

	<?php include('includes/left_sidebar.php')?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="min-height-200px mb-20">
				
				<?php include('../includes/leave_details.php')?>
							
				<button style="background-color: red;" class="form-group btn btn-primary mr-4 ml-4" name="yes_delete">Delete</button>
							
				<button style="" class="form-group btn btn-primary" name="no_delete">Cancel</button>						

			</div>

			<?php include('includes/footer.php'); ?>
		
		</div>
	</div>
	<!-- js -->
	<?php include('includes/scripts.php')?>

</body>
</html>