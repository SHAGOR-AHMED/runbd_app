
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Update Record</h3>
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
						<form name="account" class="forms-sample" action="<?php echo base_url('account/update_account'); ?>" method="post" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Biker Name</label>
								<div class="col-sm-9">
									<select class="form-control" name="biker_name" onchange="get_subscription_fees(this.value)">
										<?= getMembers();?>
									</select>
								</div>
								<div class="help-block"><?php echo form_error('biker_name'); ?></div>
							</div>

							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Subscription Fee</label>
								<div class="col-sm-9">
									<input type="text" name="subsciption_fees" id="subsciption_fees" value="<?= $selected_info->subsciption_fees; ?>" class="form-control">
								</div>
								<div class="help-block"><?php echo form_error('subsciption_fees'); ?></div>
								<p id="output"></p>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">From</label>
								<div class="col-sm-9">
									<input type="date" name="from_date" value="<?= $selected_info->from_date; ?>" class="form-control">
								</div>
								<div class="help-block"><?php echo form_error('from_date'); ?></div>
							</div>

							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">To</label>
								<div class="col-sm-9">
									<input type="date" name="to_date" value="<?= $selected_info->to_date; ?>" class="form-control">
								</div>
								<div class="help-block"><?php echo form_error('to_date'); ?></div>
							</div>

							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Total Payable</label>
								<div class="col-sm-9">
									<input type="number" name="total_payable" value="<?= $selected_info->total_payable; ?>" class="form-control" placeholder="Enter Total Payable Amount">
									<div class="help-block"><?php echo form_error('total_payable'); ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Total Deposite</label>
								<div class="col-sm-9">
									<input type="number" name="total_deposite" value="<?= $selected_info->total_deposite; ?>" class="form-control" placeholder="Enter Total Deposite Amount">
									<div class="help-block"><?php echo form_error('total_deposite'); ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Total Incentive</label>
								<div class="col-sm-9">
									<input type="number" name="total_incentive" value="<?= $selected_info->total_incentive; ?>" class="form-control" placeholder="Enter Total Incentive Amount">
									<div class="help-block"><?php echo form_error('total_incentive'); ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Total Loan</label>
								<div class="col-sm-9">
									<input type="number" name="loan" value="<?= $selected_info->loan; ?>" class="form-control" placeholder="Enter Total Loan Amount">
								</div>
							</div>

							<input type="hidden" name="account_id" value="<?= $selected_info->account_id; ?>" class="form-control">
							
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
	document.forms['account'].elements['biker_name'].value = '<?= $selected_info->biker_name; ?>';
</script>

<script type="text/javascript">
    function get_subscription_fees(val) {
        $(document).ready(function () {
            $.ajax({
                url: "<?php echo base_url(); ?>member/display_subscription_fees/" + val,
                success: function (data, res) {
                    if (res == "success") {
                        $("#subsciption_fees").css("display", "");
                        document.getElementById("subsciption_fees").value = data;
                        document.getElementById("output").innerHTML = "";
                    } else {
                        $("#subsciption_fees").css("display", "none");
                        document.getElementById("output").innerHTML = res;
                    }
                }
            });
        });
    }
</script>