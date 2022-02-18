<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fiche De Besoin Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fiche_de_besoin/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>ID AGENT</th>
						<th>ID SERVICE GEN</th>
						<th>ID CHEF DEP</th>
						<th>NOM PRODUIT</th>
						<th>DESCRIPTION</th>
						<th>RAISON</th>
						<th>DEPARTEMENT</th>
						<th>NOM DEMANDEUR</th>
						<th>TELEPHONE DEMANDEUR</th>
						<th>DATE LIVRAISON SOUHAITE</th>
						<th>ADRESSE LIVRAISON</th>
						<th>HEURE LIVRAISON</th>
						<th>ETAT FICHE</th>
						<th>SIGNATURE CHEF DEP</th>
						<th>SIGNATURE SERVICE GEN</th>
						<th>SIGNATURE DAF</th>
						<th>SIGNATURE DG</th>
						<th>PROFORMAT 1</th>
						<th>PROFORMAT 2</th>
						<th>PROFORMAT 3</th>
						<th>DATE CREATION</th>
						<th>DATE MODIFICATION</th>
						<th>DATE SUPPRESSION</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fiche_de_besoin as $f){ ?>
                    <tr>
						<td><?php echo $f['ID']; ?></td>
						<td><?php echo $f['ID_AGENT']; ?></td>
						<td><?php echo $f['ID_SERVICE_GEN']; ?></td>
						<td><?php echo $f['ID_CHEF_DEP']; ?></td>
						<td><?php echo $f['NOM_PRODUIT']; ?></td>
						<td><?php echo $f['DESCRIPTION']; ?></td>
						<td><?php echo $f['RAISON']; ?></td>
						<td><?php echo $f['DEPARTEMENT']; ?></td>
						<td><?php echo $f['NOM_DEMANDEUR']; ?></td>
						<td><?php echo $f['TELEPHONE_DEMANDEUR']; ?></td>
						<td><?php echo $f['DATE_LIVRAISON_SOUHAITE']; ?></td>
						<td><?php echo $f['ADRESSE_LIVRAISON']; ?></td>
						<td><?php echo $f['HEURE_LIVRAISON']; ?></td>
						<td><?php echo $f['ETAT_FICHE']; ?></td>
						<td><?php echo $f['SIGNATURE_CHEF_DEP']; ?></td>
						<td><?php echo $f['SIGNATURE_SERVICE_GEN']; ?></td>
						<td><?php echo $f['SIGNATURE_DAF']; ?></td>
						<td><?php echo $f['SIGNATURE_DG']; ?></td>
						<td><?php echo $f['PROFORMAT_1']; ?></td>
						<td><?php echo $f['PROFORMAT_2']; ?></td>
						<td><?php echo $f['PROFORMAT_3']; ?></td>
						<td><?php echo $f['DATE_CREATION']; ?></td>
						<td><?php echo $f['DATE_MODIFICATION']; ?></td>
						<td><?php echo $f['DATE_SUPPRESSION']; ?></td>
						<td>
                            <a href="<?php echo site_url('fiche_de_besoin/edit/'.$f['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fiche_de_besoin/remove/'.$f['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
