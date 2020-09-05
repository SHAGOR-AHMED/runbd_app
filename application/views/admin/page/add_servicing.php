
<script type="text/javascript">
	function validate(){
	    if( document.service.biker_name.value == "0" ){
	    	alert( "Please Select A Member!" );
	    	return false;
	    }
	    return( true );
	}
</script>

<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Add Servicing Date</h3>
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
						<form name="service" class="forms-sample" action="<?php echo base_url('servicing/save_servicing'); ?>" method="post" onsubmit="return(validate());">

							<!--<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Biker Name</label>
								<div class="col-sm-9">
									<select class="form-control" name="biker_name" onchange="get_bike_no(this.value)">
										<?= getMembers();?>
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Bike No</label>
								<div class="col-sm-9">
									<input type="text" name="bike_no" id="bike_no" value="" class="form-control" placeholder="Enter bike no">
								</div>
								<p id="output"></p>
							</div> -->

							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Biker Name</label>
								<div class="col-sm-9">
									<select class="form-control" name="biker_name">
										<?= getMembers();?>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Bike No</label>
								<div class="col-sm-9">
									<select class="form-control" name="bike_no">
										<?= getBikesNo();?>
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Next Servicing Date</label>
								<div class="col-sm-9">
									<input type="date" name="next_servicing_date" class="form-control" placeholder="Enter Next Servicing Date">
									<div class="help-block"><?php echo form_error('next_servicing_date'); ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Next KM For Servicing</label>
								<div class="col-sm-9">
									<input type="text" name="next_km" class="form-control" placeholder="Enter Next KM For Servicing">
									<div class="help-block"><?php echo form_error('next_km'); ?></div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary mr-2">Save</button>
							<button class="btn btn-danger">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    function get_bike_no(val) { 
    	//alert('hello i m here');
        $(document).ready(function () {
            $.ajax({
                url: "<?php echo base_url(); ?>member/display_bike_no/" + val,
                success: function (data, res) {
                    if (res == "success") {
                        $("#bike_no").css("display", "");
                        document.getElementById("bike_no").value = data;
                        document.getElementById("output").innerHTML = "";
                    } else {
                        $("#bike_no").css("display", "none");
                        document.getElementById("output").innerHTML = res;
                    }
                }
            });
        });
    }
</script>