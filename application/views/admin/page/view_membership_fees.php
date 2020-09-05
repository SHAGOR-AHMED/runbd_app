
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Membership Fees List</h3>
			<a class="nav-link" href="<?= base_url('member/add_membershipFees');?>">
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
										<th>Amount</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										if(!empty($membership_fees)){					
											$count = 0;
											foreach($membership_fees as $val){
									?>
									<tr>
										<td class="center"><?php echo $count+1; ?></td>
										<td><?php echo $val->member_name; ?></td>
										<td><?php echo 'BDT '.$val->amount; ?></td>
										<td>
											<a href="<?= base_url('member/Edit_MembershipFees/'.$val->fees_id);?>"><button class="btn btn-outline-success">Edit</button></a>
											<a href="<?= base_url('member/Delete_MembershipFees/'.$val->fees_id);?>" onclick="return confirm('Are you sure ?')"><button class="btn btn-outline-danger">Delete</button></a>
										</td>
									</tr>
									<?php 
											$count++;
											}//foreach
										}else{
											echo '<tr>'.'<td colspan="13">'.'No Data Found'.'</td>'.'</tr>';
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