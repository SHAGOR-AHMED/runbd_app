<div class="main-panel">          
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">View Bike History</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Sample pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Invoice</li>
				</ol>
			</nav>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card px-2">
					<div class="card-body">
						<div class="container-fluid">
							<h3 class="text-left my-5"><?php SelectedInfo($bike_info->bike_category); ?>&nbsp;&nbsp;<?php echo $bike_info->bike_no; ?></h3>
							<hr>
						</div>
						
						<div class="container-fluid mt-5 d-flex justify-content-center w-100">
							<div class="table-responsive w-100">
								<table class="table">
									<thead>
										<tr class="bg-dark text-white">
											<th>#</th>
											<th>Bike Category</th>
											<th class="text-right">Bike No</th>
											<th class="text-right">Stored Date</th>
											<th class="text-right">Image</th>
										</tr>
									</thead>
									<tbody>
                    <?php 
                      if(!empty($bike_info)){
                    ?>
                    <tr class="text-right">
                      <td class="text-left">1</td>
                      <td class="text-left"><?php SelectedInfo($bike_info->bike_category); ?></td>
                      <td><?php echo $bike_info->bike_no; ?></td>
                      <td><?php echo $bike_info->stored_date; ?></td>
                      <td>
                        <?php if($bike_info->img == "./assets/admin/uploads/"){?>
                            <img height="50" width="60" src="<?= base_url('');?>assets/admin/images/unknown.jpg" />
                        <?php }else { ?>
                            <a href="<?php echo $bike_info->img ;?>" target="_blank">
                              <img height="50" width="60" src="<?= base_url($bike_info->img);?>" title="<?php echo $bike_info->img;?>" />
                            </a>
                        <?php } ?>
                      </td>
                    </tr>
                    <?php 
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
            <br>
            <h1>Biker's Information</h1>
            <div class="container-fluid mt-5 d-flex justify-content-center w-100">
              <div class="table-responsive w-100">
                <table class="table">
                  <thead>
                    <tr class="bg-dark text-white">
                      <th>#</th>
                      <th>Biker Name</th>
                      <!-- <th class="text-right">Bike No</th> -->
                      <th class="text-right">Distribution Date</th>
                      <th class="text-right">Initial Kilometer</th>
                      <th class="text-right">Security Money</th>
                      <th class="text-right">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if(!empty($biker_info)){
                        $count = 0;
                        foreach($biker_info as $val){
                    ?>
                    <tr class="text-right">
                      <td class="text-left"><?php echo $count+1; ?></td>
                      <td class="text-left"><?php echo $val->member_name; ?></td>
                      <!-- <td><?php echo $val->bike_no; ?></td> -->
                      <td><?php echo $val->distribution_date; ?></td>
                      <td><?php echo $val->kilometer.' km'; ?></td>
                      <td><?php echo 'BDT '.$val->security_money; ?></td>
                      <td><?php echo BikeStatus($val->status); ?></td>
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
            <br>
            <h1>Bike Return Information</h1>
            <div class="container-fluid mt-5 d-flex justify-content-center w-100">
              <div class="table-responsive w-100">
                <table class="table">
                  <thead>
                    <tr class="bg-dark text-white">
                      <th>#</th>
                      <th class="text-right">Biker Name</th>
                      <th class="text-right">Last Kilometer</th>
                      <th class="text-right">Distribution Date</th>
                      <th class="text-right">Return Date</th>
                      <th class="text-right">Total Days</th>
                      <!-- <th class="text-right">Total Paid</th> -->
                      <th class="text-right">Return Purpose</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if(!empty($returnBike_info)){
                        $count = 0;
                        foreach($returnBike_info as $val){

                        // $biker_name = $val->biker_name; 
                        // $distribution_date = $val->distribution_date; 
                        // $return_date = $val->return_date;

                        // $this->db->select_sum('amount');
                        // $this->db->from('tbl_daily_payment');
                        // $this->db->where('biker_name', $biker_name);
                        // $this->db->where('payment_date >=', $distribution_date);
                        // $this->db->where('payment_date <=', $return_date);
                        // $get = $this->db->get();
                        // $result = $get->row();
                        //print_r($result);exit();
                    ?>
                    <tr class="text-right">
                      <td><?php echo $count+1; ?></td>
                      <td><?php echo $val->member_name; ?></td>
                      <td><?php echo $val->last_kilometer.' km'; ?></td>
                      <td><?php echo $val->distribution_date; ?></td>
                      <td><?php echo $val->return_date; ?></td>
                      <td><?php echo $val->total_days.' Days'; ?></td>
                      <!-- <td><?php echo 'BDT '.$result->amount; ?></td> -->
                      <td><?php echo $val->purpose ; ?></td>
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

						<!-- <div class="container-fluid mt-5 w-100">
							<p class="text-right mb-2">Sub - Total amount: $12,348</p>
							<p class="text-right">vat (10%) : $138</p>
							<h4 class="text-right mb-5">Total : $13,986</h4>
							<hr>
						</div> -->

						<div class="container-fluid w-100">
							<a href="<?= base_url('bike/Bike_reportPDF/'.$bike_info->bike_id);?>" target="_blank" class="btn btn-primary float-right mt-4 ml-2"><i class="fa fa-print mr-1"></i>Print</a>
							<!-- <a href="#" class="btn btn-success float-right mt-4"><i class="fa fa-share mr-1"></i>Send Invoice</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>