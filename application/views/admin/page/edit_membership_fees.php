
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Update Membership Fees</h3>
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
						<form name="membership" class="forms-sample" action="<?php echo base_url('member/update_MembershipFees'); ?>" method="post">
							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Member Name</label>
								<div class="col-sm-9">
									<select class="form-control" name="member_id">
										<?= getMembers();?>
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Amount</label>
								<div class="col-sm-9">
									<input type="number" name="amount" value="<?= $selected_info->amount; ?>" class="form-control" placeholder="Enter Amount">
								</div>
							</div>

							<input type="hidden" name="fees_id" class="form-control" value="<?= $selected_info->fees_id; ?>">
							
							<button type="submit" class="btn btn-primary mr-2">Update</button>
							<button class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	document.forms['membership'].elements['member_id'].value = '<?= $selected_info->member_id; ?>';
</script>