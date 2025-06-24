<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5><?php echo $this->lang->line('Edit Customer Details') ?></h5>

            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <form method="post" id="data_form" class="form-horizontal">
                <div class="row">

                    <div class="col-md-6">
                        <h5><?php echo $this->lang->line('Billing Address') ?></h5>
                        <input type="hidden" name="id" value="<?php echo $customer['id'] ?>">


                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="product_name"><?php echo $this->lang->line('Name') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Name"
                                       class="form-control margin-bottom required" name="name"
                                       value="<?php echo $customer['name'] ?>" id="mcustomer_name">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="product_name"><?php echo $this->lang->line('Company') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Company"
                                       class="form-control margin-bottom" name="company"
                                       value="<?php echo $customer['company'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="phone"><?php echo $this->lang->line('Phone') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="phone"
                                       class="form-control margin-bottom  required" name="phone"
                                       value="<?php echo $customer['phone'] ?>" id="mcustomer_phone">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label" for="email">Email</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="email"
                                       class="form-control margin-bottom required" name="email"
                                       value="<?php echo $customer['email'] ?>" id="mcustomer_email">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="product_name"><?php echo $this->lang->line('Address') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="address"
                                       class="form-control margin-bottom" name="address"
                                       value="<?php echo $customer['address'] ?>" id="mcustomer_address1">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="city"><?php echo $this->lang->line('City') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="city"
                                       class="form-control margin-bottom" name="city"
                                       value="<?php echo $customer['city'] ?>" id="mcustomer_city">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="region"><?php echo $this->lang->line('Region') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="region"
                                       class="form-control margin-bottom" name="region"
                                       value="<?php echo $customer['region'] ?>" id="region">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="country"><?php echo $this->lang->line('Country') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Country"
                                       class="form-control margin-bottom" name="country"
                                       value="<?php echo $customer['country'] ?>" id="mcustomer_country">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="postbox"><?php echo $this->lang->line('PostBox') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="region"
                                       class="form-control margin-bottom" name="postbox"
                                       value="<?php echo $customer['postbox'] ?>" id="postbox">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="postbox"><?php echo $this->lang->line('TAXID') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="TAX ID"
                                       class="form-control margin-bottom" name="taxid"
                                       value="<?php echo $customer['taxid'] ?>">
                            </div>
                        </div>
<?php if($lgnactive['enable_lgn'] == 1): ?>
<div class="form-group row">
<label class="col-sm-2 col-form-label"
for="postbox"><?php echo $this->lang->line('enable_lgn') ?></label>
<div class="col-sm-10">
<?php
$options = array('' => 'Please Select', '1' => 'Yes', '0' => 'No');
$additional_dd_code = 'id="lgn" , class="form-control"';
 echo form_dropdown('lgn', $options, $customer['lgn'] ,$additional_dd_code); ?>
    </div>
</div>
<div id="typehide" class="form-group row">
<label class="col-sm-2 col-form-label"
for="lgn"><?php echo $this->lang->line('select_lgn_type') ?></label>
<div class="col-sm-10">
<?php $type = array('' => $this->lang->line('when_you_choose'),  '01' => $this->lang->line('invoices_tax_receipts'), '02' =>$this->lang->line('consumption_invoices'), '03' =>$this->lang->line('debt_notes') , '04' =>$this->lang->line('credit_notes') , '11' =>$this->lang->line('purchase_eceipts'),'12' =>$this->lang->line('single_income_egister'), '13' =>$this->lang->line('proof_of_minor_expense_expenses') ,'14' =>$this->lang->line('vouchers_for_special_regimes'),'15' =>$this->lang->line('government_receipts'),'16' =>$this->lang->line('export_receipts'),'17' =>$this->lang->line('vouchers_for_payments_from_abroad') );
$additional_dd_code = 'id="lgn_type" , class="form-control"';
 echo form_dropdown('lgn_type', $type, $customer['lgn_type'] ,$additional_dd_code); ?>
    </div>
</div>
<?php endif; ?>


                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="postbox"><?php echo $this->lang->line('Document') ?> ID</label>

                            <div class="col-sm-6">
                                <input type="text" placeholder="Document ID"
                                       class="form-control margin-bottom b_input" name="docid"
                                       value="<?php echo $customer['docid'] ?>">
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label"
                                                           for="postbox"><?php echo $this->lang->line('Extra') ?> </label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Custom Field"
                                       class="form-control margin-bottom b_input" name="c_field"
                                       value="<?php echo $customer['custom1'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="customergroup"><?php echo $this->lang->line('Customer group') ?></label>

                            <div class="col-sm-6">
                                <select name="customergroup" class="form-control">
                                    <?php
                                    echo '<option value="' . $customergroup['id'] . '">' . $customergroup['title'] . ' (S)</option>';
                                    foreach ($customergrouplist as $row) {
                                        $cid = $row['id'];
                                        $title = $row['title'];
                                        echo "<option value='$cid'>$title</option>";
                                    }
                                    ?>
                                </select>


                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="customergroup">Language</label>
                            <div class="col-sm-6">
                                <select name="language" class="form-control b_input">
                                    <?php
                                    echo '<option value="' . $customer['lang'] . '">-' . ucfirst($customer['lang']) . '-</option>';
                                    echo $langs;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row"><label class="col-sm-2 col-form-label"
                                                           for="Discount"><?php echo $this->lang->line('Discount') ?> </label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Custom Discount"
                                       class="form-control margin-bottom b_input" name="discount"
                                       value="<?php echo $customer['discount_c'] ?>">
                            </div>
                        </div>

                        <?php foreach ($custom_fields as $row) {
                            if ($row['f_type'] == 'text') { ?>
                                <div class="form-group row">

                                    <label class="col-sm-2 col-form-label"
                                           for="docid"><?= $row['name'] ?></label>

                                    <div class="col-sm-8">
                                        <input type="text" placeholder="<?= $row['placeholder'] ?>"
                                               class="form-control margin-bottom b_input"
                                               name="custom[<?= $row['id'] ?>]"
                                               value="<?= $row['data'] ?>">
                                    </div>
                                </div>


                            <?php }


                        }
                        ?>
                    </div>

                    <div class="col-md-6">
                        <h5><?php echo $this->lang->line('Shipping Address') ?></h5>
                        <div class="form-group row">

                            <div class="input-group mt-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customer1"
                                           id="copy_address">
                                    <label class="custom-control-label"
                                           for="copy_address"><?php echo $this->lang->line('Same As Billing') ?></label>
                                </div>

                            </div>

                            <div class="col-sm-10">
                                <?php echo $this->lang->line("leave Shipping Address") ?>
                            </div>
                        </div>

                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="product_name"><?php echo $this->lang->line('Name') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Name"
                                       class="form-control margin-bottom" name="name_s"
                                       value="<?php echo $customer['name_s'] ?>" id="mcustomer_name_s">
                            </div>
                        </div>


                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="phone"><?php echo $this->lang->line('Phone') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="phone"
                                       class="form-control margin-bottom" name="phone_s"
                                       value="<?php echo $customer['phone_s'] ?>" id="mcustomer_phone_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label" for="email">Email</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="email"
                                       class="form-control margin-bottom" name="email_s"
                                       value="<?php echo $customer['email_s'] ?>" id="mcustomer_email_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="product_name"><?php echo $this->lang->line('Address') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="address"
                                       class="form-control margin-bottom" name="address_s"
                                       value="<?php echo $customer['address_s'] ?>" id="mcustomer_address1_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="city"><?php echo $this->lang->line('City') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="city"
                                       class="form-control margin-bottom" name="city_s"
                                       value="<?php echo $customer['city_s'] ?>" id="mcustomer_city_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="region"><?php echo $this->lang->line('Region') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="region"
                                       class="form-control margin-bottom" name="region_s"
                                       value="<?php echo $customer['region_s'] ?>" id="region_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="country"><?php echo $this->lang->line('Country') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Country"
                                       class="form-control margin-bottom" name="country_s"
                                       value="<?php echo $customer['country_s'] ?>" id="mcustomer_country_s">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="postbox"><?php echo $this->lang->line('PostBox') ?></label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="region"
                                       class="form-control margin-bottom" name="postbox_s"
                                       value="<?php echo $customer['postbox_s'] ?>" id="postbox_s">
                            </div>
                        </div>


                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                               value="Update customer" data-loading-text="Updating...">
                        <input type="hidden" value="customers/editcustomer" id="action-url">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    debugger
    if($("#lgn").val() == '1')
    {
        $("#typehide").show();
    }else{
      $("#typehide").hide();
    }
    debugger
    //$("#typehide").hide();
    $("#lgn").change(function(){
      if($(this).val() == '1'){
        $("#typehide").show();
      }else{
        $("#typehide").hide();
      }
    });
  });
</script>