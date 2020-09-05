
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">All Bike List</h3>
			<a class="nav-link" href="<?= base_url('bike/add_bike');?>">
            	<span class="btn btn-primary">+ Create new</span>
            </a>
		</div>
	  
		<div class="card">
			<div class="card-body">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><i class="ace-icon fa fa-home home-icon"></i>&nbsp;<a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">
							<?php 
								$url = current_url();
								// $end = end(explode('/', $url));
								// echo "<a href='$end'>".$end."</a>";
								$end = explode('/', $url);
								$length = sizeof($end);
								$lasttwo=$end[$length-2].' > '.$end[$length-1];
								echo '<a href="">'.$lasttwo.'</a>';
							?>
						</li>
					</ol>
				</nav>
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
										<th>Bike Category</th>
										<th>Bike Number</th>
										<th>Chasis Number</th>
										<th>Engine Number</th>
										<th>Stored Date</th>
										<th>Image</th>
										<!-- <th>Status</th> -->
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										if(!empty($bikes)){					
											$count = 0;
											foreach($bikes as $val){
									?>
									<tr>
										<td class="center"><?php echo $count+1; ?></td>
										<td><?php SelectedInfo($val->bike_category); ?></td>
										<td><?php echo $val->bike_no; ?></td>
										<td><?php echo $val->chasis_no; ?></td>
										<td><?php echo $val->engine_no; ?></td>
										<td><?php echo $val->stored_date; ?></td>
										<td>
											<?php if($val->img == "./assets/admin/uploads/"){?>
													<img height="50" width="60" src="<?= base_url('');?>assets/admin/images/unknown.jpg" />
											<?php }else { ?>
													<a href="<?= base_url($val->img);?>" target="_blank">
														<img height="50" width="60" src="<?= base_url($val->img);?>" title="<?php echo $val->img;?>" />
													</a>
											<?php } ?>
										</td>
										<!-- <td><label class="badge badge-info">On hold</label></td> -->
										<td>
											<a href="<?= base_url('bike/viewBike_history/'.$val->bike_id);?>"><button class="btn btn-outline-primary"><i class="fa fa-eye"></i> Details</button></a>
											<a href="<?= base_url('bike/edit_bike/'.$val->bike_id);?>"><button class="btn btn-outline-success"><i class="fa fa-edit"></i> Edit</button></a>
											<!-- <a href="<?= base_url('bike/delete_bike/'.$val->bike_id);?>" onclick="return confirm('Are you sure ?')"><button class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i> Delete</button></a> -->
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