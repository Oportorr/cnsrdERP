<div class="content-body">    
    <div class="card">
        <div class="card-header">
            <h5><?php echo $this->lang->line('LGN') ?> <a
                        href="<?php echo base_url('lgn/add') ?>"
                        class="btn btn-primary btn-sm rounded">
                    <?php echo $this->lang->line('Add new') ?></a></h5>
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
            <?php 
        if(isset($flash)){
            echo $flash;
        }
        ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="lgntable" class="table table-hover mb-1" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo $this->lang->line('Series') ?></th>
                            <th><?php echo $this->lang->line('lgn_type') ?></th>
                            <th><?php echo $this->lang->line('starting_seq') ?></th>
                            <th><?php echo $this->lang->line('ending_seq') ?></th>
                            <th><?php echo $this->lang->line('overide_seq') ?></th>
                            <th><?php echo $this->lang->line('status') ?></th>
                            <th><?php echo $this->lang->line('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;
                        foreach($list as $row) {
                            //var_dump($row);
                            $id = $row['id'];
                            $series = $row['series'];
                            // $business_division = $row['business_division'];
                            // $emission_pt = $row['emission_pt'];
                            // $printer_area = $row['printer_area'];
                            $lgn_type = $row['lgn_type'];
                            $starting_seq = $row['starting_seq'];
                            $ending_seq = $row['ending_seq'];
                            
                            if($row['overide_seq'] == 1){
                                $overide_seq = '<span class="badge badge-pill badge-default badge-success badge-default">Enable</span>';
                            }else{
                                $overide_seq = '<span class="badge badge-pill badge-danger badge-info badge-default">Disable</span>'; 
                            }

                            if($row['status'] == 1){
                                $status = '<span class="badge badge-pill badge-default badge-warning badge-default">Active</span>'; 
                            }else{
                                $status = '<span class="badge badge-pill badge-default badge-info badge-default">Deactive</span>'; 
                            }
                              

                     //        <td>$starting_seq</td>
                     // <td>$ending_seq</td>
                     // <td>$overide_seq</td> 
                     // <td>$status</td>                         
                            echo "<tr>
                    <td>$i</td>
                    <td>$series</td>
                    <td>$lgn_type</td>
                    <td>$starting_seq</td>                 
                    <td>$ending_seq</td>
                     <td>$overide_seq</td>
                     <td>$status</td>                     
                     
                    <td><a href='" . base_url("lgn/view?id=$id") . "' class='btn btn-success btn-xs'><i class='fa fa-eye'></i>  " . $this->lang->line('View') . "</a>&nbsp;<a href='" . base_url("lgn/edit?id=$id") . "' class='btn btn-warning btn-xs'><i class='fa fa-pencil'></i>  " . $this->lang->line('Edit') . "</a>&nbsp;<a href='#' data-object-id='" . $id . "' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr>";
                            $i++;
                        }
                        
                        ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th><?php echo $this->lang->line('series') ?></th>
                            <!-- <th><?php echo $this->lang->line('Business Division') ?></th>
                            <th><?php echo $this->lang->line('Emission') ?></th>
                            <th><?php echo $this->lang->line('Printer Area') ?></th> -->
                            <th><?php echo $this->lang->line('lgn_type') ?></th>
                            <th><?php echo $this->lang->line('starting_seq') ?></th>
                            <th><?php echo $this->lang->line('ending_seq') ?></th>
                            <th><?php echo $this->lang->line('overide_seq') ?></th>
                            <th><?php echo $this->lang->line('status') ?></th>
                            <th><?php echo $this->lang->line('Actions') ?></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>        
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            //datatables
            $('#lgntable').DataTable({
                responsive: true, <?php datatable_lang();?> dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        footer: true,
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    }
                ],
            });
        });
    </script>
    <div id="delete_model" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo $this->lang->line('delete_lgn') ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p><?php echo $this->lang->line('delete_message') ?></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="object-id" value="">
                    <input type="hidden" id="action-url" value="lgn/delete">
                    <button type="button" data-dismiss="modal" class="btn btn-primary"
                            id="delete-confirm"><?php echo $this->lang->line('Delete') ?></button>
                    <button type="button" data-dismiss="modal"
                            class="btn"><?php echo $this->lang->line('Cancel') ?></button>
                </div>
            </div>
        </div>
    </div>