<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Service Gen Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('service_gen/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>NOM COMPLET</th>
						<th>SIGNATURE SERVICE GEN</th>
						<th>DATE CREATION</th>
						<th>DATE MODIFICATION</th>
						<th>DATE SUPPRESSION</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($service_gen as $s){ ?>
                    <tr>
						<td><?php echo $s['ID']; ?></td>
						<td><?php echo $s['NOM_COMPLET']; ?></td>
						<td><?php echo $s['SIGNATURE_SERVICE_GEN']; ?></td>
						<td><?php echo $s['DATE_CREATION']; ?></td>
						<td><?php echo $s['DATE_MODIFICATION']; ?></td>
						<td><?php echo $s['DATE_SUPPRESSION']; ?></td>
						<td>
                            <a href="<?php echo site_url('service_gen/edit/'.$s['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('service_gen/remove/'.$s['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
