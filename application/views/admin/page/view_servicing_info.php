
<div class="main-panel">          
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">View Servicing Information</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active" aria-current="page">Tabs</li>
				</ol>
			</nav>
		</div>

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
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">Servicing Pending</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">Servicing Done</a>
							</li>
						</ul>
						
						<div class="tab-content">
							<div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
								<div class="media">
									<div class="media-body">
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
													</tr>
												</thead>
												<tbody>
													<?php 
														if(!empty($servicing_Notdone)){					
															$count = 0;
															foreach($servicing_Notdone as $val){
													?>
													<tr>
														<td class="center"><?php echo $count+1; ?></td>
														<td><?php echo $val->member_name; ?></td>
														<td><?php echo $val->bike_no; ?></td>
														<td><?php echo $val->next_servicing_date; ?></td>
														<td><?php echo $val->next_km.' KM'; ?></td>
														<td><?php SelectedStatus($val->status); ?></td>
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

							<div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
								<div class="media">
									<div class="media-body">
										<div class="table-responsive">
											<table id="order-listing" class="table">
												<thead>
													<tr>
														<th>SN</th>
														<th>Biker Name</th>
														<th>Bike Number</th>
														<th>Servicing Date</th>
														<th>Kilometer</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<?php 
														if(!empty($servicing_done)){					
															$count = 0;
															foreach($servicing_done as $val){
													?>
													<tr>
														<td class="center"><?php echo $count+1; ?></td>
														<td><?php echo $val->member_name; ?></td>
														<td><?php echo $val->bike_no; ?></td>
														<td><?php echo $val->next_servicing_date; ?></td>
														<td><?php echo $val->next_km.' KM'; ?></td>
														<td><?php SelectedStatus($val->status); ?></td>
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
			</div>
		</div>
	  
	</div>
</div>