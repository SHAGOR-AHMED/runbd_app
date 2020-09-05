
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">All Member's List</h3>
			<a class="nav-link" href="<?= base_url('member/add_member');?>">
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
										<th>Member Name</th>
										<th>Official Number</th>
										<th>Personal Number</th>
										<th>Joining Date</th>
										<th>Image</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										if(!empty($all_members)){					
											$count = 0;
											foreach($all_members as $val){
									?>
									<tr>
										<td class="center"><?php echo $count+1; ?></td>
										<td><?php echo $val->member_name; ?></td>
										<td><?php echo $val->official_number; ?></td>
										<td><?php echo $val->personal_number; ?></td>
										<td><?php echo $val->joining_date; ?></td>
										<td>
											<?php if($val->img == "./assets/admin/uploads/"){?>
													<img height="50" width="60" src="<?= base_url('');?>assets/admin/images/unknown.jpg" />
											<?php }else { ?>
													<a href="<?= base_url($val->img);?>" target="_blank">
														<img src="<?= base_url($val->img);?>" title="<?php echo $val->img;?>" />
													</a>
											<?php } ?>
										</td>
										<td>
											<a href="#">Details</a> | 
											<a href="<?= base_url('member/edit_member/'.$val->member_id);?>">Edit</a> | 
											<a href="<?= base_url('member/delete_member/'.$val->member_id);?>" onclick="return confirm('Are you sure ?')">Delete</a>
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