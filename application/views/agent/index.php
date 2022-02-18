<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agent Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('agent/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>MOT DE PASSE</th>
						<th>NOM COMPLET</th>
						<th>DEPARTEMENT</th>
						<th>FONCTION</th>
						<th>CHEF DEPARTEMENT</th>
						<th>TELEPHONE</th>
						<th>DATE CREATION</th>
						<th>DATE MODIFICATION</th>
						<th>DATE SUPPRESSION</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($agent as $a){ ?>
                    <tr>
						<td><?php echo $a['ID']; ?></td>
						<td><?php echo $a['MOT_DE_PASSE']; ?></td>
						<td><?php echo $a['NOM_COMPLET']; ?></td>
						<td><?php echo $a['DEPARTEMENT']; ?></td>
						<td><?php echo $a['FONCTION']; ?></td>
						<td><?php echo $a['CHEF_DEPARTEMENT']; ?></td>
						<td><?php echo $a['TELEPHONE']; ?></td>
						<td><?php echo $a['DATE_CREATION']; ?></td>
						<td><?php echo $a['DATE_MODIFICATION']; ?></td>
						<td><?php echo $a['DATE_SUPPRESSION']; ?></td>
						<td>
                            <a href="<?php echo site_url('agent/edit/'.$a['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('agent/remove/'.$a['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
