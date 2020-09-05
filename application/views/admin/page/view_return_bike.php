
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">All Return Bike List</h3>
			<a class="nav-link" href="<?= base_url('bike/add_returnBike');?>">
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
					<div class="col-12">
						<div class="table-responsive">
							<table id="order-listing" class="table">
								<thead>
									<tr>
										<th>SN</th>
										<th>Biker Name</th>
										<th>Bike No</th>
										<th>Last Kilometer</th>
										<th>Distribution Date</th>
										<th>Return Date</th>
										<th>Total Days</th>
										<th>Purpose</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										if(!empty($return_bike)){					
											$count = 0;
											foreach($return_bike as $val){
									?>
									<tr>
										<td class="center"><?php echo $count+1; ?></td>
										<td><?php echo $val->member_name; ?></td>
										<td><?php echo $val->bike_no; ?></td>
										<td><?php echo $val->last_kilometer.' km'; ?></td>
										<td><?php echo $val->distribution_date; ?></td>
										<td><?php echo $val->return_date; ?></td>
										<td><?php echo $val->total_days.' days'; ?></td>
										<td><?php echo $val->purpose; ?></td>
										<td>
											<a href="<?= base_url('bike/edit_returnBike/'.$val->return_id);?>"><button class="btn btn-outline-success">Edit</button></a>
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