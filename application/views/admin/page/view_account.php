
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Bikers Account Information</h3>
			<a class="nav-link" href="<?= base_url('account/add_account');?>">
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
                <?php
                	if(!empty($calculation)){ ?>

                		<div class="row">
							<div class="col-12">
								<div class="table-responsive">
									<table id="order-listing" class="table">
										<thead>
											<tr>
												<th>SN</th>
												<th>Biker Name</th>
												<th>From</th>
												<th>To</th>
												<th>Total Payable</th>
												<th>Total Deposite</th>
												<th>Total Incentive</th>
												<th>Total Loan</th>
												<th>Subscription Fees</th>
												<th>Net Amount</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$count = 0;
												foreach($calculation as $val){
											?>
											<tr>
												<td class="center"><?php echo $count+1; ?></td>
												<td><?php echo $val->member_name; ?></td>
												<td><?php echo $val->from_date; ?></td>
												<td><?php echo $val->to_date; ?></td>
												<td><?php echo "BDT ".$val->total_payable; ?></td>
												<td><?php echo "BDT ".$val->total_deposite; ?></td>
												<td><?php echo "BDT ".$val->total_incentive; ?></td>
												<td><?php echo "BDT ".$val->loan; ?></td>
												<td><?php echo "BDT ".$val->subsciption_fees; ?></td>
												<td>
													<?php
														$Subscription = $val->subsciption_fees;
														$TotalPayable = $val->total_payable;
														$TotalPaid = $val->total_deposite + $val->total_incentive;
														$NetAmount = $TotalPaid - $val->loan - $Subscription;
														$total = $TotalPayable - $NetAmount;
														if($TotalPayable > $NetAmount){
															echo "<p style='color:#ff0000;font-weight:bold;'>".'BDT '.$total.' Due'."</p>";
														}elseif($TotalPayable < $NetAmount){
															echo "<p style='color:green;font-weight:bold;'>".'Will have BDT '.$total."</p>";
														}elseif($TotalPayable == $NetAmount){
															echo '---';
														}
													?>
													<!-- <?php
														$TotalPayable = $val->total_payable;
														$NetAmount = $val->net_amount;
														if($TotalPayable > $NetAmount){
															echo "<p style='color:#ff0000;font-weight:bold;'>".'BDT '.$NetAmount.' Due'."</p>";
														}elseif($TotalPayable < $NetAmount){
															echo "<p style='color:green;font-weight:bold;'>".'Will have BDT '.$NetAmount."</p>";
														}elseif($TotalPayable == $NetAmount){
															echo '---';
														}
													?> -->	
												</td>
												<td>
													<a href="<?= base_url('account/edit_account/'.$val->account_id);?>"><button class="btn btn-outline-success">Edit</button></a>
												</td>
											</tr>
											<?php
												$count++;
												}//foreach
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
                <?php }else{
						echo '<tr>'.'<td colspan="13">'.'No Data Found'.'</td>'.'</tr>';
					}
				?>
			</div>
		</div>
	</div>
</div>