<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>run bd</title>
        <link rel="stylesheet" href="<?php echo base_url()?>public/css/invoicePdfstyle.css" media="all" />
        <!--bootstrap -->
        <link href="<?php echo base_url()?>public/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>public/js/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="header" class="clearfix">
            <div  id="logo">
                <img src="<?php echo base_url('assets/admin/images/logo.png');?>">
                <h3 class="name">Report of - <?php SelectedInfo($bike_info->bike_category); ?>&nbsp;&nbsp;<?php echo $bike_info->bike_no; ?></h3>
            </div>
            <div id="company"></div>
        </div>

        <main>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th class="no">#</th>
                        <th class="desc">Bike Category</th>
                        <th class="desc">Bike No</th>
                        <th class="desc">Stored Date</th>
                        <th class="desc">Image</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if(!empty($bike_info)){     
                    ?>
                        <tr>
                            <td class="no">1</td>
                            <td class="desc"><?php SelectedInfo($bike_info->bike_category); ?></td>
                            <td class="desc"><?php echo $bike_info->bike_no; ?></td>
                            <td class="desc"><?php echo $bike_info->stored_date; ?></td>
                            <td class="desc">
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

           <h3>Biker's Information</h3>

           <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th class="no">#</th>
                        <th class="desc">Biker Name</th>
                        <th class="desc">Distribution Date</th>
                        <th class="desc">Initial Kilometer</th>
                        <th class="desc">Security Money</th>
                        <th class="text-right">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if(!empty($biker_info)){
                        $count = 0;
                        foreach($biker_info as $val){   
                    ?>
                        <tr>
                            <td class="no"><?php echo $count+1; ?></td>
                            <td class="desc"><?php echo $val->member_name; ?></td>
                            <td class="desc"><?php echo $val->distribution_date; ?></td>
                            <td class="desc"><?php echo $val->kilometer.' km'; ?></td>
                            <td class="desc"><?php echo 'BDT '.$val->security_money; ?></td>
                            <td class="desc"><?php echo BikeStatus($val->status); ?></td>
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

            <h3>Bike Return Information</h3>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th class="no">#</th>
                        <th class="desc">Biker Name</th>
                        <th class="desc">Last Kilometer</th>
                        <th class="desc">Distribution Date</th>
                        <th class="desc">Return Date</th>
                        <th class="desc">Total Days</th>
                        <!-- <th class="desc">Total Paid</th> -->
                        <th class="desc">Return Purpose</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if(!empty($returnBike_info)){
                        $count = 0;
                        foreach($returnBike_info as $val){   
                    ?>
                        <tr>
                            <td class="no"><?php echo $count+1; ?></td>
                            <td class="desc"><?php echo $val->member_name; ?></td>
                            <td class="desc"><?php echo $val->last_kilometer.' km'; ?></td>
                            <td class="desc"><?php echo $val->distribution_date; ?></td>
                            <td class="desc"><?php echo $val->return_date; ?></td>
                            <td class="desc"><?php echo $val->total_days.' Days'; ?></td>
                            <td class="desc"><?php echo $val->purpose; ?></td>
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

        </main>

        <footer>
            Report was created on a computer and is valid without the signature and seal.
        </footer>
    </body>
</html>