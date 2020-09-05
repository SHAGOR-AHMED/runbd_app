<script type="text/javascript">
	function validate(){

	    if( document.service.biker_name.value == "0" ){

	    	alert( "Please Select A Biker!" );
	    	return false;
	    }
	    return( true );
	}
</script>

<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Check Servicing Information</h3>
			<a class="nav-link" href="<?= base_url('servicing/add_servicing');?>">
            	<span class="btn btn-primary">+ Create new</span>
            </a>
		</div>
	  
		<div class="card">
			<div class="card-body">
				<div class="row grid-margin">
					<?php 
						if(!empty($message)){
					?>
						<div class="alert alert-block alert-success">
							<button type="button" class="close" data-dismiss="alert">
								<i class="ace-icon fa fa-times"></i>
							</button>
							<i class="ace-icon fa fa-check green"></i>
							<?php echo $message; ?>
						</div>
					<?php } ?>
                </div>

                <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<form name="service" class="forms-sample" action="<?php echo base_url('servicing/'); ?>" method="post">
									<div class="form-group row">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Biker Name</label>
										<div class="col-sm-9">
											<select class="form-control" name="biker_name">
												<?= getMembers();?>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary mr-2">Search</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="order-listing" class="table">
								<thead>
									<tr>
										<th>SN</th>
										<th>Biker Name</th>
										<th>Bike Number</th>
										<th>Next Servicing Date</th>
										<th>Next KM For Servicing</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										if(!empty($servicing)){					
											$count = 0;
											foreach($servicing as $val){
									?>
									<tr>
										<td class="center"><?php echo $count+1; ?></td>
										<td><?php echo $val->member_name; ?></td>
										<td><?php echo $val->bike_no; ?></td>
										<td><?php echo $val->next_servicing_date; ?></td>
										<td><?php echo $val->next_km.' KM'; ?></td>
										<td><?php SelectedStatus($val->status); ?></td>
										<td>
											<?php
												if($val->status == 1){?>
													----
												<?php }elseif($val->status == 0){ ?>

													<a href="<?= base_url('servicing/DoneServicing/'.$val->servicing_id);?>" onclick="return confirm('Are you sure ?')"><button class="btn btn-outline-success">Done</button></a>

											<?php } ?>
										</td>
									</tr>
									
									<?php 
											$count++;
											}//foreach
										}else{
											echo '<tr>';
												echo '<td colspan="13">'.'No Data Found'.'</td>';
											echo '</tr>';
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>