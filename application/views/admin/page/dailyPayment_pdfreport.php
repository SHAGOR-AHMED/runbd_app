<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url()?>public/css/invoicePdfstyle.css" media="all" />
        <!--bootstrap -->
        <link href="<?php echo base_url()?>public/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>public/js/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="header" class="clearfix">
            <div  id="logo">
                <h3 class="name">Daily Payment Report From ( <?= $from ?> To <?= $to ?> )</h3>
            </div>
            <!-- <div id="company">
                <h4 class="name">Run Bangladesh</h4>
                <div>Hotline: +8801968800522</div>
            </div> -->
        </div>

        <main>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th class="no">#</th>
                        <th class="desc">Biker Name</th>
                        <th class="desc">Payment Date</th>
                        <th class="desc">Amount</th>
                        <th class="desc">Payment Method</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $i=1;
                        $totalAmount=0;
                        foreach($search_result as $val) {
                        $totalAmount = $totalAmount + $val->amount;
                    ?>
                        <tr>
                            <td class="no"><?php echo $i++; ?></td>
                            <td class="desc"><h3> <?php echo $val->member_name; ?></h3></td>
                            <td class="desc"><?php echo $val->payment_date;?></td>
                            <td class="desc">BDT <?php echo $val->amount;?></td>
                            <td class="desc"><?php generatePaymentMethod($val->payment_method); ?></td>
                        </tr>
                    <?php
                        $i++;
                        }//foreach
                    ?>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="minibox">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <td>Cash Collection</td>
                                    <td>bKash Collection</td>
                                    <td>Total Collection</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo 'BDT '.$cash_payment->amount; ?></td>
                                    <td ><?php echo 'BDT '.$bkash_payment->amount; ?></td>
                                    <td ><?php echo 'BDT '.$totalAmount; ?></td>
                                </tr>       
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </main>
        <footer>
            Report was created on a computer and is valid without the signature and seal.
        </footer>
    </body>
</html>