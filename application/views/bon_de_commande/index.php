<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bon De Commande Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bon_de_commande/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>TYPE BON COMMANDE</th>
						<th>ID FICHE BESOIN</th>
						<th>ID SERVICE GEN</th>
						<th>ID DAF</th>
						<th>ID DG</th>
						<th>NOM FOURNISSEUR</th>
						<th>ADRESSE FOURNISSEUR</th>
						<th>TELEPHONE FOURNISSEUR</th>
						<th>DATE BON DEMANDE</th>
						<th>DESIGNATION PRODUIT</th>
						<th>QUANTITE</th>
						<th>OBSERVATION</th>
						<th>PROFORMAT FOURNISSEUR</th>
						<th>FACTURE</th>
						<th>ETAT BON COMMANDE</th>
						<th>EVALUTION FOURNISSEUR</th>
						<th>SIGNATURE SERVICE GEN</th>
						<th>SIGNATURE DAF</th>
						<th>SIGNATURE DG</th>
						<th>DATE CREATION</th>
						<th>DATE MODIFICATION</th>
						<th>DATE SUPPRESSION</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($bon_de_commande as $b){ ?>
                    <tr>
						<td><?php echo $b['ID']; ?></td>
						<td><?php echo $b['TYPE_BON_COMMANDE']; ?></td>
						<td><?php echo $b['ID_FICHE_BESOIN']; ?></td>
						<td><?php echo $b['ID_SERVICE_GEN']; ?></td>
						<td><?php echo $b['ID_DAF']; ?></td>
						<td><?php echo $b['ID_DG']; ?></td>
						<td><?php echo $b['NOM_FOURNISSEUR']; ?></td>
						<td><?php echo $b['ADRESSE_FOURNISSEUR']; ?></td>
						<td><?php echo $b['TELEPHONE_FOURNISSEUR']; ?></td>
						<td><?php echo $b['DATE_BON_DEMANDE']; ?></td>
						<td><?php echo $b['DESIGNATION_PRODUIT']; ?></td>
						<td><?php echo $b['QUANTITE']; ?></td>
						<td><?php echo $b['OBSERVATION']; ?></td>
						<td><?php echo $b['PROFORMAT_FOURNISSEUR']; ?></td>
						<td><?php echo $b['FACTURE']; ?></td>
						<td><?php echo $b['ETAT_BON_COMMANDE']; ?></td>
						<td><?php echo $b['EVALUTION_FOURNISSEUR']; ?></td>
						<td><?php echo $b['SIGNATURE_SERVICE_GEN']; ?></td>
						<td><?php echo $b['SIGNATURE_DAF']; ?></td>
						<td><?php echo $b['SIGNATURE_DG']; ?></td>
						<td><?php echo $b['DATE_CREATION']; ?></td>
						<td><?php echo $b['DATE_MODIFICATION']; ?></td>
						<td><?php echo $b['DATE_SUPPRESSION']; ?></td>
						<td>
                            <a href="<?php echo site_url('bon_de_commande/edit/'.$b['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bon_de_commande/remove/'.$b['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
