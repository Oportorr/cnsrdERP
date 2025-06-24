<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h3><?php echo $this->lang->line('Details') ?></h3>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-6">

                        <div class="stat">
                            <div class="name"> <?php echo $this->lang->line('series') ?></div>
                            <div class="value"> <?php echo $data['series'] ?></div>

                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">
                        <div class="stat">
                            <div class="name"> <?php echo $this->lang->line('business_div') ?></div>
                            <div class="value"> <?php echo $data['business_division'] ?></div>
                        </div>
                        <hr>
                    </div>

                    <div class="col-sm-6 stat-col">
                        <div class="stat">
                            <div class="name"><?php echo $this->lang->line('printer_area') ?></div>
                            <div class="value"> <?= $data['printer_area']; ?></div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">
                        <div class="stat">
                            <div class="name"> <?php echo $this->lang->line('lgn_type') ?></div>
                            <div class="value"> <?php echo $data['lgn_type'] ?></div>
                        </div>
                        <hr>
                    </div>                    
                    <div class="col-sm-6 stat-col">
                        <div class="stat">
                            <div class="name"> <?php echo $this->lang->line('starting_seq') ?></div>
                            <div class="value"> <?php echo $data['starting_seq'] ?></div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">
                        <div class="stat">
                            <div class="name"> <?php echo $this->lang->line('ending_seq') ?></div>
                            <div class="value"> <?php echo $data['ending_seq'] ?></div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">
                        <div class="stat">
                            <div class="name"> <?php echo $this->lang->line('overide_seq') ?></div>
                            <div class="value"> <?php echo $data['overide_seq'] ?></div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">
                        <div class="stat">
                            <div class="name"> <?php echo $this->lang->line('emission_pt') ?></div>
                            <div class="value"> <?php echo $data['emission_pt'] ?></div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>