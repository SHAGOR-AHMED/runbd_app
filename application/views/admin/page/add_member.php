
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Add New Member</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Forms</a></li>
					<li class="breadcrumb-item active" aria-current="page">Form elements</li>
				</ol>
			</nav>
		</div>
		
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" action="<?php echo base_url('member/save_member'); ?>" method="post" enctype="multipart/form-data">
							
							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Member Name</label>
								<div class="col-sm-9">
									<input type="text" name="member_name" class="form-control" placeholder="Enter Member Name">
									<div class="help-block"><?php echo form_error('member_name'); ?></div>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Official Number</label>
								<div class="col-sm-9">
									<input type="number" name="official_number" class="form-control" placeholder="Enter Mobile No">
									<div class="help-block"><?php echo form_error('official_number'); ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Personal Number</label>
								<div class="col-sm-9">
									<input type="number" name="personal_number" class="form-control" placeholder="Enter Mobile No">
									<div class="help-block"><?php echo form_error('personal_number'); ?></div>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Joining Date</label>
								<div class="col-sm-9">
									<input type="date" name="joining_date" id="date" class="form-control" placeholder="Enter Registration Date">
									<div class="help-block"><?php echo form_error('joining_date'); ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Father Mobile No</label>
								<div class="col-sm-9">
									<input type="number" name="father_mobile" class="form-control" placeholder="Enter Father Mobile No">
									<div class="help-block"><?php echo form_error('father_mobile'); ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Mother Mobile No</label>
								<div class="col-sm-9">
									<input type="number" name="mother_mobile" class="form-control" placeholder="Enter Mother Mobile No">
									<div class="help-block"><?php echo form_error('mother_mobile'); ?></div>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label"> Upload Image</label>
								<div class="col-sm-9">
									<input type="file" name="img" class="file-upload-default">
									<div class="input-group col-xs-12">
										<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
										<span class="input-group-append">
											<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
										</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary mr-2">Save</button>
							<button class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function () {
        $('#date').datepick();
    });
</script>