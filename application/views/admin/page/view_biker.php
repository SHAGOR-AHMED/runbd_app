
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">All Biker's List</h3>
			<a class="nav-link" href="<?= base_url('BikeDistribution/add_BikeDistribution');?>">
            	<span class="btn btn-primary">+ Create new</span>
            </a>
		</div>

		<div class="card">
			<div class="card-body">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">All Biker's List</li>
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
										<th>Biker Name</th>
										<th>Bike Name</th>
										<th>Bike No</th>
										<th>Distribution Date</th>
										<th>Initial Kilometer</th>
										<th>Security Money</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										if(!empty($all_biker)){					
											$count = 0;
											foreach($all_biker as $val){
									?>
									<tr>
										<td class="center"><?php echo $count+1; ?></td>
										<td><?php echo $val->member_name; ?></td>
										<td><?php echo $val->bike_name; ?></td>
										<td><?php echo $val->bike_no; ?></td>
										<td><?php echo $val->distribution_date; ?></td>
										<td><?php echo $val->kilometer.' '.'km'; ?></td>
										<td><?php echo 'BDT '.$val->security_money; ?></td>
										<td><?php echo BikeStatus($val->status); ?></td>
										<td>
											<?php
												if($val->status == 1){ ?>

													<a href="<?= base_url('BikeDistribution/do_return/'.$val->biker_id);?>" onclick="return confirm('Are you sure ?')"><button class="btn btn-outline-danger">Return</button></a>

											<?php }elseif ($val->status == 0) {?>

													<a href="<?= base_url('BikeDistribution/do_riding/'.$val->biker_id);?>" onclick="return confirm('Are you sure ?')"><button class="btn btn-outline-success">Riding</button></a>
												
											<?php } ?>

											<a href="<?= base_url('BikeDistribution/edit_BikeDistribution/'.$val->biker_id);?>">Edit |</a>
											<a href="<?= base_url('BikeDistribution/delete_BikeDistribution/'.$val->biker_id);?>" onclick="return confirm('Are you sure ?')">Delete</a>
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