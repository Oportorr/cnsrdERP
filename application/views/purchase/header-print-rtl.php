<table>
    <tr>
        <td class="myco">
            <img src="<?php $loc = location($invoice['loc']);
            echo base_url('userfiles/company/' . $loc['logo']) ?>"
                 style="max-height:180px;max-width:250px;">
        </td>
        <td>

        </td>
        <td class="myw">
            <table class="top_sum">
                <tr>
                    <td colspan="1" class="t_center"><h2><?php echo $this->lang->line('Purchase Order') ?></h2><br><br>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('Order') ?></td>
                    <td><?php echo prefix(2) . $invoice['tid'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('Order Date') ?></td>
                    <td><?php echo $invoice['invoicedate'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('Due Date') ?></td>
                    <td><?php echo $invoice['invoiceduedate'] ?></td>
                </tr>
                <?php if ($invoice['refer']) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('RefCode') ?></td>
                        <td><?php echo $invoice['refer'] ?></td>
                    </tr>
                <?php } ?>
            </table>


        </td>
    </tr>
</table>