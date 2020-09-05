<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
            <h3 class="page-title">All Penalty List</h3>
			<a class="nav-link" href="<?= base_url('penalty/add_penalty');?>">
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
										<th>Joining Date</th>
										<th>Release Date</th>
										<th>Working Days</th>
										<th>Total Deposite</th>
										<th>Late Deposite</th>
										<th>Depreciation</th>
										<th>Total Fine</th>
										<th>Purpose</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										if(!empty($all_penalty)){					
											$count = 0;
											foreach($all_penalty as $val){
									?>
									<tr>
										<td class="center"><?php echo $count+1; ?></td>
										<td><?php echo $val->member_name; ?></td>
										<td><?php echo $val->joining_date; ?></td>
										<td><?php echo $val->release_date; ?></td>
										<td><?php echo $val->working_days; ?></td>
										<td><?php echo "BDT ".$val->total_deposite; ?></td>
										<td><?php echo "BDT ".$val->late_deposite; ?></td>
										<td><?php echo "BDT ".$val->depreciation; ?></td>
										<td><?php echo "BDT ".$val->total_fine; ?></td>
										<td><?php echo $val->purpose; ?></td>
										<td>
											<a href="<?= base_url('penalty/edit_penalty/'.$val->penalty_id);?>"><button class="btn btn-outline-success">Edit</button></a>
											<a href="<?= base_url('penalty/delete_penalty/'.$val->penalty_id);?>" onclick="return confirm('Are you sure ?')"><button class="btn btn-outline-danger">Delete</button></a>
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