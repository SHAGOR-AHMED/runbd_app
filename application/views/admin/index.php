<!DOCTYPE html>
<html lang="en">
	<head>
	  	<!-- Required meta tags -->
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  	<title><?= $title; ?></title>
	  	<!-- plugins:css -->
	  	<link rel="stylesheet" href="<?= base_url('assets/admin/');?>vendors/iconfonts/font-awesome/css/all.min.css">
	  	<link rel="stylesheet" href="<?= base_url('assets/admin/');?>vendors/css/vendor.bundle.base.css">
	  	<link rel="stylesheet" href="<?= base_url('assets/admin/');?>vendors/css/vendor.bundle.addons.css">
	  	<!-- endinject -->
	  	<link rel="stylesheet" href="<?= base_url('assets/admin/');?>css/style.css">
	  	<!-- endinject -->
	  	<link rel="shortcut icon" href="http://www.urbanui.com/" />
<!-- 
	  	<link rel="stylesheet" href="<?php echo base_url()."assets/admin/css/datepicker.css"; ?>" />
		<link rel="stylesheet" href="<?php echo base_url()."assets/admin/css/bootstrap-timepicker.css"; ?>" />
		<link rel="stylesheet" href="<?php echo base_url()."assets/admin/css/daterangepicker.css"; ?>" />
		<link rel="stylesheet" href="<?php echo base_url()."assets/admin/css/bootstrap-datetimepicker.css"; ?>" />
		<link href="<?= base_url('assets/dt_picker/jquery.datepick.css'); ?>" rel="stylesheet">
		<script src="<?= base_url('assets/dt_picker/jquery.datepick.js'); ?>" type="text/javascript"></script> -->

	</head>
	<body>
		<div class="container-scroller">
			<!-- header -->
			<?php include('page/header.php');?>
			<!-- //header -->
			<div class="container-fluid page-body-wrapper">
				<?php include('page/left_side.php');?>
				<!-- main panel -->
				<?php 
					if(isset($content)){
						echo $content;
					}else{
						echo "Found Nothing";
					}
				?>
				<!-- main-panel ends -->
			</div>
		</div>
		<!-- container-scroller -->
		<!-- plugins:js -->
		<script src="<?= base_url('assets/admin/');?>vendors/js/vendor.bundle.base.js"></script>
		<script src="<?= base_url('assets/admin/');?>vendors/js/vendor.bundle.addons.js"></script>
		<!-- endinject -->
		<script src="<?= base_url('assets/admin/');?>js/off-canvas.js"></script>
		<script src="<?= base_url('assets/admin/');?>js/hoverable-collapse.js"></script>
		<script src="<?= base_url('assets/admin/');?>js/misc.js"></script>
		<script src="<?= base_url('assets/admin/');?>js/settings.js"></script>
		<script src="<?= base_url('assets/admin/');?>js/todolist.js"></script>
		<!-- endinject -->
		<!-- Custom js for this page-->
		<script src="<?= base_url('assets/admin/');?>js/dashboard.js"></script>
		<script src="<?= base_url('assets/admin/');?>js/data-table.js"></script>
		<script src="<?= base_url('assets/admin/');?>js/file-upload.js"></script>
		<script src="<?= base_url('assets/admin/');?>js/typeahead.js"></script>
		<script src="<?= base_url('assets/admin/');?>js/select2.js"></script>
		<script src="<?= base_url('assets/admin/');?>js/tabs.js"></script>
		<!-- End custom js for this page-->
	</body>
</html>