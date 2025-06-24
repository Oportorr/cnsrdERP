<div class="content-body">
   

</div>
<div class="card card-block">
    <div class="card-body">
        <form method="post" id="product_action" class="form-horizontal">
            <div class="grid_3 grid_4">
                <h4><?php echo $this->lang->line('Debts To Pay') . ' ' . $this->lang->line('Report') ?></h4>
                <hr>
                
                <div class="form-group row">

                    <label class="col-sm-3 control-label"
                           for="sdate"><?php echo $this->lang->line('From Date') ?></label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control required"
                               placeholder="Start Date" name="sdate" id="sdate"
                               data-toggle="datepicker" autocomplete="false">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-3 control-label"
                           for="edate"><?php echo $this->lang->line('To Date') ?></label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control required"
                               placeholder="End Date" name="edate"
                               data-toggle="datepicker" autocomplete="false">
                    </div>
                </div>

                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                <div class="form-group row">

                    <label class="col-sm-3 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="hidden" name="check" value="ok">
                        <input type="submit" id="calculate_profit" class="btn btn-success margin-bottom"
                               value="<?php echo $this->lang->line('Calculate') ?>"
                               data-loading-text="Calculating...">
                    </div>
                </div>
            </div>

        </form>
    </div class="row">

        <?php
        if($report){

            //echo '<pre>'; print_r($report);exit;
        ?>
        <table id="sales_report" class="table table-responsive w-auto">
            <thead>
                <tr>
                <th scope="col">Vendor Name</th>
                <th scope="col">Vendor Tax Id</th>
                <th scope="col">PO Create Date</th>
                <th scope="col">PO Number</th>
                <th scope="col">Vendor LGN Number</th>
                <th scope="col">PO Status</th>
                <th scope="col">Receive Status</th>
                <th scope="col">Payment Due</th>
                <th scope="col">Taxes</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($report as $row){
                ?>
                    <tr>
                        <th scope="col"><?php echo $row['supplier_name']; ?></th>
                        <th scope="col"><?php echo $row['taxid']; ?></th>
                        <th scope="col"><?php echo $row['invoicedate']; ?></th>
                        <th scope="col"><?php echo $row['tid']; ?></th>
                        <th scope="col"><?php echo $row['LGN']; ?></th>
                        <th scope="col"><?php echo $row['status']; ?></th>
                        <th scope="col"><?php echo $row['discstatus']; ?></th>
                        <th scope="col"><?php echo $row['total'] - $row['pamnt']; ?></th>
                        <th scope="col"><?php echo $row['tax']; ?></th>
                        <th scope="col"><?php echo $row['total']; ?></th>
                    </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
        <div class="form-group row">

                    <label class="col-sm-4 col-form-label"></label>

                    <div class="col-sm-4">
                        
                        <input type="submit" id="download" class="btn btn-success margin-bottom"
                               value="<?php echo $this->lang->line('Download') ?>"
                               data-loading-text="Calculating...">
                    </div>
                    <label class="col-sm-4 col-form-label"></label>
        </div>
        <?php
        }
        ?>
    <div>
    </div>
</div>
</div>
<script type="text/javascript">

    $("#download").click(function (e) {

        var str = (((1+Math.random())*0x10000)|0).toString(16).substring(1);
        $("#sales_report").table2excel({

            exclude:".noExl",

            name:"PURCHASE",

            filename:"PURCHASE_REPORT_"+str,

            fileext:".xlsx"

        });

    });

    /*
    $("#calculate_profit").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'reports/customsales';
        actionCaculate(actionurl);
    });
    setTimeout(function () {
        $.ajax({
            url: baseurl + 'reports/fetch_data?p=sales',
            dataType: 'json',
            success: function (data) {
                $('#p1').html(data.p1);
                $('#p2').html(data.p2);

            },
            error: function (data) {
                $('#response').html('Error')
            }

        });
    }, 2000);
    */
</script>