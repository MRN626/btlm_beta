<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Chef Departement Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('chef_departement/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>NOM COMPLET</th>
						<th>SIGNATURE CHEF DEP</th>
						<th>DATE CREATION</th>
						<th>DATE MODIFICATION</th>
						<th>DATE SUPPRESSION</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($chef_departement as $c){ ?>
                    <tr>
						<td><?php echo $c['ID']; ?></td>
						<td><?php echo $c['NOM_COMPLET']; ?></td>
						<td><?php echo $c['SIGNATURE_CHEF_DEP']; ?></td>
						<td><?php echo $c['DATE_CREATION']; ?></td>
						<td><?php echo $c['DATE_MODIFICATION']; ?></td>
						<td><?php echo $c['DATE_SUPPRESSION']; ?></td>
						<td>
                            <a href="<?php echo site_url('chef_departement/edit/'.$c['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('chef_departement/remove/'.$c['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
