<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Directeur Financier Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('directeur_financier/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>NOM COMPLET</th>
						<th>SIGNATURE DAF</th>
						<th>DATE CREATION</th>
						<th>DATE MODIFICATION</th>
						<th>DATE SUPPRESSION</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($directeur_financier as $d){ ?>
                    <tr>
						<td><?php echo $d['ID']; ?></td>
						<td><?php echo $d['NOM_COMPLET']; ?></td>
						<td><?php echo $d['SIGNATURE_DAF']; ?></td>
						<td><?php echo $d['DATE_CREATION']; ?></td>
						<td><?php echo $d['DATE_MODIFICATION']; ?></td>
						<td><?php echo $d['DATE_SUPPRESSION']; ?></td>
						<td>
                            <a href="<?php echo site_url('directeur_financier/edit/'.$d['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('directeur_financier/remove/'.$d['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
